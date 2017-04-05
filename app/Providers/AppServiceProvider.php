<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class AppServiceProvider extends ServiceProvider {

            /**
             * Bootstrap any application services.
             *
             * @return void
             */
        public function boot() {

             Validator::extend('string_not_equal', function($attribute, $value, $parameters, $validator)
            {

            $whatIWant = substr($value, strpos($value, "@") + 1);


            if($whatIWant !== 'yahoo,outlook,gmail,hotmail' )
                {
                    return true;
                }
                    return false;

            });
        }

            /**
             * Register any application services.
             *
             * @return void
             */
        public function register() {
            //
        }

}
