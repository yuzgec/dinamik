<?php

namespace App\Providers;

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

        $Service = Cache::remember('service',now()->addYear(1), function () {
            return Service::with('getCategory')->get();
        });

        $ServiceCategory = Cache::remember('service_categories',now()->addYear(1), function () {
            return ServiceCategory::all();
        });

        View::share([
            'Pages' => $Pages,
            'Service' => $Service,
            'ServiceCategory' => $ServiceCategory,
        ]);
    }
}
