@extends('front.layout.sablon')

{{-- @section('seo_title'){{ $date_pagina_articol->SEO_titlu }}@endsection
@section('seo_meta_description'){{ $date_pagina_articol->SEO_descriere }}@endsection --}}

@section('continut')

<div class="page-top"style="background-image: url('{{ asset('uploads/banner.jpg')}}')">
            <div class="bg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Aplicanti pentru: {{ $job_individual->titlu }}</h2>
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
                <h4>Aplicantii pentru acest job: </h4>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>Nr.</th>
                                <th>Nume</th>
                                <th>Email</th>
                                <th>Telefon</th>
                                <th>Statusul Aplicatiei</th>
                                <th>Optiuni</th>
                                <th>Detalii</th>
                                <th>Motivare</th>
                            </tr> 
                            @php $i=0; @endphp
                            @foreach($aplicanti as $element )
                            @php $i++; @endphp
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $element->rCandidat->nume_candidat }}</td>
                                <td>{{ $element->rCandidat->email }}</td>
                                <td>{{ $element->rCandidat->numar_telefon}}</td>
                                <td>
                                    @if($element->status == 'Aplicat')
                                        @php $culoare="primary" @endphp
                                    @elseif($element->status == 'Acceptata')
                                        @php $culoare="success" @endphp
                                    @elseif($element->status == 'Respinsa')
                                        @php $culoare="danger" @endphp
                                    @endif
                                    <span class = "badge bg-{{ $culoare }}">{{ $element->status}}</span>
                                    
                                </td>
                                <td>
                                    <form action="{{ route('companie_aplicatie_status_selectare') }}" method="post">
                                        @csrf
                                    <input type="hidden" name="job_id" value="{{ $job_individual->id }}">
                                    <input type="hidden" name="candidate_id" value="{{ $element->candidate_id }}">
                                    <select name="status" class="form-control select2" onchange="this.form.submit()">  
                                        <option value="">Selecteaza</option>
                                        <option value="Aplicat">Aplicat</option>
                                        <option value="Acceptata">Accepta</option>
                                        <option value="Respinsa">Respinge</option>
                                    </select>
                                    </form>
                                </td>
                                <td>
                                    <a href="{{ route('companie_detalii_aplicant',$element->candidate_id) }}" class="btn btn-primary btn-sm" target="_blank">Detalii</a>
                                </td>
                                <td>
                                    <a href="" class="btn btn-warning btn_sm" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $i }}">Motivare</a>

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
            </div>
        </div>
    </div>
</div>
@endsection