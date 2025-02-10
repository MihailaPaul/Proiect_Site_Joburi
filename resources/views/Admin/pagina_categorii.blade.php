@extends('admin.layout.panou_baza')

@section('heading', 'Modificare Continut Pagina Categorii')

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_pagina_categorii_modificare') }}" method="post">
                        @csrf
                        <div class="form-group mb-3">
                            <label> Titlu </label>
                            <input type="text" class="form-control" name="titlu" value="{{ $date_pagina_categorii->titlu }}">
                        </div>

                        
                         <h4 class="seo_section">SEO Section</h4>


                        <div class="form-group mb-3">
                            <label> Titlu SEO </label>
                            <input type="text" class="form-control" name="SEO_titlu" value="{{ $date_pagina_categorii->SEO_titlu }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Descriere SEO</label>
                            <textarea name="SEO_descriere" class="form-control h_100" cols="30" rows="10">{{ $date_pagina_categorii->SEO_descriere }}</textarea>
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