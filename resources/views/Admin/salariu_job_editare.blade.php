
{{-- Blade-ul care contine formularul de editare profil administrator --}}
@extends('Admin.layout.panou_baza')
{{-- Foloseste sablonul creat pentru a mentine stilul dorit --}}
@section('heading','Editare Interval Salarial')
{{-- In sectiunea de main_content se constuieste formularul de editare profil  --}}
@section('buton')

<div>
    <a href="{{ route('admin_salariu_job') }}" class="btn btn-primary"><i class="fas fa-plus"></i>Arata toate elementele</a>
</div>
@endsection

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_salariu_job_modifica',$salariu_job->id) }}" method="post" >
                        @csrf
                        <div class="form-group mb-3">
                            <label>Interval Salarial</label>
                            <input type="text" class="form-control" name="sume" value="{{ $salariu_job->sume }}">
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