<?php

namespace App\Http\Controllers;

use App\Imports\AnniversaryImport;
use App\Models\Anniversary;
use App\Models\Plantilla;
use App\Models\UpdateAnniversary;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $meses = ['','ENERO','FEBRREO','MARZO','ABRIL','MAYO','JUNIO','JULIO','AGOSTO','SEPTIEMBRE','OCTUBRE','NOVIEMBRE','DICIEMBRE'];
        $update =  UpdateAnniversary::all()->last();
        $anniversaries = Anniversary::paginate(25);
        $personal = Anniversary::count();
        return view('aniversarios.index',compact('anniversaries','update','meses','personal'));
    }

    public function import(Request $request) 
    {
        
        $file = $request->file('file');
        if($file != null){
            DB::beginTransaction();
            try {
                UpdateAnniversary::create(['date'=>date('Y-m-d')]);
                DB::table('birthdays')->truncate();
                Excel::import(new AnniversaryImport,$file);
                DB::commit();
            } catch (\Exception $e) {
                //DB::rollback();
                return back()->with('error');
            }
            return back()->with('success');
        }
        return back()->with('error');
    }
    // public function send(){
    //     $today_day =  date('d');
    //     $today_month =  date('m');
    //     $actual = Carbon::now()->format('Y');
    //     $anniversaries = Anniversary::where('day',(int)$today_day)->where('month',(int)$today_month)->get();
        
    //     foreach($anniversaries as $anniversary){
    //         strtolower($anniversary->email);
    //         $anios = $actual-$anniversary->year;
    //         $plantilla= Plantilla::find($anios+1);

    //     }
    // }
}
