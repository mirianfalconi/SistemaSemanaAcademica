<?php namespace app\Providers;

use Illuminate\Support\ServiceProvider;

class HtmlServiceProvider extends ServiceProvider {


	public function boot()
	{
    require base_path() . '/resources/macros/form.php';
	}


	public function register()
	{
		//
	}

}
