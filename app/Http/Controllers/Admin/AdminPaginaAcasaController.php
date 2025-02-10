<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PaginaAcasaItem;

class AdminPaginaAcasaController extends Controller
{
    public function index()
    {
        $date_pagina_acasa = PaginaAcasaItem::where('id',1)->first();
        return view('Admin.pagina_acasa', compact('date_pagina_acasa'));
    }


    public function modifica(Request $request ){

        $date_pagina_acasa = PaginaAcasaItem::where('id',1)->first();

        $request->validate([
            'titlu' => 'required',
            'titlu_job' => 'required',
            'categorie_job' => 'required',
            'locatie_job' => 'required',
            'text_buton'=>'required',
            'titlu_sectiune_categorie'=>'required',
            'stare_sectiune_categorie'=>'required',
            'sectiune_alegere_titlu'=>'required',
            'sectiune_alegere_stare'=>'required',
            'sectiune_recomandari_titlu'=>'required',
            'sectiune_recomandari_stare'=>'required',
            'sectiune_multumiri_titlu'=>'required',
            'sectiune_multumiri_stare'=>'required',
            'sectiune_articole_titlu'=>'required',
            'sectiune_articole_stare'=>'required'
          ]); 

          if($request->hasFile('fundal')){
            $request->validate([ 
                'fundal' => 'image|mimes:jpg,jpeg,png,gif'
            ]);
          
            unlink(public_path('uploads/'.$date_pagina_acasa->fundal));

            $ext= $request->file('fundal')->extension();

            $nume_final = 'fundal_acasa'.'.'.$ext;

            $request->file('fundal')->move(public_path('uploads/'),$nume_final);

            $date_pagina_acasa->fundal = $nume_final;
          }

          if($request->hasFile('sectiune_alegere_fundal')){
            $request->validate([ 
                'sectiune_alegere_fundal' => 'image|mimes:jpg,jpeg,png,gif'
            ]);
          
            unlink(public_path('uploads/'.$date_pagina_acasa->sectiune_alegere_fundal));

            $ext_alegere= $request->file('sectiune_alegere_fundal')->extension();

            $nume_final_alegere = 'sectiune_alegere_fundal'.'.'.$ext_alegere;

            $request->file('sectiune_alegere_fundal')->move(public_path('uploads/'),$nume_final_alegere);

            $date_pagina_acasa->sectiune_alegere_fundal = $nume_final_alegere;
          }

          if($request->hasFile('sectiune_multumiri_fundal')){
            $request->validate([ 
                'sectiune_multumiri_fundal' => 'image|mimes:jpg,jpeg,png,gif'
            ]);
          
            unlink(public_path('uploads/'.$date_pagina_acasa->sectiune_multumiri_fundal));

            $ext_multumiri= $request->file('sectiune_multumiri_fundal')->extension();

            $nume_final_multumiri = 'sectiune_multumiri_fundal'.'.'.$ext_multumiri;

            $request->file('sectiune_multumiri_fundal')->move(public_path('uploads/'),$nume_final_multumiri);

            $date_pagina_acasa->sectiune_multumiri_fundal = $nume_final_multumiri;
          }

          $date_pagina_acasa->titlu = $request->titlu;
          $date_pagina_acasa->text = $request->text;
          $date_pagina_acasa->titlu_job = $request->titlu_job;
          $date_pagina_acasa->categorie_job = $request->categorie_job;
          $date_pagina_acasa->locatie_job = $request->locatie_job;
          $date_pagina_acasa->text_buton = $request->text_buton;

          $date_pagina_acasa->titlu_sectiune_categorie = $request->titlu_sectiune_categorie;
          $date_pagina_acasa->text_sectiune_categorie = $request->text_sectiune_categorie;
          $date_pagina_acasa->stare_sectiune_categorie = $request->stare_sectiune_categorie;

          $date_pagina_acasa->sectiune_alegere_titlu = $request->sectiune_alegere_titlu;
          $date_pagina_acasa->sectiune_alegere_text = $request->sectiune_alegere_text;
          $date_pagina_acasa->sectiune_alegere_stare = $request->sectiune_alegere_stare;

          $date_pagina_acasa->sectiune_recomandari_titlu = $request->sectiune_recomandari_titlu;
          $date_pagina_acasa->sectiune_recomandari_text = $request->sectiune_recomandari_text;
          $date_pagina_acasa->sectiune_recomandari_stare = $request->sectiune_recomandari_stare;

          $date_pagina_acasa->sectiune_multumiri_titlu = $request->sectiune_multumiri_titlu;
          $date_pagina_acasa->sectiune_multumiri_stare = $request->sectiune_multumiri_stare;

          $date_pagina_acasa->sectiune_articole_titlu = $request->sectiune_articole_titlu;
          $date_pagina_acasa->sectiune_articole_text = $request->sectiune_articole_text;
          $date_pagina_acasa->sectiune_articole_stare = $request->sectiune_articole_stare;

          $date_pagina_acasa->update();

          return redirect()->back()->with('success','Modificarea datelor a fost efectuata cu succes!');
       



    }
}
