<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CompanieSize;
use App\Models\Company;

class AdminMarimeCompanieController extends Controller
{
    public function index()
    {
         $date_marime_companie =CompanieSize::get();
        return view("Admin.marime_companie",compact('date_marime_companie'));
    }

    public function creeaza()
    {
        return view("Admin.marime_companie_creare");
    }

    public function salveaza(Request $request)
    {
        $request->validate([
            'numar_angajati' => 'required',
          ]);

         $marime= new CompanieSize();
         $marime->numar_angajati = $request->numar_angajati;
         $marime->save();

         return redirect()->route('admin_marime_companie')->with('success','Intervalul de angajati a fost adaugat cu succes ! ');
        
    }

    public function editare($id){
        $marime_companie = CompanieSize::where('id',$id)->first();
        return view('Admin.marime_companie_editare',compact('marime_companie'));
    }

    public function modifica(Request $request, $id)
    { $marime = CompanieSize::where('id',$id)->first();

        $request->validate([
        'numar_angajati' => 'required',
      ]);

      $marime->numar_angajati = $request->numar_angajati;
      $marime->update();

      return redirect()->route('admin_marime_companie')->with('success','Intervalul de angajati a fost modificat cu succes ! ');

    }

    public function stergere($id){
        $verificare = Company::where('companie_size_id',$id)->count();
        if($verificare>0)
        {
            return redirect()->back()->with('error','Aceasta locatie este folosita deci nu poate fi stearsa!');
        }
        
        $marime_companie = CompanieSize::where('id',$id)->delete();

        return redirect()->route('admin_marime_companie')->with('success','Interval de angajati a fost sters cu succes ! ');
    }
}
