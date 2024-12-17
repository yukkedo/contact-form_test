@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')
<div class="confirm">
    <!-- タイトル -->
    <div class="confirm__header">
        <h2 class="confirm__header--item">Confirm</h2>
    </div>

    <!-- 確認内容 -->
    <form class="form" action="/contacts" method="post">
    @csrf
        <div class="confirm__table">
            <table class="confirm__contents">
                <tr class="contents__row">
                    <th class="contents__header">お名前</th>
                    <td class="contents__text">
                        <input type="text" class="contents__text--input" value="{{ $contact['first-name'] }} {{ $contact['last-name'] }}" readonly>

                        <input type="hidden" name="first-name" value="{{ $contact['first-name'] }}">
                        <input type="hidden" name="last-name" value="{{ $contact['last-name'] }}">
                    </td>
                </tr>
                <tr class="contents__row">
                    <th class="contents__header">性別</th>
                    <td class="contents__text">
                        <input type="text" class="contents__text--input" value="{{ $contact['gender'] }}" readonly>

                        <input type="hidden" name="gender" value="{{ $contact['gender'] }}">
                    </td>
                </tr>
                <tr class="contents__row">
                    <th class="contents__header">メールアドレス</th>
                    <td class="contents__text">
                        <input type="email" class="contents__text--input" value="{{ $contact['email'] }}" readonly>

                        <input type="hidden" name="email" value="{{ $contact['email'] }}">
                    </td>
                </tr>
                <tr class="contents__row">
                    <th class="contents__header">電話番号</th>
                    <td class="contents__text">
                        <input type="tel" class="contents__text--input" value="{{ $contact['tel'] }}" readonly>

                        <input type="hidden" name="tel" value="{{ $contact['tel'] }}">
                    </td>
                </tr>
                <tr class="contents__row">
                    <th class="contents__header">住所</th>
                    <td class="contents__text">
                        <input type="text" class="contents__text--input" value="{{ $contact['address'] }}" readonly>

                        <input type="hidden" name="address" value="{{ $contact['address'] }}">
                    </td>
                </tr>
                <tr class="contents__row">
                    <th class="contents__header">建物名</th>
                    <td class="contents__text">
                        <input type="text" class="contents__text--input" value="{{ $contact['building'] }}" readonly>

                        <input type="hidden" name="building" value="{{ $contact['building'] }}">
                    </td>
                </tr>
                <tr class="contents__row">
                    <th class="contents__header">お問い合わせの種類</th>
                    <td class="contents__text">
                        <input type="text" class="contents__text--input" value="{{ $contact['category_name'] }}" readonly>

                        <input type="hidden" name="category_id" value="{{ $contact['category_id'] }}">
                    </td>
                </tr>
                <tr class="contents__row">
                    <th class="contents__header">お問い合わせ内容</th>
                    <td class="contents__text">
                        <input type="text" class="contents__text--input" value="{{ $contact['detail'] }}" readonly>

                        <input type="hidden" name="detail" value="{{ $contact['detail'] }}">
                    </td>
                </tr>
            </table>
        </div>

        <!-- 送信ボタン -->
        <div class="confirm__button">
            <button class="confirm__button--submit" type="submit">
                送信
            </button>
            <a href="/" class="return__button">修正</a>
        </div>
    </form>
</div>
@endsection