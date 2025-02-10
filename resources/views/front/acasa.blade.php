{{-- Se extinde blade-ul sablon care simplica costruirea paginii principale si numarul de modificare care trebuie facute in cod de la pagina la pagina
Astfel pagina principala contine doar continutul care apare exclusiv pe pagina principala. Acest continut este stocat in sectiune 'continut',
care apoi cu ajutorrul laravel este legat la sablon care contine toate celelalte elemente neschimbate pentru a afisa pagina completa  --}}
@extends('front.layout.sablon')

@section('seo_title'){{ $date_pagina_acasa->seo_titlu }}@endsection
@section('seo_meta_description'){{ $date_pagina_acasa->seo_descriere }}@endsection
{{-- In sectiunea de continut se include tot codul paginii care urmeaza a fi creeata,
aceasta sectiune sete apoi adaugata cu ajutorul laravel prin comanda yields.
In acest mod se evita scrierea codului pentru navbar si footer pentru fiecare pagina web in parte --}}
@section('continut')

<div class="slider" style="background-image: url({{ asset('uploads/'.$date_pagina_acasa->fundal)}})">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="item">
                    <div class="text">
                        <h2>{{$date_pagina_acasa->titlu}}</h2>

                        <p>
                            {{$date_pagina_acasa->text}}
                        </p>
                    </div>
                    <div class="search-section">
                        <form action="jobs.html" method="post">
                            <div class="inner">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <input
                                                type="text"
                                                name=""
                                                class="form-control"
                                                placeholder="{{$date_pagina_acasa->titlu_job}}"
                                            />
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <select
                                                name=""
                                                class="form-select select2"
                                            >
                                                <option value="">
                                                    {{$date_pagina_acasa->locatie_job}}
                                                </option>
                                                @foreach( $locatie_job as $obiect)
                                                    <option value="{{ $obiect->id }}">{{ $obiect->nume_locatie }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <select name=""class="form-select select2">

                                                <option value="">
                                                    {{$date_pagina_acasa->categorie_job}}
                                                </option>
                                                @foreach( $categorie_job_extins as $obiect)
                                                    <option value="{{ $obiect->id }}">{{ $obiect->nume_categorie }}</option>
                                                @endforeach
                                            
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <button
                                            type="submit"
                                            class="btn btn-primary"
                                        >
                                            <i
                                                class="fas fa-search"
                                            ></i>
                                            {{$date_pagina_acasa->text_buton}}
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@if($date_pagina_acasa->stare_sectiune_categorie == 'Vizibila')
<div class="job-category">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading">
                    <h2>{{$date_pagina_acasa->titlu_sectiune_categorie}}</h2>
                    <p>
                        {{$date_pagina_acasa->text_sectiune_categorie}}
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            
                @foreach($categorie_job as $obiect)
                <div class="col-md-4">
                    <div class="item">
                        <div class="icon">
                            <i class="{{ $obiect->simbol_categorie }}"></i>
                        </div>
                        <h3>{{ $obiect->nume_categorie }}</h3>
                        <p>(5 Open Positions)</p>
                        <a href=""></a>
                    </div>
                </div>
                @endforeach

            </div>
           
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="all">
                    <a href="{{ route ('categorii_job') }}" class="btn btn-primary"
                        >See All Categories</a
                    >
                </div>
            </div>
        </div>
    </div>
</div>
@endif




@if($date_pagina_acasa->sectiune_alegere_stare == 'Vizibila')
<div
    class="why-choose"
    style="background-image: url({{ asset('uploads/sectiune_alegere_fundal.jpg')}})">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading">
                    <h2>{{ $date_pagina_acasa->sectiune_alegere_titlu }}</h2>
                    <p>
                       {{ $date_pagina_acasa->sectiune_alegere_text }}
                    </p>
                </div>
            </div>
        </div>

        <div class="row">

            @foreach($alegere_elemente as $element)
            <div class="col-md-4">
                <div class="inner">
                    <div class="icon">
                        <i class="{{ $element->simbol_alegere }}"></i>
                    </div>
                    <div class="text">
                        <h2>{{ $element->titlu_alegere }}</h2>
                        <p>
                            {!! nl2br($element->text_alegere) !!}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach 
        </div>
    </div>
</div>
@endif


@if($date_pagina_acasa->sectiune_recomandari_stare == 'Vizibila')
<div class="job">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading">
                    <h2>{{ $date_pagina_acasa->sectiune_recomandari_titlu }}</h2>
                    <p>{{ $date_pagina_acasa->sectiune_recomandari_text }}</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="item d-flex justify-content-start">
                    <div class="logo">
                        <img src="{{ asset('uploads/logo1.png')}}" alt="" />
                    </div>
                    <div class="text">
                        <h3>
                            <a href="job.html"
                                >Software Engineer, Google</a
                            >
                        </h3>
                        <div
                            class="detail-1 d-flex justify-content-start"
                        >
                            <div class="category">Web Development</div>
                            <div class="location">United States</div>
                        </div>
                        <div
                            class="detail-2 d-flex justify-content-start"
                        >
                            <div class="date">3 days ago</div>
                            <div class="budget">$300-$600</div>
                            <div class="expired">Expired</div>
                        </div>
                        <div
                            class="special d-flex justify-content-start"
                        >
                            <div class="featured">Featured</div>
                            <div class="type">Full Time</div>
                            <div class="urgent">Urgent</div>
                        </div>
                        <div class="bookmark">
                            <a href=""
                                ><i class="fas fa-bookmark active"></i
                            ></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="item d-flex justify-content-start">
                    <div class="logo">
                        <img src="{{ asset('uploads/logo2.png')}}" alt="" />
                    </div>
                    <div class="text">
                        <h3>
                            <a href="job.html">Web Designer, Amplify</a>
                        </h3>
                        <div
                            class="detail-1 d-flex justify-content-start"
                        >
                            <div class="category">Web Development</div>
                            <div class="location">United States</div>
                        </div>
                        <div
                            class="detail-2 d-flex justify-content-start"
                        >
                            <div class="date">1 day ago</div>
                            <div class="budget">$1000</div>
                        </div>
                        <div
                            class="special d-flex justify-content-start"
                        >
                            <div class="featured">Featured</div>
                            <div class="type">Part Time</div>
                        </div>
                        <div class="bookmark">
                            <a href=""
                                ><i class="fas fa-bookmark"></i
                            ></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="item d-flex justify-content-start">
                    <div class="logo">
                        <img src="{{ asset('uploads/logo3.png')}}" alt="" />
                    </div>
                    <div class="text">
                        <h3>
                            <a href="job.html"
                                >Laravel Developer, Gimpo</a
                            >
                        </h3>
                        <div
                            class="detail-1 d-flex justify-content-start"
                        >
                            <div class="category">Web Development</div>
                            <div class="location">Canada</div>
                        </div>
                        <div
                            class="detail-2 d-flex justify-content-start"
                        >
                            <div class="date">2 days ago</div>
                            <div class="budget">$1000-$3000</div>
                        </div>
                        <div
                            class="special d-flex justify-content-start"
                        >
                            <div class="featured">Featured</div>
                            <div class="type">Full Time</div>
                            <div class="urgent">Urgent</div>
                        </div>
                        <div class="bookmark">
                            <a href=""
                                ><i class="fas fa-bookmark"></i
                            ></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="item d-flex justify-content-start">
                    <div class="logo">
                        <img src="{{ asset('uploads/logo4.png')}}" alt="" />
                    </div>
                    <div class="text">
                        <h3>
                            <a href="job.html"
                                >PHP Developer, Kite Solution</a
                            >
                        </h3>
                        <div
                            class="detail-1 d-flex justify-content-start"
                        >
                            <div class="category">Web Development</div>
                            <div class="location">Australia</div>
                        </div>
                        <div
                            class="detail-2 d-flex justify-content-start"
                        >
                            <div class="date">7 hours ago</div>
                            <div class="budget">$1800</div>
                        </div>
                        <div
                            class="special d-flex justify-content-start"
                        >
                            <div class="featured">Featured</div>
                            <div class="type">Full Time</div>
                            <div class="urgent">Urgent</div>
                        </div>
                        <div class="bookmark">
                            <a href=""
                                ><i class="fas fa-bookmark"></i
                            ></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="item d-flex justify-content-start">
                    <div class="logo">
                        <img src="{{ asset('uploads/logo5.png')}}" alt="" />
                    </div>
                    <div class="text">
                        <h3>
                            <a href="job.html"
                                >Junior Accountant, ABC Media</a
                            >
                        </h3>
                        <div
                            class="detail-1 d-flex justify-content-start"
                        >
                            <div class="category">Marketing</div>
                            <div class="location">Canada</div>
                        </div>
                        <div
                            class="detail-2 d-flex justify-content-start"
                        >
                            <div class="date">2 hours ago</div>
                            <div class="budget">$400</div>
                        </div>
                        <div
                            class="special d-flex justify-content-start"
                        >
                            <div class="featured">Featured</div>
                            <div class="type">Part Time</div>
                            <div class="urgent">Urgent</div>
                        </div>
                        <div class="bookmark">
                            <a href=""
                                ><i class="fas fa-bookmark"></i
                            ></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="item d-flex justify-content-start">
                    <div class="logo">
                        <img src="{{ asset('uploads/logo6.png')}}" alt="" />
                    </div>
                    <div class="text">
                        <h3>
                            <a href="job.html"
                                >Sales Manager, Tingshu Limited</a
                            >
                        </h3>
                        <div
                            class="detail-1 d-flex justify-content-start"
                        >
                            <div class="category">Marketing</div>
                            <div class="location">Canada</div>
                        </div>
                        <div
                            class="detail-2 d-flex justify-content-start"
                        >
                            <div class="date">9 hours ago</div>
                            <div class="budget">$600-$800</div>
                        </div>
                        <div
                            class="special d-flex justify-content-start"
                        >
                            <div class="featured">Featured</div>
                            <div class="type">Full Time</div>
                            <div class="urgent">Urgent</div>
                        </div>
                        <div class="bookmark">
                            <a href=""
                                ><i class="fas fa-bookmark"></i
                            ></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="all">
                    <a href="{{ route('categorii_job') }}" class="btn btn-primary"
                        >Vezi toate Categoriile</a
                    >
                </div>
            </div>
        </div>
    </div>
</div>
@endif

@if($date_pagina_acasa->sectiune_multumiri_stare == 'Vizibila')
<div
    class="testimonial"
    style="background-image: url({{ asset('uploads/sectiune_multumiri_fundal.jpg')}})"
>
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="main-header">{{ $date_pagina_acasa->sectiune_multumiri_titlu }}</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="testimonial-carousel owl-carousel">

                   @foreach ($recomandari_element as $element)
                    <div class="item">
                        <div class="photo">
                            <img src="{{ asset('uploads/'.$element->poza)}}" alt="" />
                        </div>
                        <div class="text">
                            <h4>{{ $element->nume }}</h4>
                            <p>{{ $element->pozitie}}</p>
                        </div>
                        <div class="description">
                            <p>
                                {!! nl2br($element->comentariu) !!}
                            </p>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endif

@if($date_pagina_acasa->sectiune_articole_stare == 'Vizibila')
<div class="blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading">
                    <h2>{{ $date_pagina_acasa->sectiune_articole_titlu }}</h2>
                    <p>
                        {{ $date_pagina_acasa->sectiune_articole_text }}
                    </p>
                </div>
            </div>
        </div>
        <div class="row">

            @foreach($date_articole as $element)

            <div class="col-lg-4 col-md-6">
                <div class="item">
                    <div class="photo">
                        <img src="{{ asset('uploads/'.$element->poza)}}" alt="" />
                    </div>
                    <div class="text">
                        <h2>
                            <a href="{{ route('articol',$element->slug) }}">
                                {{ $element->titlu }}
                            </a>
                        </h2>
                        <div class="short-des">
                            <p>
                                {!! nl2br($element->scurta_descriere) !!}
                            </p>
                        </div>
                        <div class="button">
                            <a href="{{ route('articol',$element->slug) }}" class="btn btn-primary"
                                >Read More
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach
        </div>
    </div>
</div>
@endif
@endsection