
@extends('front.layout.sablon')

@section('seo_title'){{$date_pagina_diverse->seo_titlu_pagina_joburi }}@endsection
@section('seo_meta_description'){{  $date_pagina_diverse->seo_descriere_pagina_joburi }}@endsection

@section('continut')
{{-- Sectiunea de header pentru pagina jobului --}}
<div class="page-top page-top-job-single" style="background-image: url('{{ asset('uploads/banner.jpg')}}')">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 job job-single">
                <div class="item d-flex justify-content-start">
                    <div class="logo">
                        {{-- Imagine de fundal --}}
                        <img src="{{ asset('uploads/'.$job_individual->rCompany->logo) }}" alt="" />
                    </div>
                    <div class="text">
                        {{-- Afisare informatii job --}}
                        <h3>{{$job_individual->titlu}}, {{$job_individual->rCompany->nume_companie}}</h3>
                        <div class="detail-1 d-flex justify-content-start">
                            <div class="category"> {{$job_individual->rJobCategory->nume_categorie}} </div>
                            <div class="location"> {{$job_individual->rJobLocation->nume_locatie}} </div>
                        </div>
                        <div class="detail-2 d-flex justify-content-start">
                            <div class="date"> cu {{ $job_individual->created_at->diffForHumans() }}</div>
                            <div class="budget">  {{$job_individual->rJobSalaryRange->sume}}</div>
                        </div>
                        <div class="special d-flex justify-content-start">
                            @if($job_individual->este_promovat == 1)
                            <div class="featured">Promovat</div>
                            @endif
                            <div class="type">  {{$job_individual->rJobType->nume_tip}} </div>
                        </div>
                        {{-- Verificare autentificarii ca, companie daca este adevarat butoanele sunt ascunse --}}
                        @if(!Auth::guard('companie')->check())
                        {{-- Butoanele de aplicare si adaugare la favorite --}}
                        <div class="apply">
                            <a href="{{ route('candidat_aplicare_job',$job_individual->id) }}" class="btn btn-primary">Aplica Acum</a>
                            <a href="{{ route('candidat_salvare_job',$job_individual->id) }}" class="btn btn-primary save-job">Adauga la favorite</a>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Afisarea datelor anuntului introduse de companie  --}}
<div class="job-result pt-50 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                {{-- Afisarea Descrierii Jobului --}}
                <div class="left-item">
                    <h2><i class="fas fa-file-invoice"></i> Descriere </h2>
                    <p>
                       {!!($job_individual->descriere) !!}
                    </p>
                </div>
                {{-- Afisarea Responsabilitatii Jobului --}}
                <div class="left-item">
                    <h2><i class="fas fa-file-invoice"></i> Responsabilitati</h2>
                        {!!($job_individual->responsabilitati) !!}
                </div>
                {{-- Afisarea Cerinte Jobului --}}
                <div class="left-item">
                    <h2><i class="fas fa-file-invoice"></i> Competente Si Abilitati Cerute </h2>
                        {!!($job_individual->cerinte) !!}    
                </div>
                {{-- Afisarea Cerinte Studii --}}
                <div class="left-item">
                    <h2><i class="fas fa-file-invoice"></i> Cerinte Studii</h2>
                    {!!($job_individual->educatie) !!}
                </div>
                {{-- Afisarea Beneficiilor Jobului --}}
                <div class="left-item">
                    <h2><i class="fas fa-file-invoice"></i> Beneficii </h2>
                    {!!($job_individual->beneficii) !!}
                </div>
                {{-- Buton secundar de aplicare --}}
                <div class="left-item">
                    <div class="apply">
                        <a href="apply.html" class="btn btn-primary">Aplica Acum</a>
                    </div>
                </div>
                {{-- Sistemul de afisare joburi similare --}}
                <div class="left-item">
                    <h2><i class="fas fa-file-invoice"></i> Joburi Similare </h2>
                    <div class="job related-job pt-0 pb-0">
                        <div class="container">
                            <div class="row">
                                {{-- Se declara i = 0 pentru mesajul de notificare in cazul in care nu sunt joburi similare --}}
                                @php $i=0; @endphp
                                {{-- Se intra in bucla, daca la final i nu este incrementat cu nimic inseamnca ca nu sunt joburi similare si se afiseaza mesaj de notifcare --}}
                                @foreach($joburi as $element)
                                {{-- Bucla care se asigura ca nu apare si jobul a carui pagina indivduala o vizualizam la sectiunea de joburi similare --}}
                                @if($element->id == $job_individual->id)
                                    @continue
                                @endif
                                {{-- Se incrementeaza i pentru fiecare job similar gasit --}}
                                @php $i++; @endphp

                                {{-- Afisarea datelor joburilor similare gasite  --}}
                                <div class="col-md-12">
                                    <div class="item d-flex justify-content-start">
                                        {{-- Afisare Logo --}}
                                        <div class="logo">
                                            <img src="{{ asset('uploads/'.$element->rCompany->logo) }}"alt=""/>
                                        </div>
                                        <div class="text">
                                             {{-- Afisare Titlu Job --}}
                                           <h3><a href= "{{route ('detalii_job',$element->id) }}"> {{$element->titlu}}, {{$element->rCompany->nume_companie}}</a></h3>
                                            <div class="detail-1 d-flex justify-content-start">
                                                <div class="category">
                                                     {{-- Afisare Categorie Job --}}
                                                    {{$element->rJobCategory->nume_categorie}}
                                                 </div>
                                                  {{-- Afisare Locatie Job --}}
                                                 <div class="location">
                                                     {{$element->rJobLocation->nume_locatie}}
                                                 </div>
                                            </div>
                                             {{-- Afisarea timpului trecut de la postare --}}
                                            <div class="detail-2 d-flex justify-content-start">
                                                <div class="date">
                                                    {{ $element->created_at->diffForHumans() }}
                                                </div>
                                                 {{-- Afisare interval salarial  --}}
                                                <div class="budget">
                                                    {{$element->rJobSalaryRange->sume}}
                                                </div>
                                            </div>
                                            <div class="special d-flex justify-content-start">
                                                 {{-- Sistemul de afisare a statusului de promovare --}}
                                                @if($element->este_promovat == 1)
                                                <div class="featured">
                                                    Promovat
                                                </div>
                                                @endif
                                                {{-- Afisare tipuri joburi  --}}
                                                <div class="type">
                                                    {{$element->rJobType->nume_tip}}
                                                </div>
                                            </div>
                                            {{-- Sistemul de adaugare la favorite --}}
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
                                {{-- Afisare mesajului de notificare daca nu se gasesc joburi similare --}}
                                @if($i==0)
                                <div class="text-danger"> Nu am gasit joburi similare </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="right-item">
                    <h2>
                        {{-- Tabelul pentru detalii ale jobului  --}}
                        <i class="fas fa-file-invoice"></i>
                        Detalii Job
                    </h2>
                    <div class="summary">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                
                                <tr>
                                    <td>
                                        <b>Postat la data de:</b>
                                    </td>
                                  {{-- Afisarea datei la care anuntul a fost postat ucqword l-am folosit sa afiseze luna cu majucule --}}
                                    <td>{{ ucwords(($job_individual->created_at->formatLocalized('%d %B, %Y'))) }}</td>
                                </tr>
                                <tr>
                                    {{-- Afisarea locurilor disponibile --}}
                                    <td><b>Locuri Disponibile:</b></td>
                                    <td>{{ $job_individual->locuri }}</td>
                                </tr>
                                   {{-- Afisarea Domeniului --}}
                                <tr>
                                    <td><b>Domeniu:</b></td>
                                    <td>{{ $job_individual->rJobCategory->nume_categorie }}</td>
                                </tr>
                                 {{-- Afisarea Locatiei --}}
                                <tr>
                                    <td><b>Locatie:</b></td>
                                    <td>{{ $job_individual->rJobLocation->nume_locatie }}</td>
                                </tr>
                                 {{-- Afisarea Salariului --}}
                                <tr>
                                    <td>
                                        <b>Interval Salarial</b>
                                    </td>
                                    <td>{{ $job_individual->rJobSalaryRange->sume }}</td>
                                </tr>
                                 {{-- Afisarea Experientei  --}}
                                <tr>
                                    <td>
                                        <b>Experienta Necesara:</b>
                                    </td>
                                    <td>{{ $job_individual->rJobExperience->nume_experienta }}</td>
                                </tr>
                                   {{-- Afisarea tipului de contract  --}}
                                <tr>
                                    <td><b>Tipul Contractului:</b></td>
                                    <td>{{ $job_individual->rJobType->nume_tip }}</td>
                                </tr>
                               
                            </table>
                        </div>
                    </div>
                </div>
                {{-- Sectiune Formular de contact companie --}}
                <div class="right-item">
                    <h2>
                        {{-- Titlu --}}
                        <i class="fas fa-file-invoice"></i>
                        Contacteaza Angajatorul Direct
                    </h2>
                    {{-- Corpul Formularului de contact companie --}}
                    <div class="enquery-form">
                        <form action="{{ route('email_contactare_companie') }}" method="post">
                            {{-- Intitializarea directivei CSRF pentru protectia formularului  --}}
                            @csrf
                            {{-- Campurile Formularului --}}
                            <input type="hidden" name="email_receptor" value="{{ $job_individual->rCompany->email }}">
                            <input type="hidden" name="titlu_job" value="{{ $job_individual->titlu }}">
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
                            {{-- Butonul de trimitere --}}
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">
                                    Trimite
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                {{-- Sectiune de harta interactiva --}}
                {{-- Daca nu se gasesc date in coloana codului de harta se ascunde sectiunea --}}
                @if($job_individual->map_code != null)
                <div class="right-item">
                    <h2><i class="fas fa-file-invoice"></i> Locatia Jobului pe Harta</h2>
                    <div class="location-map">
                        {!! $job_individual->map_code !!}
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection