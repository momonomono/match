@extends('layouts.layout')

@section('title','パスワード変更')

@section('body')
    <div>
        <reset-password-component
            :err-msg = "{{ $errors }}"
            :old = "{{ json_encode(Session::getOldInput()) }}"
        ></reset-password-component>

        @isset($data)
            {{ json_encode($data) }}
        @endisset
    </div>
@endsection