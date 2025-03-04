
{{-- Blade-ul care contine formularul de editare profil administrator --}}
@extends('Admin.layout.panou_baza')
{{-- Foloseste sablonul creat pentru a mentine stilul dorit --}}
@section('heading','Editare Elemente Alegere')
{{-- In sectiunea de main_content se constuieste formularul de editare profil  --}}
@section('buton')

<div>
    <a href="{{ route('admin_alegere') }}" class="btn btn-primary"><i class="fas fa-plus"></i>Arata toate Categoriile</a>
</div>
@endsection

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_alegere_modificare',$alegere_element->id) }}" method="post" >
                        @csrf
                        <div class="form-group mb-3">
                            <label>Vizualizare Simbol</label>
                            <div>
                                <i class="{{ $alegere_element->simbol_alegere }}"></i>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label>Simbol</label>
                            <input type="text" class="form-control" name="simbol" value="{{ $alegere_element->simbol_alegere }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Titlu</label>
                            <input type="text" class="form-control" name="titlu" value="{{ $alegere_element->titlu_alegere }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Text</label>
                           <div>
                            <textarea name="text" class="form-control h_100" cols="30" rows="10">{{ $alegere_element->text_alegere }}</textarea>
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