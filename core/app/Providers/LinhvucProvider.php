<?php

namespace App\Providers;


use App\Linhvuc;

use Illuminate\Support\ServiceProvider;


class LinhvucProvider extends ServiceProvider
{
   

    public function boot()
    {
    	view()->composer('*',function($view){
    		$view->with('linhvuc_array', Linhvuc::all());
    	});
        
    }
}

?>
