<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\Validator;
use App\Models\Employee;

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
        Validator::extend('same_branch', function ($attribute, $value, $parameters, $validator) {
            $employee = Employee::find($validator->getData()['employee_id']);
            return $employee && $employee->branch_id == $value;
        });
    }
}
