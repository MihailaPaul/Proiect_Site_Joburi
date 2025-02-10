@extends('admin.layout.panou_baza')

@section('heading', 'Pachete')

@section('buton')
<div>
    <a href="{{ route('admin_pachet_creare') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Adauga </a>
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
                                <th>Nume Pachet</th>
                                <th>Pret Pachet</th>
                                <th>Optiuni</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($date_pachete as $element)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{$element->nume_pachet }}</td>
                                    <td>{{$element->pret_pachet }}</td>
                                    
                                    <td class="pt_10 pb_10">
                                        <a href="{{ route('admin_pachet_editare',$element->id) }}" class="btn btn-primary btn-sm">Editeaza</a>
                                        <a href="{{ route('admin_pachet_stergere',$element->id) }}" class="btn btn-danger btn-sm" onClick="return confirm('Confirma Stergerea Pachetului!');">Sterge</a>
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