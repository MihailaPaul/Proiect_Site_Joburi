{{-- Blade-ul care contine formularul de editare profil administrator --}}
@extends('Admin.layout.panou_baza')
{{-- Foloseste sablonul creat pentru a mentine stilul dorit --}}
@section('heading','Categorii Job')
{{-- In sectiunea de main_content se constuieste formularul de editare profil  --}}
@section('buton')

<div>
    <a href="{{ route('admin_categorie_job_creeaza') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Adauga</a>
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
                                    <th>Nume Categorie</th>
                                    <th>Simbol Categorie</th>
                                    <th>Vizualizare Simbol</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($date_categorie_job as $element)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $element->nume_categorie }}</td>
                                        <td>{{ $element->simbol_categorie }}</td>
                                        <td>
                                            <i class="{{ $element->simbol_categorie }}"></i>
                                        </td>
                                        <td class="pt_10 pb_10">
                                            <a href="{{ route('admin_categorie_job_editare',$element->id) }}" class="btn btn-primary btn-sm">Editare</a>
                                            <a href="{{ route('admin_categorie_job_stergere',$element->id) }}" class="btn btn-danger btn-sm" onClick="return confirm('Are you sure?');">Sterge</a>
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