<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

use App\Models\section;
use App\Models\lesson;
use App\Observers\SectionObserver;
use App\Observers\LessonObserver;

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
        lesson::observe(LessonObserver::class);
        section::observe(SectionObserver::class);

        Blade::directive('routeIs', function ($expression) {
            return "<?php if(Request::url() == route($expression)): ?>";
        });
        
        $this->app->bind('path.public', function() {
        return base_path().'/../public_html';
    });
    }
}
