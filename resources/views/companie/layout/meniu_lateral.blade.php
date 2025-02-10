<ul class="list-group list-group-flush">
    <li class="list-group-item {{ Request::is('companie/meniu') ? 'active' : '' }}">
        <a href="{{ route('meniu_companie') }}">Statistici</a>
    </li>
    <li class="list-group-item {{ Request::is('companie/plata-pachet') ? 'active' : '' }}">
        <a href="{{ route('plata_pachet_companie') }}">Cumparare Pachet</a >
    </li>
    <li class="list-group-item {{ Request::is('companie/plati') ? 'active' : '' }}">
        <a href="{{ route('plati_companie') }}">Istoric Plati</a>
    </li>
    <li class="list-group-item {{ Request::is('companie/creare-job') ? 'active' : '' }}">
        <a href="{{ route('creare_joburi_companie') }}">Creeare Anunt Job</a>
    </li>
    <li class="list-group-item {{ Request::is('companie/jobuuri-postate') ? 'active' : '' }}">
        <a href="{{ route('joburi_postate_companie') }}">Toate Anunturile Postate</a>
    </li>
    <li class="list-group-item {{ Request::is('companie/poze') ? 'active' : '' }}">
        <a href="{{ route('poze_companie') }}">Poze Prezentare Companie Incarcate</a>
    </li>
    <li class="list-group-item {{ Request::is('companie/aplicatii') ? 'active' : '' }}">
        <a href="{{ route('companie_aplicatii_job') }}">Aplicatii Candidati</a>
    </li>
    <li class="list-group-item {{ Request::is('companie/editare-profil') ? 'active' : '' }}">
        <a href="{{route('editare_profil_companie')}}">Modificare Profil</a>
    </li>
    <li class="list-group-item {{ Request::is('companie/editare-parola') ? 'active' : '' }}">
        <a href="{{route('editare_parola_companie')}}">Modificare Parola</a>
    </li>
    <li class="list-group-item">
        <a href="{{route('logout_companie')}}">Logout</a>
    </li>
</ul>