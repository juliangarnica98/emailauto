<?php

namespace App\Console\Commands;

use App\Models\Anniversary;
use App\Models\Plantilla;
use App\Models\SendAnniversary;
use App\Traits\SendEmail;
use Carbon\Carbon;
use Illuminate\Console\Command;

class SendEmailAnniversaries extends Command
{
    use SendEmail;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:anniversary';

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
            $actual = Carbon::now()->format('Y');
            $anniversaries = Anniversary::where('day',(int)$today_day)->where('month',(int)$today_month)->get();
            
            foreach($anniversaries as $anniversary){
                strtolower($anniversary->email);
                $anios = $actual-$anniversary->year;
                $plantilla= Plantilla::find($anios+1);
                try {
                    $this->send_email($plantilla->ide,$anniversary->name.$plantilla->subject,$anniversary->name,strtolower($anniversary->email));
                    $send_aniversary = new SendAnniversary();
                    $send_aniversary->email = strtolower($anniversary->email);
                    $send_aniversary->status = 'success';
                    $send_aniversary->save();

                } catch (\Throwable $th) {
                    $send_aniversary = new SendAnniversary();
                    $send_aniversary->email = strtolower($anniversary->email);
                    $send_aniversary->status = 'error';
                    $send_aniversary->save();
                }
    
            }
            
            
    

    }
}
