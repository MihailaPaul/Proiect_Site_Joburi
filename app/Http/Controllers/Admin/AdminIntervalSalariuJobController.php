<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobSalaryRange;

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
        
        $salariu_job = JobSalaryRange::where('id',$id)->delete();

        return redirect()->route('admin_salariu_job')->with('success','Intervalul salarial a fost stears cu succes ! ');
    }
}
