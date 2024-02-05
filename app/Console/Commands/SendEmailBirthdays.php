<?php

namespace App\Console\Commands;

use App\Models\Birthday;
use App\Models\Plantilla;
use App\Traits\SendEmail;
use Illuminate\Console\Command;

class SendEmailBirthdays extends Command
{
    use SendEmail;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:birthday';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $today_day =  date('d');
        $today_month =  date('m');
        $plantilla = Plantilla::find(1);
         $birthdays = Birthday::where('day',(int)$today_day)->where('month',(int)$today_month)->get();
         foreach($birthdays as $birthday){
             strtolower($birthday->email);
             $this->send_email($plantilla->ide,$birthday->name.$plantilla->subject,$birthday->name,strtolower($birthday->email));
         }
    }
}
