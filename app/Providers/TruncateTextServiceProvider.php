<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class TruncateTextServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        Blade::directive('truncate', function ($expression) {
            list($text, $length) = explode(',', $expression);

            return "<?php echo Str::limit($text, $length); ?>";
        });
    }
}
