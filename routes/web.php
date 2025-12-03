<?php

use Ladmin\Layout\Content;
use Ladmin\PHPInfo\PHPInfo;

$path = PHPInfo::config('path', 'phpinfo');

Route::get($path, function (Content $content, PHPInfo $info) {
    $info = $info->toCollection();

    return $content
        ->header('PHP\'s configuration')
        ->description(' ')
        ->body(view('laravel-admin-phpinfo::phpinfo', compact('info')));
});
