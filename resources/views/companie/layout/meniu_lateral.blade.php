<ul class="list-group list-group-flush">
    <li class="list-group-item {{ Request::is('companie/meniu') ? 'active' : '' }}">
        <a href="{{ route('meniu_companie') }}">Meniu</a>
    </li>
    <li class="list-group-item {{ Request::is('companie/plata-pachet') ? 'active' : '' }}">
        <a href="{{ route('plata_pachet_companie') }}">Cumpara Pachet</a >
    </li>
    <li class="list-group-item {{ Request::is('companie/plati') ? 'active' : '' }}">
        <a href="{{ route('plati_companie') }}">Plati</a>
    </li>
    <li class="list-group-item">
        <a href="company-job-add.html">Create Job</a>
    </li>
    <li class="list-group-item">
        <a href="company-jobs.html">All Jobs</a>
    </li>
    <li class="list-group-item {{ Request::is('companie/poze') ? 'active' : '' }}">
        <a href="{{ route('poze_companie') }}">Photos</a>
    </li>
    <li class="list-group-item">
        <a href="company-videos.html">Videos</a>
    </li>
    <li class="list-group-item">
        <a href="company-applications.html">Candidate Applications</a>
    </li>
    <li class="list-group-item {{ Request::is('companie/editare-profil') ? 'active' : '' }}">
        <a href="{{route('editare_profil_companie')}}">Editare Profil</a>
    </li>
    <li class="list-group-item">
        <a href="{{route('logout_companie')}}">Logout</a>
    </li>
</ul>