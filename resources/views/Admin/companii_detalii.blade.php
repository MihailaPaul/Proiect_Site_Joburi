
{{-- Blade-ul care contine formularul de editare profil administrator --}}
@extends('Admin.layout.panou_baza')
{{-- Foloseste sablonul creat pentru a mentine stilul dorit --}}
@section('heading','Detalii Companie')
{{-- In sectiunea de main_content se constuieste formularul de editare profil  --}}
@section('buton')

<div>
    <a href="{{ route('admin_companii') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Inapoi la toate companiile</a>
</div>
@endsection

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
                                <th class="w_200">Logo</th>
                                <td>
                                    <img src="{{ asset('uploads/'.$companie_detalii->logo) }}"
                                    alt="" class="w_100">
                                </td>
                            </tr>
                            <tr>
                                <th class="w_200">Nume Companie</th>
                                <td>{{ $companie_detalii->nume_companie }}</td>
                            </tr>
                            <tr>
                                <th class="w_200">Nume Reprezentant</th>
                                <td>{{ $companie_detalii->nume_reprezentant }}</td>
                            </tr>
                            <tr>
                                <th class="w_200">Username</th>
                                <td>{{ $companie_detalii->nume_utilizator }}</td>
                            </tr>
                            <tr>
                                <th class="w_200">Email</th>
                                <td>{{ $companie_detalii->email }}</td>
                            </tr>
                            <tr>
                                <th class="w_200">Numar Telefon</th>
                                <td>{{ $companie_detalii->numar_telefon }}</td>
                            </tr>
                            <tr>
                                <th class="w_200">Adresa</th>
                                <td>{{ $companie_detalii->adresa }}</td>
                            </tr>
                            <tr>
                                <th class="w_200">Domeniu Companie</th>
                                <td>{{ $companie_detalii->rCompanieDomain->nume_domeniu }}</td>
                            </tr>
                            <tr>
                                <th class="w_200">Locatie Companie</th>
                                <td>{{ $companie_detalii->rCompanieLocation->nume_locatie }}</td>
                            </tr>
                            <tr>
                                <th class="w_200">Marime Companie</th>
                                <td>{{ $companie_detalii->rCompanieSize->numar_angajati }}</td>
                            </tr>
                            <tr>
                                <th class="w_200">Website</th>
                                <td>{{ $companie_detalii->website }}</td>
                            </tr>
                            <tr>
                                <th class="w_200">Descriere</th>
                                <td>{!! $companie_detalii->descriere !!}</td>
                            </tr>
                            <tr>
                                <th class="w_200">Facebook</th>
                                <td>{{ $companie_detalii->facebook }}</td>
                            </tr>
                            <tr>
                                <th class="w_200">Twitter</th>
                                <td>{{ $companie_detalii->twitter }}</td>
                            </tr>
                            <tr>
                                <th class="w_200">LinkedIn</th>
                                <td>{{ $companie_detalii->linkedin }}</td>
                            </tr>
                            <tr>
                                <th class="w_200">Instagram</th>
                                <td>{{ $companie_detalii->instagram }}</td>
                            </tr>
                            <tr>
                                <th class="w_200">Cod Harta</th>
                                <td>{!! $companie_detalii->map_code !!}</td>
                            </tr>
                            <tr>
                                <th class="w_200">Poze</th>
                                <td>
                                    @foreach($poze as $element)
                                            <img src="{{ asset('uploads/'.$element->poza)}}" alt="" class="w_200">
                                    @endforeach
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection