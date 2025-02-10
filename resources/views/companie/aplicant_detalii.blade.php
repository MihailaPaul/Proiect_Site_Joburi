@extends('front.layout.sablon')

{{-- @section('seo_title'){{ $date_pagina_articol->SEO_titlu }}@endsection
@section('seo_meta_description'){{ $date_pagina_articol->SEO_descriere }}@endsection --}}

@section('continut')

<div class="page-top"style="background-image: url('{{ asset('uploads/banner.jpg')}}')">
            <div class="bg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Detalii despre "{{ $candidat_individual->nume_candidat }}"</h2>
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
                <h4 class="resume">Profil Candidat</h4>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th class="w-200">Photo:</th>
                            <td>
                                @if($candidat_individual->poza == '')
                                <img src="{{ asset('uploads/poza_implicita_candidat.png') }}" alt="" class="w-100"> 
                                @else
                                <img src="{{ asset('uploads/'.$candidat_individual->poza) }}" alt="" class="w-100"/>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>Nume:</th>
                            <td>{{ $candidat_individual->nume_candidat }}</td>
                        </tr>

                        @if($candidat_individual->pozitie!=null)
                        <tr>
                            <th>Ocupatie Curenta:</th>
                            <td>{{ $candidat_individual->pozitie }}</td>
                        </tr>
                        @endif

                        <tr>

                            <th>Email:</th>
                            <td>{{ $candidat_individual->email }}</td>
                        </tr>

                        @if($candidat_individual->numar_telefon!=null)
                        <tr>
                            <th>Numar telefon:</th>
                            <td>{{ $candidat_individual->numar_telefon }}</td>
                        </tr>
                        @endif

                        @if($candidat_individual->tara!=null)
                        <tr>
                            <th>Tara:</th>
                            <td>{{ $candidat_individual->tara }}</td>
                        </tr>
                        @endif

                        @if($candidat_individual->adresa!=null)
                        <tr>
                            <th>Adresa:</th>
                            <td>{{ $candidat_individual->adresa }}</td>
                        </tr>
                        @endif

                        @if($candidat_individual->oras!=null)
                        <tr>
                            <th>Oras:</th>
                            <td>{{ $candidat_individual->oras }}</td>
                        </tr>
                        @endif

                        <tr>
                            <th>Sex:</th>
                            <td>{{ $candidat_individual->gen }}</td>
                        </tr>

                        @if($candidat_individual->data_nastere!=null)
                        <tr>
                            <th>Data Nasterii:</th>
                            <td>{{ $candidat_individual->data_nastere }}</td>
                        </tr>
                        @endif

                        @if($candidat_individual->biografie!=null)
                        <tr>
                            <th>Biografie:</th>
                            <td>
                               {!! $candidat_individual->biografie !!}
                            </td>
                        </tr>
                        @endif
                    </table>
                </div>

                @if(!$educatie_candidat->count())
                <div class="text-danger">Candidatul nu a incarcat informatii despre educatia sa.</div>
                @else
                <h4 class="resume mt-5">Educatie</h4>

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>SL</th>
                                <th>Tip Studiu</th>
                                <th>Institutie</th>
                                <th>Domeniul Diplomei/Certificarii</th>
                                <th>Anul Finalizarii</th>
                            </tr>

                            @foreach($educatie_candidat as $element)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $element->nivel_invatamant }}</td>
                                <td>{{ $element->institutie }}</td>
                                <td>{{ $element->domeniu }}</td>
                                <td>{{ $element->data_terminare }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @endif

                @if(!$abilitati_candidat->count())
                <div class="text-danger">Candidatul nu a incarcat informatii despre competentele sale.</div>
                @else
                <h4 class="resume mt-5">Competente</h4>

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>SL</th>
                                <th>Abilitati</th>
                                <th>Nivel</th>
                            </tr>

                            @foreach($abilitati_candidat as $element)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $element->competente }}</td>
                                <td>{{ $element->nivel_competente }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @endif

                @if(!$experienta_candidat->count())
                <div class="text-danger">Candidatul nu a incarcat informatii despre experienta sa.</div>
                @else
                <h4 class="resume mt-5">Experienta</h4>

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>SL</th>
                                <th>Companii</th>
                                <th>Pozitii</th>
                                <th>Data Angajare</th>
                                <th>Data Finalizare</th>
                            </tr>

                            @foreach($experienta_candidat as $element)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $element->companie }}</td>
                                <td>{{ $element->pozitie }}</td>
                                <td>{{ $element->data_inceput }}</td>
                                <td>{{ $element->data_finalizare }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @endif

                @if(!$documente_candidat->count())
                <div class="text-danger">Candidatul nu a incarcat documente despre experienta sa.</div>
                @else
                <h4 class="resume mt-5">Documente</h4>

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>SL</th>
                                <th>titlu</th>
                                <th>Fisier</th>
                            </tr>
                            @foreach($documente_candidat as $element)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $element->titlu }}</td>
                                <td>
                                    <a href="{{ asset('uploads/'.$element->fisier) }}" target="_blank">{{ $element->fisier }}</a>
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