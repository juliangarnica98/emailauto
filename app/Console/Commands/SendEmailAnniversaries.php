<?php

namespace App\Console\Commands;

use App\Models\Anniversary;
use App\Models\Plantilla;
use App\Models\SendAnniversary;
use App\Traits\SendEmail;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

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
                    $this->send_email($anniversary->name.$plantilla->subject,$anniversary->name,strtolower($anniversary->email),'200000000094159','http://54.198.103.122/img/plantillas/'.$anios.'.jpg');
                    $send_aniversary = new SendAnniversary();
                    $send_aniversary->email = strtolower($anniversary->email);
                    $send_aniversary->status = 'success';
                    $send_aniversary->save();

                } catch (\Throwable $th) {
                    $send_aniversary = new SendAnniversary();
                    $send_aniversary->email = strtolower($anniversary->email);
                    $send_aniversary->status = 'error';
                    $send_aniversary->save();
                    Log::error($th->getMessage());
                    
                }
    
            }
            
            
    

    }
}
