<?php

// app/Providers/ContactInfoServiceProvider.php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Settings;

class ContactInfoServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $settings = Settings::first(); // Fetch the contact information
        dd($settings);
        // Share the contactInfo with all views
        view()->share('settings', $settings);
    }

    public function register()
    {
        //
    }
}
