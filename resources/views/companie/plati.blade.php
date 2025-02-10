@extends('front.layout.sablon')

{{-- @section('seo_title'){{ $date_pagina_articol->SEO_titlu }}@endsection
@section('seo_meta_description'){{ $date_pagina_articol->SEO_descriere }}@endsection --}}

@section('continut')

<div class="page-top"style="background-image: url('{{ asset('uploads/banner.jpg')}}')">
            <div class="bg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Plati</h2>
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
                                <th>Numar Comanda</th>
                                <th>Nume Pachet</th>
                                <th>Pret</th>
                                <th>Data Cumparare</th>
                                <th>Data Expirare</th>
                                <th>Payment Method</th>
                            </tr>
                            @foreach($date_plati as $element)
                            <tr>
                                <td>{{ $loop->iteration }}
                                     @if($element->status == 1)
                                    <span class="badge bg-success">Activ</span>
                                    @endif
                                </td>
                                <td>{{ $element->numar_comanda }}</td>
                                <td>{{ $element->rPackage->nume_pachet }}</td>
                                <td>{{ $element->suma_platita }} €</td>
                                <td>{{ $element->data_start }}</td>
                                <td>{{ $element->data_expirare }}</td>
                                <td>PayPal</td>
                                
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