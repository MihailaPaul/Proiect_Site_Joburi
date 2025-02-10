<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\PaginaPacheteItem;

class PachetController extends Controller
{
    public function index()
    {   
        $date_pachete = Package::get();
        $date_pagina_pachete = PaginaPacheteItem::where('id',1)->first();
        return view('front.pachete',compact('date_pachete','date_pagina_pachete'));
    }
}
