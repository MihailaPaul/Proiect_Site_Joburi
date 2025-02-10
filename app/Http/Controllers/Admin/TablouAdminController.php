<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Candidate;
use App\Models\Job;
// Controller realizat pentru returnarea paginilor web construite in blade uri
class TablouAdminController  extends Controller
{
    public function index()
    {
        $total_companii = Company::where('status',1)->count();
        $total_candidati = Candidate::where('status',1)->count();
        $total_anunturi = Job::count();
        return view("Admin.home",compact('total_companii','total_candidati','total_anunturi'));
    }
}
