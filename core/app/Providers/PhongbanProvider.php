<?php

namespace App\Providers;


use App\Phongban;

use Illuminate\Support\ServiceProvider;


class PhongbanProvider extends ServiceProvider
{
   

    public function boot()
    {
    	view()->composer('*',function($view){
    		$view->with('phongban_array', Phongban::all());
    	});
        
    }
}

?>
