{{-- Pagina Principala a Tabloului De Control al administatorului --}}
{{-- Se face legatura cu sablonul de Panou Control --}}
@extends('Admin.layout.panou_baza')

@section('heading','Tablou Admin')

@section('main_content')

{{-- Se creeaza 3 structuri de tip card care afiseaza o iconita si niste informatii text. Acestea sunt creeate intr-o clasa row care le aranjeaza in linie --}}
{{-- Primul Card --}}
<div class="row">
    {{-- Se seteaza latimea cardului in fuctie de marimea ecranului cu ajutorul claselor de mai jos  --}}
    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        {{-- Se implementeaza componenta de tip card in care sunt afisate informatiile dorite  --}}
        <div class="card card-statistic-1">
            {{-- Se aduaga o pictograma pentru cardul dorit prin intermediul clasei card-icon --}}
            <div class="card-icon bg-primary">
                {{-- Se declara pictograma care este adaugata --}}
                <i class="far fa-user"></i>
            </div>
            {{-- In elemntul definit de card-wraper upreaza sa fie trecute titlul si continutul carduului  --}}
            <div class="card-wrap">
                {{-- Titlul Cardului  --}}
                <div class="card-header">
                    <h4>Test 1234</h4>
                </div>
                {{-- Continutul cardului  --}}
                <div class="card-body">
                    12
                </div>
            </div>
        </div>
    </div>
    {{-- Al Doilea Card --}}
    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-danger">
                <i class="fas fa-book-open"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Total Tutoriale</h4>
                </div>
                <div class="card-body">
                    122
                </div>
            </div>
        </div>
    </div>
{{-- Al treilea Card --}}
    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-warning">
                <i class="fas fa-bullhorn"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Numar Utilizatori</h4>
                </div>
                <div class="card-body">
                    45
                </div>
            </div>
        </div>
    </div>
</div>
@endsection