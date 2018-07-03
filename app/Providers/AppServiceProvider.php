<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
  /**
  * Bootstrap any application services.
  *
  * @return void
  */
  public function boot()
  {
    //
  }
  
  /**
  * Register any application services.
  *
  * @return void
  */
  public function register(){
    //Alias for components
    Blade::component('components.callToAction', 'CTA');
    Blade::component('components.ammoCard', 'ammoCard');
  }
}
