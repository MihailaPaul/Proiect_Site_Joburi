{{-- Blade-ul care contine formularul de editare profil administrator --}}
@extends('Admin.layout.panou_baza')
{{-- Foloseste sablonul creat pentru a mentine stilul dorit --}}
@section('heading','Editeaza Profil')
{{-- In sectiunea de main_content se constuieste formularul de editare profil  --}}
@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    {{-- Formularul de editare este creeat cu ruta carre contine fuunctiile de verificare a completari acestuia
                    Si care sunt responsabile de efectuarea modificarilor in baza de date  --}}
                    {{-- Atributul enctype="multipart/form-data" asigura posibilitatea de a incarca fisiere --}}
                    <form action="{{ route('profil_admin_submit') }}" method="post" enctype="multipart/form-data">
                        {{-- Directiva @csrf este un middlleware integrat in laravel responsabil de a proteja formularul si pagina web de editare profil de atacuri de tip CSRF
                        prin faptul ca genereaza un token si il adauga la formular sub forma unui camp de tip input ascuns.
                         La trimiterea formularului, toke-ul este validat pentru a se asigura ca trimiterea formularului vine de la un utilizatoor autorizat --}}
                        @csrf
                        <div class="row">
                            {{-- Se creeaza partea de incarcare fiesere pentru poza care cu ajutorul functiei asset afisaeaza poza in timp real a user ului logat  --}}
                            <div class="col-md-3">
                                 {{-- Functia asset cauta in forder ul uploads cu ajutorul Auth care foloseste guard ul 'admin' pentru a retrage din baza de date
                                 informatiile legate de poza de profil, in acest caz numele pozei.
                                 Dupa ce a facut acest lucru in front end se afiseaza imagine din folder care a fost gasita cu numele din baza de date --}}
                                <img src="{{ asset('uploads/'.Auth::guard('admin')->user()->Poza) }}" alt="" class="profile-photo w_100_p">
                                <input type="file" class="form-control mt_10" name="Poza">
                            </div>
                            
                            <div class="col-md-9">
                                <div class="mb-4">

                                    {{-- Campul de Nume folosete functia Auth pentru a cauta numele utilizatorului logat si pentru al il afisa ca placeholder;
                                    Astfel utilizatorul nu este nevoi sa isi treaca din nou numele daca vrea sa schimbe doar email ul de exemplu --}}
                                    <label class="form-label">Nume *</label>
                                    <input type="text" class="form-control" name="Nume" value="{{Auth::guard('admin')->user()->Nume }}">
                                </div>
                                <div class="mb-4">
                                    {{-- Campul de mail folosete aceeasi functie pentru a afisa email ul in campul de email --}}
                                    <label class="form-label">Email *</label>
                                    <input type="text" class="form-control" name="Email" value="{{Auth::guard('admin')->user()->Email }}">
                                </div>
                                <div class="mb-4">
                                    {{-- Parola nu este afisata din motive de securitate, 
                                    astfel daca utilizatorul doreste schimbarea parolei trebuie sa trreaca prin tot procesul de verificare a acesteia --}}
                                    <label class="form-label">Parola</label>
                                    <input type="password" class="form-control" name="Parola">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Reintroduceti Parola</label>
                                    <input type="password" class="form-control" name="Reintroduceti_Parola">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label"></label>
                                    <button type="submit" class="btn btn-primary">Modifica Profil</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection