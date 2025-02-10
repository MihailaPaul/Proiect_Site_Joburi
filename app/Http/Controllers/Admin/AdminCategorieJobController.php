<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobCategory;
use App\Models\Job;

class AdminCategorieJobController extends Controller
{
    public function index()
    {
         $date_categorie_job =JobCategory::get();
        return view("Admin.categorie_job",compact('date_categorie_job'));
    }

    public function creeaza()
    {
        return view("Admin.creare_categorie_job");
    }

    public function salveaza(Request $request)
    {
        $request->validate([
            'nume_categorie' => 'required',
            'simbol_categorie' => 'required'
          ]);

         $categorie= new JobCategory();
         $categorie->nume_categorie = $request->nume_categorie;
         $categorie->simbol_categorie = $request->simbol_categorie;
         $categorie->save();

         return redirect()->route('admin_categorie_job')->with('success','Categoria a fost adaugata cu succes ! ');
        
    }

    public function editare($id){
        $categorie_job = JobCategory::where('id',$id)->first();
        return view('Admin.editare_categorie_job',compact('categorie_job'));
    }

    public function modifica(Request $request, $id)
    { $categorie = JobCategory::where('id',$id)->first();

        $request->validate([
        'nume_categorie' => 'required',
        'simbol_categorie' => 'required'
      ]);

      $categorie->nume_categorie = $request->nume_categorie;
      $categorie->simbol_categorie = $request->simbol_categorie;
      $categorie->update();

      return redirect()->route('admin_categorie_job')->with('success','Categoria a fost modificata cu succes ! ');

    }

    public function stergere($id)
    {
        $verificare = Job::where('job_category_id',$id)->count();
        if($verificare>0)
        {
            return redirect()->back()->with('error','Aceasta categorie este folosita de anunturi active deci nu poate fi stearsa!');
        }
        $categorie_job = JobCategory::where('id',$id)->delete();
        return redirect()->route('admin_categorie_job')->with('success','Categoria a fost stearsa cu succes ! ');
    }
}
