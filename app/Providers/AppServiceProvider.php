<?php

namespace App\Providers;

use App\Models\Album;
use App\Models\Menu;
use App\Models\Post;
use App\Models\Slideshow;
use App\Observers\AlbumObserver;
use App\Observers\PostObserver;
use App\Observers\SlideshowObserver;
use App\Services\NavigationMenuService;
use Carbon\Carbon;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
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
        Carbon::setlocale(config('app.locale'));
        setlocale(LC_ALL, "es_ES");

        view()->composer('partials.pages._nav', function ($view) {
            $menus = Menu::published()->order('ASC')->get();
            $view->with('menus', $menus);
        });
        view()->composer('partials.admin._sidebar', function ($view) {
            $menus = (new NavigationMenuService)->getMenuItems();
            $view->with('menus', $menus);
        });

        /**
         * Paginate a standard Laravel Collection.
         *
         * @param int $perPage
         * @param int $total
         * @param int $page
         * @param string $pageName
         * @return array
         */
        Collection::macro('paginate', function ($perPage, $total = null, $page = null, $pageName = 'page') {
            $page = $page ?: LengthAwarePaginator::resolveCurrentPage($pageName);
            return new LengthAwarePaginator(
                $this->forPage($page, $perPage),
                $total ?: $this->count(),
                $perPage,
                $page,
                [
                    'path' => LengthAwarePaginator::resolveCurrentPath(),
                    'pageName' => $pageName,
                ]
            );
        });
        // Register observer post
        Post::observe(PostObserver::class);

        // Register observer album
        Album::observe(AlbumObserver::class);

        // Register observer slideshow
        Slideshow::observe(SlideshowObserver::class);
    }
}
