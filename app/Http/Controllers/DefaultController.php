<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;

class DefaultController extends Controller
{

    public function index()
    {
        return view('index',[
            'title' => '首页',
            'desc'  => '酷客软件为您提供最优质、最具性价比的软件服务，欢迎咨询。',
            'css'   => ['default.css']
        ]);

    }
}
