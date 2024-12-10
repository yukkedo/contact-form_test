@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="form">
    <!-- タイトル -->
    <div class="form__header">
        <h2 class="form__header--item">Contact</h2>
    </div>

    <!-- お問い合わせ内容 -->
    <form class="form__items">
        <div class="form__group">
            <div class="form__group--title">
                <span class="form__label-item">お名前</span>
                <span class="form__label-required">※</span>
            </div>
            <div class="form__group--content">
                <div class="form__input--text">
                    <input class="input-name" type="text" name="first-name" placeholder="例:山田">
                    <input class="input-name" type="text" name="last-name" placeholder="例:太郎">
                </div>
                <div class="form__error">

                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group--title">
                <span class="form__label-item">性別</span>
                <span class="form__label-required">※</span>
            </div>
            <div class="form__group--content">
                <div class="form__input--text">
                    <input class="input-gender" type="radio" name="gender" value="男性">
                    <label for="">男性</label>
                    <input class="input-gender" type="radio" name="gender" value="女性">
                    <label for="">女性</label>
                    <input class="input-gender" type="radio" name="gender" value="その他">
                    <label for="">その他</label>
                    <div class="form__error">

                    </div>
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group--title">
                <span class="form__label-item">メールアドレス</span>
                <span class="form__label-required">※</span>
            </div>
            <div class="form__group--content">
                <div class="form__input--text">
                    <input class="input-email" type="email" name="email" placeholder="例:test@example.com">
                </div>
                <div class="form__error">

                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group--title">
                <span class="form__label-item">電話番号</span>
                <span class="form__label-required">※</span>
            </div>
            <div class="form__group--content">
                <div class="form__input--text">
                    <input class="input-tel" type="tel" name="tel1" placeholder="080">-
                    <input class="input-tel" type="tel" name="tel2" placeholder="1234">-
                    <input class="input-tel" type="tel" name="tel3" placeholder="5678">
                </div>
                <div class="form__error">

                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group--title">
                <span class="form__label-item">住所</span>
                <span class="form__label-required">※</span>
            </div>
            <div class="form__group--content">
                <div class="form__input--text">
                    <input class="input-adress" type="text" name="adress" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3">
                </div>
                <div class="form__error">

                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group--title">
                <span class="form__label-item">建物名</span>
            </div>
            <div class="form__group--content">
                <div class="form__input--text">
                    <input class="input-building" type="text" name="building" placeholder="千駄ヶ谷マンション101号室">
                </div>
                <div class="form__error">

                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group--title">
                <span class="form__label-item">お問い合わせの種類</span>
                <span class="form__label-required">※</span>
            </div>
            <div class="form__group--content">
                <div class="form__input--text">
                    <select class="select" name="category" id="">
                        <option value="1"></option>
                    </select>
                </div>
                <div class="form__error">

                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group--title">
                <span class="form__label-item">お問い合わせ内容</span>
                <span class="form__label-required">※</span>
            </div>
            <div class="form__group--content">
                <div class="form__input--text">
                    <textarea class="textarea" name="content" id="" placeholder="お問い合わせ内容をご記載ください"></textarea>
                </div>
                <div class="form__error">

                </div>
            </div>
        </div>

        <!-- 送信ボタン -->
        <div class="form__button">
            <button class="form__button--submit" type="submit">
                確認画面
            </button>
        </div>
    </form>
</div>
@endsection