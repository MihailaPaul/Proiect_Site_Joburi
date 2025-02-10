<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Front\AcasaController;
use App\Http\Controllers\Front\CategoriiJobController;
use App\Http\Controllers\Front\ArticolController;
use App\Http\Controllers\Front\PachetController;
use App\Http\Controllers\Front\LogareController;
use App\Http\Controllers\Front\InregistrareController;
use App\Http\Controllers\Front\ParolaUitataController;
use App\Http\Controllers\Front\PaginaJoburiController;

use App\Http\Controllers\Companie\CompanieController;
use App\Http\Controllers\Candidat\CandidatController;

use App\Http\Controllers\Admin\TablouAdminController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminProfileController;

use App\Http\Controllers\Admin\AdminCategorieJobController;
use App\Http\Controllers\Admin\AdminLocatieJobController;
use App\Http\Controllers\Admin\AdminTipuriJobController;
use App\Http\Controllers\Admin\AdminExperientaJobController;
use App\Http\Controllers\Admin\AdminIntervalSalariuJobController;

use App\Http\Controllers\Admin\AdminLocatieCompanieController;
use App\Http\Controllers\Admin\AdminDomeniuCompanieController;
use App\Http\Controllers\Admin\AdminMarimeCompanieController;

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

Route::get('locuri-de-munca', [PaginaJoburiController::class,'index'])->name('pagina_joburi');




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


    Route::get('/companie/editare-profil',[CompanieController::class,'editare_profil_companie'])->name('editare_profil_companie');
    Route::post('/companie/editare-profil/modifica',[CompanieController::class,'salvare_editare_profil_companie'])->name('salvare_editare_profil_companie');

    Route::get('/companie/editare-parola',[CompanieController::class,'editare_parola_companie'])->name('editare_parola_companie');
    Route::post('/companie/editare-parola/modifica',[CompanieController::class,'salvare_editare_parola_companie'])->name('salvare_editare_parola_companie');

    Route::get('/companie/poze',[CompanieController::class,'poze_companie'])->name('poze_companie');
    Route::post('/companie/poze/salvare',[CompanieController::class,'poze_companie_salvare'])->name('poze_companie_salvare');
    Route::get('/companie/poze/stergere/{id}',[CompanieController::class,'poze_companie_stergere'])->name('poze_companie_stergere');

    Route::get('/companie/creare-job',[CompanieController::class,'creare_joburi'])->name('creare_joburi_companie');
    Route::post('/companie/salvare-joburi-create',[CompanieController::class,'salvare_joburi_create'])->name('salvare_joburi_create');
    Route::get('/companie/joburi-postate',[CompanieController::class,'joburi_postate'])->name('joburi_postate_companie');
    Route::get('/companie/editare-joburi-postate/{id}',[CompanieController::class,'editare_joburi_postate'])->name('editare_joburi_postate_companie');
    Route::post('/companie/actualizare-joburi-postate/{id}',[CompanieController::class,'actualizare_joburi_postate'])->name('actualizare_joburi_postate_companie');
    Route::get('/companie/stergere-joburi-postate/{id}',[CompanieController::class,'stergere_joburi_postate'])->name('stergere_joburi_postate_companie');
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

    Route::get('/candidat/editare-profil',[CandidatController::class,'editare_profil_candidat'])->name('editare_profil_candidat');
    Route::post('/candidat/editare-profil/modifica',[CandidatController::class,'actualizare_profil_candidat'])->name('actualizare_profil_candidat');

    Route::get('/candidat/editare-parola',[CandidatController::class,'editare_parola_candidat'])->name('editare_parola_candidat');
    Route::post('/candidat/editare-parola/actualizare',[CandidatController::class,'actualizare_parola_candidat'])->name('actualizare_parola_candidat');

    
    Route::get('/candidat/educatie/vizualizare',[CandidatController::class,'educatie'])->name('educatie_candidat');
    Route::get('/candidat/educatie/creare',[CandidatController::class,'creare_educatie'])->name('educatie_candidat_creare');
    Route::post('/candidat/educatie/salvare',[CandidatController::class,'salvare_educatie'])->name('educatie_candidat_salvare');
    Route::get('/candidat/educatie/editare/{id}',[CandidatController::class,'editare_educatie'])->name('educatie_candidat_editare');
    Route::post('/candidat/educatie/actualizare/{id}',[CandidatController::class,'actualizare_educatie'])->name('educatie_candidat_actualizare');
    Route::get('/candidat/educatie/stergere/{id}',[CandidatController::class,'stergere_educatie'])->name('educatie_candidat_stergere');


    Route::get('/candidat/competente/vizualizare',[CandidatController::class,'competente'])->name('competente_candidat');
    Route::get('/candidat/competente/creare',[CandidatController::class,'creare_competente'])->name('competente_candidat_creare');
    Route::post('/candidat/competente/salvare',[CandidatController::class,'salvare_competente'])->name('competente_candidat_salvare');
    Route::get('/candidat/competente/editare/{id}',[CandidatController::class,'editare_competente'])->name('competente_candidat_editare');
    Route::post('/candidat/competente/actualizare/{id}',[CandidatController::class,'actualizare_competente'])->name('competente_candidat_actualizare');
    Route::get('/candidat/competente/stergere/{id}',[CandidatController::class,'stergere_competente'])->name('competente_candidat_stergere');

    
    Route::get('/candidat/experienta/vizualizare',[CandidatController::class,'experienta'])->name('experienta_candidat');
    Route::get('/candidat/experienta/creare',[CandidatController::class,'creare_experienta'])->name('experienta_candidat_creare');
    Route::post('/candidat/experienta/salvare',[CandidatController::class,'salvare_experienta'])->name('experienta_candidat_salvare');
    Route::get('/candidat/experienta/editare/{id}',[CandidatController::class,'editare_experienta'])->name('experienta_candidat_editare');
    Route::post('/candidat/experienta/actualizare/{id}',[CandidatController::class,'actualizare_experienta'])->name('experienta_candidat_actualizare');
    Route::get('/candidat/experienta/stergere/{id}',[CandidatController::class,'stergere_experienta'])->name('experienta_candidat_stergere');


    Route::get('/candidat/documente/vizualizare',[CandidatController::class,'documente'])->name('documente_candidat');
    Route::get('/candidat/documente/creare',[CandidatController::class,'creare_documente'])->name('documente_candidat_creare');
    Route::post('/candidat/documente/salvare',[CandidatController::class,'salvare_documente'])->name('documente_candidat_salvare');
    Route::get('/candidat/documente/editare/{id}',[CandidatController::class,'editare_documente'])->name('documente_candidat_editare');
    Route::post('/candidat/documente/actualizare/{id}',[CandidatController::class,'actualizare_documente'])->name('documente_candidat_actualizare');
    Route::get('/candidat/documente/stergere/{id}',[CandidatController::class,'stergere_documente'])->name('documente_candidat_stergere');


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




    Route::get('/admin/categorie-job/vizualizare',[AdminCategorieJobController::class,'index'])->name('admin_categorie_job');

    Route::get('/admin/categorie-job/creare',[AdminCategorieJobController::class,'creeaza'])->name('admin_categorie_job_creeaza');

    Route::post('/admin/categorie-job/salvare',[AdminCategorieJobController::class,'salveaza'])->name('admin_categorie_job_salveaza');

    Route::get('/admin/categorie-job/editare/{id}',[AdminCategorieJobController::class,'editare'])->name('admin_categorie_job_editare');

    Route::post('/admin/categorie-job/modifica/{id}',[AdminCategorieJobController::class,'modifica'])->name('admin_categorie_job_modifica');

    Route::get('/admin/categorie-job/stergere/{id}',[AdminCategorieJobController::class,'stergere'])->name('admin_categorie_job_stergere');




    Route::get('/admin/locatie-job/vizualizare',[AdminLocatieJobController::class,'index'])->name('admin_locatie_job');

    Route::get('/admin/locatie-job/creare',[AdminLocatieJobController::class,'creeaza'])->name('admin_locatie_job_creeaza');

    Route::post('/admin/locatie-job/salvare',[AdminLocatieJobController::class,'salveaza'])->name('admin_locatie_job_salveaza');

    Route::get('/admin/locatie-job/editare/{id}',[AdminLocatieJobController::class,'editare'])->name('admin_locatie_job_editare');

    Route::post('/admin/locatie-job/modifica/{id}',[AdminLocatieJobController::class,'modifica'])->name('admin_locatie_job_modifica');

    Route::get('/admin/locatie-job/stergere/{id}',[AdminLocatieJobController::class,'stergere'])->name('admin_locatie_job_stergere');



    Route::get('/admin/salariu-job/vizualizare',[AdminIntervalSalariuJobController::class,'index'])->name('admin_salariu_job');

    Route::get('/admin/salariu-job/creare',[AdminIntervalSalariuJobController::class,'creeaza'])->name('admin_salariu_job_creeaza');

    Route::post('/admin/salariu-job/salvare',[AdminIntervalSalariuJobController::class,'salveaza'])->name('admin_salariu_job_salveaza');

    Route::get('/admin/salariu-job/editare/{id}',[AdminIntervalSalariuJobController::class,'editare'])->name('admin_salariu_job_editare');

    Route::post('/admin/salariu-job/modifica/{id}',[AdminIntervalSalariuJobController::class,'modifica'])->name('admin_salariu_job_modifica');

    Route::get('/admin/salariu-job/stergere/{id}',[AdminIntervalSalariuJobController::class,'stergere'])->name('admin_salariu_job_stergere');




    Route::get('/admin/tip-job/vizualizare',[AdminTipuriJobController::class,'index'])->name('admin_tip_job');

    Route::get('/admin/tip-job/creare',[AdminTipuriJobController::class,'creeaza'])->name('admin_tip_job_creeaza');

    Route::post('/admin/tip-job/salvare',[AdminTipuriJobController::class,'salveaza'])->name('admin_tip_job_salveaza');

    Route::get('/admin/tip-job/editare/{id}',[AdminTipuriJobController::class,'editare'])->name('admin_tip_job_editare');

    Route::post('/admin/tip-job/modifica/{id}',[AdminTipuriJobController::class,'modifica'])->name('admin_tip_job_modifica');

    Route::get('/admin/tip-job/stergere/{id}',[AdminTipuriJobController::class,'stergere'])->name('admin_tip_job_stergere');




    Route::get('/admin/experienta-job/vizualizare',[AdminExperientaJobController::class,'index'])->name('admin_experienta_job');

    Route::get('/admin/experienta-job/creare',[AdminExperientaJobController::class,'creeaza'])->name('admin_experienta_job_creeaza');

    Route::post('/admin/experienta-job/salvare',[AdminExperientaJobController::class,'salveaza'])->name('admin_experienta_job_salveaza');

    Route::get('/admin/experienta-job/editare/{id}',[AdminExperientaJobController::class,'editare'])->name('admin_experienta_job_editare');

    Route::post('/admin/experienta-job/modifica/{id}',[AdminExperientaJobController::class,'modifica'])->name('admin_experienta_job_modifica');

    Route::get('/admin/experienta-job/stergere/{id}',[AdminExperientaJobController::class,'stergere'])->name('admin_experienta_job_stergere');








    Route::get('/admin/locatie-companie/vizualizare',[AdminLocatieCompanieController::class,'index'])->name('admin_locatie_companie');

    Route::get('/admin/locatie-companie/creare',[AdminLocatieCompanieController::class,'creeaza'])->name('admin_locatie_companie_creeaza');

    Route::post('/admin/locatie-companie/salvare',[AdminLocatieCompanieController::class,'salveaza'])->name('admin_locatie_companie_salveaza');

    Route::get('/admin/locatie-companie/editare/{id}',[AdminLocatieCompanieController::class,'editare'])->name('admin_locatie_companie_editare');

    Route::post('/admin/locatie-companie/modifica/{id}',[AdminLocatieCompanieController::class,'modifica'])->name('admin_locatie_companie_modifica');

    Route::get('/admin/locatie-companie/stergere/{id}',[AdminLocatieCompanieController::class,'stergere'])->name('admin_locatie_companie_stergere');





    Route::get('/admin/categorie-job/vizualizare',[AdminCategorieJobController::class,'index'])->name('admin_categorie_job');

    Route::get('/admin/categorie-job/creare',[AdminCategorieJobController::class,'creeaza'])->name('admin_categorie_job_creeaza');

    Route::post('/admin/categorie-job/salvare',[AdminCategorieJobController::class,'salveaza'])->name('admin_categorie_job_salveaza');

    Route::get('/admin/categorie-job/editare/{id}',[AdminCategorieJobController::class,'editare'])->name('admin_categorie_job_editare');

    Route::post('/admin/categorie-job/modifica/{id}',[AdminCategorieJobController::class,'modifica'])->name('admin_categorie_job_modifica');

    Route::get('/admin/categorie-job/stergere/{id}',[AdminCategorieJobController::class,'stergere'])->name('admin_categorie_job_stergere');




    Route::get('/admin/locatie-job/vizualizare',[AdminLocatieJobController::class,'index'])->name('admin_locatie_job');

    Route::get('/admin/locatie-job/creare',[AdminLocatieJobController::class,'creeaza'])->name('admin_locatie_job_creeaza');

    Route::post('/admin/locatie-job/salvare',[AdminLocatieJobController::class,'salveaza'])->name('admin_locatie_job_salveaza');

    Route::get('/admin/locatie-job/editare/{id}',[AdminLocatieJobController::class,'editare'])->name('admin_locatie_job_editare');

    Route::post('/admin/locatie-job/modifica/{id}',[AdminLocatieJobController::class,'modifica'])->name('admin_locatie_job_modifica');

    Route::get('/admin/locatie-job/stergere/{id}',[AdminLocatieJobController::class,'stergere'])->name('admin_locatie_job_stergere');



    Route::get('/admin/salariu-job/vizualizare',[AdminIntervalSalariuJobController::class,'index'])->name('admin_salariu_job');

    Route::get('/admin/salariu-job/creare',[AdminIntervalSalariuJobController::class,'creeaza'])->name('admin_salariu_job_creeaza');

    Route::post('/admin/salariu-job/salvare',[AdminIntervalSalariuJobController::class,'salveaza'])->name('admin_salariu_job_salveaza');

    Route::get('/admin/salariu-job/editare/{id}',[AdminIntervalSalariuJobController::class,'editare'])->name('admin_salariu_job_editare');

    Route::post('/admin/salariu-job/modifica/{id}',[AdminIntervalSalariuJobController::class,'modifica'])->name('admin_salariu_job_modifica');

    Route::get('/admin/salariu-job/stergere/{id}',[AdminIntervalSalariuJobController::class,'stergere'])->name('admin_salariu_job_stergere');




    Route::get('/admin/tip-job/vizualizare',[AdminTipuriJobController::class,'index'])->name('admin_tip_job');

    Route::get('/admin/tip-job/creare',[AdminTipuriJobController::class,'creeaza'])->name('admin_tip_job_creeaza');

    Route::post('/admin/tip-job/salvare',[AdminTipuriJobController::class,'salveaza'])->name('admin_tip_job_salveaza');

    Route::get('/admin/tip-job/editare/{id}',[AdminTipuriJobController::class,'editare'])->name('admin_tip_job_editare');

    Route::post('/admin/tip-job/modifica/{id}',[AdminTipuriJobController::class,'modifica'])->name('admin_tip_job_modifica');

    Route::get('/admin/tip-job/stergere/{id}',[AdminTipuriJobController::class,'stergere'])->name('admin_tip_job_stergere');




    Route::get('/admin/experienta-job/vizualizare',[AdminExperientaJobController::class,'index'])->name('admin_experienta_job');

    Route::get('/admin/experienta-job/creare',[AdminExperientaJobController::class,'creeaza'])->name('admin_experienta_job_creeaza');

    Route::post('/admin/experienta-job/salvare',[AdminExperientaJobController::class,'salveaza'])->name('admin_experienta_job_salveaza');

    Route::get('/admin/experienta-job/editare/{id}',[AdminExperientaJobController::class,'editare'])->name('admin_experienta_job_editare');

    Route::post('/admin/experienta-job/modifica/{id}',[AdminExperientaJobController::class,'modifica'])->name('admin_experienta_job_modifica');

    Route::get('/admin/experienta-job/stergere/{id}',[AdminExperientaJobController::class,'stergere'])->name('admin_experienta_job_stergere');







    Route::get('/admin/locatie-companie/vizualizare',[AdminLocatieCompanieController::class,'index'])->name('admin_locatie_companie');

    Route::get('/admin/locatie-companie/creare',[AdminLocatieCompanieController::class,'creeaza'])->name('admin_locatie_companie_creeaza');

    Route::post('/admin/locatie-companie/salvare',[AdminLocatieCompanieController::class,'salveaza'])->name('admin_locatie_companie_salveaza');

    Route::get('/admin/locatie-companie/editare/{id}',[AdminLocatieCompanieController::class,'editare'])->name('admin_locatie_companie_editare');

    Route::post('/admin/locatie-companie/modifica/{id}',[AdminLocatieCompanieController::class,'modifica'])->name('admin_locatie_companie_modifica');

    Route::get('/admin/locatie-companie/stergere/{id}',[AdminLocatieCompanieController::class,'stergere'])->name('admin_locatie_companie_stergere');

    


    Route::get('/admin/domeniu-companie/vizualizare',[AdminDomeniuCompanieController::class,'index'])->name('admin_domeniu_companie');

    Route::get('/admin/domeniu-companie/creare',[AdminDomeniuCompanieController::class,'creeaza'])->name('admin_domeniu_companie_creeaza');

    Route::post('/admin/domeniu-companie/salvare',[AdminDomeniuCompanieController::class,'salveaza'])->name('admin_domeniu_companie_salveaza');

    Route::get('/admin/domeniu-companie/editare/{id}',[AdminDomeniuCompanieController::class,'editare'])->name('admin_domeniu_companie_editare');

    Route::post('/admin/domeniu-companie/modifica/{id}',[AdminDomeniuCompanieController::class,'modifica'])->name('admin_domeniu_companie_modifica');

    Route::get('/admin/domeniu-companie/stergere/{id}',[AdminDomeniuCompanieController::class,'stergere'])->name('admin_domeniu_companie_stergere');


    Route::get('/admin/marime-companie/vizualizare',[AdminMarimeCompanieController::class,'index'])->name('admin_marime_companie');

    Route::get('/admin/marime-companie/creare',[AdminMarimeCompanieController::class,'creeaza'])->name('admin_marime_companie_creeaza');

    Route::post('/admin/marime-companie/salvare',[AdminMarimeCompanieController::class,'salveaza'])->name('admin_marime_companie_salveaza');

    Route::get('/admin/marime-companie/editare/{id}',[AdminMarimeCompanieController::class,'editare'])->name('admin_marime_companie_editare');

    Route::post('/admin/marime-companie/modifica/{id}',[AdminMarimeCompanieController::class,'modifica'])->name('admin_marime_companie_modifica');

    Route::get('/admin/marime-companie/stergere/{id}',[AdminMarimeCompanieController::class,'stergere'])->name('admin_marime_companie_stergere');

});
