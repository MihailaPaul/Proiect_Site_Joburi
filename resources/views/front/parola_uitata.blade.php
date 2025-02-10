@extends('front.layout.sablon')

@section('seo_title'){{ $date_pagina_diverse->seo_titlu_parola_uitata }}@endsection
@section('seo_meta_description'){{ $date_pagina_diverse->seo_descriere_parola_uitata}}@endsection

@section('continut')

<div class="page-top"style="background-image:  url('{{ asset('uploads/banner.jpg')}}')">
    <div class="bg"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>{{ $date_pagina_diverse->titlu_parola_uitata}}</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="page-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                    <div class="login-form">
                        <div class="mb-3">
                            <label for="" class="form-label"
                                >Email Address</label
                            >
                            <input type="text" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <button
                                type="submit"
                                class="btn btn-primary bg-website"
                            >
                                Submit
                            </button>
                            <a href="{{ route('login') }}" class="primary-color"
                                >Back to Login Page</a
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


   

@endsection