@extends('front.layout.sablon')

@section('seo_title'){{ $date_pagina_articol->SEO_titlu }}@endsection
@section('seo_meta_description'){{ $date_pagina_articol->SEO_descriere }}@endsection

@section('continut')

<div class="page-top"style="background-image: url('{{ asset('uploads/banner.jpg')}}')">
            <div class="bg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>{{ $date_pagina_articol->titlu }}</h2>
                    </div>
                </div>
            </div>
        </div>

        <script
        type="text/javascript"
        src="https://platform-api.sharethis.com/js/sharethis.js#property=5993ef01e2587a001253a261&product=inline-share-buttons"
        async="async">
        </script>

    <div class="page-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12">
                    <div class="featured-photo">
                        <img src="{{asset('uploads/'.$date_pagina_articol->poza) }}" alt="" />
                    </div>
                    <div class="sub">
                        <div class="item">
                            <b><i class="fa fa-clock-o"></i></b>
                            {{ $date_pagina_articol->created_at->format('d') }}
                            {{ $date_pagina_articol->created_at->format('F') }}
                            {{ $date_pagina_articol->created_at->format('Y') }}
                        </div>
                        <div class="item">
                            <b><i class="fa fa-eye"></i></b>
                            {{ $date_pagina_articol->vizualizari }}
                        </div>
                    </div>
                    <div class="main-text">
                        {!! $date_pagina_articol->descriere !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection