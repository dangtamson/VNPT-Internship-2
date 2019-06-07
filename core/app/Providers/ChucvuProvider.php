<?php

namespace App\Providers;


use App\Chucvu;

use Illuminate\Support\ServiceProvider;


class ChucvuProvider extends ServiceProvider
{
   

    public function boot()
    {
    	view()->composer('*',function($view){
    		$view->with('chucvu_array', Chucvu::all());
    	});
        
    }
}

?>
