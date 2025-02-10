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
use Illuminate\Validation\Rule;
use Auth;
use Srmklive\PayPal\Services\PayPal as PayPalClient;


class CompanieController extends Controller
{
    public function meniu_companie()

    { 
        return view('companie.meniu');
    }

    public function plati_companie()
    {
        $date_plati = Order::with('rPackage')->orderBy('id', 'desc')->where('company_id', Auth::guard('companie')->user()->id)->get();
        return view('companie.plati', compact('date_plati'));

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
   

}
