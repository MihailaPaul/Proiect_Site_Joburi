<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Candidate;
use App\Models\CandidateEducation;
use App\Models\CandidateSkill;
use App\Models\CandidateExperience;
use App\Models\CandidateDocument;
use App\Models\CandidatApplication;
use App\Models\CandidatBookmark;

class AdminCandidatController extends Controller
{
    public function candidati()
    {
        $candidati = Candidate::where('status',1)->get();
        return view('Admin.candidati', compact('candidati'));
    }

    public function candidati_detalii($id)
    {
        $candidat_individual = Candidate::where('id',$id)->first();
        $educatie_candidat = CandidateEducation::where('candidate_id',$id)->get();
        $abilitati_candidat = CandidateSkill::where('candidate_id',$id)->get();
        $experienta_candidat = CandidateExperience::where('candidate_id',$id)->get();
        $documente_candidat = CandidateDocument::where('candidate_id',$id)->get();

        return view('Admin.candidati_detalii',compact('candidat_individual','educatie_candidat','educatie_candidat','abilitati_candidat','experienta_candidat','documente_candidat'));
    }

    public function candidati_aplicatii($id)
    {
        $aplicatii = CandidatApplication::with('rJob')->where('candidate_id',$id)->get();

        return view('Admin.candidati_aplicatii_joburi', compact('aplicatii'));
    }

    public function stergere($id)
    {

        CandidatApplication::where('candidate_id',$id)->delete();
        CandidatBookmark::where('candidate_id',$id)->delete();
        CandidateEducation::where('candidate_id',$id)->delete();
        CandidateSkill::where('candidate_id',$id)->delete();
        CandidateExperience::where('candidate_id',$id)->delete();



        $date_documente = CandidateDocument::where('candidate_id',$id)->get();
        foreach($date_documente as $element){
            unlink(public_path('uploads/'.$element->fisier));
        }

        CandidateDocument::where('candidate_id',$id)->delete();
        

        $date_candidat = Candidate::where('id',$id)->first();
        if($date_candidat->poza != null){
            unlink(public_path('uploads/'.$date_candidat->poza));
        }
        
        Candidate::where('id',$id)->delete();
        return redirect()->back()->with('success', 'Candidatul a fost sters cu succes!');
    }
}
