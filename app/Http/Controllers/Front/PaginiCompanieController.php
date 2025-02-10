<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Job;
use App\Models\CompanieDomain;
use App\Models\CompanieLocation;
use App\Models\CompanieSize;
use App\Models\CompaniePhoto;
use App\Models\PaginaDiverseItem;
use App\Mail\Websitemail;

class PaginiCompanieController extends Controller
{
    public function index(Request $request)
    {
        $domenii_companie = CompanieDomain::orderBy('nume_domeniu','asc')->get();
        $locatii_companie = CompanieLocation::orderBy('nume_locatie','asc')->get();
        $angajati_companie = CompanieSize::orderBy('id','asc')->get();


        $nume_formular = $request->nume_companie;
        $domeniu_formular = $request->nume_domeniu;
        $locatie_formular = $request->nume_locatie;
        $angajati_formular = $request->numar_angajati;
      

        
        $companii = Company::withCount('rJob')->with('rCompanieDomain','rCompanieLocation','rCompanieSize')->orderBy('id','desc');

        if($request->nume_companie != null) {
            $companii = $companii->where('nume_companie','LIKE','%'.$request->nume_companie.'%');
        }

        if($request->nume_domeniu != null) {
            $companii = $companii->where('companie_domain_id',$request->nume_domeniu);
        }

        if($request->nume_locatie != null) {
            $companii = $companii->where('companie_location_id',$request->nume_locatie);
        }

        if($request->numar_angajati != null) {
            $companii = $companii->where('companie_size_id',$request->numar_angajati);
        }

       

        $companii = $companii->paginate(6);
        //$joburi = $joburi->appends($request->all());

        $date_pagina_diverse = PaginaDiverseItem::where('id',1)->first();

        return view('front.pagina_companii', compact('companii','domenii_companie','locatii_companie','angajati_companie','nume_formular',
        'domeniu_formular','locatie_formular','angajati_formular','date_pagina_diverse'));
    }

    public function detalii_companie($id)
    {  
        $companie_individuala = Company::withCount('rJob')->with('rCompanieDomain','rCompanieLocation','rCompanieSize')->where('id',$id)->first();

        if(CompaniePhoto::where('company_id',$companie_individuala->id)->exists()){
            $poze_companie =CompaniePhoto::where('company_id',$companie_individuala->id)->get();
        }else{
            $poze_companie = '';
        }

        $joburi = Job::with('rJobCategory','rJobLocation','rJobSalaryRange','rJobType','rJobExperience')->where('company_id',$companie_individuala->id)->get();
      
        $date_pagina_diverse = PaginaDiverseItem::where('id',1)->first();
        // $companii = Job::with('rCompany','rJobCategory','rJobLocation','rJobSalaryRange','rJobType','rJobExperience')->where('job_category_id',$job_individual->job_category_id)->get();
        return view('front.detalii_companie',compact('companie_individuala','poze_companie','joburi','date_pagina_diverse'));
    }


    public function contactare_companie_direct(Request $request)
    {
        $request->validate([
            'nume_vizitator' => 'required',
            'email_vizitator' => 'required|email',
            'numar_telefon_vizitator' => 'required',
            'mesaj_vizitator' => 'required'
        ]);

        $subject = 'Mesaj catre compania ta de la un vizitator : ' .$request->titlu_job;
        $message = 'Informatiile persoanei care a trimis mesajul: <br>';
        $message .= 'Nume: '.$request->nume_vizitator.'<br>';
        $message .= 'Email: '.$request->email_vizitator.'<br>';
        $message .= 'Numar Telefon: '.$request->numar_telefon_vizitator.'<br>';
        $message .= 'Mesaj: '.$request->mesaj_vizitator;

        \Mail::to($request->email_receptor)->send(new Websitemail($subject,$message));

        return redirect()->back()->with('success', 'Mesajul a fost trimis catre companie!');
    }
}
