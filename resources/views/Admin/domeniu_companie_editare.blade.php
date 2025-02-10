
{{-- Blade-ul care contine formularul de editare profil administrator --}}
@extends('Admin.layout.panou_baza')
{{-- Foloseste sablonul creat pentru a mentine stilul dorit --}}
@section('heading','Editare Domeniu Companie')
{{-- In sectiunea de main_content se constuieste formularul de editare profil  --}}
@section('buton')

<div>
    <a href="{{ route('admin_domeniu_companie') }}" class="btn btn-primary"><i class="fas fa-plus"></i>Arata toate Categoriile</a>
</div>
@endsection

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_domeniu_companie_modifica',$domeniu_companie->id) }}" method="post" >
                        @csrf
                        <div class="form-group mb-3">
                            <label>Nume Domeniu</label>
                            <input type="text" class="form-control" name="nume_domeniu" value="{{ $domeniu_companie->nume_domeniu }}">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Modifica</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection