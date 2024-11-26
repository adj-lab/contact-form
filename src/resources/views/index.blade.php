@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}" />
@endsection

@section('content')
        <div class="contact-form__content">
            <div class="contact-form__heading">
                <h2>お問い合わせ</h2>
            </div>
            <form class="form" action="/contacts/confirm" method="post">
                @csrf
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お名前</span>
                        <span class="form__label--required">必須</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="name" placeholder="テスト太郎" value="{{ old('name')}}" />
                        </div>
                            <div class="form__error">
                                <!--バリデーション機能追加後記述-->
                                @error('name')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form__group">
                        <div class="form__group-title">
                            <span class="form__label--item">メールアドレス</span>
                            <span class="form__label--required">必須</span>
                        </div>
                        <div class="form__group-content">
                            <div class="form__input--text">
                                <input type="email" name="email" placeholder="test@example.com" value="{{ old('email')}}" />
                            </div>
                            <div class="form__error">
                                <!--バリデーション機能追加後記述-->
                                @error('email')
                                {{ $message }}
                                @enderror
                            </div>                            
                        </div>
                    </div>
                    <div class="form__group">
                        <div class="form__group-title">
                            <span class="form__label--item">電話番号</span>
                            <span class="form__label--required">必須</span>
                        </div>
                        <div class="form__group-content">
                            <div class="form__input--text">
                                <input type="tel" name="tel" placeholder="090xxxxxxxx" value="{{ old('tel')}}" >
                            </div>
                            <div class="form__error">
                                <!--バリデーション機能追加後記述-->
                                @error('tel')
                                {{ $message }}
                                @enderror
                            </div>                            
                        </div>
                    </div>
                    <div class="form__group">
                        <div class="form__group-title">
                            <span class="form__label--item">お問い合わせ先</span>
                        </div>
                        <div class="form__group-content">
                            <div class="form__input--textarea">
                                <textarea name="content" placeholder="資料送付依頼"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form__button">
                        <button class="form__button-submit" type="submit">送信</button>
                    </div>
                </div>
            </form>
        </div>
@endsection