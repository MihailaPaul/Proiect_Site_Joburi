<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\Order;

class AdminPachetController extends Controller
{
    public function index()
    {
        $date_pachete = Package::get();
        return view('Admin.pachet', compact('date_pachete'));
    }

    public function creare()
    {
        return view('Admin.pachet_creare');
    }

    public function salvare(Request $request)
    {
        $request->validate([
            'nume_pachet' => 'required',
            'pret_pachet' => 'required',
            'durata_pachet' => 'required',
            'numar_permis_joburi' => 'required',
            'numar_permis_joburi_promovate' => 'required',
            'numar_permis_poze' => 'required',
            'numar_permis_videoclipuri' => 'required'
        ]);

        $pachet = new Package();
        $pachet->nume_pachet = $request->nume_pachet;
        $pachet->pret_pachet = $request->pret_pachet;
        $pachet->durata_pachet = $request->durata_pachet;
        $pachet->numar_permis_joburi = $request->numar_permis_joburi;
        $pachet->numar_permis_joburi_promovate = $request->numar_permis_joburi_promovate;
        $pachet->numar_permis_poze = $request->numar_permis_poze;
        $pachet->numar_permis_videoclipuri = $request->numar_permis_videoclipuri;
        $pachet->save();

        return redirect()->route('admin_pachet')->with('success', 'Pachetul a fost creeat cu succes !');

    }

    public function editare($id)
    {
        $pachet_individual = Package::where('id',$id)->first();
        return view('Admin.pachet_editare',compact('pachet_individual'));
    }

    public function modificare(Request $request, $id)
    {
        $pachet = Package::where('id',$id)->first();

        $request->validate([
            'nume_pachet' => 'required',
            'pret_pachet' => 'required',
            'durata_pachet' => 'required',
            'numar_permis_joburi' => 'required',
            'numar_permis_joburi_promovate' => 'required',
            'numar_permis_poze' => 'required',
            'numar_permis_videoclipuri' => 'required'
        ]);

        $pachet->nume_pachet = $request->nume_pachet;
        $pachet->pret_pachet = $request->pret_pachet;
        $pachet->durata_pachet = $request->durata_pachet;
        $pachet->numar_permis_joburi = $request->numar_permis_joburi;
        $pachet->numar_permis_joburi_promovate = $request->numar_permis_joburi_promovate;
        $pachet->numar_permis_poze = $request->numar_permis_poze;
        $pachet->numar_permis_videoclipuri = $request->numar_permis_videoclipuri;
        $pachet->update();

        return redirect()->route('admin_pachet')->with('success', 'Pachetul a fost modificat cu succes !');

    }

    public function stergere($id)
    {
        $verificare = Order::where('package_id',$id)->count();
        if($verificare>0)
        {
            return redirect()->back()->with('error','Aceast pachet este folosit deci nu poate fi sters!');
        }
        
        Package::where('id',$id)->delete();
        return redirect()->route('admin_pachet')->with('success', 'Pachetul a fost sters cu succes !');
    }
}
