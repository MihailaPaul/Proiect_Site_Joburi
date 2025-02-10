<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Models\JobCategory;
use App\Models\JobLocation;
use App\Models\JobType;
use App\Models\JobExperience;
use App\Models\JobSalaryRange;
use Illuminate\Http\Request;

class PaginaJoburiController extends Controller
{
    public function index(Request $request)
    {
        $categorii_job = JobCategory::orderBy('nume_categorie','asc')->get();
        $locatii_job = JobLocation::orderBy('nume_locatie','asc')->get();
        $tipuri_job = JobType::orderBy('nume_tip','asc')->get();
        $experienta_job = JobExperience::orderBy('id','asc')->get();
        $salarii_job = JobSalaryRange::orderBy('id','asc')->get();



        $titlu_formular = $request->titlu;
        $categorie_formular = $request->nume_categorie;
        $locatie_formular = $request->nume_locatie;
        $tip_formular = $request->nume_tip;
        $experienta_formular = $request->nume_experienta;
        $salariu_formular = $request->sume;
        

        
        $joburi = Job::with('rCompany','rJobCategory','rJobLocation','rJobSalaryRange','rJobType','rJobExperience')->orderBy('id','desc');

        if($request->titlu != null) {
            $joburi = $joburi->where('titlu','LIKE','%'.$request->titlu.'%');
        }

        if($request->nume_categorie != null) {
            $joburi = $joburi->where('job_category_id',$request->nume_categorie);
        }

        if($request->nume_locatie != null) {
            $joburi = $joburi->where('job_location_id',$request->nume_locatie);
        }

        if($request->nume_tip != null) {
            $joburi = $joburi->where('job_type_id',$request->nume_tip);
        }

        if($request->nume_experienta != null) {
            $joburi = $joburi->where('job_experience_id',$request->nume_experienta);
        }

        if($request->sume != null) {
            $joburi = $joburi->where('job_salary_range_id',$request->sume);
        }

       

        $joburi = $joburi->paginate(6);
        //$joburi = $joburi->appends($request->all());

        return view('front.pagina_joburi', compact('joburi','categorii_job','locatii_job','tipuri_job','experienta_job','salarii_job',
        'titlu_formular','categorie_formular','locatie_formular','tip_formular','experienta_formular','salariu_formular'));
    }
}