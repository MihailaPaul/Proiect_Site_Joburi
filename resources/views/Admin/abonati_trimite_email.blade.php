
{{-- Blade-ul care contine formularul de editare profil administrator --}}
@extends('Admin.layout.panou_baza')
{{-- Foloseste sablonul creat pentru a mentine stilul dorit --}}
@section('heading','Trimitere Email Catre Abonati')
{{-- In sectiunea de main_content se constuieste formularul de editare profil  --}}
@section('buton')

<div>
    <a href="{{ route('admin_abonati_vizualizare') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Inapoi la Abonati</a>
</div>
@endsection

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action={{ route('admin_abonati_trimite_email_salvare') }} method="post" enctype="multipart/form-data" >
                        @csrf

                        <div class="form-group mb-3">
                            <label> Subiect </label>
                            <input type="text" class="form-control" name="subiect" value="{{old('subiect')}}">
                        </div>

                        <div class="form-group mb-3">
                            <label> Mesaj </label>
                            <textarea name="mesaj" class="form-control h_150" cols="30" rows="10">{{old('scurta_descriere')}}</textarea>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Trimite</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection