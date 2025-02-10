{{-- Layout-ul care cuprinde bara laterala ce contine majoritatea optiunilor de selectat din partea stanga a ecranului --}}

{{-- Se defineste container-ul div pentru bara laterala --}}
<div class="main-sidebar">
{{-- Se defineste elementul de tip aside care permite inchiderea si deschidea barei laterale --}}
    <aside id="sidebar-wrapper">
{{-- Se definesc doua sau mai multe div uri resposabile de afisarea iconitelor barei laterale pentru o versiune mai mica a acesteia --}}

        <div class="sidebar-brand">
            <a href="{{ route('admin_home') }}">Tablou Admin</a>
        </div>
{{-- Sectiune pentru momentul in care sidebar ul este minimiza --}}
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('admin_home') }}"></a>
        </div>
{{-- Se initializeaza o lista de elemente  --}}
        <ul class="sidebar-menu">

            <li class="{{ Request::is('admin/home') ? 'active' : ' ' }}"><a class="nav-link" href="{{ route('admin_home') }}" data-bs-toggle="tooltip" data-bs-placement="right"  data-bs-title="Tablou">
                <i class="fas fa-hand-point-right"></i> <span>Dashboard</span></a></li>
{{-- In lista de elemente se adauga si o instanta de drop down menu --}}
            <li class="nav-item dropdown {{ Request::is('admin/pagina-acasa') ? 'active' : ' ' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-hand-point-right"></i><span>Setari Pagini</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/pagina-acasa') ? 'active' : ' ' }}"><a class="nav-link" href="{{ route('admin_pagina_acasa') }}"><i class="fas fa-angle-right"></i>Pagina Acasa</a></li>
                    <li class=""><a class="nav-link" href=""><i class="fas fa-angle-right"></i> Item 2</a></li>
                </ul>
            </li>

            <li class="nav-item dropdown  {{ Request::is('admin/categorie-job/*') ? 'active' : ' ' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-hand-point-right"></i><span>Elemente Sectiune Job</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/categorie-job/*') ? 'active' : ' ' }}"><a class="nav-link" href="{{ route('admin_categorie_job') }}"><i class="fas fa-angle-right"></i>Categorie Job</a></li>
                    <li class=""><a class="nav-link" href=""><i class="fas fa-angle-right"></i> Locatie Job</a></li>
                </ul>
            </li>

            <li class="{{ Request::is('admin/alegere/*') ? 'active' : ' ' }}"><a class="nav-link" href="{{ route('admin_alegere') }}" data-bs-toggle="tooltip" data-bs-placement="right"  data-bs-title="Elemente Sectiune Alegere">
            <i class="fas fa-hand-point-right"></i> <span>Elemente Sectiune Alegere</span></a>
            </li>

            <li class="{{ Request::is('admin/recomandari/*') ? 'active' : ' ' }}"><a class="nav-link" href="{{ route('admin_recomandari') }}" data-bs-toggle="tooltip" data-bs-placement="right"  data-bs-title="Elemente Sectiune Recomandari">
             <i class="fas fa-hand-point-right"></i> <span>Elemente Sectiune Multumiri</span></a>
            </li>

            <li class="{{ Request::is('admin/articol/*') ? 'active' : ' ' }}"><a class="nav-link" href="{{ route('admin_articol') }}" data-bs-toggle="tooltip" data-bs-placement="right"  data-bs-title="Elemente Sectiune Articol">
                <i class="fas fa-hand-point-right"></i> <span>Elemente Sectiune Articol</span></a>
               </li>

        </ul>
    </aside>
</div>