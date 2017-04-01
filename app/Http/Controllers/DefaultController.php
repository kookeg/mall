<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Helper;

class DefaultController extends Controller
{

    public function index()
    {
        return view('product/index',[
            'title' => '首页',
            'desc'  => '酷客软件为您提供最优质、最具性价比的软件服务，欢迎咨询。',
            'css'   => ['default.css']
        ]);
    }

    public function product($name = ''){
        $product = \App\Models\Product::where('name', trim($name))->firstOrFail();
        return view('product/detail', [
            'title'   => $name,
            'desc'    => $product['desc'],
            'product' => $product,
            'css'     => ['default.css', 'iconfont.css']
        ]);
    }
}
