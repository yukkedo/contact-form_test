<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登録フォーム</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>
    <header class="header">
        <div class="header__title">
            <a class="header__logo" href="/">
                FashionablyLate
            </a>
            <a class="header__button" href="/auth/register">register</a>
        </div>
    </header>

    <main>
        <div class="login">
            <!-- タイトル -->
            <div class="login__header">
                <h2 class="login__header--item">Login</h2>
            </div>

            <form class="login-form" action="/auth/login" method="post">
                @csrf
                <div class="login__group">
                    <p class="login__group-title">メールアドレス
                    </p>
                    <input class="login__group-input" type="email" name="email" value="{{ old('email') }}" placeholder="例:text@exanple.com">
                </div>
                <div class="login__group">
                    <p class="login__group-title">パスワード</p>
                    <input class="login__group-input" type="password" name="password" placeholder="例:coachtech1106">
                </div>

                <div class="login__group-submit">
                    <button class="login__group-button">ログイン
                    </button>
                </div>
            </form>
    </main>
</body>

</html>