<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* 【第2.6章 基础布局-主要布局文件 ﻿绑定路由
Route::get('/', function () {
    return view('welcome');
});
第2.6章 基础布局-主要布局文件 ﻿绑定路由】*/
// 第2.6章 基础布局-主要布局文件 ﻿绑定路由
Route::get('/', 'PagesController@root')->name('root');