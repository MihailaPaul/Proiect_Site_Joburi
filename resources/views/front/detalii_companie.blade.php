@extends('front.layout.sablon')

{{-- @section('seo_title'){{ $date_pagina_blog->subtitlu }}@endsection
@section('seo_meta_description'){{ $date_pagina_blog->meta_description }}@endsection --}}

@section('continut')
    <div class="page-top page-top-job-single page-top-company-single"  style="background-image:  url('{{ asset('uploads/banner.jpg')}}')">
        <div class="bg"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 job job-single">
                    <div class="item d-flex justify-content-start">
                        <div class="logo">
                            <img src="{{ asset('uploads/'.$companie_individuala->logo) }}" alt="" />
                        </div>
                        <div class="text">
                            <h3>{{ $companie_individuala->nume_companie }}</h3>
                            <div class="detail-1 d-flex justify-content-start">

                                <div class="category">{{ $companie_individuala->rCompanieDomain->nume_domeniu }}</div>
                                <div class="location">{{ $companie_individuala->rCompanieLocation->nume_locatie }}</div>
                                <div class="email">{{ $companie_individuala->email }}</div>
                                @if($companie_individuala->numar_telefon!=null)
                                <div class="phone">{{ $companie_individuala->numar_telefon }}</div>
                                @endif

                            </div>
                            <div class="special">
                                @if($companie_individuala->r_job_count == 1)
                                <div class="type">{{ $companie_individuala->r_job_count }} Anunt</div>
                                @else
                                <div class="type">{{ $companie_individuala->r_job_count }} Anunturi </div>
                                @endif  

                                @if($companie_individuala->facebook!=null||$companie_individuala->twitter!=null||$companie_individuala->linkedin!=null||$companie_individuala->instagram!=null)
                                <div class="social">
                                    <ul>
                                        @if($companie_individuala->facebook!=null)
                                        <li>
                                            <a href="{{ $companie_individuala->facebook }}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        @endif
                                        @if($companie_individuala->twitter!=null)
                                        <li>
                                            <a href="{{ $companie_individuala->twitter }}" target="_blank"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        @endif
                                        @if($companie_individuala->linkedin!=null)
                                        <li>
                                            <a href="{{ $companie_individuala->linkedin }}" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                        </li>
                                        @endif
                                        @if($companie_individuala->instagram!=null)
                                        <li>
                                            <a href="{{ $companie_individuala->instagram }}" target="_blank"><i class="fab fa-instagram"></i></a>
                                        </li>
                                        @endif
                                    </ul>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="job-result pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="left-item">
                        <h2>
                            <i class="fas fa-file-invoice"></i>
                            Despre companie
                        </h2>
                        {!! $companie_individuala->descriere !!}
                    </div>


                    @if($poze_companie!="")
                    <div class="left-item">
                        <h2><i class="fas fa-file-invoice"></i> Poze Prezentare</h2>
                        <div class="photo-all">
                            <div class="row">
                                @foreach ($poze_companie as $element )
                                <div class="col-md-6 col-lg-4">
                                    <div class="item">
                                        <a href="{{ asset('uploads/'.$element->poza) }}" class="magnific">
                                            <img src="{{ asset('uploads/'.$element->poza) }}" alt=""/>
                                            <div class="icon">
                                                <i class="fas fa-plus"></i>
                                            </div>
                                            <div class="bg"></div>
                                        </a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @endif

                    <div class="left-item">
                        <h2> <i class="fas fa-file-invoice"></i> Anunturile Companiei</h2>
                        <div class="job related-job pt-0 pb-0">
                            <div class="container">
                                <div class="row">

                                    @foreach($joburi as $element)
                                    <div class="col-md-12">
                                        <div class="item d-flex justify-content-start">
                                            <div class="logo">
                                                <img src="{{ asset('uploads/'.$companie_individuala->logo) }}" alt="" />
                                            </div>
                                            <div class="text">
                                                <h3>
                                                    <a href="{{route ('detalii_job',$element->id) }}">{{ $element->titlu }}, {{ $companie_individuala->nume_companie }}</a>
                                                </h3>

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
                                                    <div class="featured">Promovat</div>
                                                    @endif
                                                    <div class="type">  {{$element->rJobType->nume_tip}} </div>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="right-item">
                        <h2><i class="fas fa-file-invoice"></i> Detalii Companie</h2>
                        <div class="summary">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tr>
                                        <td><b> Persoana de Contact:</b></td>
                                        <td>{{ $companie_individuala->nume_reprezentant }}</td>
                                    </tr>
                                    <tr>
                                        <td><b> Domeniu:</b></td>
                                        <td>{{ $companie_individuala->rCompanieDomain->nume_domeniu }}</td>
                                    </tr>
                                    <tr>
                                        <td><b> Locatie:</b></td>
                                        <td>{{ $companie_individuala->rCompanieLocation->nume_locatie }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>Email:</b></td>
                                        <td>{{ $companie_individuala->email }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>Numar Contact:</b></td>
                                        <td>{{ $companie_individuala->numar_telefon }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>Adresa:</b></td>
                                        <td>
                                            {{ $companie_individuala->adresa }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Website:</b></td>
                                        <td><a href="{{$companie_individuala->website }}" target="_blank">{{$companie_individuala->website}}</a></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>Numar Angajati:</b>
                                        </td>
                                        <td>{{ $companie_individuala->rCompanieSize->numar_angajati }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                    @if($companie_individuala->map_code!=null)
                    <div class="right-item">
                        <h2> <i class="fas fa-file-invoice"></i> Locatia Companiei</h2>
                        <div class="location-map">
                            {!! $companie_individuala->map_code !!}
                        </div>
                    </div>
                    @endif

                    <div class="right-item">
                        <h2><i class="fas fa-file-invoice"></i>Contacteaza Compania</h2>
                        <div class="enquery-form">
                            <form action="{{ route('contactare_companie') }}" method="post">
                                @csrf
                                <input type="hidden" name="email_receptor" value="{{ $companie_individuala->email }}">

                                <div class="mb-3">
                                    <input type="text" name="nume_vizitator" class="form-control" placeholder="Nume"/>
                                </div>
                                <div class="mb-3">
                                    <input type="email" name="email_vizitator" class="form-control" placeholder="Adresa Email"/>
                                </div>
                                <div class="mb-3">
                                    <input type="text" name="numar_telefon_vizitator" class="form-control" placeholder="Numarul de Telefon"/>
                                </div>
                                <div class="mb-3">
                                    <textarea name="mesaj_vizitator" class="form-control h-150" rows="3" placeholder="Message"></textarea>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary">
                                        Trimite
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection