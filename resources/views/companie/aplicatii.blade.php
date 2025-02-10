@extends('front.layout.sablon')

{{-- @section('seo_title'){{ $date_pagina_articol->SEO_titlu }}@endsection
@section('seo_meta_description'){{ $date_pagina_articol->SEO_descriere }}@endsection --}}

@section('continut')

<div class="page-top"style="background-image: url('{{ asset('uploads/banner.jpg')}}')">
            <div class="bg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Aplicatiile Candidatilor</h2>
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
                <h4>Anunturile Companiei</h4>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>SL</th>
                                <th>Titlu Job</th>
                                <th>Categorie</th>
                                <th>Locatie</th>
                                <th>Promovat</th>
                                <th>Detalii Job</th>
                                <th>Aplicanti</th>
                            </tr>
                            @foreach($joburi as $element )
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $element->titlu }}</td>
                                <td>{{ $element->rJobCategory->nume_categorie }}</td>
                                <td>{{ $element->rJobLocation->nume_locatie}}</td>
                                <td>
                                    @if($element->este_promovat == 1)
                                    <span class="badge bg-success">Promovat</span>
                                    @else
                                    <span class="badge bg-danger">Nepromovat</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('detalii_job',$element->id) }}" class="btn btn-primary btn-sm">Detalii</a>
                                </td>
                                <td>
                                    <a href="{{ route('companie_aplicanti_job',$element->id) }}" class="btn btn-primary btn-sm">Aplicanti</a>
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