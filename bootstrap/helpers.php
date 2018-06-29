<?php
//第2.6章 ﻿基础布局-主要布局文件

// 将当前请求的路由名称转换为 CSS 类名称
function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}