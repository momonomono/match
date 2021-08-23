@extends('layouts.layout')

@section('title','パスワード変更')

@section('body')
        <reset-password-component
            :err-msg = "{{ $errors }}"
            :old = "{{ json_encode(Session::getOldInput()) }}"
        ></reset-password-component>
@endsection