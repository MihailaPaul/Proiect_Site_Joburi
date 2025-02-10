<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PaginaBlogItem;

class AdminPaginaBlogController extends Controller
{
    public function index()
    {
        $date_pagina_blog = PaginaBlogItem::where('id',1)->first();
        return view('Admin.pagina_blog', compact('date_pagina_blog'));
    }

    public function modificare(Request $request)
    {
        $date_pagina_blog = PaginaBlogItem::where('id',1)->first();

        $request->validate([
            'titlu'=>'required'
        ]);


        $date_pagina_blog->titlu = $request->titlu;
        $date_pagina_blog->subtitlu = $request->subtitlu;
        $date_pagina_blog->meta_description = $request->meta_description;
        $date_pagina_blog->update();

        return redirect()->back()->with('success', 'Datele au fost modificate cu succes!');

    }
}
