@extends('front.layout.sablon')

@section('seo_title'){{ $date_pagina_diverse->seo_titlu_inregistrare }}@endsection
@section('seo_meta_description'){{ $date_pagina_diverse->seo_descriere_inregistrare}}@endsection

@section('continut')

<div class="page-top"style="background-image:  url('{{ asset('uploads/banner.jpg')}}')">
    <div class="bg"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>{{ $date_pagina_diverse->titlu_inregistrare}}</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="page-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                    <div class="login-form">
                        <ul
                            class="nav nav-pills mb-3"
                            id="pills-tab"
                            role="tablist"
                        >
                            <li class="nav-item" role="presentation">
                                <button
                                    class="nav-link active"
                                    id="pills-home-tab"
                                    data-bs-toggle="pill"
                                    data-bs-target="#pills-home"
                                    type="button"
                                    role="tab"
                                    aria-controls="pills-home"
                                    aria-selected="true"
                                >
                                    <i class="far fa-user"></i> Candidate
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button
                                    class="nav-link"
                                    id="pills-profile-tab"
                                    data-bs-toggle="pill"
                                    data-bs-target="#pills-profile"
                                    type="button"
                                    role="tab"
                                    aria-controls="pills-profile"
                                    aria-selected="false"
                                >
                                    <i class="fas fa-briefcase"></i>
                                    Company
                                </button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div
                                class="tab-pane fade show active"
                                id="pills-home"
                                role="tabpanel"
                                aria-labelledby="pills-home-tab"
                                tabindex="0"
                            >
                                <div class="mb-3">
                                    <label for="" class="form-label"
                                        >Candidate Name *</label
                                    >
                                    <input
                                        type="text"
                                        class="form-control"
                                    />
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label"
                                        >Username *</label
                                    >
                                    <input
                                        type="text"
                                        class="form-control"
                                    />
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label"
                                        >Email Address *</label
                                    >
                                    <input
                                        type="text"
                                        class="form-control"
                                    />
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label"
                                        >Password *</label
                                    >
                                    <input
                                        type="password"
                                        class="form-control"
                                    />
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label"
                                        >Confirm Password *</label
                                    >
                                    <input
                                        type="password"
                                        class="form-control"
                                    />
                                </div>
                                <div class="mb-3">
                                    <button
                                        type="submit"
                                        class="btn btn-primary bg-website"
                                    >
                                        Create Account
                                    </button>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0" >

                            <form action="{{ route('trimitere_inregistrare_companie') }}" method="post">
                                @csrf 
                                <div class="mb-3">
                                    <label for="" class="form-label">Company Name *</label>
                                    <input type="text" class="form-control" name="nume_companie" value="{{ old('nume_companie') }}"/>
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Contact Person Name *</label>
                                    <input type="text"class="form-control" name="nume_reprezentant" value="{{ old('nume_reprezentant') }}"/>
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Username *</label>
                                    <input type="text" class="form-control" name="nume_utilizator" value="{{ old('nume_utilizator') }}"/>
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Adresa Email *</label>
                                    <input type="text" class="form-control" name="email" value="{{ old('email') }}"/>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="" class="form-label">Parola *</label>
                                    <input type="password" class="form-control" name="password" value=""/>
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Rescrie Parola *</label>
                                    <input type="password" class="form-control" name="retype_password" value=""/>
                                </div>


                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary bg-website">
                                        Create Account
                                    </button>
                                </div>

                            </form>
                            </div>
                        </div>

                        <div class="mb-3">
                            <a href="{{ route('login') }}" class="primary-color"
                                >Existing User? Login Now</a
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection