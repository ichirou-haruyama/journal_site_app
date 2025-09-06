<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
});

// 論文の一覧表示
Volt::route('/articles', 'articles.index')->name('articles.index');
// 新規作成
Volt::route('/articles/create', 'articles.create')->name('articles.create');
// 各論文の詳細表示
Volt::route('/articles/{article}', 'articles.show')->name('articles.show');
// 編集
Volt::route('/articles/{article}/edit', 'articles.edit')->name('articles.edit');
