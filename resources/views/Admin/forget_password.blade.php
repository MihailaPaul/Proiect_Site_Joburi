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
                                <form method="POST" action="{{ route('admin_parola_uitata_submit') }}">
                                    @csrf

                                  

                                    <div class="form-group">
                                        <input type="text" class="form-control @error('Email') is-invalid @enderror" name="Email" placeholder="Adresa Email" value="" autofocus>
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
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                                            Trimite Link de resetare parola
                                        </button>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <a href="{{ route('admin_login') }}">
                                                Inapoi la pagina de log in
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
@include('Admin.layout.scripts_footer')

</body>
</html>