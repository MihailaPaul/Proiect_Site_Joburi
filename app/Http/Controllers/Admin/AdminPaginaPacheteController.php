<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PaginaPacheteItem;

class AdminPaginaPacheteController extends Controller
{
    public function index()
    {
        $date_pagina_pachete = PaginaPacheteItem::where('id',1)->first();
        return view('Admin.pagina_pachete', compact('date_pagina_pachete'));
    }

    public function modificare(Request $request)
    {
        $date_pagina_pachete = PaginaPacheteItem::where('id',1)->first();

        $request->validate([
            'titlu'=>'required'
        ]);


        $date_pagina_pachete->titlu = $request->titlu;
        $date_pagina_pachete->SEO_titlu = $request->SEO_titlu;
        $date_pagina_pachete->SEO_descriere = $request->SEO_descriere;
        $date_pagina_pachete->update();

        return redirect()->back()->with('success', 'Datele au fost modificate cu succes!');

    }
}