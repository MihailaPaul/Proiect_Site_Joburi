@extends('Admin.layout.panou_baza')

@section('heading','Aplicatiile Candidatului')



@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="example1">
                                <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Titlu</th>
                                    <th>Companie</th>
                                    <th>Status Aplicatie</th>
                                    <th>Paragraf Motivare</th>
                                    <th>Detalii</th>
                                </tr>
                                </thead>
                                <tbody> 
                                    @php $i=0; @endphp
                                    @foreach($aplicatii as $element)
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

                                            <div class="badge bg-{{ $culoare }} w-100">
                                                {{ $element->status }}
                                            </div>
                                         </td>
                                         <td>
                                            <a href="" class="btn btn-warning btn_sm w-100" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $i }}">Motivare</a>
                                        </td>
        
                                        <td>
                                            <a href="{{ route('detalii_job',$element->rJob->id) }}" class="btn btn-primary btn-sm text-white w-100" > Detalii </a>
        
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
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection