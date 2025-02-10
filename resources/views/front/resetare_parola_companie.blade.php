@extends('front.layout.sablon')

{{-- @section('seo_title'){{ $date_pagina_diverse->seo_titlu_parola_uitata }}@endsection
@section('seo_meta_description'){{ $date_pagina_diverse->seo_descriere_parola_uitata}}@endsection --}}

@section('continut')

<div class="page-top"style="background-image:  url('{{ asset('uploads/banner.jpg')}}')">
    <div class="bg"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Resetare Parola</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="page-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                    <div class="login-form">
                        <form action="{{ route('trimitere_resetare_parola_companie',$token,$email) }}" method="post">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">
                        <input type="hidden" name="email" value="{{ $email }}">

                        <div class="mb-3">
                            <label for="" class="form-label">Noua Parola</label>
                            <input type="password" class="form-control" name="parola">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Rescrie Parola</label>
                            <input type="password" class="form-control" name="rescrie_parola">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary bg-website">
                                Reseteaza
                            </button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


   

@endsection