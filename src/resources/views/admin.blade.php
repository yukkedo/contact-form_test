<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>管理者ページ</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <!-- <style>
        .pagination .previous,
        .pagination .next,
        .pagination .page-item.disabled .page-link,
        .pagination .page-item .page-link {
            display: none;
        }

        .pagination .pagination-info {
            display: none;
        }

        svg.w-5.h-5 {
            width: 30px;
            height: 30px;
        }
    </style> -->
</head>

<body>
    <header class="header">
        <div class="header__title">
            <a class="header__logo" href="/">
                FashionablyLate
            </a>
            <button class="header__button">logout
            </button>
        </div>
    </header>

    <main>
        <div class="admin">
            <div class="admin__header">
                <h2 class="admin__header--title">Admin</h2>
                <form class="admin__header--items" action="/admin" method="get">
                    <input class="items-content" name="person" type="text" placeholder=" 名前やメールアドレスを入力してください" value="{{ request('search') }}">

                    <select class="items-gender" name="gender" id="" value>
                        <option value="" selected>性別</option>
                        <option value="全て" {{ request('gender') == '全て' ? 'selected' : '' }}>全て</option>
                        <option value="男性" {{ request('gender') == '男性' ? 'selected' : '' }}>男性</option>
                        <option value="女性" {{ request('gender') == '女性' ? 'selected' : '' }}>女性</option>
                        <option value="その他" {{ request('gender') == 'その他' ? 'selected' : '' }}>その他</option>
                    </select>

                    <select class="items-category" name="category" id="">
                        <option value="" selected>お問い合わせ内容の種類</option>
                        <option value="category2" {{ request('category') == 'category2' ? 'selected' : '' }}>商品のお届けについて</option>
                        <option value="category3" {{ request('category') == 'category3' ? 'selected' : '' }}>商品の交換について</option>
                        <option value="category4" {{ request('category') == 'category4' ? 'selected' : '' }}>商品トラブル</option>
                        <option value="category5" {{ request('category') == 'category5' ? 'selected' : '' }}>ショップへのお問い合わせ</option>
                        <option value="category6" {{ request('category') == 'category6' ? 'selected' : '' }}>その他</option>
                    </select>

                    <input class="items-date" name="items-date" type="date">

                    <button class="items-search">検索</button>
                    <button class="items-reset">リセット</button>
                </form>
            </div>
            <div class="user-list">
                <div class="user-list__top">
                    <button class="export-button">エクスポート</button>
                    <div class="pagination">
                        {{ $contacts->links() }}
                    </div>
                </div>
                <table class=" user-table">
                    <tr class="table-row">
                        <th class="table-header--name">お名前</th>
                        <th class="table-header--gender">性別</th>
                        <th class="table-header--email">メールアドレス</th>
                        <th class="table-header--category">お問い合わせの種類</th>
                        <th class="table-header--null"></th>
                    </tr>
                    @foreach($contacts as $contact)
                    <tr class="table-row">
                        <td class="table-name">{{ $contact['last-name'] }} {{ $contact['first-name'] }} </td>
                        <td class="table-gender">
                            @if ($contact->gender == 1)
                            男性
                            @elseif ($contact->gender == 2)
                            女性
                            @elseif ($contact->gender == 3)
                            その他
                            @else
                            不明
                            @endif
                        </td>
                        <td class="table-email">{{ $contact->email }}</td>
                        <td class="table-category">{{ $contact->category->content}}</td>
                        <td class="table-button"><button>詳細</button></td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </main>
</body>

</html>