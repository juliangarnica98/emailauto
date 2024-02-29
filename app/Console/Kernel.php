<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected $commands = [];

    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('birthday:send')->everyMinute('8:15');
        // $schedule->command('anniversary:send')->everyMinute('8:30');

        $schedule->command('send:birthday')->dailyAt('8:30');
        $schedule->command('send:anniversary')->dailyAt('8:35');
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
}
