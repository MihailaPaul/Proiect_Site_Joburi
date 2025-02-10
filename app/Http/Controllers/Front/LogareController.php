<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PaginaDiverseItem;

class LogareController extends Controller
{
    public function index()
    {   
        $date_pagina_diverse = PaginaDiverseItem::where('id',1)->first();
        return view('front.login',compact('date_pagina_diverse'));
    }
}
