@extends('front.layout.sablon')

{{-- @section('seo_title'){{ $date_pagina_articol->SEO_titlu }}@endsection
@section('seo_meta_description'){{ $date_pagina_articol->SEO_descriere }}@endsection --}}

@section('continut')

<div class="page-top"style="background-image: url('{{ asset('uploads/banner.jpg')}}')">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Aplicatii Joburi</h2>
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
                @if(!$aplicatii_joburi->count())
                <div class="text-danger">Nu ai aplicat la nici un job!</div>
                @else
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>Nr.</th>
                                <th>Titlu Job</th>
                                <th>Nume Companie</th>
                                <th>Status</th>
                                <th>Motivatia</th>
                                <th class="w-100">Detalii</th>
                            </tr>
                            @php $i=0; @endphp
                            @foreach($aplicatii_joburi as $element)
                            @php $i++; @endphp
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $element->rJob->titlu }}</td>
                                <td>{{ $element->rJob->rCompany->nume_companie }}</td>
                                <td>
                                    @if($element->status == 'Aplicat')
                                    @php $culoare = 'primary' @endphp
                                    @elseif($element->status == 'Acceptata')
                                    @php $culoare = 'success' @endphp
                                    @elseif($element->status == 'Respinsa')
                                    @php $culoare = 'danger' @endphp
                                    @endif

                                    <div class="badge bg-{{ $culoare }}">
                                        {{ $element->status }}
                                    </div>
                                </td>

                                <td>
                                    <a href="" class="btn btn-warning btn_sm" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $i }}">Motivare</a>
                                </td>

                                <td>
                                    <a href="{{ route('detalii_job',$element->rJob->id) }}" class="btn btn-primary btn-sm text-white" ><i class="fas fa-eye"></i ></a>

                                    <div class="modal fade" id="exampleModal{{ $i }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Paragraful de motivare trimis</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                            {!! nl2br($element->scrisoare_motivare) !!}
                                            </div>
                                        </div>
                                        </div>
                                    </div>
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