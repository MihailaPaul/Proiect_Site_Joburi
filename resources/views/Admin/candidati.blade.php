@extends('Admin.layout.panou_baza')

@section('heading','Candidati')



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
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Numar Telefon</th>
                                    <th>Detalii</th>
                                    <th>Optiuni</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($candidati as $element)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $element->nume_candidat }}</td>
                                        <td>{{ $element->numar_utilizator }}</td>
                                        <td>{{ $element->email }}</td>
                                        <td>{{ $element->numar_telefon }}</td>
                                        <td>
                                            <a href="{{ route('admin_candidati_detalii',$element->id) }}" class="btn btn-primary btn-sm w-100 mb-2">Detalii</a>
                                            <a href="{{ route('admin_candidati_aplicatii',$element->id) }}" class="btn btn-primary btn-sm w-100 mb-2">Aplicatii</a>
                                        </td>
                                        <td class="pt_10 pb_10">
                                            <a href="{{ route('admin_candidati_stergere',$element->id) }}" class="btn btn-danger btn-sm w-100" onClick="return confirm('Confirma Stergerea Companiei!');">Sterge</a>
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