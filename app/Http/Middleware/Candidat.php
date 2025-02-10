<?php
// Se implementeaza middleware ul pentru admin. Scopul acestuia este de a restrictiona accesul la rute si contrrolleri pentru cine nu este autentificat ca admin.
// La fiecare request facut catre o ruta care foloseste acest middleware se verifica daca user ul este autentificat ca admin pentru a continua catre pagina dorita 
namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Candidat extends Middleware
{
// Metoda redirectTo este folosita pentru a determina unde trebuie trimis user ul care nu are rolul necesar pentru a accesa informatia dorita
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            // Se trimite user-ul catre pagina de login
            return route('login');
        }
    }
  
}
