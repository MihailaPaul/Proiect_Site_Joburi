@extends('Admin.layout.panou_baza')

@section('heading','Detalii Candidat')


@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5>Informatii de baza</h5> 
                    <div class="table-responsive">
                        <table class="table table-bordered table-sm">
                            <tr>
                                <th class="w_200">Poza</th>
                                <td>
                                    <img src="{{ asset('uploads/'.$candidat_individual->poza) }}"
                                    alt="" class="w_100">
                                </td>
                            </tr>
                            <tr>
                                <th class="w_200">Nume </th>
                                <td>{{ $candidat_individual->nume_candidat }}</td>
                            </tr>
                            <tr>
                                <th class="w_200">Pozitit</th>
                                <td>{{  $candidat_individual->pozitie }}</td>
                            </tr>
                            <tr>
                                <th class="w_200">Username</th>
                                <td>{{ $candidat_individual->nume_utilizator }}</td>
                            </tr>
                            <tr>
                                <th class="w_200">Email</th>
                                <td>{{ $candidat_individual->email }}</td>
                            </tr>
                            <tr>
                                <th class="w_200">Numar Telefon</th>
                                <td>{{ $candidat_individual->numar_telefon }}</td>
                            </tr>
                            <tr>
                                <th class="w_200">Descriere</th>
                                <td>{!! $candidat_individual->pozitie !!}</td>
                            </tr>
                            <tr>
                                <th class="w_200">Tara</th>
                                <td>{{  $candidat_individual->tara }}</td>
                            </tr>
                            <tr>
                                <th class="w_200">Adresa</th>
                                <td>{{  $candidat_individual->adresa }}</td>
                            </tr>
                            <tr>
                                <th class="w_200">Oras</th>
                                <td>{{  $candidat_individual->oras }}</td>
                            </tr>
                            <tr>
                                <th class="w_200">Gen</th>
                                <td>{{ $candidat_individual->gen }}</td>
                            </tr>
                            <tr>
                                <th class="w_200">Data Nastere</th>
                                <td>{{  $candidat_individual->data_nastere }}</td>
                            </tr>
                       
                        </table>
                    </div>

                    @if(!$educatie_candidat->count())
                    <div class="text-danger">Candidatul nu a incarcat informatii despre educatia sa.</div>
                    @else
                    <h5>Educatie</h5>
                    <div class="table-responsive">
                        <table class="table table-bordered table-sm">
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
                    <h5>Competente</h5>

                    <div class="table-responsive">
                        <table class="table table-bordered table-sm">
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
                    <h5>Experienta</h5>

                    <div class="table-responsive">
                        <table class="table table-bordered table-sm">
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
                    <div class="text-danger">Candidatul nu a incarcat informatii despre experienta sa.</div>
                    @else
                    <h5>Documente</h5>

                    <div class="table-responsive">
                        <table class="table table-bordered table-sm">
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
</div>
@endsection