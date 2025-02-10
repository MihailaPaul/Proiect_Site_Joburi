@extends('front.layout.sablon')

{{-- @section('seo_title'){{ $date_pagina_articol->SEO_titlu }}@endsection
@section('seo_meta_description'){{ $date_pagina_articol->SEO_descriere }}@endsection --}}

@section('continut')

<div class="page-top"style="background-image: url('{{ asset('uploads/banner.jpg')}}')">
            <div class="bg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Editare Profil</h2>
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
                <form action="{{ route('actualizare_profil_candidat')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="">Poza Profil</label>
                            <div class="form-group">
                                @if(Auth::guard('candidat')->user()->poza == '')
                                <img src="{{ asset('uploads/poza_implicita_candidat.png') }}" class="user-photo"/>
                                <br>
                                <span class="text-danger">Momentan, nu a fost incarcata o poza de profil!</span>
                                @else
                                <img src="{{ asset('uploads/'.Auth::guard('candidat')->user()->poza) }}" alt="" class="user-photo"/>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="">Schimba/Incarca Poza de Profil</label>
                            <div class="form-group">
                                <input type="file" name="poza" />
                            </div>
                        </div>
                            <div class="col-md-6 mb-3">
                                <label for=""> Nume </label>
                                <div class="form-group">
                                    <input type="text" name="nume_candidat" class="form-control" value="{{Auth::guard('candidat')->user()->nume_candidat }}"/>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for=""> Ocupatie(ex.Student/Director/Programator/Fara Ocupatie) </label>
                                <div class="form-group">
                                    <input type="text" name="pozitie" class="form-control" value="{{Auth::guard('candidat')->user()->pozitie}}"/>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">Despre Tine </label>
                                <textarea name="biografie" class="form-control editor" cols="30" rows="10"> {{Auth::guard('candidat')->user()->biografie}}</textarea>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Username</label>
                                <div class="form-group">
                                    <input type="text" name="nume_utilizator" class="form-control" value="{{Auth::guard('candidat')->user()->nume_utilizator }}"/>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Email </label>
                                <div class="form-group">
                                    <input type="text" name="email" class="form-control" value="{{Auth::guard('candidat')->user()->email }}"/>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Numar Telefon</label>
                                <div class="form-group">
                                    <input type="text" name="numar_telefon" class="form-control" value="{{Auth::guard('candidat')->user()->numar_telefon }}"/>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Tara</label>
                                <div class="form-group">
                                    <input type="text" name="tara" class="form-control" value="{{Auth::guard('candidat')->user()->tara }}"/>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Adresa</label>
                                <div class="form-group">
                                    <input type="text" name="adresa" class="form-control" value="{{Auth::guard('candidat')->user()->adresa }}"/>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Oras</label>
                                <div class="form-group">
                                    <input type="text" name="oras" class="form-control" value="{{Auth::guard('candidat')->user()->oras }}"/>
                                </div>
                            </div>
            
                            <div class="col-md-6 mb-3">
                                <label for="">Gen</label>
                                <div class="form-group">
                                    <select name="gen" class="form-control select2">
                                        <option value="Masculin" @if(Auth::guard('candidat')->user()->gen == 'Masculin') selected @endif>Masculin</option>
                                        <option value="Feminin" @if(Auth::guard('candidat')->user()->gen == 'Feminin') selected @endif>Feminin</option>
                                        <option value="Altele" @if(Auth::guard('candidat')->user()->gen == 'Altele') selected @endif>Altele</option>
                                        <option value="Prefer sa nu mentionez" @if(Auth::guard('candidat')->user()->gen == 'Prefer sa nu mentionez') selected @endif>Prefer sa nu mentionez</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Data Nasterii</label>
                                <div class="form-group">
                                    <input type="text" name="data_nastere" class="form-control datepicker" value="{{Auth::guard('candidat')->user()->data_nastere }}"/>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" value="Modifica"/>
                                </div>
                            </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
         
@endsection