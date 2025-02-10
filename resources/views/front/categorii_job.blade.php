@extends('front.layout.sablon')
@section('continut')

<div class="page-top" style="background-image: url('uploads/banner.jpg')">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Categorii Job</h2>
            </div>
        </div>
    </div>
</div>

<div class="job-category">
    <div class="container">
        <div class="row">
            @foreach($categorie_job_extins as $obiect)
            <div class="col-md-4">
                <div class="item">
                    <div class="icon">
                        <i class="{{ $obiect->simbol_categorie }}"></i>
                    </div>
                    <h3>{{ $obiect->nume_categorie }}</h3>
                    <p>(5 Open Positions)</p>
                    <a href=""></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection