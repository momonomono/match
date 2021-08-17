@extends('layouts.layout')

@section('title','パスワード再設定')

@section('body')
    <div>
        <check-hashkey-component
            :err-msg = "{{ $errors }}"
            :old = "{{ json_encode(Session::getOldInput()) }}"
        ></check-hashkey-component>
    </div>
@endsection