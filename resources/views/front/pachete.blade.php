@extends('front.layout.sablon')

@section('seo_title'){{ $date_pagina_pachete->SEO_titlu }}@endsection
@section('seo_meta_description'){{ $date_pagina_pachete->SEO_descriere }}@endsection

@section('continut')

<div class="page-top"style="background-image:  url('{{ asset('uploads/banner.jpg')}}')">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2> {{ $date_pagina_pachete->titlu }}</h2>
            </div>
        </div>
    </div>
</div>

<div class="page-content pricing">
    <div class="container">
        <div class="row pricing">

            @foreach($date_pachete as $element)

            <div class="col-lg-4 mb_30">
                <div class="card mb-5 mb-lg-0">
                    <div class="card-body">
                        <h2 class="card-title">{{$element->nume_pachet}}</h2>
                        <h3 class="card-price">{{$element->pret_pachet}} €</h3>
                        <h4 class="card-day">({{$element->durata_pachet}} De Zile)</h4>
                        <hr/>
                        <ul class="fa-ul">
                            <li>
                                Permite
                                @php
                                    if($element->numar_permis_joburi == -1) {

                                        $text="Un Numar Nelimitat de";
                                        $cod_simbol = "fas fa-check";

                                    } elseif ($element->numar_permis_joburi == 0){

                                        $text="Fara Acces La";
                                        $cod_simbol = "fas fa-times";

                                    } else {
                                        $text=$element->numar_permis_joburi;
                                        $cod_simbol = "fas fa-check";
                                    }
                                @endphp
                                <span class="fa-li"><i class="{{ $cod_simbol }}"></i></span>
                                {{ $text }} Joburi Postate 
                            </li>

                            <li>
                                @php
                                if($element->numar_permis_joburi_promovate == -1) {

                                    $text="Fara Limitare De";
                                    $cod_simbol = "fas fa-check";

                                } elseif ($element->numar_permis_joburi_promovate == 0){

                                    $text="Fara Acces La";
                                    $cod_simbol = "fas fa-times";

                                } else {
                                    $text=$element->numar_permis_joburi_promovate;
                                    $cod_simbol = "fas fa-check";
                                }
                            @endphp
                            <span class="fa-li"><i class="{{ $cod_simbol }}"></i></span>
                            {{ $text }} Joburi Promovate
                            </li>

                            <li>
                                @php
                                if($element->numar_permis_poze == -1) {

                                    $text="Fara Limitare De";
                                    $cod_simbol = "fas fa-check";

                                } elseif ($element->numar_permis_poze == 0){

                                    $text="Fara Acces La";
                                    $cod_simbol = "fas fa-times";

                                } else {
                                    $text=$element->numar_permis_poze;
                                    $cod_simbol = "fas fa-check";
                                }
                            @endphp
                            <span class="fa-li"><i class="{{ $cod_simbol }}"></i></span>
                            {{ $text }} Poze De Prezentare
                            </li>
                        </ul>


                        <div class="buy">
                            <a href="" class="btn btn-primary">
                                Alege Plan
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach

        </div>
    </div>
</div>

@endsection