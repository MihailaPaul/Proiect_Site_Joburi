<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PaginaDiverseItem;

class AdminPaginaDiverseController extends Controller
{
    public function index()
    {
        $date_pagina_diverse = PaginaDiverseItem::where('id',1)->first();
        return view('Admin.pagina_diverse', compact('date_pagina_diverse'));
    }

    public function modificare(Request $request) 
    {
        $date_pagina_diverse = PaginaDiverseItem::where('id',1)->first();

        $request->validate([
            'titlu_logare'=>'required',
            'titlu_inregistrare'=>'required',
            'titlu_parola_uitata'=>'required'
        ]);


        $date_pagina_diverse->titlu_logare = $request->titlu_logare;
        $date_pagina_diverse->seo_titlu_logare = $request->seo_titlu_logare;
        $date_pagina_diverse->seo_descriere_logare = $request->seo_descriere_logare;
        
        $date_pagina_diverse->titlu_inregistrare = $request->titlu_inregistrare;
        $date_pagina_diverse->seo_titlu_inregistrare = $request->seo_titlu_inregistrare;
        $date_pagina_diverse->seo_descriere_inregistrare = $request->seo_descriere_inregistrare;

        $date_pagina_diverse->titlu_parola_uitata = $request->titlu_parola_uitata;
        $date_pagina_diverse->seo_titlu_parola_uitata = $request->seo_titlu_parola_uitata;
        $date_pagina_diverse->seo_descriere_parola_uitata = $request->seo_descriere_parola_uitata;

        $date_pagina_diverse->update();

        return redirect()->back()->with('success', 'Datele au fost modificate cu succes!');

    }
      
}
