<?php

namespace App\Console\Commands;

use App\Models\Birthday;
use App\Models\Plantilla;
use App\Models\SendBirthday;
use App\Traits\SendEmailBirthday;
use Illuminate\Console\Command;

class SendEmailBirthdays extends Command
{
    use SendEmailBirthday;
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
            try {
                $this->send_email($birthday->name.$plantilla->subject,$birthday->name,strtolower($birthday->email),'200000000094162');
                $send_aniversary = new SendBirthday();
                $send_aniversary->email = strtolower($birthday->email);
                $send_aniversary->status = 'success';
                $send_aniversary->save();

            } catch (\Throwable $th) {
                $send_aniversary = new SendBirthday();
                $send_aniversary->email = strtolower($birthday->email);
                $send_aniversary->status = 'error';
                $send_aniversary->save();
            }
            
        }
    }
}
