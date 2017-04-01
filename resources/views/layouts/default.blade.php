<!DOCTYPE HTML>
<html>
<head>
    <title>{{$title or '标题'}} - {{ Config::get('mall.app_name') }}</title>
    <meta name="description" id="mateDescription" content="{{$desc or '描述'}}" />
    <meta name="renderer" content="webkit">
    <link rel="stylesheet" href="{{ Helper::css('common/common.css') }}"/>
    <link rel="stylesheet" href="{{ Helper::css('common/icon.css') }}"/>
    @CheckExist('css', 'array')
    @foreach($css as $c)
    <link rel="stylesheet" href="{{ Helper::css($c) }}"/>
    @endforeach
</head>
<body>
    <div class="v-container">
        @yield('content')
    </div>
    <div class="v-container">
        <footer>
            <img src="{{ Helper::image('d6741715e406a4edea91.png') }}">
            <div class="ns-mt-20 v-info">
                <div>
                    Copyright © {{ date('Y', time()) }} {{ Config::get('mall.domain') }} Inc.All Rights Reserved. {{ Config::get('mall.company')}}
                </div>
                <div class="ns-mt-5">{{ Config::get('mall.icp') }} </div>
                <div class="ns-mt-5">QQ:624692151</div>
            </div>
            <div class="v-f-logo">
                <img src="{{ Helper::image('4bf47f33aecfd9f07537.png') }}">
            </div>
        </footer>
        <div class="toolbar">
            <div class="tool gotop"><i class="fa fa-angle-up"></i></div>
            <!--<div class="tool android"><i class="iconfont  ns-ft-30 icon-kefu1"></i></div>-->
        </div>
    </div> 
</body>
<script src="{{ Helper::javaScript('common/jquery.min.js') }}"></script>
<script src="{{ Helper::javaScript('common/jquery.unveil.min.js') }}"></script>
<script src="{{ Helper::javaScript('common/common.js') }}"></script>
</html>
