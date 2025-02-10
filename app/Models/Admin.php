<?php
//Locul unde este definita clasa, pentru a mentine codul organizat
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
//Subclasa a Clasei Authenticatable ceea ce inseamna ca se poate folosi pentru autentificarea unui Admin folosind fuctia de autentificare integrata in Laravel
class Admin extends Authenticatable
{  // Deoarece numele coloanei de parola din baze de date este diferit de "password"
    //  numele trebuie declarat astfel incat functia attempt folosita pentru verificare sa stie ca acel camp este destinat parolelor 
    public function getAuthPassword() {
    return $this->Parola;
}
    use HasFactory;
}
