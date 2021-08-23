<?php


Breadcrumbs::for('mypage', function ($trail) {
    $trail->push('マイページ', url('mypage'));
});

Breadcrumbs::for('jobs',function($trail){
    $trail->push('案件一覧',url('jobs'));
});

Breadcrumbs::for('job_post', function ($trail) {
    $trail->parent('jobs');
    $trail->push('案件投稿', route('mypage'));
});

Breadcrumbs::for('job_post', function ($trail) {
    $trail->parent('jobs');
    $trail->push('案件投稿', route('mypage'));
});

Breadcrumbs::for('job_fix', function ($trail) {
    $trail->parent('jobs');
    $trail->push('案件修正', route('mypage'));
});

Breadcrumbs::for('message_public',function($trail){
    $trail->parent('mypage');
    $trail->push('質問一覧',url('message/public'));
});

Breadcrumbs::for('message_private',function($trail){
    $trail->parent('mypage');
    $trail->push('メッセージ一覧',url('message/private'));
});