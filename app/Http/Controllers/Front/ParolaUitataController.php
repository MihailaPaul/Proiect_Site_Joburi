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

class ParolaUitataController extends Controller
{
    public function parola_uitata_companie()
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
        return view('front.parola_uitata_companie',compact('date_pagina_diverse'));
    }

    public function trimitere_parola_uitata_companie(Request $request)
    {
       $request->validate([
        'email' => 'required|email',
       ]);

       $date_companie = Company::where('email',$request->email)->first();
     
       if(!$date_companie){
         return redirect()->back()->with('error','Adresa de email nu este inregistrata in sistem.');
       }
     
       $token = hash('sha256',time());
       
       $date_companie->token = $token;
       $date_companie->update();

       $reset_link = url('resetare-parola/companie/'.$token.'/'.$request->email);
       $subject = 'Resetare Parola';
       $message = 'Apasati pe urmatorul link pentru resetare : <br>';
       $message .= '<a href="'.$reset_link.'">Apasa Aici</a>';

       \Mail::to($request->email)->send(new Websitemail($subject,$message));
       return redirect()->route('login')->with('success','Va rog sa va verificati email-ul si sa urmati pasii din acesta ! ');
 
     }

     public function resetare_parola_companie($token,$email)
     {
       
       $date_companie = Company::where('token',$token)->where('email',$email)->first();
       if(!$date_companie)
       {
         return redirect()->route('login');
       }
       return view('front.resetare_parola_companie', compact('token','email'));

     }
 

 
     public function trimitere_resetare_parola_companie(Request $request)
     {
     
       $request->validate([
         'parola' =>'required',
         'rescrie_parola' =>'required|same:parola'
       ]);

       $date_companie = Company::where('token',$request->token)->where('email',$request->email)->first();
       $date_companie->password = Hash::make($request->parola);
       $date_companie->Token = '';

       $date_companie->update(); 
       return redirect()->route('login')->with('success','Parola a fost resetata!');
     }
    








     public function parola_uitata_candidat()
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
         return view('front.parola_uitata_candidat',compact('date_pagina_diverse'));
     }
 
     public function trimitere_parola_uitata_candidat(Request $request)
     {
        $request->validate([
         'email' => 'required|email',
        ]);
 
        $date_candidat = Candidate::where('email',$request->email)->first();
      
        if(!$date_candidat){
          return redirect()->back()->with('error','Adresa de email nu este inregistrata in sistem.');
        }
      
        $token = hash('sha256',time());
        
        $date_candidat->token = $token;
        $date_candidat->update();
 
        $reset_link = url('resetare-parola/candidat/'.$token.'/'.$request->email);
        $subject = 'Resetare Parola';
        $message = 'Apasati pe urmatorul link pentru resetare : <br>';
        $message .= '<a href="'.$reset_link.'">Apasa Aici</a>';
 
        \Mail::to($request->email)->send(new Websitemail($subject,$message));
        return redirect()->route('login')->with('success','Va rog sa va verificati email-ul si sa urmati pasii din acesta ! ');
  
      }
 
      public function resetare_parola_candidat($token,$email)
      {
        
        $date_candidat = Candidate::where('token',$token)->where('email',$email)->first();
        if(!$date_candidat)
        {
          return redirect()->route('login');
        }
        return view('front.resetare_parola_candidat', compact('token','email'));
 
      }
  
 
  
      public function trimitere_resetare_parola_candidat(Request $request)
      {
      
        $request->validate([
          'parola' =>'required',
          'rescrie_parola' =>'required|same:parola'
        ]);
 
        $date_candidat = Candidate::where('token',$request->token)->where('email',$request->email)->first();
        $date_candidat->password = Hash::make($request->parola);
        $date_candidat->Token = '';
 
        $date_candidat->update(); 
        return redirect()->route('login')->with('success','Parola a fost resetata!');
      }

}
