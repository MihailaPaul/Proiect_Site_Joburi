@extends('front.layout.sablon')

@section('seo_title'){{ $date_pagina_blog->subtitlu }}@endsection
@section('seo_meta_description'){{ $date_pagina_blog->meta_description }}@endsection

@section('continut')

<div class="page-top"style="background-image:  url('{{ asset('uploads/banner.jpg')}}')">
        <div class="bg"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>{{ $date_pagina_blog->titlu }}</h2>
                </div>
            </div>
        </div>
</div>
<div class="blog">
    <div class="container">
        <div class="row">
            
            @foreach($date_articole as $element)
            <div class="col-lg-4 col-md-6">
                <div class="item">
                    <div class="photo">
                        <img src="{{ asset('uploads/'.$element->poza)}}" alt="" />
                    </div>
                    <div class="text">
                        <h2>
                            <a href="{{ route('articol',$element->slug) }}"
                                >{{ $element->titlu }}</a
                            >
                        </h2>
                        <div class="short-des">
                            <p>
                                {!! nl2br($element->scurta_descriere) !!}
                            </p>
                        </div>
                        <div class="button">
                            <a href="{{ route('articol',$element->slug) }}" class="btn btn-primary">
                              Citeste Articolul
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            <div class="col-md-12">
                {{ $date_articole->links() }}
            </div>


        </div>
    </div>
</div>
@endsection