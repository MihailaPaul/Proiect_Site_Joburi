<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PaginaDiverseItem;
use Auth;
use Hash;

class LogareController extends Controller
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
        return view('front.login',compact('date_pagina_diverse'));
    }

    public function trimitere_logare_companie(Request $request)
    {
      $request->validate([
        'nume_utilizator' => 'required',
        'parola' =>'required'
      ]);
    
      $date_introduse = [
        'nume_utilizator' => $request->nume_utilizator,
        'password' =>$request->parola
      ];

     if(Auth::guard('companie')->attempt($date_introduse))
     {
        return redirect()->route('meniu_companie');
     }  
     else 
     {
        return redirect()->route('login')->with('error','Numele de utilizator sau parola introduse nu sunt corecte!');
     }
    }

     public function logout_companie()
     {
       Auth::guard('companie')->logout();
       return redirect()->route('login');
     }

     public function trimitere_logare_candidat(Request $request)
    {
      $request->validate([
        'nume_utilizator' => 'required',
        'parola' =>'required'
      ]);
    
      $date_introduse = [
        'nume_utilizator' => $request->nume_utilizator,
        'password' =>$request->parola
      ];

     if(Auth::guard('candidat')->attempt($date_introduse))
     {
        return redirect()->route('meniu_candidat');
     } 
     else
     {
        return redirect()->route('login')->with('error','Numele de utilizator sau parola introduse nu sunt corecte!');
     }
    }

     public function logout_candidat()
     {
    
       Auth::guard('candidat')->logout();
       return redirect()->route('login');
     }
  
  
}
