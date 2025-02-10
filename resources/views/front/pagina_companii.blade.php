@extends('front.layout.sablon')

@section('seo_title'){{$date_pagina_diverse->seo_titlu_pagina_companii }}@endsection
@section('seo_meta_description'){{  $date_pagina_diverse->seo_descriere_pagina_companii }}@endsection

@section('continut')

<div class="page-top"style="background-image:  url('{{ asset('uploads/banner.jpg')}}')">
        <div class="bg"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>{{ $date_pagina_diverse->titlu_pagina_companii }}</h2>
                </div>
            </div>
        </div>
</div>

<div class="job-result">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="job-filter">
                    <form action="{{ url('companii') }}" method="get">
                    <div class="widget">
                        <h2>Nume companie</h2>
                        <input type="text" name="nume_companie" class="form-control" placeholder="Cuvinte Cheie" value="{{ $nume_formular }}"/>
                    </div>

                    <div class="widget">
                        <h2>Domeniul Companiei</h2>
                        <select name="nume_domeniu" class="form-control select2">
                            <option value="">Toate Domeniile</option>
                            @foreach ($domenii_companie as $element)
                            <option value="{{ $element->id }}" @if($domeniu_formular == $element->id) selected @endif>{{ $element->nume_domeniu }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="widget">
                        <h2>Locatie Companie</h2>
                        <select name="nume_locatie" class="form-control select2">
                            <option value="">Orice Locatie</option>
                            @foreach ($locatii_companie as $element)
                            <option value="{{ $element->id }}" @if($locatie_formular == $element->id) selected @endif>{{ $element->nume_locatie }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="widget">
                        <h2>Numar Angajati </h2>
                        <select name="numar_angajati" class="form-control select2">
                            <option value="">Orice Numar De Angajati</option>
                            @foreach ($angajati_companie as $element)
                            <option value="{{ $element->id }}" @if($angajati_formular == $element->id) selected @endif>{{ $element->numar_angajati }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="filter-button">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-search"></i> Filtreaza</a>
                        </button>
                    </div>

                    </form>
                </div>
            </div>
            <div class="col-md-9">
                <div class="job">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="search-result-header">
                                    <i class="fas fa-search"></i> Rezultatele Cautarii
                                </div>
                            </div>
                            @if(!$companii->count())
                                <div class="text-danger">Nu au fost gasite anunturi cu aceste cerinte</div>
                            @else
                            @foreach($companii as $element)
                            <div class="col-md-12">
                                <div class="item d-flex justify-content-start">
                                    <div class="logo">
                                        <img src="{{ asset('uploads/'.$element->logo) }}"alt=""/>
                                    </div>
                                    <div class="text">
                                        <h3>
                                            <a href="{{ route('detalii_companie',$element->id) }}">{{ $element->nume_companie}}</a>
                                        </h3>
                                        <div class="detail-1 d-flex justify-content-start">
                                            <div class="category">
                                                {{$element->rCompanieDomain->nume_domeniu}}
                                             </div>
                                             <div class="location">
                                                 {{$element->rCompanieLocation->nume_locatie}}
                                             </div>
                                        </div>
                                        <div class="detail-2">
                                            @php
                                            echo substr($element->descriere,0,500).'...'.'(Viziteaza pagina companiei pentru a citi mai mult)'; 
                                            @endphp
                                         {{-- {!! $element->descriere !!} --}}
                                        </div>
                                        <div class="open-position">
                                            @if($element->r_job_count == 1)
                                            <span class="badge bg-primary">{{ $element->r_job_count }} Anunt </span>
                                            @else
                                            <span class="badge bg-primary">{{ $element->r_job_count }} Anunturi </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <div class="col-md-12">
                                {{ $companii->appends($_GET)->links() }}
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection