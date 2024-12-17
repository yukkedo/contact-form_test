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
    <form class="form__items" action="/confirm" method="post">
        @csrf
        <div class="form__group">
            <div class="form__group--title">
                <span class="form__label-item">お名前</span>
                <span class="form__label-required">※</span>
            </div>
            <div class="form__group--content">
                <div class="form__input--text">
                    <input class="input-name" type="text" name="first-name" placeholder="例:山田" value="{{ old('first-name') }}">
                    <input class="input-name" type="text" name="last-name" placeholder="例:太郎" value="{{ old('last-name') }}">
                </div>
                <div class="form__error">
                    @error('first-name')
                    <div class="form__error-message">{{ $message }}</div>
                    @enderror
                    @error('last-name')
                    <div class="form__error-message">{{ $message }}</div>
                    @enderror
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
                    <input class="input-gender" type="radio" name="gender" value="男性" checked>
                    <label for="">男性</label>
                    <input class="input-gender" type="radio" name="gender" value="女性">
                    <label for="">女性</label>
                    <input class="input-gender" type="radio" name="gender" value="その他">
                    <label for="">その他</label>
                </div>
                <div class="form__error">
                    @error('gender')
                    <div class="form__error-message">{{ $message }}</div>
                    @enderror
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
                    <input class="input-email" type="email" name="email" placeholder="例:test@example.com" value="{{ old('email') }}">
                </div>
                <div class="form__error">
                    @error('email')
                    <div class="form__error-message">{{ $message }}</div>
                    @enderror
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
                    @error('tel1')
                    <div class="form__error-message">{{ $message }}</div>
                    @enderror
                    @error('tel2')
                    <div class="form__error-message">{{ $message }}</div>
                    @enderror
                    @error('tel3')
                    <div class="form__error-message">{{ $message }}</div>
                    @enderror
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
                    <input class="input-adress" type="text" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}">
                </div>
                <div class="form__error">
                    @error('address')
                    <div class="form__error-message">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group--title">
                <span class="form__label-item">建物名</span>
            </div>
            <div class="form__group--content">
                <div class="form__input--text">
                    <input class="input-building" type="text" name="building" placeholder="例:千駄ヶ谷マンション101号室" value="{{ old('building') }}">
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
                    <select class="select" name="category_id" id="category_id">
                        <option value="" selected>選択してください</option>
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->content}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form__error">
                    @error('category_id')
                    <div class="form__error-message">{{ $message }}</div>
                    @enderror
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
                    <textarea class="textarea" name="detail" id="" placeholder="お問い合わせ内容をご記載ください">{{ old('detail') }}</textarea>
                </div>
                <div class="form__error">
                    @error('detail')
                    <div class="form__error-message">{{ $message }}</div>
                    @enderror
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