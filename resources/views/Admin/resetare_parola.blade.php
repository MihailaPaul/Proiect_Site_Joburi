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
{{-- Codul responsabil de formularul de uitare parola --}}
<body>
<div id="app">
    {{-- Structu ra este foarte asemanatoare cu pagina login vezi acolo comentariu mai detaliat --}}
    <div class="main-wrapper">
        <section class="section">
            <div class="container container-login">
                <div class="row">
                    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="card card-primary border-box">
                            <div class="card-header card-header-auth">
                                <h4 class="text-center">Resetare Parola</h4>
                            </div>
                            <div class="card-body card-body-auth">
                                <form method="POST" action="{{ route('resetare_parola_admin_submit') }}">

                                     {{-- Directiva @csrf este un middlleware integrat in laravel responsabil de a proteja formularul si pagina web de editare profil de atacuri de tip CSRF
                                     prin faptul ca genereaza un token si il adauga la formular sub forma unui camp de tip input ascuns.
                                     La trimiterea formularului, toke-ul este validat pentru a se asigura ca trimiterea formularului vine de la un utilizatoor autorizat --}}
                                    @csrf
                                    {{-- Se salveaza valorea de token a sesiunii  intr-o variabila ascunsa de vederea utilizatorului pentru a facilita resetarea parolei --}}
                                    <input type="hidden" name="Token" value="{{ $Token }}">
                                    {{-- Se salveaza valorea din Email a sesiunii  intr-o variabila ascunsa de vederea utilizatorului pentru a facilita resetarea parolei --}}
                                    <input type="hidden" name="Email" value="{{ $Email }}"> 


                                    {{-- Campul Parola Noua --}}
                                    <div class="form-group">
                                        <input type="password" class="form-control @error('Parola') is-invalid @enderror" name="Parola" placeholder="Parola Noua" value="" autofocus>
                                        @error('Parola')
                                        {{-- Se creeaza o structura pentru afisarea erorilor in front end care afiseaza mesajul stocat in variabila error  --}}
                                      <div class="alert alert-danger">
                                          {{ $message }}
                                      </div>
                                      @enderror
                                    </div>
                                    {{-- Campul Reintroduceti parola --}}
                                    <div class="form-group">
                                        <input type="password" class="form-control @error('Reintroduceti_Parola') is-invalid @enderror" name="Reintroduceti_Parola" placeholder="Reintroduceti Parola Noua">
                                        @error('Reintroduceti_Parola')
                                        {{-- Se creeaza o structura pentru afisarea erorilor in front end care afiseaza mesajul stocat in variabila error  --}}
                                      <div class="alert alert-danger">
                                          {{ $message }}
                                      </div>
                                      @enderror
                                    </div>
                                    {{-- Butonul care initiaza salvarea parolei noi --}}
                                      <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                                            Salveaza Noua Parola
                                        </button>
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
@include('Admin.layout.scripts_footer')

</body>
</html>