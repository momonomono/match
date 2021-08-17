@extends('layouts.layout')

@section('title','テスト')

@section('body')
    <div class="test">
        <div class="test__container">
            <form method="post">
                @csrf

                <label class="test__label">
                    <p class="test__text">メールアドレス</p>
                    <input 
                        type="text"
                        class="test__input"
                        name="email"
                    >
                    @error('email')
                        <p>{{ $message }}</p>
                    @enderror
                </label>
    
                <label class="test__label">
                    <p class="test__text">認証キー</p>
                    <input
                        type="text"
                        class="test__input"
                        name="hashKey"
                    >
                    @error('hashKey')
                        <p>{{ $message }}</p>
                    @enderror
                </label>
    
                <button class="test__button">
                    送信
                </button>
            </form>

            @isset($hashKey)
                {{ $hashKey }}
            @endisset
        </div>
    </div>
@endsection