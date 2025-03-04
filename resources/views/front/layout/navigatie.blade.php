<div class="navbar-area" id="stickymenu">
    <!-- Meniu pentru Mobil  -->
    <div class="mobile-nav">
        <a href="index.html" class="logo">
            {{-- Titlul site-ului --}}
            <h1>
                <span style="color: black; font-family: Helvetica; font-weight: bold; text-transform: none;">
                Job<span style="color: #46bc29; font-family: Helvetica; font-weight: bold; text-transform: none;">Wise</span></span>
            </h1>
            {{-- <img src="{{ asset('uploads/logo.png')}}" alt="" /> --}}
        </a>
    </div>

    <!-- Meniu pentru  Desktop -->
    <div class="main-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{ route('acasa') }}">
                    <h1>
                        <span style="color: black; font-family: Helvetica; font-weight: bold; text-transform: none;">
                        Job<span style="color: #46bc29; font-family: Helvetica; font-weight: bold; text-transform: none;">Wise</span></span>
                    </h1>
                    {{-- <img src="{{ asset('uploads/logo.png')}}" alt="" /> --}}
                </a>
                <div
                    class="collapse navbar-collapse mean-menu"
                    id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                            <a href="{{ route('acasa') }}" class="nav-link"> Acasa </a>
                        </li>

                        <li class="nav-item {{ Request::is('locuri-de-munca')||Request::is('detalii-job/*') ? 'active' : '' }}">
                            <a href="{{ route('pagina_joburi') }}" class="nav-link"> Joburi </a>
                        </li>

                        <li class="nav-item {{ Request::is('companii')||Request::is('detalii-companie/*') ? 'active' : '' }}">
                            <a href="{{ route('pagina_companii') }}" class="nav-link"> Companii </a>
                        </li>

                        <li class="nav-item {{ Request::is('pachete') ? 'active' : '' }}">
                            <a href="{{ route('pachete') }}" class="nav-link"> Pachete </a >
                        </li>
                        
                        <li class="nav-item {{ Request::is('blog')||Request::is('articol/*') ? 'active' : '' }}">
                            <a href="{{ route('blog') }}" class="nav-link"> Cariera </a >
                        </li>
                        {{-- Sistemul de schimbare a link-urilor din baza de navigatie din log in si sign up in butoanele pentru meniul candidat si companie --}}
                        @if(Auth::guard('companie')->check())
                        <li class="nav-item">
                            <a href="{{ route('meniu_companie') }}"><i class="fas fa-house-user"></i> Meniu Companie </a>
                        </li>

                        @elseif(Auth::guard('candidat')->check())
                        <li class="nav-item">
                            <a href="{{ route('meniu_companie') }}"><i class="fas fa-house-user"></i> Meniu Candidat </a>
                        </li>

                        @else
                        <li class="nav-item {{ Request::is('login') ? 'active' : '' }}">
                            <a href="{{ route('login') }}" ><i class="fas fa-sign-in-alt"></i> Login </a >
                         </li>
                         
                         <li class="nav-item {{ Request::is('inregistrare') ? 'active' : '' }}">
                            <a href="{{ route('inregistrare') }}"><i class="fas fa-user"></i> Sign Up </a>
                        </li>
                        @endif

                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>