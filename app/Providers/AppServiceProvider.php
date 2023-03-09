<?php

namespace App\Providers;

use App\Models\Blog;
use App\Models\Setting;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\Category;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrap();

         $website = Setting::find(1);
         View::share('website', $website);

        // if(Schema::hasTable('settings')){
        //     $website = Setting::find(1);
        //     View::share('website', $website);
        // }

        if(Schema::hasTable('categories')){
            View::composer('frontEnd.include.header', function ($view){
                $view->with('header_categories', Category::latest()->take(8)->get());
            });
        }

        if(Schema::hasTable('blogs') && Schema::hasTable('categories')){
            View::composer('frontEnd.include.rightSideBar', function ($view){
                $view->with('rightSideBar_recentblog', Blog::with('category','user')->latest()->take(3)->get())
                     ->with('rightSideBar_categories', Category::latest()->withCount('blogs')->orderBy('blogs_count', 'desc')->take(10)->get());
            });

        }

        if(Schema::hasTable('blogs') && Schema::hasTable('categories')){
            View::composer('frontEnd.include.footer', function ($view){
                $view->with('footer_recentblog', Blog::with('category','user')->latest()->take(2)->get())
                ->with('footer_categories', Category::latest()->withCount('blogs')->orderBy('blogs_count', 'desc')->take(6)->get());
            });

        }

    }
}
