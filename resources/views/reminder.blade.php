@extends ('layouts.layout')

@section('title','ログイン')

@section('body')
    <div>
        <reminder-component
            :err-msg = "{{ $errors }}"
            :old = "{{ json_encode(Session::getOldInput()) }}"
        ></reminder-component>
    </div>
@endsection