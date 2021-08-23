<?php


Breadcrumbs::for('mypage', function ($trail) {
    $trail->push('マイページ', url('mypage'));
});

Breadcrumbs::for('jobs',function($trail){
    $trail->push('案件一覧',url('jobs'));
});

Breadcrumbs::for('job_post', function ($trail) {
    $trail->push('案件投稿', route('mypage'));
});