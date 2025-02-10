{{-- Pagina de editare a continutului din pagina acasa a site-ului in pricipal titlul textul si optiunile de cautare --}}
{{-- Se face legatura cu sablonul de Panou Control --}}
@extends('Admin.layout.panou_baza')

@section('heading','Continut Pagina Principala')

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    
                    <form action="{{ route('admin_pagina_diverse_modificare') }}" method="post" enctype="multipart/form-data">
                        @csrf

                         <div class="row tab-customizat">
                            <div class="col-lg-3 col-md-12">
                                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                                    <button class="nav-link active" id="v-pills-1-tab" data-bs-toggle="pill" 
                                    data-bs-target="#v-pills-1" type="button" role="tab" aria-controls="v-pills-1" aria-selected="true">Pagina Login</button>
    
                                    <button class="nav-link" id="v-pills-2-tab" data-bs-toggle="pill" 
                                    data-bs-target="#v-pills-2" type="button" role="tab" aria-controls="v-pills-2" aria-selected="false">Pagina Inregistrare</button>

                                    <button class="nav-link" id="v-pills-3-tab" data-bs-toggle="pill" 
                                    data-bs-target="#v-pills-3" type="button" role="tab" aria-controls="v-pills-3" aria-selected="false">Pagina Parola Uitata</button>

                                  
                                </div>
                            </div>

                            <div class="col-lg-9 col-md-12">
                                <div class="tab-content" id="v-pills-tabContent">

                                      <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab" tabindex="0">
                                        {{-- Startul  Sectiunii Logare --}}

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-4">
                                                    <label class="form-label"> Titlu </label>
                                                    <input type="text" class="form-control" name="titlu_logare" value="{{ $date_pagina_diverse->titlu_logare}}">
                                                </div>
                                            </div>
                                      </div> 

                                        <div class="row">
                                              <div class="col-md-12">
                                                  <div class="mb-4">
                                                      <label class="form-label">Titlu SEO </label>
                                                      <input type="text" class="form-control" name="seo_titlu_logare" value="{{ $date_pagina_diverse->seo_titlu_logare}}">
                                                  </div>
                                              </div>
                                        </div> 
                                        
                                        <div class="row">
                                           <div class="col-md-12">
                                              <div class="mb-4">
                                                  <label class="form-label">Descriere SEO </label>
                                                  <textarea name="seo_descriere_logare" class="form-control h_100" cols="30" rows="10">{{ $date_pagina_diverse->seo_descriere_logare }}</textarea>
                                              </div>
                                           </div>
                                        </div> 
    
                                        
                                        {{-- Sfarsitul sectiunii Logare --}}
                                      </div>



                                      <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab" tabindex="0">
                                        {{-- Startul sectiunii Inregistrare --}}

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-4">
                                                    <label class="form-label"> Titlu </label>
                                                    <input type="text" class="form-control" name="titlu_inregistrare" value="{{ $date_pagina_diverse->titlu_inregistrare}}">
                                                </div>
                                            </div>
                                      </div> 

                                        <div class="row">
                                              <div class="col-md-12">
                                                  <div class="mb-4">
                                                      <label class="form-label">Titlu SEO </label>
                                                      <input type="text" class="form-control" name="seo_titlu_inregistrare" value="{{ $date_pagina_diverse->seo_titlu_inregistrare}}">
                                                  </div>
                                              </div>
                                        </div> 
                                        
                                        <div class="row">
                                           <div class="col-md-12">
                                              <div class="mb-4">
                                                  <label class="form-label">Descriere SEO </label>
                                                  <textarea name="seo_descriere_inregistrare" class="form-control h_100" cols="30" rows="10">{{ $date_pagina_diverse->seo_descriere_inregistrare }}</textarea>
                                              </div>
                                           </div>
                                        </div> 
    
                                        
                                        {{-- Sfarsitul sectiunii Inregistrare --}}
                                      </div>




                                      <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab" tabindex="0">
                                        {{-- Startul sectiunii Parola Uitata --}}

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-4">
                                                    <label class="form-label"> Titlu </label>
                                                    <input type="text" class="form-control" name="titlu_parola_uitata" value="{{ $date_pagina_diverse->titlu_parola_uitata}}">
                                                </div>
                                            </div>
                                      </div> 

                                        <div class="row">
                                              <div class="col-md-12">
                                                  <div class="mb-4">
                                                      <label class="form-label">Titlu SEO </label>
                                                      <input type="text" class="form-control" name="seo_titlu_parola_uitata" value="{{ $date_pagina_diverse->seo_titlu_parola_uitata}}">
                                                  </div>
                                              </div>
                                        </div> 
                                        
                                        <div class="row">
                                           <div class="col-md-12">
                                              <div class="mb-4">
                                                  <label class="form-label">Descriere SEO </label>
                                                  <textarea name="seo_descriere_parola_uitata" class="form-control h_100" cols="30" rows="10">{{ $date_pagina_diverse->seo_descriere_parola_uitata }}</textarea>
                                              </div>
                                           </div>
                                        </div> 
    
                                        
                                        {{-- Sfarsitul sectiunii Parola Uitata --}}
                                      </div>




                                </div>

                                    <div class="mb-4">
                                        <label class="form-label"></label>
                                        <button type="submit" class="btn btn-primary">Modifica </button>
                                    </div>
                                </div>
                                
                            </div>

                           
                    </form>
                        {{-- Se construieste formularul  --}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection