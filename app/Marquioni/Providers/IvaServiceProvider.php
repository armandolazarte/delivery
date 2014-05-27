<?php namespace Marquioni\Providers;

use Illuminate\Support\ServiceProvider;

class IvaServiceProvider extends ServiceProvider {
	public function register(){
		$this->app->bind('Marquioni\Repositories\Resources\IvaRepository','Marquioni\Repositories\Resources\EloquentIvaRepository');
	}
}
?>