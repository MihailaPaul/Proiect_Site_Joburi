@extends('front.layout.sablon')

{{-- @section('seo_title'){{ $date_pagina_articol->SEO_titlu }}@endsection
@section('seo_meta_description'){{ $date_pagina_articol->SEO_descriere }}@endsection --}}

@section('continut')

<div class="page-top"style="background-image: url('{{ asset('uploads/banner.jpg')}}')">
            <div class="bg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Modifica Documente</h2>
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
                <a href="{{ route('documente_candidat') }}" class="btn btn-primary btn-sm mb-2"><i class="fas fa-arrow-left"></i> Inapoi la tabelul cu documente</a>
                <form action="{{ route('documente_candidat_actualizare',$document_individual->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="">Titlu</label>
                            <div class="form-group">
                                <input type="text" name="titlu" class="form-control" value="{{ $document_individual->titlu }}"/>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="">Documentul Incarcat</label>
                            <div class="form-group">
                                <a href="{{ asset('uploads/'.$document_individual->fisier) }}" target="_blank">{{ $document_individual->fisier }}</a>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="">Incarca Documentul Actualizat</label>
                            <div class="form-group">
                                <input type="file" name="fisier"/>
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