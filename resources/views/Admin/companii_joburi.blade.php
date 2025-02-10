
@extends('Admin.layout.panou_baza')

@section('heading','Joburi Companiei: '.$companie_detalii->nume_companie)

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
                        <div class="table-responsive">
                            <table class="table table-bordered" id="example1">
                                <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Titlu</th>
                                    <th>Domeniu</th>
                                    <th>Locatie</th>
                                    <th>Status</th>
                                    <th>Optiuni</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($joburi_companii as $element)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $element->titlu }}</td>
                                        <td>{{ $element->rJobCategory->nume_categorie }}</td>
                                        <td>{{ $element->rJobLocation->nume_locatie }}</td>
                                        <td>
                                            @if($element->este_promovat == 1)
                                            <span class="badge bg-success">Promovat</span>
                                            @else
                                            <span class="badge bg-danger">Nepromovat</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('detalii_job',$element->id) }}" class="btn btn-primary btn-sm w-100 mb-2">Detalii</a>
                                            <a href="{{ route('admin_companii_aplicanti',$element->id) }}" class="btn btn-primary btn-sm w-100">Aplicanti</a>
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