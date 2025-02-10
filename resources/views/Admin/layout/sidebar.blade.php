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
{{-- In lista de elemente se adauga si o instanta de drop down menu care contine setarile paginilor--}}
            <li class="nav-item dropdown {{ Request::is('admin/pagina-acasa')||Request::is('admin/pagina-blog')||Request::is('admin/pagina-categorii')||Request::is('admin/pagina-pachete')||Request::is('admin/pagina-diverse')? 'active' : ''}}">

                <a href="#" class="nav-link has-dropdown"><i class="fas fa-hand-point-right"></i><span>Modificare Pagini</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/pagina-acasa') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin_pagina_acasa') }}"><i class="fas fa-angle-right"></i>Pagina Acasa</a></li>

                    <li class="{{ Request::is('admin/pagina-blog') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin_pagina_blog') }}"><i class="fas fa-angle-right"></i>Pagina Blog</a></li>

                    <li class="{{ Request::is('admin/pagina-categorii') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin_pagina_categorii') }}"><i class="fas fa-angle-right"></i>Pagina Categorii Job-uri</a></li>

                    <li class="{{ Request::is('admin/pagina-pachete') ? 'active' : '' }}">
                         <a class="nav-link" href="{{ route('admin_pagina_pachete') }}"><i class="fas fa-angle-right"></i>Pagina Pachete</a></li>

                    <li class="{{ Request::is('admin/pagina-diverse') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin_pagina_diverse') }}"><i class="fas fa-angle-right"></i>Pagina Diverse</a></li>


                </ul>
            </li>





            <li class="nav-item dropdown  {{ Request::is('admin/categorie-job/*')||Request::is('admin/locatie-job/*')||Request::is('admin/tip-job/*')||Request::is('admin/experienta-job/*')|| Request::is('admin/salariu-job/*') ? 'active' : ' ' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-hand-point-right"></i><span>Elemente/Filtre sectiune Job</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/categorie-job/*') ? 'active' : ' ' }}"><a class="nav-link" href="{{ route('admin_categorie_job') }}"><i class="fas fa-angle-right"></i>Categorii Job</a></li>
                    <li class="{{ Request::is('admin/locatie-job/*') ? 'active' : ' ' }}"><a class="nav-link" href="{{ route('admin_locatie_job') }}"><i class="fas fa-angle-right"></i> Locatii Job</a></li>
                    <li class="{{ Request::is('admin/tip-job/*') ? 'active' : ' ' }}"><a class="nav-link" href="{{ route('admin_tip_job') }}"><i class="fas fa-angle-right"></i> Tipuri Job</a></li>
                    <li class="{{ Request::is('admin/experienta-job/*') ? 'active' : ' ' }}"><a class="nav-link" href="{{ route('admin_experienta_job') }}"><i class="fas fa-angle-right"></i> Niveluri Experienta Job</a></li>
                    <li class="{{ Request::is('admin/salariu-job/*') ? 'active' : ' ' }}"><a class="nav-link" href="{{ route('admin_salariu_job') }}"><i class="fas fa-angle-right"></i>Intervale Salariale</a></li>
                </ul>
            </li>



            <li class="nav-item dropdown  {{ Request::is('admin/locatie-companie/*')||Request::is('admin/domeniu-companie/*')||Request::is('admin/marime-companie/*') ? 'active' : ' ' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-hand-point-right"></i><span>Filtre Companie</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/locatie-companie/*') ? 'active' : ' ' }}"><a class="nav-link" href="{{ route('admin_locatie_companie') }}"><i class="fas fa-angle-right"></i> Locatii Companie</a></li>
                    <li class="{{ Request::is('admin/domeniu-companie/*') ? 'active' : ' ' }}"><a class="nav-link" href="{{ route('admin_domeniu_companie') }}"><i class="fas fa-angle-right"></i> Domenii Companie</a></li>
                    <li class="{{ Request::is('admin/marime-companie/*') ? 'active' : ' ' }}"><a class="nav-link" href="{{ route('admin_marime_companie') }}"><i class="fas fa-angle-right"></i> Marime Companie</a></li>
                </ul>
            </li>




            <li class="nav-item dropdown  {{ Request::is('admin/abonati-vizualizare')||Request::is('admin/abonati-trimite-email/*') ? 'active' : ' ' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-hand-point-right"></i><span>Abonati</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/abonati-vizualizare') ? 'active' : ' ' }}"><a class="nav-link" href="{{ route('admin_abonati_vizualizare') }}"><i class="fas fa-angle-right"></i> Toti Abonatii </a></li>
                    <li class="{{ Request::is('admin/abonati-trimite-email/*') ? 'active' : ' ' }}"><a class="nav-link" href="{{ route('admin_abonati_trimite_email') }}"><i class="fas fa-angle-right"></i> Trimite Email Catre Abonati </a></li>
                </ul>
            </li>



            <li class="{{ Request::is('admin/alegere/*') ? 'active' : ' ' }}"><a class="nav-link" href="{{ route('admin_alegere') }}" data-bs-toggle="tooltip" data-bs-placement="right"  data-bs-title="Elemente Sectiune Alegere">
            <i class="fas fa-hand-point-right"></i> <span>Elemente Sectiune Alegere</span></a>
            </li>

            <li class="{{ Request::is('admin/recomandare/*') ? 'active' : ' ' }}"><a class="nav-link" href="{{ route('admin_recomandari') }}" data-bs-toggle="tooltip" data-bs-placement="right"  data-bs-title="Elemente Sectiune Recomandari">
             <i class="fas fa-hand-point-right"></i> <span>Elemente Sectiune Multumiri</span></a>
            </li>

            <li class="{{ Request::is('admin/articol/*') ? 'active' : ' ' }}"><a class="nav-link" href="{{ route('admin_articol') }}" data-bs-toggle="tooltip" data-bs-placement="right"  data-bs-title="Elemente Sectiune Articol">
                <i class="fas fa-hand-point-right"></i> <span>Elemente Sectiune Articol</span></a>
            </li>
            
            <li class="{{ Request::is('admin/pachet/*') ? 'active' : ' ' }}"><a class="nav-link" href="{{ route('admin_pachet') }}" data-bs-toggle="tooltip" data-bs-placement="right"  data-bs-title="Elemente Sectiune Articol">
                <i class="fas fa-hand-point-right"></i> <span>Pachete</span></a>
            </li>
            
            
        </ul>
    </aside>
</div>