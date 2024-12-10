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
    <form class="form">
        <div class="confirm__table">
            <table class="confirm__contents">
                <tr class="contents__row">
                    <th class="contents__header">お名前</th>
                    <td class="contents__text">
                        <input type="text" class="contents__text--input" readonly>
                    </td>
                </tr>
                <tr class="contents__row">
                    <th class="contents__header">性別</th>
                    <td class="contents__text">
                        <input type="text" class="contents__text--input" readonly>
                    </td>
                </tr>
                <tr class="contents__row">
                    <th class="contents__header">メールアドレス</th>
                    <td class="contents__text">
                        <input type="text" class="contents__text--input" readonly>
                    </td>
                </tr>
                <tr class="contents__row">
                    <th class="contents__header">電話番号</th>
                    <td class="contents__text">
                        <input type="text" class="contents__text--input" readonly>
                    </td>
                </tr>
                <tr class="contents__row">
                    <th class="contents__header">住所</th>
                    <td class="contents__text">
                        <input type="text" class="contents__text--input" readonly>
                    </td>
                </tr>
                <tr class="contents__row">
                    <th class="contents__header">建物名</th>
                    <td class="contents__text">
                        <input type="text" class="contents__text--input" readonly>
                    </td>
                </tr>
                <tr class="contents__row">
                    <th class="contents__header">お問い合わせの種類</th>
                    <td class="contents__text">
                        <input type="text" class="contents__text--input" readonly>
                    </td>
                </tr>
                <tr class="contents__row">
                    <th class="contents__header">お問い合わせ内容</th>
                    <td class="contents__text">
                        <input type="text" class="contents__text--input" readonly>
                    </td>
                </tr>
            </table>
        </div>

        <!-- 送信ボタン -->
        <div class="confirm__button">
            <button class="confirm__button--submit" type="submit">
                送信
            </button>
            <a href="" class="return__button">修正</a>
        </div>
    </form>
</div>
@endsection