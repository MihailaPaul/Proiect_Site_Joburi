<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobExperience;

class AdminExperientaJobController extends Controller
{
    public function index()
    {
         $date_experienta_job =JobExperience::get();
        return view("Admin.experienta_job",compact('date_experienta_job'));
    }

    public function creeaza()
    {
        return view("Admin.experienta_job_creare");
    }

    public function salveaza(Request $request)
    {
        $request->validate([
            'nume_experienta' => 'required',
          ]);

         $experienta= new JobExperience();
         $experienta->nume_experienta = $request->nume_experienta;
         $experienta->save();

         return redirect()->route('admin_experienta_job')->with('success','Nivelul De Experienta  a fost adaugat cu succes ! ');
        
    }

    public function editare($id){
        $experienta_job = JobExperience::where('id',$id)->first();
        return view('Admin.experienta_job_editare',compact('experienta_job'));
    }

    public function modifica(Request $request, $id)
    { $experienta = JobExperience::where('id',$id)->first();

        $request->validate([
        'nume_experienta' => 'required',
      ]);

      $experienta->nume_experienta = $request->nume_experienta;
      $experienta->update();

      return redirect()->route('admin_experienta_job')->with('success','Nivelul De Experienta  modificat cu succes ! ');

    }

    public function stergere($id){
        
        $experienta_job = JobExperience::where('id',$id)->delete();

        return redirect()->route('admin_experienta_job')->with('success','Nivelul De Experienta  a fost stears cu succes ! ');
    }
}
