
{{-- Blade-ul care contine formularul de editare profil administrator --}}
@extends('Admin.layout.panou_baza')
{{-- Foloseste sablonul creat pentru a mentine stilul dorit --}}
@section('heading','Creare Pachete')
{{-- In sectiunea de main_content se constuieste formularul de editare profil  --}}
@section('buton')

<div>
    <a href="{{ route('admin_pachet') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Arata Toate Pachetele</a>
</div>
@endsection

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action={{ route('admin_pachet_salvare') }} method="post" enctype="multipart/form-data" >
                        @csrf

                        <div class="form-group mb-3">
                            <label> Nume Pachet </label>
                            <input type="text" class="form-control" name="nume_pachet" value="{{old('nume_pachet')}}">
                        </div>

                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label> Pret Pachet </label>
                                    <input type="text" class="form-control" name="pret_pachet" value="{{old('pret_pachet')}}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label> Durata </label>
                                    <input type="text" class="form-control" name="durata_pachet" value="{{old('durata_pachet')}}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label> Numarul De Postari Permis </label>
                                    <input type="text" class="form-control" name="numar_permis_joburi" value="{{old('numar_permis_joburi')}}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label> Numarul De Postari Promovate Permis </label>
                                    <input type="text" class="form-control" name="numar_permis_joburi_promovate" value="{{old('numar_permis_joburi')}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label> Numarul De Poze Permis </label>
                                    <input type="text" class="form-control" name="numar_permis_poze" value="{{old('numar_permis_poze')}}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label> Numarul De Videoclipuri Permis </label>
                                    <input type="text" class="form-control" name="numar_permis_videoclipuri" value="{{old('numar_permis_videoclipuri')}}">
                                </div>
                            </div>
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