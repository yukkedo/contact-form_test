<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>管理者ページ</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>

<body>
    <header class="header">
        <div class="header__title">
            <a class="header__logo" href="/">
                FashionablyLate
            </a>
            <button class="header__button">Admin
            </button>
        </div>
    </header>

    <main>
        <div class="admin">
            <div class="admin__header">
                <h2 class="admin__header--title">Admin</h2>
                <form class="admin__header--items" action="/auth/admin" method="get">
                    <input class="items-content" type="text" placeholder="名前やメールアドレスを入力してください">
                    <select class="items-gender" name="gender" id="" value>
                        <option value="" selected>性別</option>
                        <option value="全て">全て</option>
                        <option value="男性">男性</option>
                        <option value="女性">女性</option>
                        <option value="その他">その他</option>
                    </select>
                    <select class="items-category" name="category" id="">
                        <option value="" selected>お問い合わせ内容の種類</option>
                        <option value="category2">商品の交換について</option>
                    </select>
                    <input class="items-date" name="items-date" type="date">
                    <button class="items-search">検索</button>
                    <button class="items-reset">リセット</button>
                </form>
            </div>
            <div class="user-list">
                <button class="export-button">エクスポート</button>
                <table class="user-table">
                    <tr class="table-row">
                        <th class="table-header--name">お名前</th>
                        <th class="table-header--gender">性別</th>
                        <th class="table-header--email">メールアドレス</th>
                        <th class="table-header--category">お問い合わせの種類</th>
                        <th class="table-header--null"></th>
                    </tr>
                    <tr class="table-row">
                        <td class="table-name">山田 太郎</td>
                        <td class="table-gender">男性</td>
                        <td class="table-email">test@example.com</td>
                        <td class="table-category">商品の交換について</td>
                        <td class="table-button"><button>詳細</button></td>
                    </tr>
                </table>
            </div>
        </div>
    </main>
</body>

</html>