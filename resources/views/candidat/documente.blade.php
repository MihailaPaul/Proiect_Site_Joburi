@extends('front.layout.sablon')

{{-- @section('seo_title'){{ $date_pagina_articol->SEO_titlu }}@endsection
@section('seo_meta_description'){{ $date_pagina_articol->SEO_descriere }}@endsection --}}

@section('continut')

<div class="page-top"style="background-image: url('{{ asset('uploads/banner.jpg')}}')">
            <div class="bg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Documente</h2>
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
                <a href="{{ route('documente_candidat_creare') }}"class="btn btn-primary btn-sm mb-2"><i class="fas fa-plus"></i> Adauga documente</a>
                @if(!$date_documente->count())
                    <div class="text-danger">Nu au fost gasite documente. Adauga acum documente legate de experienta ta profesionala!</div>
                @else
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>SL</th>
                                <th>Titlu</th>
                                <th>Fisier</th>
                                <th class="w-100">Optiuni</th>
                            </tr>
                            @foreach ($date_documente as $element)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $element->titlu }}</td>
                                <td>
                                    <a href="{{ asset('uploads/'.$element->fisier) }}" target="_blank">{{ $element->fisier }}</a>
                                </td>
                                <td>
                                    <a href="{{ route('documente_candidat_editare',$element->id) }}" class="btn btn-warning btn-sm text-white"><i class="fas fa-edit"></i></a>
                                    <a href="{{ route('documente_candidat_stergere',$element->id) }}" class="btn btn-danger btn-sm" onClick="return confirm('Esti sigur ca vrei sa stergi acesta informatie? ');" ><i class="fas fa-trash-alt"></i  ></a>
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