<?php
// 第2.6章 基础布局-主要布局文件 创建控制器

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function root()
    {
        return view('pages.root');
    }
}
