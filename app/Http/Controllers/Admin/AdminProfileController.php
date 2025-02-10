<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Hash;
use Auth;
//Controller-ul pentru profil este responsabil de toate functiile folosite in editarea profilului 
class AdminProfileController extends Controller
{ 
    // Functia index face trimiterea catre pagina de profil a adminului 
    public function index()
    {
        return view('Admin.profil');
    }
    // Fucntia de profil_submit asigura verificare si reinoirea datele din baza de date atunci cand utilizatorul editeaza campurile dorite
    public function profil_submit(Request $request)
    {   // Cu functia de Admin luam informatii din baza de date admin. In acest caz ia toate infomatiile din tabelul userului 
        // cu o adresa de email specificata si le salveaza in variabile date_admin pentru a putea fi editate
        $date_admin = Admin::where('Email',Auth::guard('admin')->user()->Email)->first();
        // In campurile de nume si email se foloseste comanda validate care face urmatoarele lucruri:
        // Pentru campul de nume pune conditia ca acesta sa nu fie lasat gol
        // Pentru campul de email se pune conditia ca acesta sa nu fie gol si ca informatia din el sa aiba format de email
        $request->validate([
            'Nume' => 'required',
            'Email' => 'required|Email',
          ]);

        // Dupa ce a facut validarea celor 2 campuri de mai sus verifica daca campul de parola este modificat 
        // Astfel ii este permis utilizatorului sa isi schimbe numele sau mail-ul fara sa fie obligat sa schimbe parola
        
          if($request->Parola!=''){
        // Daca este detectata o schimbare la campul de parola se incepe validarea campurilor de parola 
            $request->validate([
                //Campul de parola trebuie sa fie completat obligatoriu
                'Parola' => 'required',
                //Campul de reintroducere parola trebuie sa aiba aceeasi parola ca cel principal 
                'Reintroduceti_Parola' => 'required|same:Parola',
              ]);
        // Daca trece de validarile de mai sus se cripteaza noua parrola introdusa si se salveaza in date_admin
                $date_admin->Parola= Hash::make($request->Parola);
          }
        // Daca se detecteaza ca se face request de schimbare a pozei intra in urmatorul if
          if($request->hasFile('Poza')){
            //Se incepe validarea fisierului dat
            //Se verifica daca este de formatul imagine si tipul jpg,jpeg,png,gif daca nu respecta aceste conditii se afiseaza mesaje de eroare
            $request->validate([
                'Poza' => 'image|mimes:jpg,jpeg,png,gif'
            ]);
            // Daca fisierul a trecut de validare se incepe prrocesul de salvarea in baza de date
            // Se sterge Poza salvata in foder-ul uploads
            unlink(public_path('uploads/'.$date_admin->Poza));


            // Se construieste un nume pentru poza care urmeaza sa fie salvata
            // Se face un request catre noul fisier de unde cu ajutorul fucntiei extension de determina extensia fisierului care apoi este stocata in variabile $ext
            $ext= $request->file('Poza')->extension();
            
            // Pentru poza salvata numele se va fi de forma admin."valoarea salvata in variabila ext"
            // Punctele albe intre componentele numelui sunt folosite pentru concatenarea acestora
            $nume_final = 'admin'.'.'.$ext;

            // Se introduce noua poza cu numele format in fisierul uploads 
            $request->file('Poza')->move(public_path('uploads/'),$nume_final);

            $date_admin->Poza = $nume_final;
          }
          
          $date_admin->Nume = $request->Nume;
          $date_admin->Email = $request->Email;
          //Dupa ce toate modificarile au fost salvate in variabila date_admin aceasta cu functia update modifica informatiile salvate in baza de date
          $date_admin->update();

          return redirect()->back()->with('success','Modificarile profilului au fost efectuate cu succes!');
       
    }
}
