@extends ('layouts.layout')

@section('title','案件登録')

@section('breadcrumb',Breadcrumbs::render('job_post'))

@section('body')
    <jobpost-component
        :err-msg = "{{ $errors }}"
    ></jobpost-component>
@endsection