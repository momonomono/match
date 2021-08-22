<?php


Breadcrumbs::for('mypage', function ($trail) {
    $trail->push('ホーム', url('mypage'));
});

Breadcrumbs::for('test', function ($trail) {
    $trail->parent('mypage');
    $trail->push('ホーム', route('mypage'));
});