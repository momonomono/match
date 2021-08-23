@extends ('layouts.layout')

@section('title','マイページ')

@section('breadcrumb',Breadcrumbs::render('mypage'))

@section('body')
        <mypage-component></mypage-component>
@endsection