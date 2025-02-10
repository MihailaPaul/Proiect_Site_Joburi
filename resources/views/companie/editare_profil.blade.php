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
                   @include('companie.layout.meniu_lateral')
                </div>
            </div>
            <div class="col-lg-9 col-md-12">
                <form action="{{ route('salvare_editare_profil_companie') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="">Logo Existent</label>
                            <div class="form-group">

                                @if(Auth::guard('companie')->user()->logo == '')
                                <img src="{{ asset('uploads/logo_implicit_companie.jpg') }}" class="w-100"/>
                                <br>
                                <span class="text-danger">Momentan, nu a fost incarcata emblema companiei!</span>
                                @else
                                <img src="{{ asset('uploads/'.Auth::guard('companie')->user()->logo) }}" alt="" class="logo"/>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="">Schimba/Incarca Emblema Companiei</label>
                            <div class="form-group">
                                <input type="file" name="logo" />
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for=""> Numele Companiei </label>
                            <div class="form-group">
                                <input type="text" name="nume_companie" class="form-control" value="{{ Auth::guard('companie')->user()->nume_companie }}"/>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for=""> Nume Reprezentant Companie </label>
                            <div class="form-group">
                                <input type="text" name="nume_reprezentant" class="form-control" value="{{ Auth::guard('companie')->user()->nume_reprezentant }}"/>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for=""> Username </label>
                            <div class="form-group">
                                <input type="text" name="nume_utilizator" class="form-control" value="{{ Auth::guard('companie')->user()->nume_utilizator }}"/>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for=""> Email </label>
                            <div class="form-group">
                                <input type="text" name="email" class="form-control" value="{{ Auth::guard('companie')->user()->email }}"/>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for=""> Numar de Telefon </label>
                            <div class="form-group">
                                <input type="text" name="numar_telefon" class="form-control" value="{{ Auth::guard('companie')->user()->numar_telefon }}"/>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for=""> Adresa Sediu Companie </label>
                            <div class="form-group">
                                <input type="text" name="adresa" class="form-control" value="{{ Auth::guard('companie')->user()->adresa }}"/>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for=""> Tara </label>
                            <div class="form-group">
                                <select name="companie_location_id" class="form-control select2">

                                    @foreach ($locatii_companii as $element)
                                    <option value="{{ $element->id }}" @if($element->id == Auth::guard('companie')->user()->companie_location_id ) selected 
                                        @endif>{{ $element->nume_locatie }}
                                    </option>
                                    @endforeach
                                    
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for=""> Domeniu Companie </label>
                            <div class="form-group">
                                <select name="companie_domain_id" class="form-control select2">
                                    
                                    @foreach ($domenii_companii as $element)
                                    <option value="{{ $element->id }}" @if($element->id == Auth::guard('companie')->user()->companie_domain_id ) selected 
                                        @endif>{{ $element->nume_domeniu }}
                                    </option>
                                    @endforeach
                                    
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for=""> Numar Angajati Companie </label>
                            <div class="form-group">
                                <select name="companie_size_id" class="form-control select2">
                                    
                                    @foreach ($marimi_companii as $element)
                                    <option value="{{ $element->id }}" @if($element->id == Auth::guard('companie')->user()->companie_size_id ) selected 
                                        @endif>{{ $element->numar_angajati }}
                                    </option>
                                    @endforeach
                                    
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for=""> Website Firma </label>
                            <div class="form-group">
                                <input type="text" name="website" class="form-control" value="{{ Auth::guard('companie')->user()->website }}"/>
                            </div>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for=""> Descriere Companie</label>
                            <textarea name="descriere" class="form-control editor" cols="30" rows="10">{{ Auth::guard('companie')->user()->descriere }}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="">Cod Locatie (Google Map Code)</label>
                            <div class="form-group">
                                <textarea name="map_code"class="form-control h-150" cols="30" rows="10">{{ Auth::guard('companie')->user()->map_code }}</textarea>
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="">Facebook</label>
                            <div class="form-group">
                                <input type="text" name="facebook" class="form-control" value="{{ Auth::guard('companie')->user()->facebook }}"/>
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="">Twitter</label>
                            <div class="form-group">
                                <input type="text" name="twitter" class="form-control" value="{{ Auth::guard('companie')->user()->twitter }}"/>
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="">Linkedin</label>
                            <div class="form-group">
                                <input type="text" name="linkedin" class="form-control" value="{{ Auth::guard('companie')->user()->linkedin }}"/>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Instagram</label>
                            <div class="form-group">
                                <input type="text" name="instagram" class="form-control" value="{{ Auth::guard('companie')->user()->instagram }}"/>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Modifica"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection