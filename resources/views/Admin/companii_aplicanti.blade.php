
@extends('Admin.layout.panou_baza')

@section('heading','Aplicantii pentru pozitia: '.$detalii_job->titlu)


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
                                    <th>Nume</th>
                                    <th>Email</th>
                                    <th>Numar Telefon</th>
                                    <th>Status</th>
                                    <th>Detalii</th>
                                    <th>Motivare</th> 
                                </tr>
                                </thead>
                                <tbody>
                                    @php $i=0; @endphp
                                    @foreach($aplicanti as $element)
                                    @php $i++; @endphp
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $element->rCandidat->titlu }}</td>
                                        <td>{{ $element->rCandidat->email }}</td>
                                        <td>{{ $element->rCandidat->numar_telefon }}</td>
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
                                            <a href="{{ route('admin_companii_aplicanti_detalii',$element->candidate_id) }}" class="btn btn-primary btn-sm" target="_blank">Detalii</a>
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
</div>
@endsection