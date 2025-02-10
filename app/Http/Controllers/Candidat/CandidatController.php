<?php

namespace App\Http\Controllers\Candidat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CandidatController extends Controller
{
    public function meniu_candidat()

    { 
        return view('candidat.meniu');
    }

    public function editare_profil_candidat()
    {
        return view('candidat.editare_profil');
    }

    public function salvare_editare_profil_candidat(Request $request)
    {
        $date_profil_candidat = Company::where('id', Auth::guard('candidat')->user()->id)->first();
        $id=$date_profil_candidat->id;

        $request->validate([
            'nume_companie' => 'required',
            'nume_reprezentant' => 'required',
            'nume_utilizator' => ['required','alpha_dash',Rule::unique('companies')->ignore($id)],
            'email' => ['required','email',Rule::unique('companies')->ignore($id)],
          ]);

          if($request->hasFile('logo')){
            $request->validate([ 
                'logo' => 'image|mimes:jpg,jpeg,png,gif'
            ]);
            
            if(Auth::guard('companie')->user()->logo != '')
            {
                unlink(public_path('uploads/'.$date_profil_companie->logo));
            }
    
            $ext= $request->file('logo')->extension();
    
            $nume_final = 'logo_companie'.time().'.'.$ext;
    
            $request->file('logo')->move(public_path('uploads/'),$nume_final);
    
            $date_profil_companie->logo = $nume_final;
          }
    
          $date_profil_companie->nume_companie = $request->nume_companie;
          $date_profil_companie->nume_reprezentant = $request->nume_reprezentant;
          $date_profil_companie->nume_utilizator = $request->nume_utilizator;
          $date_profil_companie->email = $request->email;
          $date_profil_companie->numar_telefon = $request->numar_telefon;
          $date_profil_companie->adresa = $request->adresa;
          $date_profil_companie->companie_location_id = $request->companie_location_id;
          $date_profil_companie->companie_domain_id = $request->companie_domain_id;
          $date_profil_companie->companie_size_id = $request->companie_size_id;
          $date_profil_companie->website = $request->website;
          $date_profil_companie->descriere = $request->descriere;
          $date_profil_companie->map_code = $request->map_code;
          $date_profil_companie->facebook = $request->facebook;
          $date_profil_companie->twitter = $request->twitter;
          $date_profil_companie->linkedin = $request->linkedin;
          $date_profil_companie->instagram = $request->instagram;
          $date_profil_companie->update();
    
          return redirect()->back()->with('success','Profilul Companiei a fost modificat cu succes! ');

    }


}
