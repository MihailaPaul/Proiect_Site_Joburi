{{-- Layout-ul care cuprinde bara de navigatie din partea superioara a ecranului  --}}

{{-- Se creeaza structura care sa contina bara de navigatie --}}
<div class="navbar-bg"></div>
{{-- Se creeaza bara de navigatie in sine  --}}
        <nav class="navbar navbar-expand-lg main-navbar">
{{-- Se realizeaza o structura de tip form care este folosita pentru creerea unui form sub forma orizontala --}}
            <form class="form-inline mr-auto">
                <ul class="navbar-nav mr-3">
{{-- Creearea elementelor din lista --}}
                    <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                    <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
                </ul>
            </form>
{{-- Se realizeaza o a doua lista pentru butoanele de navigatie din partea dreapta  --}}
            <ul class="navbar-nav navbar-right w-100-p justify-content-end">
{{-- Pentru acest vuton se folloseste target ul blank deoarece se doreste deschiderea Front End ului intr-un tab nou --}}
                <li class="nav-link">
                    <a href="{{ route('acasa') }}" target="_blank" class="btn btn-warning">Pagina Acasa Site</a>
                </li>
{{-- Codul pentru meniul de dropdown care contine setarile pentru contul de admin  --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle nav-link-lg nav-link-user" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img alt="image" src="{{ asset('uploads/'.Auth::guard('admin')->user()->Poza) }}" class="rounded-circle-custom ">
                        <div class="d-sm-none d-lg-inline-block">{{Auth::guard('admin')->user()->Nume }}</div></a>
                      </a>
                      <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-right ">
                        <li><a class="dropdown-item has-icon" href="{{ route('profil_admin') }}"><i class="far fa-user"></i> Editeaza Profil</a></li>
                        <li><a class="dropdown-item  has-icon text-danger" href="{{ route('admin_logout') }}">  <i class="fas fa-sign-out-alt"></i> Logout</a></li>
                      </ul>

                    </div>
                </li>
            </ul>
        </nav>