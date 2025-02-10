<?php

namespace App\Http\Controllers\Companie;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanieController extends Controller
{
    public function meniu_companie()

    { 
        return view('companie.meniu');
    }

   

}
