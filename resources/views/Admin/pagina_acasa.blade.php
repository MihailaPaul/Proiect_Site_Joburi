v{{-- Pagina de editare a continutului din pagina acasa a site-ului in pricipal titlul textul si optiunile de cautare --}}
{{-- Se face legatura cu sablonul de Panou Control --}}
@extends('Admin.layout.panou_baza')

@section('heading','Continut Pagina Principala')

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    
                    <form action="{{ route('admin_pagina_acasa_modifica') }}" method="post" enctype="multipart/form-data">
                        @csrf

                         <div class="row tab-customizat">
                            <div class="col-lg-3 col-md-12">
                                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                                    <button class="nav-link active" id="v-pills-1-tab" data-bs-toggle="pill" 
                                    data-bs-target="#v-pills-1" type="button" role="tab" aria-controls="v-pills-1" aria-selected="true">Sectiune Cautare Job</button>
    
                                    <button class="nav-link" id="v-pills-2-tab" data-bs-toggle="pill" 
                                    data-bs-target="#v-pills-2" type="button" role="tab" aria-controls="v-pills-2" aria-selected="false">Sectiune Categorie</button>

                                    <button class="nav-link" id="v-pills-3-tab" data-bs-toggle="pill" 
                                    data-bs-target="#v-pills-3" type="button" role="tab" aria-controls="v-pills-3" aria-selected="false">Sectiune Alegere</button>
    
                                </div>
                            </div>

                            <div class="col-lg-9 col-md-12">
                                <div class="tab-content" id="v-pills-tabContent">

                                    <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab" tabindex="0">
                                       
                                      {{-- Startul sectiunii de cautare job --}}
                                      <div class="row">
                                          <div class="col-md-12">
              
                                              {{-- Campul de editat titlu din partea de search --}}
                                              <div class="mb-4">
                                                  <label class="form-label">Titlu </label>
                                                  <input type="text" class="form-control" name="titlu" value="{{ $date_pagina_acasa->titlu }}">
                                              </div>
                                               {{-- Campul de editat textul din partea de search --}}
                                              <div class="mb-4">
                                                  <label class="form-label">Text</label>
                                                  <textarea name="text" class="form-control h_100" id="" cols="30" rows="10">{{  $date_pagina_acasa->text }}</textarea>
                                              </div>
              
                                              {{-- Formularul de modificare a optiunilor de cautare job este construit in clasa row pentru a optimiza spatiul folosit pe pagina --}}
                                          <div class="row">
                                                   {{-- Campul de editat titlu din formularul de search --}}
                                                  <div class="col-lg-6 col-md-6">
                                                      <div class="mb-4">
                                                          <label class="form-label">Titlu Job</label>
                                                          <input type="text" class="form-control" name="titlu_job" value="{{  $date_pagina_acasa->titlu_job }}">
                                                      </div> 
                                                  </div>
                                                   {{-- Campul de editat posibile locatii formularul de search --}}
                                                  <div class="col-lg-6 col-md-6">
                                                      <div class="mb-4">
                                                          <label class="form-label">Locatie Job</label>
                                                          <input type="text" class="form-control" name="locatie_job" value="{{  $date_pagina_acasa->locatie_job }}">
                                                      </div>
                                                  </div>
                                          </div>
                                                     {{-- Campul de editat posibilele categorii de job-uri din formularul de search --}}
                                          <div class="row">
              
                                                  <div class="col-lg-6 col-md-6">
                                                      <div class="mb-4">
                                                          <label class="form-label">Categorie Job</label>
                                                          <input type="text" class="form-control" name="categorie_job" value="{{  $date_pagina_acasa->categorie_job }}">
                                                      </div>
                                                  </div>
              
                                                  <div class="col-lg-6 col-md-6">
                                                      <div class="mb-4">
                                                          <label class="form-label">Text Buton Cautare</label>
                                                          <input type="text" class="form-control" name="text_buton" value="{{  $date_pagina_acasa->text_buton }}">
                                                      </div>
                                                   </div>
                                              </div>
                                                  
                                                  {{-- Prezentarea pozei actuale care urmeaza sa fie editata --}}
                                                  <div class="mb-4">
                                                  <label class="form-label">Fundal Actual</label>
                                                  <div>
                                                       <img src="{{ asset('uploads/'.$date_pagina_acasa->fundal)}}" alt="" class="w_300">
                                                  </div>
                                              </div>
                                                  {{-- Parte de formular responsabila de incarcarea noii imagini de fundal  --}}
                                              <div class="mb-4">
                                                  <label class="form-label">Poza Fundal</label>
                                                  <div>
                                                       <input type="file" class="form-control mt_10" name="fundal">
                                                  </div>  
                                              </div>
                                                  {{-- Buton de salvare modificari --}}
                                              
                                          </div>
                                      </div>
                  
                                      {{-- Sfarsitul sectiunii de cautare job --}}
                                    </div>
      
                                    <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab" tabindex="0">
                                      {{-- Startul sectiunii de categorii job --}}
                                      <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-4">
                                                    <label class="form-label">Titlu </label>
                                                    <input type="text" class="form-control" name="titlu_sectiune_categorie" value="{{ $date_pagina_acasa->titlu_sectiune_categorie }}">
                                                </div>
                                            </div>
                                      </div> 
                                      <div class="row">
                                         <div class="col-md-12">
                                            <div class="mb-4">
                                                <label class="form-label">Text </label>
                                                <input type="text" class="form-control" name="text_sectiune_categorie" value="{{ $date_pagina_acasa->text_sectiune_categorie }}">

                                            </div>
                                         </div>
                                      </div> 
                                      <div class="row">
                                        <div class="col-md-12">
                                           <div class="mb-4">
                                               <label class="form-label">Stare </label>
                                               <select name="stare_sectiune_categorie" class="form-control select2">
                                                <option value="Invizibila" @if ( $date_pagina_acasa->stare_sectiune_categorie =='Invizibila') selected @endif>Invizibila</option>
                                                <option value="Vizibila" @if ( $date_pagina_acasa->stare_sectiune_categorie =='Vizibila') selected @endif>Vizibila</option>
                                               </select> 
                                           </div>
                                        </div>
                                     </div> 
                                      
                                      {{-- Sfarsitul sectiunii de categorii job --}}
                                    </div>
                                   

                                    <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab" tabindex="0">
                                        {{-- Startul sectiunii de motive de alegere --}}
                                        <div class="row">
                                              <div class="col-md-12">
                                                  <div class="mb-4">
                                                      <label class="form-label">Titlu </label>
                                                      <input type="text" class="form-control" name="sectiune_alegere_titlu" value="{{ $date_pagina_acasa->sectiune_alegere_titlu }}">
                                                  </div>
                                              </div>
                                        </div> 
                                        <div class="row">
                                           <div class="col-md-12">
                                              <div class="mb-4">
                                                  <label class="form-label">Text </label>
                                                  <input type="text" class="form-control" name="sectiune_alegere_text" value="{{ $date_pagina_acasa->sectiune_alegere_text }}">
  
                                              </div>
                                           </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                               <div class="mb-4">
                                                   <label class="form-label">Fundal Actual</label>
                                                 <div>
                                                     <img src="{{ asset('uploads/'.$date_pagina_acasa->sectiune_alegere_fundal)}}" alt="" class="w_300">
                                                 </div>
                                               </div>
                                            </div>
                                         </div> 

                                         <div class="mb-4">
                                            <label class="form-label">Poza Fundal</label>
                                            <div>
                                                 <input type="file" class="form-control mt_10" name="sectiune_alegere_fundal">
                                            </div>  
                                        </div>

                                        <div class="row">
                                          <div class="col-md-12">
                                             <div class="mb-4">
                                                 <label class="form-label">Stare </label>
                                                 <select name="sectiune_alegere_stare" class="form-control select2">
                                                  <option value="Invizibila" @if ( $date_pagina_acasa->sectiune_alegere_stare =='Invizibila') selected @endif>Invizibila</option>
                                                  <option value="Vizibila" @if ( $date_pagina_acasa->sectiune_alegere_stare =='Vizibila') selected @endif>Vizibila</option>
                                                 </select> 
                                             </div>
                                          </div>
                                       </div> 
                                        
                                        {{-- Sfarsitul sectiunii de motive de alegere --}}
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