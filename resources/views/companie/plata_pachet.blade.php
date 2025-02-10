@extends('front.layout.sablon')

{{-- @section('seo_title'){{ $date_pagina_articol->SEO_titlu }}@endsection
@section('seo_meta_description'){{ $date_pagina_articol->SEO_descriere }}@endsection --}}

@section('continut')

<div class="page-top"style="background-image: url('{{ asset('uploads/banner.jpg')}}')">
            <div class="bg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Plata Pachet</h2>
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
            <h4>Pachet Activ</h4>
            <div class="row box-items mb-4">
                <div class="col-md-4">
                    <div class="box1">
                        @if($pachetul_activ == null)
                        <span class="text-danger">Nu exista pachet activ ! </span>
                        @else
                        <h4>{{ $pachetul_activ->suma_platita }} €</h4>
                        <p>{{ $pachetul_activ->rPackage->nume_pachet }}</p>
                        @endif
                    </div>
                </div>
            </div>

            <h4>Cumpara Pachet</h4>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <form action="{{ route('companie_paypal') }}" method="post">
                            @csrf
                        <tr>
                            <td class="w-300">
                                <select name="package_id" class="form-control select2">

                                    @foreach ($pachete as $element)
                                    <option value="{{ $element->id }}">{{$element->nume_pachet}} ({{$element->pret_pachet}} € )</option>
                                    @endforeach

                                </select>
                            </td>
                            <td>
                                <button type="submit" class="btn btn-primary">
                                    Plateste cu Paypal
                                </button>
                            </td>
                        </tr>
                        </form>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection