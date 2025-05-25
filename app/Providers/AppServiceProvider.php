<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

use App\Models\SiteSetting;
use App\Models\TrainingClass;
use App\Models\Trainer;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        if(! $this->app->runningInConsole()) {
            /*
            $siteSettings = SiteSetting::select('*')->get()->toArray();
            $ourClasses   = TrainingClass::where('is_active',1)->get()->toArray();
            /*
            $data = array(
                        'siteSettings' => $siteSettings, 
                        'ourClasses' => $ourClasses
                    );
            */
            //$data = array();
            //echo "<pre>";
            //print_r($data);
            //view()->share('data', $data);

            //view()->share(compact('siteSettings','ourClasses'));
            
            // SHARE WITH SPECIFIC VIEW
            view()->composer(['frontend.layouts.app','frontend.index'], function($view) {
                $siteSettings = SiteSetting::select('*')->get()->toArray();
                $trainingClasses = TrainingClass::where('is_active',1)->take(4)->get()->toArray();
                $trainers = Trainer::where('is_active',1)->take(3)->get()->toArray();
                //echo "<pre>";
                //print_r($trainingClasses);
                
                $view->with(compact('siteSettings','trainingClasses','trainers'));
            });
            
        }
    }

}