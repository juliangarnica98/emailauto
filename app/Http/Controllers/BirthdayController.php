<?php

namespace App\Http\Controllers;

use App\Imports\BirthdayImport;
use App\Models\Birthday;
use App\Models\Plantilla;
use App\Models\SendBirthday;
use App\Models\UpdateBirthday;
use App\Traits\SendEmail;
use Error;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Facades\Excel;
use PhpOffice\PhpSpreadsheet\Reader\Xls\RC4;

class BirthdayController extends Controller
{
    use SendEmail;
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $meses = ['','ENERO','FEBRREO','MARZO','ABRIL','MAYO','JUNIO','JULIO','AGOSTO','SEPTIEMBRE','OCTUBRE','NOVIEMBRE','DICIEMBRE'];
        $update =  UpdateBirthday::all()->last();
        $birthdays = Birthday::paginate(25);
        $personal = Birthday::count();
        return view('cumpleaños.index',compact('birthdays','meses','update','personal'));
    }

    public function import(Request $request) 
    {
        
        $file = $request->file('file');
        if($file != null){
            // DB::beginTransaction();
            // try {
            try {
                UpdateBirthday::create(['date'=>date('Y-m-d')]);
                DB::table('birthdays')->truncate();
                Excel::import(new BirthdayImport,$file);
            } catch (\Throwable $th) {
                return back()->with('error');
            }
                // DB::commit();
            // } catch (\Exception $e) {
            //     DB::rollback();
            //     return back()->with('error');
            //     Log::error($e);
            // }
            return back()->with('success');
        }
        return back()->with('error');
    }


    //public function test() {
        // $today_day =  date('d');
        // $today_month =  date('m');
        // $plantilla = Plantilla::find(1);
        // $birthdays = Birthday::where('day',(int)$today_day)->where('month',(int)$today_month)->get();
        // foreach($birthdays as $birthday){
        //     strtolower($birthday->email);
        //     $this->send_email($plantilla->ide,$birthday->name.$plantilla->subject,$birthday->name,strtolower($birthday->email));
        // }
    //}
}
