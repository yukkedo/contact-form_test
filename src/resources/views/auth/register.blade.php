<!DOCTYPE html>
<html lang="en">

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
            <a class="header__logo" href="/">
                FashionablyLate
            </a>
            <button class="header__button">Login</button>
        </div>
    </header>

    <main>
        <div class="register">
            <!-- タイトル -->
            <div class="register__header">
                <h2 class="register__header--item">Register</h2>
            </div>

            <form action="" class="info">
                <div class="info__group">
                    <p class="info__group-title">お名前</p>
                    <input type="name" name="name" class="info__group-input" placeholder="例:山田 太郎">
                </div>
                <div class="info__group">
                    <p class="info__group-title">メールアドレス
                    </p>
                    <input type="email" name="email" class="info__group-input" placeholder="例:text@exanple.com">
                </div>
                <div class="info__group">
                    <p class="info__group-title">パスワード</p>
                    <input type="password" name="password" class="info__group-input" placeholder="例:coachtech1106">
                </div>

                <div class="info__group-submit">
                    <button class="info__group-button">登録</button>
                </div>
            </form>
    </main>
</body>

</html>