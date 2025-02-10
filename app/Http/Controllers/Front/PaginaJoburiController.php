<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Models\JobCategory;
use App\Models\JobLocation;
use App\Models\JobType;
use App\Models\JobExperience;
use App\Models\JobSalaryRange;
use App\Models\PaginaDiverseItem;
use App\Mail\Websitemail;
use Illuminate\Http\Request;

class PaginaJoburiController extends Controller
{
    public function index(Request $request)
    {
        //  Salvarea optiunilor pentru filtrare in variabile
        $categorii_job = JobCategory::orderBy('nume_categorie','asc')->get();
        $locatii_job = JobLocation::orderBy('nume_locatie','asc')->get();
        $tipuri_job = JobType::orderBy('nume_tip','asc')->get();
        $experienta_job = JobExperience::orderBy('id','asc')->get();
        $salarii_job = JobSalaryRange::orderBy('id','asc')->get();


        // Atribuirea valorilor introduse de utilizator in interfata de cautare si filtrare
        $titlu_formular = $request->titlu;
        $categorie_formular = $request->nume_categorie;
        $locatie_formular = $request->nume_locatie;
        $tip_formular = $request->nume_tip;
        $experienta_formular = $request->nume_experienta;
        $salariu_formular = $request->sume;
        

        // Interogare in baza de date pentru a selecta joburile in functie de optiunile alese de utilizator

        // Se selecteaza toate din tabelul de joburi si se incarca relatiile asociate 
        $joburi = Job::with('rCompany','rJobCategory','rJobLocation','rJobSalaryRange','rJobType','rJobExperience')->orderBy('id','desc');

        // Trecerea datelor prin filtre

        //Cautarea dupa nume
        if($request->titlu != null) {
            $joburi = $joburi->where('titlu','LIKE','%'.$request->titlu.'%');
        }
        //Filtru de job 
        if($request->nume_categorie != null) {
            $joburi = $joburi->where('job_category_id',$request->nume_categorie);
        }
        //Filtru de locatie 
        if($request->nume_locatie != null) {
            $joburi = $joburi->where('job_location_id',$request->nume_locatie);
        }
         //Filtru de tip de job 
        if($request->nume_tip != null) {
            $joburi = $joburi->where('job_type_id',$request->nume_tip);
        }
         //Filtru de experienta
        if($request->nume_experienta != null) {
            $joburi = $joburi->where('job_experience_id',$request->nume_experienta);
        }
         //Filtru de inteval salarial 
        if($request->sume != null) {
            $joburi = $joburi->where('job_salary_range_id',$request->sume);
        }

       
        //Dupa filtrare rezultatele sunt afisate cu 6 joburi pe pagina 
        $joburi = $joburi->paginate(6);

        //Preluarea datelor pentre afisarea titlului si descrierei SEO
        $date_pagina_diverse = PaginaDiverseItem::where('id',1)->first();
        //$joburi = $joburi->appends($request->all());

        // Afisarea paginii si trimiterea datelor din controller in view
        return view('front.pagina_joburi', compact('joburi','categorii_job','locatii_job','tipuri_job','experienta_job','salarii_job',
        'titlu_formular','categorie_formular','locatie_formular','tip_formular','experienta_formular','salariu_formular','date_pagina_diverse'));
    }

    // Funtia responsabila de afisarea datelor in pagina principala
    public function detalii_job($id)
    {  
        // Setarea fusului orar pentru afisarea in limba romana a numelor lunilor anuluil
        setlocale(LC_TIME, 'Romanian');
        // Selectarea datelor pentru afisarea informatiilor unui anunt
        $job_individual = Job::with('rCompany','rJobCategory','rJobLocation','rJobSalaryRange','rJobType','rJobExperience')->where('id',$id)->first();
        // Selectarea datelor pentru titlul si descrierea SEO
        $date_pagina_diverse = PaginaDiverseItem::where('id',1)->first();
          // Selectarea datelor pentru afisarea informatiilor joburilor similare
        $joburi = Job::with('rCompany','rJobCategory','rJobLocation','rJobSalaryRange','rJobType','rJobExperience')->where('job_category_id',$job_individual->job_category_id)->get();
        return view('front.detalii_job',compact('job_individual','joburi','date_pagina_diverse'));
    }
    // Functia responsabila de formarea si trimiterea email-ului de contact companie  
    public function contactare_companie(Request $request)
    {
        // Validarea datelor introduse de utilizator in formularul de contact
        $request->validate([
            'nume_vizitator' => 'required',
            'email_vizitator' => 'required|email',
            'numar_telefon_vizitator' => 'required',
            'mesaj_vizitator' => 'required'
        ]);

        // Crearea subiectului si mesajului email-ului catre companie
        $subject = 'Mesaj pentru anuntul : ' .$request->titlu_job;
        $message = 'Informatiile persoanei care a trimis mesajul: <br>';
        $message .= 'Nume: '.$request->nume_vizitator.'<br>';
        $message .= 'Email: '.$request->email_vizitator.'<br>';
        $message .= 'Numar Telefon: '.$request->numar_telefon_vizitator.'<br>';
        $message .= 'Mesaj: '.$request->mesaj_vizitator;

        // Trimitrea mail-ului prin intermediul clasei MAIL
        \Mail::to($request->email_receptor)->send(new Websitemail($subject,$message));

        return redirect()->back()->with('success', 'Mesajul a fost trimis catre companie!');
    }
}