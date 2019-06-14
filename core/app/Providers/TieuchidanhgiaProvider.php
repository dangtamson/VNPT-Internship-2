<?php

namespace App\Providers;


use App\Tieuchidanhgia;

use Illuminate\Support\ServiceProvider;


class TieuchidanhgiaProvider extends ServiceProvider
{
   

    public function boot()
    {
    	view()->composer('*',function($view){
    		$view->with('tieuchidanhgia_array', Tieuchidanhgia::all());
    	});
        
    }
}

?>
