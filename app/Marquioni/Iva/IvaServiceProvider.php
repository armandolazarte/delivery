<?php namespace Marquioni\iva;

use Illuminate\Support\ServiceProvider;

class IvaServiceProvider extends ServiceProvider {
	public function register(){
		$this->app->bind('Marquioni\Iva\IvaRepositoryInterface','Marquioni\Iva\IvaRepository');
	}
}
?>