@extends ('layouts.layout')

@section('title','マイページ')

@section('breadcrumb',Breadcrumbs::render('mypage'))

@section('body')
    <div>
        <mypage-component></mypage-component>
    </div>
@endsection