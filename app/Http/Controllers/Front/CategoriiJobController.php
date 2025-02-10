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
      
        $date_pagina_categorii = PaginaCategoriiItem::where('id',1)->first();
        $categorie_job_extins = JobCategory::withCount('rJob')->orderBy('r_job_count','desc')->get();
        return view('front.categorii_job',compact('categorie_job_extins','date_pagina_categorii'));
    }

  
}
