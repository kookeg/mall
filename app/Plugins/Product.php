<?php 
namespace App\Plugins;
use App\Plugins\Base;
use App\Models\Product as ProductModel;

class Product extends Base 
{
    public function all($params = array()){
        return ProductModel::all(); 
    }

    public function getByName($name){
        return ProductModel::where('name', trim($name))->firstOrFail();
    }
}
