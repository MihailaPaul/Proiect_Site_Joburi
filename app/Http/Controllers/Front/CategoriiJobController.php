<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobCategory;
use App\Models\PaginaCategoriiItem;

class CategoriiJobController extends Controller
{
    public function categorii()
    {   
        $categorie_job_extins = JobCategory::orderBy('nume_categorie','asc')->get();
        $date_pagina_categorii = PaginaCategoriiItem::where('id',1)->first();
        return view('front.categorii_job',compact('categorie_job_extins','date_pagina_categorii'));
    }

  
}
