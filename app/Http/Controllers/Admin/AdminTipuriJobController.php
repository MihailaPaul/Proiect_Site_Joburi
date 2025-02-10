<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobType;
use App\Models\Job;

class AdminTipuriJobController extends Controller
{
    public function index()
    {
         $date_tip_job =JobType::get();
        return view("Admin.tipuri_job",compact('date_tip_job'));
    }

    public function creeaza()
    {
        return view("Admin.tipuri_job_creare");
    }

    public function salveaza(Request $request)
    {
        $request->validate([
            'nume_tip' => 'required',
          ]);

         $tip= new JobType();
         $tip->nume_tip = $request->nume_tip;
         $tip->save();

         return redirect()->route('admin_tip_job')->with('success','Tipul Jobului a fost adaugat cu succes ! ');
        
    }

    public function editare($id){
        $tip_job = JobType::where('id',$id)->first();
        return view('Admin.tipuri_job_editare',compact('tip_job'));
    }

    public function modifica(Request $request, $id)
    { $tip = JobType::where('id',$id)->first();

        $request->validate([
        'nume_tip' => 'required',
      ]);

      $tip->nume_tip = $request->nume_tip;
      $tip->update();

      return redirect()->route('admin_tip_job')->with('success','Tip modificat cu succes ! ');

    }

    public function stergere($id){
        
        $verificare = Job::where('job_type_id',$id)->count();
        if($verificare>0)
        {
            return redirect()->back()->with('error','Aceast tip este folosita de anunturi active deci nu poate fi stearsa!');
        }
        $tip_job = JobType::where('id',$id)->delete();

        return redirect()->route('admin_tip_job')->with('success','Tipul a fost stearsa cu succes ! ');
    }
}
