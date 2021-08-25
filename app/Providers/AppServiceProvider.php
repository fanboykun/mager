<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Carbon\Carbon;
// use Illuminate\View\Component;
use Livewire\Component;

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
        config(['app.locale' => 'id']);
	    Carbon::setLocale('id');
        Component::macro('notify', function ($message, $title = '', $type = 'success') {
            $this->dispatchBrowserEvent('notify', ['message' => $message, 'title' => $title, 'type' => $type]);
        });
    }
}
