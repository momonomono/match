@extends('layouts.layout')

@section('title','パスワードリセット')

@section('body')
    <div class="p-reminder">
        <div class="l-form">
            <form method="post">
                @csrf
                <label class="p-reminder__label">
                    <p class="p-reminder__title">Email</p>
                    <input type="text" class="p-reminder__input" name="email">
                </label>
    
                <button class="p-reminder__button">
                    送信
                </button>
            </form>
        </div>
    </div>
@endsection