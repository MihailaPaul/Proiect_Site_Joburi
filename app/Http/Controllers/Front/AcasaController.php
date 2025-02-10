<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PaginaAcasaItem;
use App\Models\JobCategory;
use App\Models\JobLocation;
use App\Models\AlegereItem;
use App\Models\Testimonial;
use App\Models\Job;
use App\Models\Article;

class AcasaController extends Controller
{
    public function index (){ 
        $date_pagina_acasa = PaginaAcasaItem::where('id',1)->first();
        $categorie_job = JobCategory::withCount('rJob')->orderBy('r_job_count','desc')->take(6)->get();
        $categorie_job_extins = JobCategory::orderBy('nume_categorie','asc')->get();
        $locatie_job = JobLocation::orderBy('nume_locatie','asc')->get();
        $alegere_elemente = AlegereItem::get();
        $recomandari_element = Testimonial::get();
        $date_articole= Article::orderBy('id','desc')->take(3)->get();

        $joburi_promovate = Job::with('rCompany','rJobCategory','rJobLocation','rJobSalaryRange','rJobType','rJobExperience')->orderBy('id','desc')->where('este_promovat',1)->take(6)->get();

        return view('front.acasa',compact('date_pagina_acasa','categorie_job','categorie_job_extins','locatie_job','alegere_elemente',
        'recomandari_element','date_articole','joburi_promovate',));
    }
}
