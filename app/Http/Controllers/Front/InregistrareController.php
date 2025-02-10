<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PaginaDiverseItem;
use App\Models\Company;
use App\Models\Candidate;
use App\Mail\Websitemail;
use Hash;
use Auth;


class InregistrareController extends Controller
{
    public function index()
    {   
        if(Auth::guard('candidat')->check())
        {
          return redirect()->route('meniu_candidat');
        }

        if(Auth::guard('companie')->check())
        {
          return redirect()->route('meniu_companie');
        }
        
        $date_pagina_diverse = PaginaDiverseItem::where('id',1)->first();
        return view('front.inregistrare',compact('date_pagina_diverse'));
    }

    public function trimitere_inregistrare_companie (Request $request)
     {
        
        $request->validate([
            'nume_companie' => 'required',
            'nume_reprezentant' => 'required',
            'nume_utilizator' => 'required|unique:companies',
            'email' => 'required|email|unique:companies',
            'parola' => 'required',
            'confirma_parola' => 'required|same:parola'
        ]);

        $token = hash('sha256',time());

        $object= new Company();
        $object->nume_companie = $request->nume_companie;
        $object->nume_reprezentant = $request->nume_reprezentant;
        $object->nume_utilizator = $request->nume_utilizator;
        $object->email = $request->email;
        $object->password = Hash::make($request->parola);
        $object->token = $token;
        $object->status = 0;
        $object->save();

        $link_resetare = url('verificare-inregistrare-companie/'.$token.'/'.$request->email);
        $subject = 'Confirma Inregistrarea Pe JobWise';
        $message = 'Apasati pe urmatorul link pentru a activa contul : <br>';
        $message .= '<a href="'.$link_resetare.'">Activare Cont</a>';

         \Mail::to($request->email)->send(new Websitemail($subject,$message));

         return redirect()->route('login')->with('success',' A fost trimis un mail catre adresa ta de email, urmeaza instructiunile din el pentru a finaliza inregistrarea ! ');
     }

     public function verificare_inregistrare_companie($token,$email)
     {
        $date_companie = Company::where('token',$token)->where('email',$email)->first();
      
        if(!$date_companie)
        {
    
          return redirect()->route('login');
        }

        $date_companie->token = '';
        $date_companie->status = 1;
        $date_companie->update();

        return redirect()->route('login')->with('success',' Email-ul dumneavoastra a fost verificat cu succes ! Puteti introduce datele pentru a accesa de companie contul ! ');

     }








     public function trimitere_inregistrare_candidat (Request $request)
     {
        
        $request->validate([
            'nume_candidat' => 'required',
            'nume_utilizator' => 'required|unique:candidates',
            'email' => 'required|email|unique:companies',
            'parola' => 'required',
            'confirma_parola' => 'required|same:parola'
        ]);

        $token = hash('sha256',time());

        $object= new Candidate();
        $object->nume_candidat = $request->nume_candidat;
        $object->nume_utilizator = $request->nume_utilizator;
        $object->email = $request->email;
        $object->password = Hash::make($request->parola);
        $object->token = $token;
        $object->status = 0;
        $object->save();

        $link_resetare = url('verificare-inregistrare-candidat/'.$token.'/'.$request->email);
        $subject = 'Confirma Inregistrarea Pe JobWise';
        $message = 'Apasati pe urmatorul link pentru a activa contul : <br>';
        $message .= '<a href="'.$link_resetare.'">Activare Cont</a>';

         \Mail::to($request->email)->send(new Websitemail($subject,$message));

         return redirect()->route('login')->with('success',' A fost trimis un mail catre adresa ta de email, urmeaza instructiunile din el pentru a finaliza inregistrarea! ');
     }

     public function verificare_inregistrare_candidat($token,$email)
     {
        $date_candidat = Candidate::where('token',$token)->where('email',$email)->first();
      
        if(!$date_candidat)
        {
    
          return redirect()->route('login');
        }

        $date_candidat->token = '';
        $date_candidat->status = 1;
        $date_candidat->update();

        return redirect()->route('login')->with('success',' Email-ul dumneavoastra a fost verificat cu succes ! Puteti introduce datele pentru a accesa contul de candidat ! ');

     }
}
