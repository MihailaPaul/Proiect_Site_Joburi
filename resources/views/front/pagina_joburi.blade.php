@extends('front.layout.sablon')

@section('seo_title'){{$date_pagina_diverse->seo_titlu_pagina_joburi }}@endsection
@section('seo_meta_description'){{  $date_pagina_diverse->seo_descriere_pagina_joburi }}@endsection

@section('continut')

<div class="page-top"style="background-image:  url('{{ asset('uploads/banner.jpg')}}')">
        <div class="bg"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>{{ $date_pagina_diverse->titlu_pagina_joburi }}</h2>
                </div>
            </div>
        </div>
</div>

<div class="job-result">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="job-filter">
                    <form action="{{ url('locuri-de-munca') }}" method="get">
                    <div class="widget">
                        <h2>Cauta Job</h2>
                        <input type="text" name="titlu" class="form-control" placeholder="Cuvinte Cheie" value="{{ $titlu_formular }}"/>
                    </div>

                    {{-- Afisarea selectorului pentru categorii --}}
                    <div class="widget">
                        <h2>Categorie Job</h2>
                        <select name="nume_categorie" class="form-control select2">
                            <option value="">Toate Categoriile</option>
                            @foreach ($categorii_job as $element)
                            <option value="{{ $element->id }}" @if($categorie_formular == $element->id) selected @endif>{{ $element->nume_categorie }}</option>
                            @endforeach
                        </select>
                    </div>
                   {{-- Afisarea selectorului pentru locatii --}}
                    <div class="widget">
                        <h2>Locatie Job</h2>
                        <select name="nume_locatie" class="form-control select2">
                            <option value="">Orice Locatie</option>
                            @foreach ($locatii_job as $element)
                            <option value="{{ $element->id }}" @if($locatie_formular == $element->id) selected @endif>{{ $element->nume_locatie }}</option>
                            @endforeach
                        </select>
                    </div>
                    {{-- Afisarea selectorului pentru tipurile jobului --}}    
                    <div class="widget">
                        <h2>Tipul Jobului</h2>
                        <select name="nume_tip" class="form-control select2">
                            <option value="">Toate Tipurile</option>
                            @foreach ($tipuri_job as $element)
                            <option value="{{ $element->id }}" @if($tip_formular == $element->id) selected @endif>{{ $element->nume_tip }}</option>
                            @endforeach
                        </select>
                    </div>
                    {{-- Afisarea selectorului pentru experienta --}}
                    <div class="widget">
                        <h2>Experienta Necesara</h2>
                        <select name="nume_experienta" class="form-control select2">
                            <option value="">Orice Nivel de Experienta</option>
                            @foreach ($experienta_job as $element)
                            <option value="{{ $element->id }}" @if($experienta_formular == $element->id) selected @endif>{{ $element->nume_experienta }}</option>
                            @endforeach
                        </select>
                    </div>
                    {{-- Afisarea selectorului pentru intervalul salarial --}}
                    <div class="widget">
                        <h2>Intervalul Salarial</h2>
                        <select name="sume" class="form-control select2">
                            <option value="">Orice Interval Salarial</option>
                            @foreach ($salarii_job as $element)
                            <option value="{{ $element->id }}" @if($salariu_formular == $element->id) selected @endif>{{ $element->sume }}</option>
                            @endforeach
                        </select>
                    </div>

                    {{-- Butonul de filtrare --}}
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
                            Verificarea 
                            @if(!$joburi->count())
                                <div class="text-danger">Nu au fost gasite anunturi cu aceste cerinte</div>
                            @else
                            @foreach($joburi as $element)
                            @php 
                                $id_companie = $element->rCompany->id;
                                $date_comanda = \App\Models\Order::where('company_id',$id_companie)->where('status',1)->first();
    
                                if(date('Y-m-d') > date('Y-m-d',strtotime($date_comanda->data_expirare))){
                                    continue;
                                }
                            @endphp
                            <div class="col-md-12">
                                <div class="item d-flex justify-content-start">
                                    <div class="logo">
                                        <img src="{{ asset('uploads/'.$element->rCompany->logo) }}"alt=""/>
                                    </div>
                                    <div class="text">
                                        <h3><a href= "{{route ('detalii_job',$element->id) }}"> {{$element->titlu}}, {{$element->rCompany->nume_companie}}</a></h3>
                                        <div class="detail-1 d-flex justify-content-start">
                                            <div class="category">
                                               {{$element->rJobCategory->nume_categorie}}
                                            </div>
                                            <div class="location">
                                                {{$element->rJobLocation->nume_locatie}}
                                            </div>
                                        </div>
                                        <div class="detail-2 d-flex justify-content-start">
                                            <div class="date">
                                               cu {{ $element->created_at->diffForHumans() }}
                                            </div>
                                            <div class="budget">
                                                {{$element->rJobSalaryRange->sume}}
                                            </div>
                                        </div>
                                        <div class="special d-flex justify-content-start">
                                            @if($element->este_promovat == 1)
                                            <div class="featured">
                                                Promovat
                                            </div>
                                            @endif
                                            <div class="type">
                                                {{$element->rJobType->nume_tip}}
                                            </div>
                                        </div>
                                        @if(!Auth::guard('companie')->check())
                                        <div class="bookmark">
                                            @if(Auth::guard('candidat')->check())
                                            @php
                                            $count = \App\Models\CandidatBookmark::where('candidate_id',Auth::guard('candidat')->user()->id)->where('job_id',$element->id)->count();    
                                            if($count>0) {
                                                $favorite_status = "active";
                                            }else{
                                                $favorite_status = '';
                                            }
                                            @endphp
                                        @else
                                            @php $favorite_status = ''; @endphp
                                        @endif
                                        <a href="{{ route('candidat_salvare_job',$element->id) }}"><i class="fas fa-bookmark {{  $favorite_status }}"></i></a>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <div class="col-md-12">
                                {{ $joburi->appends($_GET)->links() }}
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