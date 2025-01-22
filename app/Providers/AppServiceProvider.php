<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

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
        Blade::directive('formatTags', function ($tags) {
            return "<?php echo ucwords(str_replace(',', ', ', $tags)); ?>";
        });

        Blade::directive('shortText', function ($expression) {
            [$text, $length] = explode(',', $expression);
            return "<?php echo Str::limit($text, $length); ?>";
        });
    }
}
