<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }

    protected $routeMiddleware = [
        'auth' => \App\Web\Middleware\Authenticate:: class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth:: class,
        'cache.headers' => \Illuminate\Http\Middleware\SetCacheHeaders:: class,
        'can' => \Illuminate\Auth\Middleware\Authorize:: class,
        'guest' => \App\Web\Middleware\RedirectIfAuthenticated::class,
        'password.confirm' => \Illuminate\Auth\Middleware\RequirePassword:: class,
        'signed' => \Illuminate\Routing\Middleware\ValidateSignature:: class,
        'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests:: class,
        'verified' => \Illuminate\Auth\Middleware\EnsureEmailIsVerified:: class,
        'jsonprettify' => JsonResponseMiddleware:: class
    ];
}
