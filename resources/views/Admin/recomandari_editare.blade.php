
{{-- Blade-ul care contine formularul de editare profil administrator --}}
@extends('Admin.layout.panou_baza')
{{-- Foloseste sablonul creat pentru a mentine stilul dorit --}}
@section('heading','Editare Elemente Multumiri')
{{-- In sectiunea de main_content se constuieste formularul de editare profil  --}}
@section('buton')

<div>
    <a href="{{ route('admin_recomandari') }}" class="btn btn-primary"><i class="fas fa-plus"></i>Arata toate Categoriile</a>
</div>
@endsection

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_recomandari_modificare',$recomandari_element->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label> Poza Actuala </label>
                            <div>
                                <img src="{{ asset('uploads/'.$recomandari_element->poza) }}" alt="" class="w_150">
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label> Schimba Poza </label>
                            <div>
                                <input type="file" name="poza">
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label>Nume </label>
                            <input type="text" class="form-control" name="nume" value="{{ $recomandari_element->nume }}">
                        </div>

                        <div class="form-group mb-3">
                            <label>Pozitie </label>
                            <input type="text" class="form-control" name="pozitie" value="{{ $recomandari_element->pozitie }}">
                        </div>

                        <div class="form-group mb-3">
                            <label>Comentariu </label>
                            <textarea name="comentariu" class="form-control h_100" cols="30" rows="10">{{ $recomandari_element->comentariu}} </textarea>
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