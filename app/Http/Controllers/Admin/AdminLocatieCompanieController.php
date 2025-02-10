<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CompanieLocation;

class AdminLocatieCompanieController extends Controller
{
    public function index()
    {
         $date_locatie_companie =CompanieLocation::get();
        return view("Admin.locatie_companie",compact('date_locatie_companie'));
    }

    public function creeaza()
    {
        return view("Admin.locatie_companie_creare");
    }

    public function salveaza(Request $request)
    {
        $request->validate([
            'nume_locatie' => 'required',
          ]);

         $locatie= new CompanieLocation();
         $locatie->nume_locatie = $request->nume_locatie;
         $locatie->save();

         return redirect()->route('admin_locatie_companie')->with('success','Locatia a fost adaugata cu succes ! ');
        
    }

    public function editare($id){
        $locatie_companie = CompanieLocation::where('id',$id)->first();
        return view('Admin.locatie_companie_editare',compact('locatie_companie'));
    }

    public function modifica(Request $request, $id)
    { $locatie = CompanieLocation::where('id',$id)->first();

        $request->validate([
        'nume_locatie' => 'required',
      ]);

      $locatie->nume_locatie = $request->nume_locatie;
      $locatie->update();

      return redirect()->route('admin_locatie_companie')->with('success','Locatia a fost modificata cu succes ! ');

    }

    public function stergere($id){
        
        $locatie_companie = CompanieLocation::where('id',$id)->delete();

        return redirect()->route('admin_locatie_companie')->with('success','Locatia a fost stearsa cu succes ! ');
    }
}
