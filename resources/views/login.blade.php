@extends ('layouts.layout')

@section('title','ログイン')

@section('body')
    <div>
        <login-component 
            :err-msg = "{{ $errors }}"
            :old = "{{ json_encode(Session::getOldInput()) }}"
            :show-message = "{{ session('showMessage') ? 'true' : 'false' }}"
        ></login-component>
    </div>
@endsection