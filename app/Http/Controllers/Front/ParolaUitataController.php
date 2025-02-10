<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PaginaDiverseItem;

class ParolaUitataController extends Controller
{
    public function index()
    {   
        $date_pagina_diverse = PaginaDiverseItem::where('id',1)->first();
        return view('front.parola_uitata',compact('date_pagina_diverse'));
    }
}
