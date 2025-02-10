@extends('front.layout.sablon')

{{-- @section('seo_title'){{ $date_pagina_articol->SEO_titlu }}@endsection
@section('seo_meta_description'){{ $date_pagina_articol->SEO_descriere }}@endsection --}}

@section('continut')

<div class="page-top"style="background-image: url('{{ asset('uploads/banner.jpg')}}')">
            <div class="bg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Joburi Postate</h2>
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
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>SL</th>
                                <th>Titlu Job</th>
                                <th>Categorie</th>
                                <th>Locatie</th>
                                <th>Promovat</th>
                                <th>Action</th>
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
                                <td>
                                    <a href="{{ route('editare_joburi_postate_companie',$element->id) }}" class="btn btn-warning btn-sm text-white"><i class="fas fa-edit"></i></a>
                                    <a href="{{ route('stergere_joburi_postate_companie',$element->id) }}" class="btn btn-danger btn-sm" onClick="return confirm('Esti sigur ca vrei sa stergi anuntul?');"><i class="fas fa-trash-alt"></i></a>
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