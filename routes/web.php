<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\TablouAdminController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Front\AcasaController;
use App\Http\Controllers\Admin\AdminPaginaAcasaController;
use App\Http\Controllers\Admin\AdminCategorieJobController;
use App\Http\Controllers\Front\CategoriiJobController;
use App\Http\Controllers\Admin\AdminAlegereController;

Route::get('/', [AcasaController::class, 'index'])->name('acasa');
Route::get('categorii-job', [CategoriiJobController::class,'categorii'])->name('categorii_job');






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
});
