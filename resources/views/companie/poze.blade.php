@extends('front.layout.sablon')

{{-- @section('seo_title'){{ $date_pagina_articol->SEO_titlu }}@endsection
@section('seo_meta_description'){{ $date_pagina_articol->SEO_descriere }}@endsection --}}

@section('continut')

<div class="page-top"style="background-image: url('{{ asset('uploads/banner.jpg')}}')">
            <div class="bg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Poze</h2>
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
                <h4>Adauga Poza</h4>
                <form action="{{ route('poze_companie_salvare') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <input type="file" name="poza" />
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-sm" value="Incarca"/>
                        </div>
                    </div>
                </form>
                <h4 class="mt-4">Poze Existente</h4>
                <div class="photo-all">
                    <div class="row">
                        @foreach($poze as $element)
                        <div class="col-md-6 col-lg-3">
                            <div class="item mb-2">
                                <a href="{{ asset('uploads/'.$element->poza) }}" class="magnific">
                                    <img src="{{ asset('uploads/'.$element->poza) }}" alt=""/>
                                    <div class="icon">
                                        <i class="fas fa-plus"></i>
                                    </div>
                                    <div class="bg"></div>
                                </a>
                            </div>
                             <a href="{{ route('poze_companie_stergere',$element->id) }}" class="btn btn-danger btn-sm mb-2"  onClick="return confirm('Confirma Stergerea Pozei !');"> Delete </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection