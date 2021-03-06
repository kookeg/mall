<?php

namespace App\Providers;

use Blade;
use Helper;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //Datasource 指令
        Blade::directive('DataSource', function($expression){
            $return = eval('return Helper::params' . $expression. ';');
            list($class, $method, $params, $var) = $return;
            $pluginClass = "App\Plugins\\" . $class; 
            if(class_exists($pluginClass)){
                if(method_exists($pluginClass, $method)){
                    $obj  = new $pluginClass;
                    $data = $obj->$method($params); 
                    $var  = $var ? $var : 'datasource';
                    return "<?php \$$var = json_decode('{$data}') ;?>";
                }else{
                    throw new Exception("Plugins class {$pluginClass} method {$method} missing!!!");
                } 
            }else{
                    throw new Exception('Plugins class' . $pluginClass . ' missing!!!');
            }
        });
        //判断变量是否存在

        Blade::directive('CheckExist', function($expression){
            list($var, $type) = eval('return Helper::params' . $expression. ';');
            return <<<CHECKEXIST
<?php 
    $$type = '$type';
    if(!isset($$var) || !$$var){
        switch($$type){
            case 'array':
                $$var = array();
                break;
            case 'int':
                $$var = 0;
                break;
            case 'string':
                $$var = '';
                break;
            default:
                $$var = '';
        }
    }
?>
CHECKEXIST;
        });


    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
