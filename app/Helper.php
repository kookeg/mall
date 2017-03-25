<?php
class Helper 
{
    static function css($fileName = ''){
        return Config::get('mall.assets_url') . '/mall/css/' .  trim($fileName, '/') . '?v=' . Config::get('mall.version');   
    }

    static function javaScript($fileName = ''){
        return Config::get('mall.assets_url') . '/mall/javascript/' . trim($fileName, '/') . '?v=' . Config::get('mall.version');   
    }

    static function image($fileName = ''){
        return Config::get('mall.assets_url') . '/mall/images/' . trim($fileName, '/');   
    }

    static function plugin(){
        return array_pad(func_get_args(), 4, '');
    }
}
