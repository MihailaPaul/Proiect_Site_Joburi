@extends('front.layout.sablon')

{{-- @section('seo_title'){{ $date_pagina_articol->SEO_titlu }}@endsection
@section('seo_meta_description'){{ $date_pagina_articol->SEO_descriere }}@endsection --}}

@section('continut')

<div class="page-top"style="background-image: url('{{ asset('uploads/banner.jpg')}}')">
            <div class="bg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Joburi Favorite</h2>
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
                @if(!$joburi_favorite->count())
                    <div class="text-danger">Nu ai adaugat nici un anunt la favorite!</div>
                @else
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>SL</th>
                                <th>Titlu Job</th>
                                <th class="w-150">Optiuni</th>
                            </tr>
                            @foreach ($joburi_favorite as $element)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $element->rJob->titlu }}</td>
                                <td>
                                    <a href="{{ route('detalii_job',$element->job_id) }}" class="btn btn-primary btn-sm">Detalii</a>
                                    <a href="{{ route('candidat_joburi_favorite_stergere',$element->id) }}" class="btn btn-danger btn-sm" onClick="return confirm('Esti sigur ca vrei sa stergi acest anunt de la favorite? ');"><i class="fas fa-trash-alt"></i  ></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
         
@endsection