@extends ('layouts.layout')

@section('title','ユーザー登録')

@section('body')
        <signup-component 
            :err-msg = "{{ $errors }}"
            :old = "{{ json_encode(Session::getOldInput()) }}"
        ></signup-component>
@endsection