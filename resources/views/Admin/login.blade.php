<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

    <link rel="icon" type="image/png" href="uploads/favicon.png">

    <title>Tablou Admin</title>

    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700&display=swap" rel="stylesheet">

    @include ('Admin.layout.styles')

    @include ('Admin.layout.scripts')
</head>
{{-- Codul responsabil de formularul de autentificare  --}}
<body>
<div id="app">
    {{-- Definirea intiala a structurii formularului care ajuta la stilizare --}}
    <div class="main-wrapper">
        <section class="section">
            <div class="container container-login">
                <div class="row">
                    {{-- Div ul de mai jos este responsabil pentru afisarea formularului de autentificare in mijlocul paginii web --}}
                    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="card card-primary border-box">
                            <div class="card-header card-header-auth">
                                {{-- Titlul formularului --}}
                                <h4 class="text-center">Logare Tablou Admin</h4>
                            </div>
                            {{-- Corpul formularului in care sunt introduse campurile care se doresc a fii coompletate de user --}}
                            <div class="card-body card-body-auth">
                                {{-- Se afiseaza un mesaj de succes. In momentul in care se face resetarea de parola si mail-ul
                                    
                                    a fost trimis se face trimiterea inapoi la pagina de login cu mesajul de succes  --}}
                                @if(session()->get('succes'))
                                <div class="text-success">
                                    {{ session()->get('succes') }}
                                </div>
                                @endif

                                <form method="POST" action="{{ route('admin_login_submit') }}">
                                     {{-- Directiva @csrf este un middlleware integrat in laravel responsabil de a proteja formularul si pagina web de editare profil de atacuri de tip CSRF
                                     prin faptul ca genereaza un token si il adauga la formular sub forma unui camp de tip input ascuns.
                                     La trimiterea formularului, toke-ul este validat pentru a se asigura ca trimiterea formularului vine de la un utilizatoor autorizat --}}
                                    @csrf
                                    {{-- Creerea campului de introducere mail cu verficare de format mail integrata --}}
                                    <div class="form-group">
                                         {{-- Se creaza o structura care face parte din formular-ul de login responsabile de campul Email --}}
                                        <input type="text" class="form-control @error('Email') is-invalid @enderror" name="Email" placeholder="Adresa Mail" value="{{ old('Email') }}" autofocus>
                                         {{-- Se verifica daca exista errori la validarea email ului   --}}
                                        @error('Email')
                                          {{-- Se creeaza o structura pentru afisarea erorilor in front end care afiseaza mesajul stocat in variabila error  --}}
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                        {{-- Daca sesiunea intampina o erroare de autentificare se afiseaza mesajul din variabila eroare --}}
                                        @if(session()->get('eroare'))
                                        <div class="alert alert-danger">
                                            {{ session()->get('eroare') }}
                                        </div>
                                        @endif
                                    </div>
                                    {{-- Creearea campului de introducere parola cu formatul cenzurat de parola --}}
                                    {{-- Se creaza o structura care face parte din formular-ul de login responsabila de campul parola --}}
                                    <div class="form-group">
                                        <input type="password" class="form-control  @error('Parola') is-invalid @enderror" name="Parola"  placeholder="Parola">
                                        {{-- Se verifica daca exista errori la validarea parolei  --}}
                                        @error('Parola')
                                        {{-- Se creeaza o structura pentru afisarea erorilor in front end care afiseaza mesajul stocat in variabila message  --}}
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>

                                        @enderror
                                    </div>
                                    {{-- Creearea butonului de log in care incepe procesul de verificare si logare --}}
                                    <div class="form-group">
                                        {{-- Clasele folosite pentru stilizarea butonului  --}}
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                                            {{-- Textul din interiorul butonului  --}}
                                            Login
                                        </button>
                                    </div>
                                    {{-- Se implementeaza link ul de parola uitata --}}
                                    <div class="form-group">
                                        <div>
                                            {{-- Se face trimiterrea catre pagina de uitare parola la apasarea link ului  --}}
                                            <a href="{{ route ('admin_forget_password')}}">
                                                {{-- Textul care reprezinta link ul --}}
                                                Parola Uitata?
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

@include('Admin\layout\scripts_footer')

</body>
</html>