<?php

namespace App\Providers;

use App\Models\Features;
use App\Models\Page;
use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewShareProvider extends ServiceProvider
{

    public function boot()
    {

        $Pages = Cache::remember('pages',now()->addYear(1), function () {
            return Page::with('getCategory')->get();
        });

        $Features = Cache::remember('features',now()->addYear(1), function () {
            return Features::all();
        });

        $Service = Cache::remember('service',now()->addYear(1), function () {
            return Service::all();
        });

        $ServiceCategory = Cache::remember('service_categories',now()->addYear(1), function () {
            return ServiceCategory::select('id', 'title', 'slug', 'status')->with('getService')->where('status', '=', 1)->get();
        });


        View::share([
            'Pages' => $Pages,
            'ServiceCategory' => $ServiceCategory,
            'Features' => $Features,
            'Service' => $Service,
        ]);
    }
}
