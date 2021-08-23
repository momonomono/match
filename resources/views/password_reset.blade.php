@extends('layouts.layout')

@section('title','認証キー入力')

@section('body')
    <div>
        <check-hashkey-component
            :err-msg = "{{ $errors }}"
            :old = "{{ json_encode(Session::getOldInput()) }}"
        ></check-hashkey-component>
    </div>
@endsection