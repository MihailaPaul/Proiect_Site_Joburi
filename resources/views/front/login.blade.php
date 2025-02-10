@extends('front.layout.sablon')

@section('seo_title'){{ $date_pagina_diverse->seo_titlu_logare }}@endsection
@section('seo_meta_description'){{ $date_pagina_diverse->seo_descriere_logare}}@endsection

@section('continut')

<div class="page-top"style="background-image:  url('{{ asset('uploads/banner.jpg')}}')">
    <div class="bg"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>{{ $date_pagina_diverse->titlu_logare}}</h2>
                </div>
            </div>
        </div>
    </div>
{{-- Interfata de autentificare pentru utilizatori --}}
    <div class="page-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                    <div class="login-form">
                        <ul class="nav nav-pills mb-3" id="pills-tab"role="tablist">
                            {{-- Butonul de selectare pagina de autentificare candidat --}}
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" 
                                    role="tab" aria-controls="pills-home" aria-selected="true">
                                    <i class="far fa-user"></i> Candidat
                                </button>
                            </li>
                             {{-- Butonul de selectare pagina de autentificare companie --}}
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button"
                                    role="tab" aria-controls="pills-profile" aria-selected="false">
                                    <i class="fas fa-briefcase"></i> Companie
                                </button>
                            </li>
                        </ul>
                        {{-- Formularul de autentificare pentru candidat --}}
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home"  role="tabpanel" aria-labelledby="pills-home-tab"  tabindex="0">

                            <form action="{{ route('trimitere_logare_candidat') }}" method="">
                            @csrf

                            <div class="mb-3">
                                <label for="" class="form-label">Nume De Utilizator</label >
                                <input type="text" class="form-control" name="nume_utilizator" value="{{old('nume_utilizator')}}"/>
                            </div>                                                                 

                            <div class="mb-3">
                                <label for="" class="form-label"> Parola </label>
                                <input type="password" class="form-control" name="parola"/>
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary bg-website">
                                    Login
                                </button>
                                <a href="{{route('parola_uitata_candidat')}}" class="primary-color">Ai uitat Parola? </a>
                            </div>
                            </form>
                        {{-- Formularul de autentificare pentru companie --}}
                        </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0" >
                                <form action="{{ route('trimitere_logare_companie') }}" method="">
                                 @csrf
                              
                                <div class="mb-3">
                                    <label for="" class="form-label">Nume De Utilizator</label >
                                    <input type="text" class="form-control" name="nume_utilizator" value="{{old('nume_utilizator')}}" />
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label"> Parola </label>
                                    <input type="password" class="form-control" name="parola"/>
                                </div>

                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary bg-website">
                                        Login
                                    </button>

                                    <a href="{{route('parola_uitata_companie')}}" class="primary-color">
                                        Ai uitat Parola?
                                    </a>
                                </div>
                                </form>
                            </div>
                        </div>

                        <div class="mb-3">
                            <a href="{{ route('inregistrare') }}" class="primary-color"> Nu ai cont? Creeaza Acum</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection