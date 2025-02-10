<?php

namespace App\Http\Controllers\Companie;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Package;
use App\Models\company;
use App\Models\CompanieLocation;
use App\Models\CompanieDomain;
use App\Models\CompanieSize;
use App\Models\CompaniePhoto;
use App\Models\Job;
use App\Models\JobCategory;
use App\Models\JobLocation;
use App\Models\JobType;
use App\Models\Jobexperience;
use App\Models\JobSalaryRange;
use Illuminate\Validation\Rule;
use Auth;
use Hash;

use Srmklive\PayPal\Services\PayPal as PayPalClient;


class CompanieController extends Controller
{
    public function meniu_companie()

    { 
        $pachetul_activ = Order::with('rPackage')->where('company_id', Auth::guard('companie')->user()->id)->where('status',1)->first();
        $joburi_postate = Job::where('company_id',Auth::guard('companie')->user()->id)->count();
        $joburi_promovate = Job::where('company_id',Auth::guard('companie')->user()->id)->where('este_promovat',1)->count();
        $pachet_activ = Order::with('rPackage')->where('company_id', Auth::guard('companie')->user()->id)->where('status',1)->first();
        $joburi = Job::with('rJobCategory')->where('company_id',Auth::guard('companie')->user()->id)->orderBy('id','desc')->take(2)->get();
        return view('companie.meniu',compact('joburi','joburi_postate','joburi_promovate','pachet_activ','pachetul_activ'));
    }

 

    public function editare_profil_companie()
    {
        $locatii_companii = CompanieLocation::orderBy('nume_locatie','asc')->get();
        $domenii_companii = CompanieDomain::orderBy('nume_domeniu','asc')->get(); 
        $marimi_companii = CompanieSize::get(); 
        return view('companie.editare_profil', compact('locatii_companii','domenii_companii','marimi_companii'));
    }

    public function salvare_editare_profil_companie(Request $request)
    {
        $date_profil_companie = Company::where('id', Auth::guard('companie')->user()->id)->first();
        $id=$date_profil_companie->id;

        $request->validate([
            'nume_companie' => 'required',
            'nume_reprezentant' => 'required',
            'nume_utilizator' => ['required','alpha_dash',Rule::unique('companies')->ignore($id)],
            'email' => ['required','email',Rule::unique('companies')->ignore($id)],
          ]);

          if($request->hasFile('logo')){
            $request->validate([ 
                'logo' => 'image|mimes:jpg,jpeg,png,gif'
            ]);
            
            if(Auth::guard('companie')->user()->logo != '')
            {
                unlink(public_path('uploads/'.$date_profil_companie->logo));
            }
    
            $ext= $request->file('logo')->extension();
    
            $nume_final = 'logo_companie'.time().'.'.$ext;
    
            $request->file('logo')->move(public_path('uploads/'),$nume_final);
    
            $date_profil_companie->logo = $nume_final;
          }
    
          $date_profil_companie->nume_companie = $request->nume_companie;
          $date_profil_companie->nume_reprezentant = $request->nume_reprezentant;
          $date_profil_companie->nume_utilizator = $request->nume_utilizator;
          $date_profil_companie->email = $request->email;
          $date_profil_companie->numar_telefon = $request->numar_telefon;
          $date_profil_companie->adresa = $request->adresa;
          $date_profil_companie->companie_location_id = $request->companie_location_id;
          $date_profil_companie->companie_domain_id = $request->companie_domain_id;
          $date_profil_companie->companie_size_id = $request->companie_size_id;
          $date_profil_companie->website = $request->website;
          $date_profil_companie->descriere = $request->descriere;
          $date_profil_companie->map_code = $request->map_code;
          $date_profil_companie->facebook = $request->facebook;
          $date_profil_companie->twitter = $request->twitter;
          $date_profil_companie->linkedin = $request->linkedin;
          $date_profil_companie->instagram = $request->instagram;
          $date_profil_companie->update();
    
          return redirect()->back()->with('success','Profilul Companiei a fost modificat cu succes! ');

    }

    public function editare_parola_companie()
    {
        return view('companie.editare_parola');
    }

    public function salvare_editare_parola_companie(Request $request)
    {
        $request->validate([
            'parola' => 'required',
            'reintroducere_parola' => 'required|same:parola'
        ]);
        $date_profil_companie = Company::where('id', Auth::guard('companie')->user()->id)->first();
        $date_profil_companie->password = Hash::make($request->parola);
        $date_profil_companie->update();
        return redirect()->back()->with('success','Parola a fost modificata cu succes! ');
    }

    public function poze_companie()
    { //Verifica daca compania a cumparat un pachet
        $date_comenzi = Order::where('company_id',Auth::guard('companie')->user()->id)->where('status',1)->first();

        if(!($date_comenzi)){
            return redirect()->back()->with('error','Trebuie sa cumperi un pachet pentru a putea incarca poze');
        }
        // Verrifica daca pachetul cumparat are nivelul necesar sa acceseze pagina de poze 
        $date_pachet = Package::where('id',$date_comenzi->package_id)->first();

        if($date_pachet->numar_permis_poze == 0)
        {
            return redirect()->back()->with('error','Pachetul actual nu are posibilitatea sa acceseze sectiunea poze! ');
        }

        $poze=CompaniePhoto::where('company_id',Auth::guard('companie')->user()->id)->get();
        return view('companie.poze',compact('poze'));
    }

    public function poze_companie_salvare(Request $request)
    {

        $date_comenzi = Order::where('company_id',Auth::guard('companie')->user()->id)->where('status',1)->first();
        $date_pachet = Package::where('id',$date_comenzi->package_id)->first();
        $numar_poze_incarcate = CompaniePhoto::where('company_id',Auth::guard('companie')->user()->id)->count();

        if( $date_pachet->numar_permis_poze == $numar_poze_incarcate){
            return redirect()->back()->with('error','Numarul maxim de poze incarcate permis de pachet a fost atins! Pentru a adauga mai multe cumpara un pachet mai mare!');
        }

        $request->validate([
            'poza' => 'required|image|mimes:jpg,jpeg,png,gif'
        ]);
        
        $obiect = new CompaniePhoto();

          $ext= $request->file('poza')->extension();
          $nume_final = 'poza_companie_'.time().'.'.$ext;
          $request->file('poza')->move(public_path('uploads/'),$nume_final);

         $obiect->poza =$nume_final;
         $obiect->company_id =Auth::guard('companie')->user()->id;
         $obiect->save();
         

         return redirect()->route('poze_companie')->with('success','Poza a fost incarcata cu succes! ');
    }

    public function poze_companie_stergere($id)
    {
        $poza_individuala = CompaniePhoto::where('id',$id)->first();
        unlink(public_path('uploads/'.$poza_individuala->poza));
        CompaniePhoto::where('id',$id)-> delete();
        return redirect()->back()->with('success','Poza a fost stearsa cu succes! ');
    }


    public function plati_companie()
    {
        $date_plati = Order::with('rPackage')->orderBy('id', 'desc')->where('company_id', Auth::guard('companie')->user()->id)->get();
        return view('companie.plati', compact('date_plati'));

    }

    public function plata_pachet()
    {
        
       $pachetul_activ = Order::with('rPackage')->where('company_id', Auth::guard('companie')->user()->id)->where('status',1)->first();

       $pachete = Package::get();

    //    dd($pachetul_activ);

        return view('companie.plata_pachet', compact('pachetul_activ','pachete'));
    }

    public function paypal(Request $request)
    {
        // $request->package_id;
        $date_pachet_individual = Package::where('id',$request->package_id)->first();



        $serviciu = new PayPalClient;
        $serviciu->setApiCredentials(config('paypal'));
        $paypalToken = $serviciu->getAccessToken();

        $response = $serviciu->createOrder([
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => route('companie_paypal_succes'),
                "cancel_url" => route('companie_paypal_anulare')
            ],
            "purchase_units" => [
                [
                    "amount" => [
                        "currency_code" => "EUR",
                        "value" =>  $date_pachet_individual->pret_pachet
                    ]
                ]
            ]
        ]);

        if(isset($response['id']) && $response['id']!=null) {
            foreach($response['links'] as $link) {
                if($link['rel'] === 'approve') {

                    session()->put('package_id', $date_pachet_individual->id);
                    session()->put('pret_pachet', $date_pachet_individual->pret_pachet);
                    session()->put('durata_pachet', $date_pachet_individual->durata_pachet);


                    return redirect()->away($link['href']);
                }
            }
        } else {
            return redirect()->route('companie_paypal_anulare');
        }
    }

    public function paypal_succes(Request $request)
    {
        $serviciu = new PayPalClient;
        $serviciu->setApiCredentials(config('paypal'));
        $paypalToken = $serviciu->getAccessToken();
        $response = $serviciu->capturePaymentOrder($request->token);

        //dd($response);

        if(isset($response['status']) && $response['status'] == 'COMPLETED') {

            //Salveaza datele in baza de date
           $date['status']= 0;
           Order::where('company_id', Auth::guard()->user()->id)->update($date);


           $obiect = new Order();
           $obiect->company_id = Auth::guard()->user()->id;
           $obiect->package_id = session()->get('package_id');
           $obiect->numar_comanda = time();
           $obiect->suma_platita = session()->get('pret_pachet');
           $obiect->data_start = date('d-m-Y');
           $zile = session()->get('durata_pachet');
           $obiect->data_expirare = date('d-m-Y', strtotime("+$zile days")) ;
           $obiect->status = 1 ;
           $obiect->save();

           session()->forget('package_id');
           session()->forget('pret_pachet');
           session()->forget('durata_pachet');

            return redirect()->route('plata_pachet_companie')->with('success', 'Plata a fost efectuata cu succes!');
        } else {
            return redirect()->route('companie_paypal_anulare');
        }
    }

    public function paypal_anulare()
    {
        return redirect()->route('plata_pachet_companie')->with('error', 'Plata a fost anulata!');
    }

    public function creare_joburi()
    {
        $date_comenzi = Order::where('company_id',Auth::guard('companie')->user()->id)->where('status',1)->first();
        if(!$date_comenzi){
            return redirect()->back()->with('error','Trebuie sa cumperi un pachet pentru a accesa aceasta sectiune');
        }


        // Verrifica daca pachetul cumparat are nivelul necesar sa acceseze pagina 
        $date_pachet = Package::where('id',$date_comenzi->package_id)->first();
        if($date_pachet->numar_permis_joburi == 0)
        {
            return redirect()->back()->with('error','Pachetul actual nu are posibilitatea sa acceseze aceasta sectiune! ');
        }


        // Verifica cate joburi a postat compania
        $joburi_postate = Job::where('company_id',Auth::guard('companie')->user()->id)->count();
        if($date_pachet->numar_permis_joburi == $joburi_postate) 
        {
            return redirect()->back()->with('error',' Numarul maxim de joburi postate a fost atins! Cumparati un pachet mai bun sau stergeti un job postat!');
        }

        $categorii_job = JobCategory::orderBy('nume_categorie','asc')->get();
        $locatii_job = JobLocation::orderBy('nume_locatie','asc')->get();
        $tipuri_job = JobType::orderBy('nume_tip','asc')->get();
        $experienta_job = JobExperience::orderBy('id','asc')->get();
        $salarii_job = JobSalaryRange::orderBy('id','asc')->get();

        return view('companie.creare_joburi', compact('categorii_job','locatii_job','tipuri_job','experienta_job','salarii_job'));
    }

   public function salvare_joburi_create(Request $request)
   {
    $request->validate([
        'titlu' => 'required',
        'descriere' => 'required',
        'locuri => required'
    ]);

    $date_comenzi = Order::where('company_id',Auth::guard('companie')->user()->id)->where('status',1)->first();
    $date_pachet = Package::where('id',$date_comenzi->package_id)->first();

    $joburi_promovate = Job::where('company_id', Auth::guard('companie')->user()->id)->where('este_promovat',1)->count();
    if($joburi_promovate == $date_pachet->numar_permis_joburi_promovate)
    { 
        if($request->este_promovat == 1)
        {
        return redirect()->back()->with('error','Ai promovat deja numarul maxim de joburi permis de acest pachet!');
        }
    }


    $obiect = new Job();
    $obiect->company_id = Auth::guard('companie')->user()->id;
    $obiect->titlu = $request->titlu;
    $obiect->descriere = $request->descriere;
    $obiect->responsabilitati = $request->responsabilitati;
    $obiect->cerinte = $request->cerinte;
    $obiect->educatie = $request->educatie;
    $obiect->beneficii = $request->beneficii;
    $obiect->locuri = $request->locuri;
    $obiect->job_category_id = $request->job_category_id;
    $obiect->job_location_id = $request->job_location_id;
    $obiect->job_type_id = $request->job_type_id;
    $obiect->job_experience_id = $request->job_experience_id;
    $obiect->job_salary_range_id = $request->job_salary_range_id;
    $obiect->map_code = $request->map_code;
    $obiect->este_promovat = $request->este_promovat;
    $obiect->save();

    return redirect()->route('joburi_postate_companie')->with('success','Jobul a fost postat cu succes!');

   }

   public function joburi_postate()
   {
    $joburi = Job::with('rJobCategory')->where('company_id',Auth::guard('companie')->user()->id)->get();
    return view('companie.joburi_postate', compact('joburi'));
   }

   public function editare_joburi_postate($id)
   {
    $job_individual = Job::where('id',$id)->first();
    $categorii_job = JobCategory::orderBy('nume_categorie','asc')->get();
    $locatii_job = JobLocation::orderBy('nume_locatie','asc')->get();
    $tipuri_job = JobType::orderBy('nume_tip','asc')->get();
    $experienta_job = JobExperience::orderBy('id','asc')->get();
    $salarii_job = JobSalaryRange::orderBy('id','asc')->get();

    return view('companie.editare_joburi_postate', compact('categorii_job','locatii_job','tipuri_job','experienta_job','salarii_job','job_individual'));
   }

   public function actualizare_joburi_postate(Request $request,$id)
   { 
    $obiect = Job::where('id',$id)->first();

    $request->validate([
        'titlu' => 'required',
        'descriere' => 'required',
        'locuri => required'
    ]);


    $obiect->titlu = $request->titlu;
    $obiect->descriere = $request->descriere;
    $obiect->responsabilitati = $request->responsabilitati;
    $obiect->cerinte = $request->cerinte;
    $obiect->educatie = $request->educatie;
    $obiect->beneficii = $request->beneficii;
    $obiect->locuri = $request->locuri;
    $obiect->job_category_id = $request->job_category_id;
    $obiect->job_location_id = $request->job_location_id;
    $obiect->job_type_id = $request->job_type_id;
    $obiect->job_experience_id = $request->job_experience_id;
    $obiect->job_salary_range_id = $request->job_salary_range_id;
    $obiect->map_code = $request->map_code;
    $obiect->este_promovat = $request->este_promovat;
    $obiect->update();

    return redirect()->route('joburi_postate_companie')->with('success','Jobul a fost actualizat cu succes!');

   }

   public function stergere_joburi_postate($id)
   {
    
    Job::where('id',$id)->delete();
    return redirect()->route('joburi_postate_companie')->with('success',' Anuntul a fost sters cu succes! ');
   }
}
