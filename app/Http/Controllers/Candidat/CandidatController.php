<?php

namespace App\Http\Controllers\Candidat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CandidatController extends Controller
{
    public function meniu_candidat()

    { 
        return view('candidat.meniu');
    }


}
