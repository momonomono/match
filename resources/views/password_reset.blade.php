@extends('layouts.layout')

@section('title','認証キー入力')

@section('body')
        <check-hashkey-component
            :err-msg = "{{ $errors }}"
            :old = "{{ json_encode(Session::getOldInput()) }}"
        ></check-hashkey-component>
@endsection