<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PaginaAcasaItem;
use App\Models\JobCategory;
use App\Models\AlegereItem;
use App\Models\Testimonial;

class AcasaController extends Controller
{
    public function index (){ 
        $date_pagina_acasa = PaginaAcasaItem::where('id',1)->first();
        $categorie_job = JobCategory::orderBy('nume_categorie','asc')->take(6)->get();
        $categorie_job_extins = JobCategory::orderBy('nume_categorie','asc')->get();
        $alegere_elemente = AlegereItem::get();
        $recomandari_element = Testimonial::get();
        return view('front.acasa',compact('date_pagina_acasa','categorie_job','categorie_job_extins','alegere_elemente',
        'recomandari_element'));
    }
}
