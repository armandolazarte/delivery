<?php namespace Marquioni\Providers;


use Illuminate\Support\ServiceProvider;

class IvaServiceProvider extends ServiceProvider {

	public function register(){
		$app = $this->app;
		$app->bind('Marquioni\Repositories\Resources\IvaRepository',function(){
			return new \Marquioni\Repositories\Resources\EloquentIvaRepository(new \Iva);
		});
		$app->bind('Marquioni\Logic\Retenciones\IvaProcessInterface','\Marquioni\Logic\Retenciones\IvaProcess');
	}

	public function boot(){
        $l1 = \Illuminate\Foundation\AliasLoader::getInstance();
        $l1->alias('IvaRepository', 'Marquioni\Repositories\Resources\IvaRepository');
        $l2 = \Illuminate\Foundation\AliasLoader::getInstance();
        $l2->alias('IvaProcess', 'Marquioni\Logic\Retenciones\IvaProcessInterface');
    }
}
?>