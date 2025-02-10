@extends('front.layout.sablon')

{{-- @section('seo_title'){{ $date_pagina_articol->SEO_titlu }}@endsection
@section('seo_meta_description'){{ $date_pagina_articol->SEO_descriere }}@endsection --}}

@section('continut')

<div class="page-top"style="background-image: url('{{ asset('uploads/banner.jpg')}}')">
            <div class="bg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Modifica Experienta</h2>
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
                <a href="{{ route('experienta_candidat') }}" class="btn btn-primary btn-sm mb-2"><i class="fas fa-arrow-left"></i> Inapoi la tabelul cu experiente</a>
                <form action="{{ route('experienta_candidat_actualizare',$experienta_individuala->id) }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="">Companie</label>
                            <div class="form-group">
                                <input type="text" name="companie" class="form-control" value="{{ $experienta_individuala->companie }}"/>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="">Pozitie</label>
                            <div class="form-group">
                                <input type="text" name="pozitie" class="form-control" value="{{ $experienta_individuala->pozitie }}"/>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="">Data Inceput</label>
                            <div class="form-group">
                                <input type="text" name="data_inceput" class="form-control" value="{{ $experienta_individuala->data_inceput }}"/>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="">Data Finalizare</label>
                            <div class="form-group">
                                <input type="text" name="data_finalizare" class="form-control" value="{{ $experienta_individuala->data_finalizare }}"/>
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