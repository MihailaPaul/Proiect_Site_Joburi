<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Front\AcasaController;
use App\Http\Controllers\Front\CategoriiJobController;
use App\Http\Controllers\Front\ArticolController;
use App\Http\Controllers\Front\PachetController;
use App\Http\Controllers\Front\LogareController;
use App\Http\Controllers\Front\InregistrareController;
use App\Http\Controllers\Front\ParolaUitataController;


use App\Http\Controllers\Companie\CompanieController;
use App\Http\Controllers\Candidat\CandidatController;

use App\Http\Controllers\Admin\TablouAdminController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminProfileController;

use App\Http\Controllers\Admin\AdminCategorieJobController;
use App\Http\Controllers\Admin\AdminAlegereController;
use App\Http\Controllers\Admin\AdminRecomandariController;
use App\Http\Controllers\Admin\AdminArticolController;
use App\Http\Controllers\Admin\AdminPachetController;

use App\Http\Controllers\Admin\AdminPaginaAcasaController;
use App\Http\Controllers\Admin\AdminPaginaBlogController;
use App\Http\Controllers\Admin\AdminPaginaCategoriiController;
use App\Http\Controllers\Admin\AdminPaginaPacheteController;
use App\Http\Controllers\Admin\AdminPaginaDiverseController;




Route::get('/', [AcasaController::class, 'index'])->name('acasa');

Route::get('categorii-job', [CategoriiJobController::class,'categorii'])->name('categorii_job');

Route::get('blog', [ArticolController::class,'index'])->name('blog');

Route::get('articol/{slug}', [ArticolController::class,'adresa'])->name('articol');

Route::get('pachete', [PachetController::class,'index'])->name('pachete');




Route::get('login', [LogareController::class,'index'])->name('login');

Route::get('inregistrare', [InregistrareController::class,'index'])->name('inregistrare');










// RUTE COMPANIE

Route::get('trimitere-logare-companie', [LogareController::class,'trimitere_logare_companie'])->name('trimitere_logare_companie');
Route::post('trimitere-inregistrare-companie', [InregistrareController::class,'trimitere_inregistrare_companie'])->name('trimitere_inregistrare_companie');
Route::get('verificare-inregistrare-companie/{token}/{email}', [InregistrareController::class,'verificare_inregistrare_companie'])->name('verificare_inregistrare_companie');
Route::get('parola-uitata/companie', [ParolaUitataController::class,'parola_uitata_companie'])->name('parola_uitata_companie');
Route::post('trimitere-parola-uitata/companie', [ParolaUitataController::class,'trimitere_parola_uitata_companie'])->name('trimitere_parola_uitata_companie');
Route::get('resetare-parola/companie/{token}/{email}',[ParolaUitataController::class,'resetare_parola_companie'])->name('resetare_parola_companie');
Route::post('trimitere-resetare-parola/companie',[ParolaUitataController::class,'trimitere_resetare_parola_companie'])->name('trimitere_resetare_parola_companie');

// Rute Companie cu Middleware
Route::middleware(['companie:companie'])->group(function() 
    {
    Route::get('/companie/meniu',[CompanieController::class,'meniu_companie'])->name('meniu_companie');
    Route::get('/companie/logout',[LogareController::class,'logout_companie'])->name('logout_companie');
    Route::get('/companie/plata-pachet',[CompanieController::class,'plata_pachet'])->name('plata_pachet_companie');
    Route::get('/companie/plati',[CompanieController::class,'plati_companie'])->name('plati_companie');

    Route::post('/companie/paypal/plata', [CompanieController::class, 'paypal'])->name('companie_paypal');
    Route::get('/companie/paypal/succes', [CompanieController::class, 'paypal_succes'])->name('companie_paypal_succes');
    Route::get('/companie/paypal/anulare', [CompanieController::class, 'paypal_anulare'])->name('companie_paypal_anulare');

    });



//RUTE CANDIDAT
Route::get('trimitere-logare-candidat', [LogareController::class,'trimitere_logare_candidat'])->name('trimitere_logare_candidat');
Route::post('trimitere-inregistrare-candidat', [InregistrareController::class,'trimitere_inregistrare_candidat'])->name('trimitere_inregistrare_candidat');
Route::get('verificare-inregistrare-candidat/{token}/{email}', [InregistrareController::class,'verificare_inregistrare_candidat'])->name('verificare_inregistrare_candidat');
Route::get('parola-uitata/candidat', [ParolaUitataController::class,'parola_uitata_candidat'])->name('parola_uitata_candidat');
Route::post('trimitere-parola-uitata/candidat', [ParolaUitataController::class,'trimitere_parola_uitata_candidat'])->name('trimitere_parola_uitata_candidat');
Route::get('resetare-parola/candidat/{token}/{email}',[ParolaUitataController::class,'resetare_parola_candidat'])->name('resetare_parola_candidat');
Route::post('trimitere-resetare-parola/candidat',[ParolaUitataController::class,'trimitere_resetare_parola_candidat'])->name('trimitere_resetare_parola_candidat');

//Rute Candidat  cu Middleware
Route::middleware(['candidat:candidat'])->group(function() 
    {
    Route::get('/candidat/meniu',[CandidatController::class,'meniu_candidat'])->name('meniu_candidat');
    Route::get('/candidat/logout',[LogareController::class,'logout_candidat'])->name('logout_candidat');
    });


// Rute TablouAdmin

// Ruta pentru pagina de login din tabloul adminului
Route::get('/admin/login',[AdminLoginController::class,'index'])->name('admin_login');

//Ruta pentru actiunea dee apasaree a butonului de log in 
Route::post('/admin/login-submit',[AdminLoginController::class,'login_submit'])->name('admin_login_submit');

// Ruta pentru pagina de uitare parola din tabloul adminului cand aceast ruta este accesata se face si chemarea fuctiei forgot_passsword a AdminLoginController ului 
Route::get('/admin/forget-password',[AdminLoginController::class,'forget_password'])->name('admin_forget_password');

// Ruta pentru delogare din contul de admin
Route::get('/admin/logout',[AdminLoginController::class,'logout'])->name('admin_logout');

//Ruta pentru submit ul de uitare parola
Route::post('/admin/parola-uitata-submit',[AdminLoginController::class,'parola_uitata_submit'])->name('admin_parola_uitata_submit');

//Ruta pentru resetarea parolei care include token si emaill in url
Route::get('/admin/resetare-parola/{Token}/{Email}',[AdminLoginController::class,'resetare_parola'])->name('admin_resetare_parola');

//Ruta pentru schimbarea parolei cu una noua
Route::post('/admin/resetare-parola-submit',[AdminLoginController::class,'resetare_parola_submit'])->name('resetare_parola_admin_submit');


// Pentru a nu adauga codul de verificare prin middleware la fiecare ruta care il foloseste,
// se creeaza un grup al carui membri vor folosi middleware ul de verificare pentru admin
Route::middleware(['admin:admin'])->group(function()
{
    //Ruta pentru pagina principala a tabloului de admin
    Route::get('/admin/home',[TablouAdminController::class,'index'])->name('admin_home');

    //Ruta pentru editarea profilului adminului cu middleware ul care se asigurra ca user ul este logat pentru a accesa pagina
    Route::get('/admin/editare-profil', [AdminProfileController::class,'index'])->name('profil_admin'); 
    
    //Ruta pentru trimiterea editarilor facute profilului de admin
    Route::post('/admin/editare-profil-submit',[AdminProfileController::class,'profil_submit'])->name('profil_admin_submit');




    Route::get('/admin/pagina-acasa',[AdminPaginaAcasaController::class,'index'])->name('admin_pagina_acasa');
    Route::post('/admin/pagina-acasa/modifica',[AdminPaginaAcasaController::class,'modifica'])->name('admin_pagina_acasa_modifica');


    Route::get('/admin/pagina-blog',[AdminPaginaBlogController::class,'index'])->name('admin_pagina_blog');
    Route::post('/admin/pagina-blog/modificare',[AdminPaginaBlogController::class,'modificare'])->name('admin_pagina_blog_modificare');


    Route::get('/admin/pagina-categorii',[AdminPaginaCategoriiController::class,'index'])->name('admin_pagina_categorii');
    Route::post('/admin/pagina-categorii/modificare',[AdminPaginaCategoriiController::class,'modificare'])->name('admin_pagina_categorii_modificare');


    Route::get('/admin/pagina-pachete',[AdminPaginaPacheteController::class,'index'])->name('admin_pagina_pachete');
    Route::post('/admin/pagina-pachete/modificare',[AdminPaginaPacheteController::class,'modificare'])->name('admin_pagina_pachete_modificare');


    Route::get('/admin/pagina-diverse',[AdminPaginaDiverseController::class,'index'])->name('admin_pagina_diverse');
    Route::post('/admin/pagina-diverse/modificare',[AdminPaginaDiverseController::class,'modificare'])->name('admin_pagina_diverse_modificare');

    



    Route::get('/admin/categorie-job/vizualizare',[AdminCategorieJobController::class,'index'])->name('admin_categorie_job');

    Route::get('/admin/categorie-job/creare',[AdminCategorieJobController::class,'creeaza'])->name('admin_categorie_job_creeaza');

    Route::post('/admin/categorie-job/salvare',[AdminCategorieJobController::class,'salveaza'])->name('admin_categorie_job_salveaza');

    Route::get('/admin/categorie-job/editare/{id}',[AdminCategorieJobController::class,'editare'])->name('admin_categorie_job_editare');

    Route::post('/admin/categorie-job/modifica/{id}',[AdminCategorieJobController::class,'modifica'])->name('admin_categorie_job_modifica');

    Route::get('/admin/categorie-job/stergere/{id}',[AdminCategorieJobController::class,'stergere'])->name('admin_categorie_job_stergere');



    Route::get('/admin/alegere/vizualizare',[AdminAlegereController::class,'index'])->name('admin_alegere');

    Route::get('/admin/alegere/creare',[AdminAlegereController::class,'creare'])->name('admin_alegere_creare');

    Route::post('/admin/alegere/salvare',[AdminAlegereController::class,'salvare'])->name('admin_alegere_salvare');

    Route::get('/admin/alegere/editare/{id}',[AdminAlegereController::class,'editare'])->name('admin_alegere_editare');

    Route::post('/admin/alegere/modifica/{id}',[AdminAlegereController::class,'modificare'])->name('admin_alegere_modificare');

    Route::get('/admin/alegere/stergere/{id}',[AdminAlegereController::class,'stergere'])->name('admin_alegere_stergere');



    Route::get('/admin/recomandare/vizualizare',[AdminRecomandariController::class,'index'])->name('admin_recomandari');

    Route::get('/admin/recomandare/creare',[AdminRecomandariController::class,'creare'])->name('admin_recomandari_creare');

    Route::post('/admin/recomandare/salvare',[AdminRecomandariController::class,'salvare'])->name('admin_recomandari_salvare');

    Route::get('/admin/recomandare/editare/{id}',[AdminRecomandariController::class,'editare'])->name('admin_recomandari_editare');

    Route::post('/admin/recomandare/modifica/{id}',[AdminRecomandariController::class,'modificare'])->name('admin_recomandari_modificare');

    Route::get('/admin/recomandare/stergere/{id}',[AdminRecomandariController::class,'stergere'])->name('admin_recomandari_stergere');



    Route::get('/admin/articol/vizualizare',[AdminArticolController::class,'index'])->name('admin_articol');

    Route::get('/admin/articol/creare',[AdminArticolController::class,'creare'])->name('admin_articol_creare');

    Route::post('/admin/articol/salvare',[AdminArticolController::class,'salvare'])->name('admin_articol_salvare');

    Route::get('/admin/articol/editare/{id}',[AdminArticolController::class,'editare'])->name('admin_articol_editare');

    Route::post('/admin/articol/modifica/{id}',[AdminArticolController::class,'modificare'])->name('admin_articol_modificare');

    Route::get('/admin/articol/stergere/{id}',[AdminArticolController::class,'stergere'])->name('admin_articol_stergere');



    Route::get('/admin/pachet/vizualizare',[AdminPachetController::class,'index'])->name('admin_pachet');

    Route::get('/admin/pachet/creare',[AdminPachetController::class,'creare'])->name('admin_pachet_creare');

    Route::post('/admin/pachet/salvare',[AdminPachetController::class,'salvare'])->name('admin_pachet_salvare');

    Route::get('/admin/pachet/editare/{id}',[AdminPachetController::class,'editare'])->name('admin_pachet_editare');

    Route::post('/admin/pachet/modifica/{id}',[AdminPachetController::class,'modificare'])->name('admin_pachet_modificare');

    Route::get('/admin/pachet/stergere/{id}',[AdminPachetController::class,'stergere'])->name('admin_pachet_stergere');
});
