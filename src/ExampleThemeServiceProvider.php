<?php namespace Anomaly\ExampleTheme;

use Illuminate\Support\ServiceProvider;

/**
 * Class ExampleThemeServiceProvider
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\ExampleTheme
 */
class ExampleThemeServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        app('router')->get(
            '/',
            function () {

                return view('theme::hello', ['content' => 'Hello!']);
            }
        );
    }
}
