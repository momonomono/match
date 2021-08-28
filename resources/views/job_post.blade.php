@extends ('layouts.layout')

@section('title','案件登録')

@section('breadcrumb',Breadcrumbs::render('job_post'))

@section('body')
    <jobpost-component></jobpost-component>
@endsection