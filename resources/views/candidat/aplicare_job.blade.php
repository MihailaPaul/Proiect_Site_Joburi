@extends('front.layout.sablon')

{{-- @section('seo_title'){{ $date_pagina_articol->SEO_titlu }}@endsection
@section('seo_meta_description'){{ $date_pagina_articol->SEO_descriere }}@endsection --}}

@section('continut')

<div class="page-top"style="background-image: url('{{ asset('uploads/banner.jpg')}}')">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Aplica pentru: {{ $job_individual->titlu }}</h2>
                <div class="button">
                    <a href="{{route('detalii_job',$job_individual->id)}}" class="btn btn-primary btn-sm"> Inapoi la Job </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="job-apply">
    <div class="container">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center">
                <div class="apply-form">
                    <form action="{{ route('candidat_aplicare_salvare',$job_individual->id) }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="mb-1"> Te rugam sa scrii un scurt paragraf despre ce te face cea mai buna alegere pentru acest post!</label>
                            <textarea class="form-control" rows="3" name="scrisoare_motivare"></textarea>
                            <div class="clearfix"></div>
                        </div>
                        <div class="mb-3">
                            <button type="submit"class="btn btn-primary btn-sm">
                                Aplica
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
         
@endsection