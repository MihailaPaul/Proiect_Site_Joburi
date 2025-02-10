<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobLocation;
use App\Models\Job;
class AdminLocatieJobController extends Controller
{
    public function index()
    {
         $date_locatie_job =JobLocation::get();
        return view("Admin.locatie_job",compact('date_locatie_job'));
    }

    public function creeaza()
    {
        return view("Admin.locatie_job_creare");
    }

    public function salveaza(Request $request)
    {
        $request->validate([
            'nume_locatie' => 'required',
          ]);

         $locatie= new JobLocation();
         $locatie->nume_locatie = $request->nume_locatie;
         $locatie->save();

         return redirect()->route('admin_locatie_job')->with('success','Locatia a fost adaugata cu succes ! ');
        
    }

    public function editare($id){
        $locatie_job = JobLocation::where('id',$id)->first();
        return view('Admin.locatie_job_editare',compact('locatie_job'));
    }

    public function modifica(Request $request, $id)
    { $locatie = JobLocation::where('id',$id)->first();

        $request->validate([
        'nume_locatie' => 'required',
      ]);

      $locatie->nume_locatie = $request->nume_locatie;
      $locatie->update();

      return redirect()->route('admin_locatie_job')->with('success','Locatia a fost modificata cu succes ! ');

    }

    public function stergere($id){
        
        $verificare = Job::where('job_location_id',$id)->count();
        if($verificare>0)
        {
            return redirect()->back()->with('error','Aceasta locatie este folosita de anunturi active deci nu poate fi stearsa!');
        }

        $locatie_job = JobLocation::where('id',$id)->delete();
        return redirect()->route('admin_locatie_job')->with('success','Locatia a fost stearsa cu succes ! ');
    }
}
