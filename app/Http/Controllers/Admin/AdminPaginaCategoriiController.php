<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PaginaCategoriiItem;

class AdminPaginaCategoriiController extends Controller
{
    public function index()
    {
        $date_pagina_categorii = PaginaCategoriiItem::where('id',1)->first();
        return view('Admin.pagina_categorii', compact('date_pagina_categorii'));
    }

    public function modificare(Request $request) 
    {
        $date_pagina_categorii = PaginaCategoriiItem::where('id',1)->first();

        $request->validate([
            'titlu'=>'required'
        ]);


        $date_pagina_categorii->titlu = $request->titlu;
        $date_pagina_categorii->SEO_titlu = $request->SEO_titlu;
        $date_pagina_categorii->SEO_descriere = $request->SEO_descriere;
        $date_pagina_categorii->update();

        return redirect()->back()->with('success', 'Datele au fost modificate cu succes!');

    }
}
