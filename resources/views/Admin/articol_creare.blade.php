
{{-- Blade-ul care contine formularul de editare profil administrator --}}
@extends('Admin.layout.panou_baza')
{{-- Foloseste sablonul creat pentru a mentine stilul dorit --}}
@section('heading','Creare Elemente Sectiune Articole')
{{-- In sectiunea de main_content se constuieste formularul de editare profil  --}}
@section('buton')

<div>
    <a href="{{ route('admin_articol') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Arata toate Categoriile</a>
</div>
@endsection

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action={{ route('admin_articol_salvare') }} method="post" enctype="multipart/form-data" >
                        @csrf

                        <div class="form-group mb-3">
                            <label> Poza </label>
                            <div>
                                <input type="file" name="poza">
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label> Titlu </label>
                            <input type="text" class="form-control" name="titlu" value="{{old('titlu')}}">
                        </div>

                        <div class="form-group mb-3">
                            <label> Slug </label>
                            <input type="text" class="form-control" name="slug" value="{{old('slug')}}">
                        </div>

                        <div class="form-group mb-3">
                            <label> Descriere Scurta </label>
                            <textarea name="scurta_descriere" class="form-control h_100" cols="30" rows="10">{{old('scurta_descriere')}}</textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label> Descriere </label>
                            <textarea name="descriere" class="form-control editor" cols="30" rows="10">{{old('descriere')}}</textarea>
                        </div>

                        <h4 class="seo_section">SEOSection</h4>

                        <div class="form-group mb-3">
                            <label> Titlu SEO </label>
                            <input type="text" class="form-control" name="SEO_titlu" value="{{old('titlu')}}">
                        </div>

                        <div class="form-group mb-3">
                            <label> Descriere SEO </label>
                            <textarea name="SEO_descriere" class="form-control h_100" cols="30" rows="10">{{old('SEO_descriere')}}</textarea>
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