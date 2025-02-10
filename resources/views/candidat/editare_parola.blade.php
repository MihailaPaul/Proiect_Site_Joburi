@extends('front.layout.sablon')

{{-- @section('seo_title'){{ $date_pagina_articol->SEO_titlu }}@endsection
@section('seo_meta_description'){{ $date_pagina_articol->SEO_descriere }}@endsection --}}

@section('continut')

<div class="page-top"style="background-image: url('{{ asset('uploads/banner.jpg')}}')">
            <div class="bg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Editare Parola</h2>
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
                <form action="{{ route('actualizare_parola_candidat') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for=""> Parola Noua </label>
                            <div class="form-group">
                                <input type="password" name="parola" class="form-control" value=""/>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for=""> Reintroducere Parola Noua </label>
                            <div class="form-group">
                                <input type="password" name="reintroducere_parola" class="form-control" value=""/>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Modifica"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
         
@endsection