
{{-- Blade-ul care contine formularul de editare profil administrator --}}
@extends('Admin.layout.panou_baza')
{{-- Foloseste sablonul creat pentru a mentine stilul dorit --}}
@section('heading','Editare Categorie Job')
{{-- In sectiunea de main_content se constuieste formularul de editare profil  --}}
@section('buton')

<div>
    <a href="{{ route('admin_categorie_job') }}" class="btn btn-primary"><i class="fas fa-plus"></i>Arata toate Categoriile</a>
</div>
@endsection

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_categorie_job_modifica',$categorie_job->id) }}" method="post" >
                        @csrf
                        <div class="form-group mb-3">
                            <label>Nume Categorie</label>
                            <input type="text" class="form-control" name="nume_categorie" value="{{ $categorie_job->nume_categorie }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Simbol Categorie</label>
                            <input type="text" class="form-control" name="simbol_categorie" value="{{ $categorie_job->simbol_categorie }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Vizualizare Simbol</label>
                           <div>
                            <i class="{{ $categorie_job->simbol_categorie }}"></i>
                           </div>
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