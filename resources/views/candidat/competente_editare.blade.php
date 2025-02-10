@extends('front.layout.sablon')

{{-- @section('seo_title'){{ $date_pagina_articol->SEO_titlu }}@endsection
@section('seo_meta_description'){{ $date_pagina_articol->SEO_descriere }}@endsection --}}

@section('continut')

<div class="page-top"style="background-image: url('{{ asset('uploads/banner.jpg')}}')">
            <div class="bg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Modifica Competenta</h2>
                    </div>
                </div>
            </div>
        </div>


<div class="page-content user-panel">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <div class="card">
                   @include('candidat.layout.meniu_lateral')
                </div>
            </div>

            <div class="col-lg-9 col-md-12">
                <a href="{{ route('competente_candidat') }}" class="btn btn-primary btn-sm mb-2"><i class="fas fa-arrow-left"></i> Inapoi la competente/certificari</a>
                <form action="{{ route('competente_candidat_actualizare',$competente_individuala->id) }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="">Competenta/Abilitati</label>
                            <div class="form-group">
                                <input type="text" name="competente" class="form-control" value="{{ $competente_individuala->competente }}"/>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="">Nivel Experienta(Ex. Avansat/Mediu/Incepator)</label>
                            <div class="form-group">
                                <input type="text" name="nivel_competente" class="form-control" value="{{ $competente_individuala->nivel_competente }}"/>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Salveaza"/>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
         
@endsection