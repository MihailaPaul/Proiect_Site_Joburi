{{-- Blade-ul care contine formularul de editare profil administrator --}}
@extends('Admin.layout.panou_baza')
{{-- Foloseste sablonul creat pentru a mentine stilul dorit --}}
@section('heading',' Abonati Newsletter')
{{-- In sectiunea de main_content se constuieste formularul de editare profil  --}}
@section('buton')

<div>
    <a href="{{ route('admin_abonati_trimite_email') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Trimite Email Catre Toti</a>
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
                                    <th>Email</th>
                                    <th>Optiuni</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($abonati as $element)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $element->email}}</td>
                                        <td class="pt_10 pb_10">
                                            <a href="{{ route('admin_abonat_stergere',$element->id) }}" class="btn btn-danger btn-sm" onClick="return confirm('Confirma Stergerea Abonatului !');">Sterge</a>
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