@extends('layouts.default')
@section('content')
<div class="v-top">
        <!--
        <span class="ns-ft-12 ns-hand" id="btn_login">登录</span>
        <span class="ns-ml-10 ns-mr-10">|</span>
        <span class="ns-ft-12 ns-hand" id="btn_reg">注册</span>
        -->
</div>
<div class="v-nav2">
    <span><a href="{{ route('default') }}">商城</a></span>
</div>
<div class="v-show">
    <div class="left"><img src="{{ $product->logo ? $product->logo : Helper::image('0cb196de4311e1bb2704.png') }}"></div>
    <div class="right">
        <div style="height:260px;clear:both;">
            <div class="title">
                {{ $product->name }}<span style="float:right;font-size:18px;" id="price">{{ $product->price_unit }} {{ $product->price }}</span></div>
            <div class="styles">
                <label style="float:left;">类型：</label>
                <label id="style_container"><div class="styles_span active">服务</div></label>
            </div>
            <div class="styles num ns-pt-10">数量：
                <span>10000</span>
            </div>
            <div class="styles ns-pt-10">描述：
                {{ $product->desc }}. 
            </div>
        </div>
        <div class="buy">
            <div id="btn_addCart" data-id="{{ $product->id }}" class="ns-hand ns-text-center ns-pr-10">
                <i class="iconfont icon-gouwuche ns-ft-16 ns-ml-10 ns-pt-5"></i> 
                <span class="ns-ml-20 ns-ft-12 ns-pl-10">收藏</span>
            </div>
            <div id="btn_buy" data-id="{{ $product->id }}" class="ns-hand ns-text-center">
                <i class="iconfont icon-footer-sale-copy ns-ft-16 ns-ml-10"></i> 
                <span class="ns-ml-20 ns-ft-12 ns-pl-10">购买</span>
            </div>
        </div>
    </div>
    <br style="clear:both">
</div>
<div class="v-content ns-mt-20" style="margin-bottom:50px;">
    <img src="{{ Helper::image('706c2edc3ea6f2a05e84.txt') }}"><br>
    <p>
        <img src="{{ Helper::image('8c13fcb76bd31ae421d3.txt') }}">
    </p>
    <p>
        <br>
    </p>
    <p style="text-align:center;">
        {{ $product->desc }} 。 
    </p>
</div>
<div class="attr">
    <div class="title">产品参数</div>
    <hr class="ns-mt-0">
    <div class="attr_list">
        品名 ：{{ $product->name }} 
    </div>
    <div class="attr_list">
        产品类型：服务
    </div>
    <div class="attr_list">
        价格： 根据发送量确定
    </div>
    <div class="attr_list">
        日发送量：10万+
    </div>
    <div class="attr_list">
        到达率： 99.9%
    </div>
    <div class="attr_list">
        联系方式：624692151 
    </div>
    <br style="clear:both">
</div>
@endsection
