{{-- Blade-ul care contine formularul de editare profil administrator --}}
@extends('Admin.layout.panou_baza')
{{-- Foloseste sablonul creat pentru a mentine stilul dorit --}}
@section('heading','Companii')
{{-- In sectiunea de main_content se constuieste formularul de editare profil  --}}


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
                                    <th>Nume Companie</th>
                                    <th>Nume Reprezentant</th>
                                    <th>Username</th>
                                    <th>Detalii</th>
                                    <th>Optiuni</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($companii as $element)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $element->nume_companie }}</td>
                                        <td>{{ $element->nume_reprezentant }}</td>
                                        <td>{{ $element->nume_utilizator }}</td>
                                        <td>
                                            <a href="{{ route('admin_companii_detalii',$element->id) }}" class="btn btn-primary btn-sm w-100 mb-2">Detalii</a>
                                            <a href="{{ route('admin_companii_joburi',$element->id) }}" class="btn btn-primary btn-sm w-100">Joburi</a>
                                        </td>
                                        <td class="pt_10 pb_10">
                                            <a href="{{ route('admin_companii_stergere',$element->id) }}" class="btn btn-danger btn-sm w-100" onClick="return confirm('Confirma Stergerea Companiei!');">Sterge</a>
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