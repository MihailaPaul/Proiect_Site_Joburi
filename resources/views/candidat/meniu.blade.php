@extends('front.layout.sablon')

{{-- @section('seo_title'){{ $date_pagina_articol->SEO_titlu }}@endsection
@section('seo_meta_description'){{ $date_pagina_articol->SEO_descriere }}@endsection --}}

@section('continut')

<div class="page-top"style="background-image: url('{{ asset('uploads/banner.jpg')}}')">
            <div class="bg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Meniu Candidat</h2>
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
                <h3>Salut, {{ Auth::guard('candidat')->user()->nume_candidat }}</h3>
                <p>Vezi starea aplicatiilor tale:</p>

                <div class="row box-items">
                    <div class="col-md-4">
                        <div class="box1">
                            <h4>{{ $total_aplicatii }}</h4>
                            <p>Anunturi la care inca astepti raspuns</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box2">
                            <h4>{{ $total_aplicatii_respinse }}</h4>
                            <p>Aplicatii Respinse</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box3">
                            <h4>{{ $total_aplicatii_acceptate }}</h4>
                            <p>Aplicatii Acceptate</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
         
@endsection