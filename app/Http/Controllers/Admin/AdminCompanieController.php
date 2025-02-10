<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\CompaniePhoto;
use App\Models\Job;
use App\Models\CandidatApplication;
use App\Models\CandidatBookmark;
use App\Models\Candidate;
use App\Models\CandidateEducation;
use App\Models\CandidateSkill;
use App\Models\CandidateExperience;
use App\Models\CandidateDocument;
use App\Models\Order;

class AdminCompanieController extends Controller
{
    public function companii()
    {
        $companii = Company::where('status',1)->get();
        return view('Admin.companii', compact('companii'));
    }

    public function companii_detalii($id)
    {
        $companie_detalii = Company::with('rCompanieLocation','rCompanieDomain','rCompanieSize')->where('id',$id)->first();
        $poze = CompaniePhoto::where('company_id',$id)->get();
        return view('Admin.companii_detalii', compact('companie_detalii','poze'));
    }

    public function companii_joburi($id)
    {
        $companie_detalii = Company::where('id',$id)->first();
        $joburi_companii = Job::with('rJobCategory','rJobLocation')->where('company_id',$id)->get();
        return view('Admin.companii_joburi', compact('joburi_companii','companie_detalii'));
    }

    public function companii_aplicanti($id)
    {
        $detalii_job = Job::where('id',$id)->first();
       $aplicanti = CandidatApplication::with('rCandidat')->where('job_id',$id)->get();
        return view('Admin.companii_aplicanti', compact('aplicanti','detalii_job'));
    }

    public function companii_aplicanti_detalii($id)
    {
        $candidat_individual = Candidate::where('id',$id)->first();
        $educatie_candidat = CandidateEducation::where('candidate_id',$id)->get();
        $abilitati_candidat = CandidateSkill::where('candidate_id',$id)->get();
        $experienta_candidat = CandidateExperience::where('candidate_id',$id)->get();
        $documente_candidat = CandidateDocument::where('candidate_id',$id)->get();

        return view('Admin.companii_aplicanti_detalii',compact('candidat_individual','educatie_candidat','educatie_candidat','abilitati_candidat','experienta_candidat','documente_candidat'));
    }

    public function stergere($id)
    {
        $poze_companie = CompaniePhoto::where('company_id',$id)->get();
        foreach($poze_companie as $element){
            unlink(public_path('uploads/'.$element->poza));
        }

        CompaniePhoto::where('company_id',$id)->delete();

        $joburi = Job::where('company_id',$id)->get();
        foreach($joburi as $element)
        {
            CandidatApplication::where('job_id',$element->id)->delete();
            CandidatBookmark::where('job_id',$element->id)->delete();
        }

        Job::where('company_id',$id)->delete();
        Order::where('company_id',$id)->delete();

        $date_companie = Company::where('id',$id)->first();
        if($date_companie->logo != null){
            unlink(public_path('uploads/'.$date_companie->logo));
        }
        
        Company::where('id',$id)->delete();
        return redirect()->back()->with('success', 'Compania a fost stearsa cu succes!');
    }
}
