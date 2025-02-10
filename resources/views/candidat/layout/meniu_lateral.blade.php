<ul class="list-group list-group-flush">
    <li class="list-group-item {{ Request::is('candidat/meniu') ? 'active' : '' }}">
        <a href="{{ route('meniu_candidat') }}" > Statistici </a>
    </li>
    
    <li class="list-group-item">
        <a href="candidate-applied-jobs.html">Applied Jobs</a>
    </li>

    <li class="list-group-item  {{ Request::is('candidat/educatie/vizualizare') ? 'active' : '' }}">
        <a href="{{route('educatie_candidat')}}" > Educatie si Certificari </a>
    </li>

    <li class="list-group-item  {{ Request::is('candidat/competente/vizualizare') ? 'active' : '' }}">
        <a href="{{route('competente_candidat')}}" > Competente si abilitati </a>
    </li>

    <li class="list-group-item {{ Request::is('candidat/experienta/vizualizare') ? 'active' : '' }}">
        <a href="{{route('experienta_candidat')}}" >Experinta Job</a>
    </li>

    <li class="list-group-item {{ Request::is('candidat/documente/vizualizare') ? 'active' : '' }}">
        <a href="{{route('documente_candidat')}}" >Documente</a >
    </li>

    <li class="list-group-item {{ Request::is('candidat/editare-profil') ? 'active' : '' }}">
        <a href="{{route('editare_profil_candidat')}}">Editare Profil</a >
    </li>

    <li class="list-group-item {{ Request::is('candidat/editare-parola') ? 'active' : '' }}">
        <a href="{{route('editare_parola_candidat')}}">Editare Parola</a>
    </li> 

    <li class="list-group-item">
        <a href="{{ route('logout_candidat') }}">Logout</a>
    </li>
</ul>