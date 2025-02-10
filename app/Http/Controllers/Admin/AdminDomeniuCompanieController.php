<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CompanieDomain;

class AdminDomeniuCompanieController extends Controller
{
    public function index()
    {
         $date_domeniu_companie =CompanieDomain::get();
        return view("Admin.domeniu_companie",compact('date_domeniu_companie'));
    }

    public function creeaza()
    {
        return view("Admin.domeniu_companie_creare");
    }

    public function salveaza(Request $request)
    {
        $request->validate([
            'nume_domeniu' => 'required',
          ]);

         $domeniu= new CompanieDomain();
         $domeniu->nume_domeniu = $request->nume_domeniu;
         $domeniu->save();

         return redirect()->route('admin_domeniu_companie')->with('success','Domeniul a fost adaugat cu succes ! ');
        
    }

    public function editare($id){
        $domeniu_companie = CompanieDomain::where('id',$id)->first();
        return view('Admin.domeniu_companie_editare',compact('domeniu_companie'));
    }

    public function modifica(Request $request, $id)
    { $domeniu = CompanieDomain::where('id',$id)->first();

        $request->validate([
        'nume_domeniu' => 'required',
      ]);

      $domeniu->nume_domeniu = $request->nume_domeniu;
      $domeniu->update();

      return redirect()->route('admin_domeniu_companie')->with('success','Domeniul a fost modificat cu succes ! ');

    }

    public function stergere($id){
        
        $domeniu_companie = CompanieDomain::where('id',$id)->delete();

        return redirect()->route('admin_domeniu_companie')->with('success','Domeniul a fost sters cu succes ! ');
    }
}
