@extends('front.layout.sablon')

{{-- @section('seo_title'){{ $date_pagina_articol->SEO_titlu }}@endsection
@section('seo_meta_description'){{ $date_pagina_articol->SEO_descriere }}@endsection --}}

@section('continut')

<div class="page-top"style="background-image: url('{{ asset('uploads/banner.jpg')}}')">
            <div class="bg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Competente</h2>
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
                <a href="{{ route('competente_candidat_creare') }}"class="btn btn-primary btn-sm mb-2"><i class="fas fa-plus"></i> Adauga Competente</a>
                @if(!$date_competente->count())
                    <div class="text-danger">Nu au fost gasite informatii. Adauga acum informatii despre competentele si abilitatile tale</div>
                @else
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>SL</th>
                                <th>Competenta/Abilitate</th>
                                <th>Nivel</th>
                                <th class="w-100">Optiuni</th>
                            </tr>
                            @foreach ($date_competente as $element)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $element->competente }}</td>
                                <td>{{  $element->nivel_competente }}</td>
                                <td>
                                    <a href="{{ route('competente_candidat_editare',$element->id) }}" class="btn btn-warning btn-sm text-white"><i class="fas fa-edit"></i></a>
                                    <a href="{{ route('competente_candidat_stergere',$element->id) }}" class="btn btn-danger btn-sm" onClick="return confirm('Esti sigur ca vrei sa stergi acesta informatie? ');" ><i class="fas fa-trash-alt"></i  ></a>
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