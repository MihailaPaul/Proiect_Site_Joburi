<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobSalaryRange;
use App\Models\Job;

class AdminIntervalSalariuJobController extends Controller
{
    public function index()
    {
         $date_salariu_job =JobSalaryRange::get();
        return view("Admin.salariu_job",compact('date_salariu_job'));
    }

    public function creeaza()
    {
        return view("Admin.salariu_job_creare");
    }

    public function salveaza(Request $request)
    {
        $request->validate([
            'sume' => 'required',
          ]);

         $salariu= new JobSalaryRange();
         $salariu->sume = $request->sume;
         $salariu->save();

         return redirect()->route('admin_salariu_job')->with('success','Intervalul salarial a fost adaugat cu succes ! ');
        
    }

    public function editare($id){
        $salariu_job = JobSalaryRange::where('id',$id)->first();
        return view('Admin.salariu_job_editare',compact('salariu_job'));
    }

    public function modifica(Request $request, $id)
    { $salariu = JobSalaryRange::where('id',$id)->first();

        $request->validate([
        'sume' => 'required',
      ]);

      $salariu->sume = $request->sume;
      $salariu->update();

      return redirect()->route('admin_salariu_job')->with('success','Intervalul salarial a fost  modificat cu succes ! ');

    }

    public function stergere($id){
        $verificare = Job::where('job_salary_range_id',$id)->count();
        if($verificare>0)
        {
            return redirect()->back()->with('error','Aceasta suma este folosita de anunturi active deci nu poate fi stearsa!');
        }
        
        $salariu_job = JobSalaryRange::where('id',$id)->delete();

        return redirect()->route('admin_salariu_job')->with('success','Intervalul salarial a fost sters cu succes ! ');
    }
}
