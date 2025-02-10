@extends('front.layout.sablon')

{{-- @section('seo_title'){{ $date_pagina_articol->SEO_titlu }}@endsection
@section('seo_meta_description'){{ $date_pagina_articol->SEO_descriere }}@endsection --}}

@section('continut')

<div class="page-top"style="background-image: url('{{ asset('uploads/banner.jpg')}}')">
            <div class="bg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Creare Anunt Job</h2>
                    </div>
                </div>
            </div>
        </div>


<div class="page-content user-panel">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <div class="card">
                   @include('companie.layout.meniu_lateral')
                </div>
            </div>
            <div class="col-lg-9 col-md-12">
                <form action="{{ route('salvare_joburi_create') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="" class="form-label"> Titlu </label>
                            <input type="text" class="form-control" name="titlu" value="{{ old('titlu') }}"/>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label"> Descriere </label>
                        <textarea name="descriere" class="form-control editor" cols="30" rows="10">{{ old('descriere') }}</textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="" class="form-label"> Responsabilitati </label>
                            <textarea name="responsabilitati" class="form-control editor" cols="30" rows="10">{{ old('responsabilitati') }}</textarea>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="" class="form-label"> Cerinte </label>
                            <textarea name="cerinte" class="form-control editor" cols="30" rows="10">{{ old('cerinte') }}</textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="" class="form-label"> Educatia Necesara </label>
                            <textarea name="educatie" class="form-control editor" cols="30" rows="10">{{ old('educatie') }}</textarea>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="" class="form-label">Beneficii</label>
                            <textarea name="beneficii" class="form-control editor" cols="30" rows="10">{{ old('beneficii') }}</textarea>
                        </div>
                    </div>

                    <div class="row">
                        
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="" class="form-label">Categoria Pozitiei</label>
                            <select name="job_category_id" class="form-control select2">
                                @foreach($categorii_job as $element)
                                <option value="{{ $element->id }}">{{ $element->nume_categorie }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="" class="form-label">Locatia Pozitiei</label>
                            <select name="job_location_id" class="form-control select2">
                                @foreach($locatii_job as $element)
                                <option value="{{ $element->id }}">{{ $element->nume_locatie }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="" class="form-label">Tipul Pozitiei</label>
                            <select name="job_type_id" class="form-control select2">
                                @foreach($tipuri_job as $element)
                                <option value="{{ $element->id }}">{{ $element->nume_tip }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="" class="form-label">Experienta dorita pentru pozitie</label>
                            <select name="job_experience_id" class="form-control select2">
                                @foreach($experienta_job as $element)
                                <option value="{{ $element->id }}">{{ $element->nume_experienta }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="" class="form-label">Intervalul Salarial Oferit</label>
                            <select name="job_salary_range_id" class="form-control select2">
                                @foreach($salarii_job as $element)
                                <option value="{{ $element->id }}">{{ $element->sume}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="" class="form-label">Numar Pozitii</label>
                            <input type="number" class="form-control" name="locuri" min='1' value="{{ old('locuri') ? old('locuri') : '1' }}"/>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="" class="form-label">Location Pozitie</label>
                            <textarea name="map_code" class="form-control h-150" cols="30" rows="10"></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="" class="form-label">Promovare</label>
                            <select name="este_promovat" class="form-control select2">
                                <option value="0">Nu</option>
                                <option value="1">Da</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <input type="submit" class="btn btn-primary" value="Posteaza"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection