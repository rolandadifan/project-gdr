<?php

namespace App\Providers;

use App\Models\MenuDetail;
use App\Models\Setting;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

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

        view()->composer('include.contact', function($menu){
            $location = Setting::where('key','location')->first();
            $telephone = Setting::where('key','telephone')->first();
            $email = Setting::where('key','email')->first();
            $menu->with([
                'email' => $email,
                'telephone' => $telephone,
                'location' => $location
            ]);
        });

        view()->composer('include.navbar', function($menu){
            $location = Setting::where('key','location')->first();
            $telephone = Setting::where('key','telephone')->first();
            $logo = Setting::where('key','logo')->first();
            $menu->with([
                'logo' => $logo,
                'telephone' => $telephone,
                'location' => $location
            ]);
        });

        view()->composer('include.sidebar', function($menu){
            $menu_detail = MenuDetail::where('status_id', 1)->get();
            $menu->with([
                'menu_detail' => $menu_detail
            ]);
        });

        view()->composer('icon', function($view){
        // landing points
        $title1 = Setting::where('key','landing-point-title-1')->first();
        $icon1 = Setting::where('key','landing-point-icon-1')->first();
        $content1 = Setting::where('key','landing-point-content-1')->first();
        // 2
        $title2 = Setting::where('key','landing-point-title-2')->first();
        $icon2 = Setting::where('key','landing-point-icon-2')->first();
        $content2 = Setting::where('key','landing-point-content-2')->first();
        // 3
        $title3 = Setting::where('key','landing-point-title-3')->first();
        $icon3 = Setting::where('key','landing-point-icon-3')->first();
        $content3 = Setting::where('key','landing-point-content-3')->first();
        // 4
        $title4 = Setting::where('key','landing-point-title-4')->first();
        $icon4 = Setting::where('key','landing-point-icon-4')->first();
        $content4 = Setting::where('key','landing-point-content-4')->first();
            $view->with([
            'title1'            => $title1,
            'icon1'             => $icon1,
            'content1'          => $content1,
            'title2'            => $title2,
            'icon2'             => $icon2,
            'content2'          => $content2,
            'title3'            => $title3,
            'icon3'             => $icon3,
            'content3'          => $content3,
            'title4'            => $title4,
            'icon4'             => $icon4,
            'content4'          => $content4
            ]);
        });
    }
}