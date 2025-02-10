<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\PaginaBlogItem;
class ArticolController extends Controller
{
    public function index()
    {
        $date_articole= Article::orderBy('id','desc')->paginate(6);
        $date_pagina_blog = PaginaBlogItem::where('id',1)->first();
        return view('front.blog', compact('date_articole','date_pagina_blog'));
    }

    public function adresa($slug)
    {
        $date_pagina_articol= Article::where('slug',$slug)->first();
        $date_pagina_articol->vizualizari = $date_pagina_articol->vizualizari + 1;
        $date_pagina_articol->update();

        return view('front.articol', compact('date_pagina_articol'));
    }
}