{{-- Blade-ul care contine formularul de editare profil administrator --}}
@extends('Admin.layout.panou_baza')
{{-- Foloseste sablonul creat pentru a mentine stilul dorit --}}
@section('heading',' Filtru Domeniu Companie')
{{-- In sectiunea de main_content se constuieste formularul de editare profil  --}}
@section('buton')

<div>
    <a href="{{ route('admin_domeniu_companie_creeaza') }}" class="btn btn-primary"><i class="fas fa-plus"></i>  Adauga</a>
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
                                <th>Nume Domeniu</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($date_domeniu_companie as $element)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $element->nume_domeniu }}</td>
                                    <td class="pt_10 pb_10">
                                        <a href="{{ route('admin_domeniu_companie_editare',$element->id) }}" class="btn btn-primary btn-sm">Editare</a>
                                        <a href="{{ route('admin_domeniu_companie_stergere',$element->id) }}" class="btn btn-danger btn-sm" onClick="return confirm('Confirma Stergerea Domeniului!');">Sterge</a>
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