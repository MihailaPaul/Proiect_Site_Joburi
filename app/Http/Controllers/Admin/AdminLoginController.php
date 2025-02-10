<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Mail\Websitemail;
use Hash;
use Auth;
// Controller realizat pentru returnarea paginilor web construite in blade uri
class AdminLoginController extends Controller
{
    public function index()
    {
        return view('Admin.login');
    }

    public function forget_password()
    {
        return view ('Admin.forget_password');
    }
    // Pentru trimiterea mail ului de resetare parola se realizeaza urmatoare functie
    public function parola_uitata_submit(Request $request)
    { 
    //Valideaza format-ul de mail trecut in campul de email pentru resetare parola 
      $request->validate([
        // Conditiile sunt:
        // - obligatoriu sa fie ceva scris in campul respectiv
        // - textul scris sa aiba format de email
        'Email' => 'required|Email',
      ]);
      //Se creaza variabila date_admin in care se stocheaza Email-ul adminului din baza de date si compara cu informatia trecuta de user
      $date_admin = Admin::where('Email',$request->Email)->first();
      //Daca variabila nu primeste nimic de la baza de date returneaza un mesaj de eroare in front end 
      if(!$date_admin){

        return redirect()->back()->with('eroare','Adresa de email nu a fost gasita');
      }
      //Daca a gasit adresa de Email corespunzatoare generreaza un token cu algoritmul sha256 care cripteaza randomizat dupa data la care a fost creeat
      $Token = hash('sha256',time());
      //Se introduce acel token in baza de date in cooloana Token pentru a fi folosit in procesull de resetare parola
      $date_admin->Token = $Token;
      $date_admin->update();
      // Se creaza un link la care utilizatorul este redirectionat dupa ce a apasat link ul de restare parola primit pe mail 
      $reset_link = url('admin/resetare-parola/'.$Token.'/'.$request->Email);
      //Se creeaza variabila subiect care contile subiectul mail-ului de resetare parola
      $subject = 'Resetare Parola';
      //Se creeaza variabila mesaj care contine mesajul care urmeaza sa fie trimis in mail-ul de resetare parola 
      $message = 'Apasati pe urmatorul link pentru resetare : <br>';
      //Exista doua variabile de mesaj pentru ca aceasta este sintaxa pentru a scrie pe doua randuri  
      // ".=" extinde practic informatia din prima variabila message cu ce exista in al doilea camp
      $message .= '<a href="'.$reset_link.'">Apasa Aici</a>';
      // Se trimite email ul la adresa scrisa de user si verificata in baza de date cu ajutorul clasei Websitemail din Laravel
      \Mail::to($request->Email)->send(new Websitemail($subject,$message));
      // Dupa trimiterea mail ului  se face redirectionarea inapoi catre pagina de login cu mesaj care ii indruma sa verfice email-ul
      return redirect()->route('admin_login')->with('succes','Va rog sa va verificati email-ul si sa urmati pasii din acesta ! ');

    }
// Functia de validare pentru form-ul de logare 
// Obiectul request contine emai-uul si parola introduse in form

    public function login_submit(Request $request)

    // Functia integrata in Laravel $request->validate valideaza datele prrimite:
    //- prin verificarea datelor introduse in campul de mail care trebuie sa aiba formatul de mail
    //- prin verificarea campuluui de parola care trebuie sa nu fie gol 
    {
      $request->validate([
        'Email' => 'required|Email',
        'Parola' =>'required'
      ]);
    //Daca validarea este facuta datele de mail si parola sunt stocate in $credential
      $credential = [
        'Email' => $request->Email,
        'password' =>$request->Parola
      ];
  
      // Functia Auth care este inclusa in laravel faciliteaza autentificarea userului prin:
      // - Verificarea datelor din credentials  impotriva datelor din baza de date
      // - Criptarea automata a parolei pentru a putea fi verificata cu cele criptate din baza de date

     if(Auth::guard('admin')->attempt($credential)){

      // Daca datele verificate sunt gasite in baza de date atunci se face trimiterea catre tablloull de control admin
        return redirect()->route('admin_home');
     } else {
         // Altfel user-ul este trimis inapoi la pagina de login in care se afiseaza mesajul de eroare corespunzator
 return redirect()->route('admin_login')->with('eroare','Adresa de email sau parola introdusa nu este corecta!');
    }
  }
 //Functia logout ofera functionalitate link ului din front end de logout
    public function logout()
    {
      // Se face delogarea prin functia Auth si guarrd ul creat admin
      Auth::guard('admin')->logout();
      // Se face trimiterea spre pagina de login
      return redirect()->route('admin_login');
    }

    // Pentru functionalitatea de resetare parola se foloseste urmatoarea functie care are ca parametrii:
    //- Token ul emis de catre sistem la momentul apasarii link ului de resetare parola de pe mail
    //- Variabila de Email care are ca valoare mail-ul introdus pentru resetarea parolei
    public function resetare_parola($Token,$Email)
    {
      // Sunt extrase din baza de date Token-ul si Email-ul unde sunt comparate cu datele trecute de utilizator iar apoi sunt inregistrate in variabila date_admin
      $date_admin = Admin::where('Token',$Token)->where('Email',$Email)->first();
      // Daca datele obtinute nu exista sau nu se verifica atunci se face redirectionarea catre pagina de login
      if(!$date_admin)
      {
        return redirect()->route('admin_login');
      }
      return view('admin.resetare_parola', compact('Token','Email'));
    }

    //Fuctia de resetare efectiva a parolei 

    public function resetare_parola_submit(Request $request)
    {
      // Se verifica ca ambele campuri pentru parola sa aiba aceeasi valoare pentru a nu pune o parola scrisa incorect din greseala
      $request->validate([
        'Parola' =>'required',
        //Conditia same verifica daca parola din al doilea camp este aceeasi cu cea din primul camp
        'Reintroduceti_Parola' =>'required|same:Parola'
      ]);
      // Cu functia admin se selecteaza din baza de date toate informatiile disponibile pentru user ul al carui mail si token corespund cu cele salvate
      $date_admin = Admin::where('Token',$request->Token)->where('Email',$request->Email)->first();
      // Noua Parola trecuta de utilizator este crriptata cuu functia Hash
      $date_admin->parola = Hash::make($request->Parola);
      // Token-ul pentru resetare parola al utilizatorului este resetat 
      $date_admin->Token = '';
      // Noua Parola este trecuta in baza de date
      $date_admin->update(); 
      // Se face rutarea catre pagina de log in cu mesajul de succes
      return redirect()->route('admin_login')->with('succes','Parola a fost resetata!');
    }
}