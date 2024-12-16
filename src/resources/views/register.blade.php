<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登録フォーム</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>

<body>
    <header class="header">
        <div class="header__title">
            <a class="header__logo" href="">
                FashionablyLate
            </a>
            <a class="header__button" href="/login">Login</a>
        </div>
    </header>

    <main>
        <div class="register">
            <!-- タイトル -->
            <div class="register__header">
                <h2 class="register__header--item">Register</h2>
            </div>

            <form class="info" action="/register" method="post">
                @csrf
                <div class="info__group">
                    <p class="info__group-title">お名前</p>
                    <input class="info__group-input" type="text" name="name" value="{{ old('name') }}" placeholder="例:山田 太郎">
                    @error('name')
                    <span class="error-message">{{ $errors->first('name') }}</span>
                    @enderror
                </div>
                <div class="info__group">
                    <p class="info__group-title">メールアドレス
                    </p>
                    <input class="info__group-input" type="email" name="email" value="{{ old('email') }}" placeholder="例:text@exanple.com">
                    @error('email')
                    <span class="error-message">{{ $errors->first('email') }}</span>
                    @enderror
                </div>
                <div class="info__group">
                    <p class="info__group-title">パスワード</p>
                    <input class="info__group-input" type="password" name="password" placeholder="例:coachtech1106">
                    @error('password')
                    <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>

                <div class="info__group-submit">
                    <button class="info__group-button">登録</button>
                </div>
            </form>
    </main>
</body>

</html>