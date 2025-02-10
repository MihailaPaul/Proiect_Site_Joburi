@extends('front.layout.sablon')

{{-- @section('seo_title'){{ $date_pagina_articol->SEO_titlu }}@endsection
@section('seo_meta_description'){{ $date_pagina_articol->SEO_descriere }}@endsection --}}

@section('continut')

<div class="page-top"style="background-image: url('{{ asset('uploads/banner.jpg')}}')">
            <div class="bg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Modifica Educatie/Certificare</h2>
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
                <a href="{{ route('educatie_candidat') }}" class="btn btn-primary btn-sm mb-2"><i class="fas fa-arrow-left"></i> Inapoi la educatie/certificari</a>
                <form action="{{ route('educatie_candidat_actualizare',$educatie_individuala->id) }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="">Nivel Educatie(Ex. Liceu/Facultate/Master/Doctorat)</label>
                            <div class="form-group">
                                <input type="text" name="nivel_invatamant" class="form-control" value="{{ $educatie_individuala->nivel_invatamant }}"/>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="">Institutie</label>
                            <div class="form-group">
                                <input type="text" name="institutie" class="form-control" value="{{ $educatie_individuala->institutie }}"/>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="">Domeniu</label>
                            <div class="form-group">
                                <input type="text" name="domeniu" class="form-control" value="{{ $educatie_individuala->domeniu }}"/>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="">An Finalizare(In cazul studentilor se mentioneaza anul in care urmeaza sa finalizeze)</label>
                            <div class="form-group">
                                <input type="text" name="data_terminare" class="form-control" value="{{ $educatie_individuala->data_terminare }}"/>
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