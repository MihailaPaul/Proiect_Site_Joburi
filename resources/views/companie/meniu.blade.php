@extends('front.layout.sablon')

{{-- @section('seo_title'){{ $date_pagina_articol->SEO_titlu }}@endsection
@section('seo_meta_description'){{ $date_pagina_articol->SEO_descriere }}@endsection --}}

@section('continut')

<div class="page-top"style="background-image: url('{{ asset('uploads/banner.jpg')}}')">
            <div class="bg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Meniu Companie</h2>
                    </div>
                </div>
            </div>
        </div>


<div class="page-content user-panel">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <div class="card">
                   @include('companie.layout.meniu_lateral')
                </div>
            </div>
            <div class="col-lg-9 col-md-12">
                <h3>Salut, {{ Auth::guard('companie')->user()->nume_reprezentant }} ({{ Auth::guard('companie')->user()->nume_companie }})</h3>
                <p>Vezi toate statisticile companiei tale</p>

                <div class="row box-items">
                    <div class="col-md-4">
                        <div class="box1">
                            <h4>{{ $joburi_postate }}</h4>
                            <p>Anunturi Postate</p>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="box3">
                            <h4>{{ $joburi_promovate }}</h4>
                            <p>Anunturi Promovate</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="box2">
                            @if($pachetul_activ == null)
                        <span class="text-danger">Nu exista pachet activ ! </span>
                            @else
                            <h4>{{ $pachet_activ->rPackage->nume_pachet }}</h4>
                            <p>Pachetul Activ</p>
                            @endif
                        </div>
                    </div>
                </div>

                <h3 class="mt-5">Recent Jobs</h3>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>SL</th>
                                <th>Titlu Job</th>
                                <th>Categorie</th>
                                <th>Locatie</th>
                                <th>Promovat</th>
                            </tr>
                            @foreach($joburi as $element )
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $element->titlu }}</td>
                                <td>{{ $element->rJobCategory->nume_categorie }}</td>
                                <td>{{ $element->rJobLocation->nume_locatie
                                 }}</td>
                                <td>
                                    @if($element->este_promovat == 1)
                                    <span class="badge bg-success">Promovat</span>
                                    @else
                                    <span class="badge bg-danger">Nepromovat</span>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection