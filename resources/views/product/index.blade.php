@extends('layouts.default')
@section('content')
<div class="v-top">
    <div id="search" style="">
        <form id="search_form" action="###" method="GET">
            <input type="text" value="" name="search" placeholder="输入内容enter搜索" id="tb_search">
            <i id="icon_search" class="fa fa-search ns-ft-14"></i>
        </form>
    </div>
    <!--
        <span class="ns-ft-12 ns-hand" id="btn_login">登录</span>
        <span class="ns-ml-10 ns-mr-10">|</span>
        <span class="ns-ft-12 ns-hand" id="btn_reg">注册</span>
    -->
</div>
@DataSource('Product', 'all', '', 'products')
<div class="v-page">
    <div class="page" style="display:block;">
        <div class="v-title">酷客  · 优选</div>
        <div class="v-title-line">
            <div><img src="{{ Helper::image('18416c05ced267f35550.png') }}"></div>
            <div><img src="{{ Helper::image('d6741715e406a4edea91.png') }}"></div>
        </div> 
        <div class="v-list">
            @foreach($products as $product)
            <a href="{{ route('product', ['name' => urlencode($product->name)]) }}" target="_blank">
                <div class="list">
                    <div class="bg"></div>
                    <div class="box">
                        <div class="likes prolikes" data-id="{{ $product->id }}"><i class="fa fa-heart"></i></div>
                        <div class="title">{{ $product->name }}</div>
                        <div class="desc">{{ $product->desc }}</div>
                    </div>
                    <img class="proimg" style="width:320px;height:320px;" src="{{ $product->logo ? $product->logo : Helper::image('0cb196de4311e1bb2704.png') }}">
                    <div class="procolor"></div>
                    <!--<div class="ns-mt-10 h20">SHUEHO</div>-->
                    <div class="ns-mt-5 h20">{{ $product->name }}</div>
                    <div class="ns-mt-5 h20">{{ $product->price_unit }} {{ $product->price }}</div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</div>
@endsection
