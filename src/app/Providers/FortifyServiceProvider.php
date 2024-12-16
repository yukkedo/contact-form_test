<?php

namespace App\Providers;

use App\Actions\Fortify\CreateNewUser;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use App\Actions\Fortify\UpdateUserProfileInformation;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use Laravel\Fortify\Fortify;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\RedirectResponse;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;

class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Fortify::createUsersUsing(CreateNewUser::class);
        // 新規ユーザーの登録処理
        Fortify::registerView(function () {
            return view('register');
        });
        // GETメソッドで/registerにアクセスしたときに表示するviewファイル
        Fortify::loginView(function () {
            return view('login');
        });
        // GETメソッドで/loginにアクセスしたときに表示するviewファイル
        RateLimiter::for('login', function (Request $request) {
            $email = (string) $request->email;

            return Limit::perMinute(10)->by($email . $request->ip());
        // login処理の実行回数を1分あたり10回までに制限
        });

        app()->singleton(
            \Laravel\Fortify\Contracts\LoginResponse::class,
            function () {
                return new class implements \Laravel\Fortify\Contracts\LoginResponse {
                    public function toResponse($request)
                    {
                        return redirect('admin'); 
                    }
                };
            }
        );

        // login画面バリデーション
        Fortify::authenticateUsing(function (Request $request) {
            $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required'],
            ]);

            // 認証処理
            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                return Auth::user();
            }

            return null;
        });
    }
}
