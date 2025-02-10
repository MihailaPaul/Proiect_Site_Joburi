
{{-- Blade-ul care contine formularul de editare profil administrator --}}
@extends('Admin.layout.panou_baza')
{{-- Foloseste sablonul creat pentru a mentine stilul dorit --}}
@section('heading','Creare Niveluri Experinta Job')
{{-- In sectiunea de main_content se constuieste formularul de editare profil  --}}
@section('buton')

<div>
    <a href="{{ route('admin_experienta_job') }}" class="btn btn-primary"><i class="fas fa-plus"></i>Arata toate Categoriile</a>
</div>
@endsection

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action={{ route('admin_experienta_job_salveaza') }} method="post" >
                        @csrf
                        <div class="form-group mb-3">
                            <label>Nume Experienta</label>
                            <input type="text" class="form-control" name="nume_experienta" value="">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Creeaza</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection