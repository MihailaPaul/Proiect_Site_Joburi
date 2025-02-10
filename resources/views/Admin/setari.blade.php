
{{-- Blade-ul care contine formularul de editare profil administrator --}}
@extends('Admin.layout.panou_baza')
{{-- Foloseste sablonul creat pentru a mentine stilul dorit --}}
@section('heading','Editare Elemente Footer')
{{-- In sectiunea de main_content se constuieste formularul de editare profil  --}}

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_actualizare_footer') }}" method="post" >
                        @csrf
                        <div class="form-group mb-3">
                            <label> Locatie </label>
                            <input type="text" class="form-control" name="footer_locatie" value="{{ $date_footer->footer_locatie }}">
                        </div>

                        <div class="form-group mb-3">
                            <label> Telefon </label>
                            <input type="text" class="form-control" name="footer_telefon" value="{{ $date_footer->footer_telefon }}">
                        </div>

                        <div class="form-group mb-3">
                            <label> Email </label>
                            <input type="text" class="form-control" name="footer_email" value="{{ $date_footer->footer_email }}">
                        </div>


                        <div class="form-group mb-3">
                            <label> Facebook </label>
                            <input type="text" class="form-control" name="facebook" value="{{ $date_footer->facebook }}">
                        </div>

                        <div class="form-group mb-3">
                            <label> Twitter </label>
                            <input type="text" class="form-control" name="twitter" value="{{ $date_footer->twitter }}">
                        </div>

                        <div class="form-group mb-3">
                            <label> LinkedIn </label>
                            <input type="text" class="form-control" name="linkedin" value="{{ $date_footer->linkedin }}">
                        </div>

                        <div class="form-group mb-3">
                            <label> Instagram </label>
                            <input type="text" class="form-control" name="instagram" value="{{ $date_footer->instagram }}">
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