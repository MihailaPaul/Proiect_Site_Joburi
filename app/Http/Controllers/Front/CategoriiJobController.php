<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobCategory;

class CategoriiJobController extends Controller
{
    public function categorii()
    {
        $categorie_job_extins = JobCategory::orderBy('nume_categorie','asc')->get();
        return view('front.categorii_job',compact('categorie_job_extins'));
    }
}
