{{-- Blade-ul care contine formularul de editare profil administrator --}}
@extends('Admin.layout.panou_baza')
{{-- Foloseste sablonul creat pentru a mentine stilul dorit --}}
@section('heading','Alegere')
{{-- In sectiunea de main_content se constuieste formularul de editare profil  --}}
@section('buton')

<div>
    <a href="{{ route('admin_alegere_creare') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Adauga</a>
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
                                    <th>Simbol</th>
                                    <th>Vizualizare Simbol</th>
                                    <th>Titlu</th>
                                    <th>Text</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($date_alegere as $element)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $element->simbol_alegere }}</td>
                                        <td>
                                            <i class="{{ $element->simbol_alegere }}"></i>
                                        </td>
                                        <td>{{ $element->titlu_alegere }}</td>
                                        <td>{{ $element->text_alegere }}</td>
                                        <td class="pt_10 pb_10">
                                            <a href="{{ route('admin_alegere_editare',$element->id) }}" class="btn btn-primary btn-sm">Editare</a>
                                            <a href="{{ route('admin_alegere_stergere',$element->id) }}" class="btn btn-danger btn-sm" onClick="return confirm('Are you sure?');">Sterge</a>
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