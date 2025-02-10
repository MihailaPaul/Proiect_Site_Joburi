<ul class="list-group list-group-flush">
    <li class="list-group-item {{ Request::is('candidat/meniu') ? 'active' : '' }}">
        <a href="{{ route('meniu_candidat') }}" > Statistici </a>
    </li>
    
    <li class="list-group-item">
        <a href="candidate-applied-jobs.html">Applied Jobs</a>
    </li>

    <li class="list-group-item">
        <a href="candidate-bookmarked-jobs.html">Bookmarked Jobs</a>
    </li>

    <li class="list-group-item">
        <a href="candidate-education.html" >Education</a>
    </li>

    <li class="list-group-item">
        <a href="candidate-skill.html">Skills</a>
    </li>

    <li class="list-group-item">
        <a href="candidate-experience.html" >Work Experience</a>
    </li>

    <li class="list-group-item">
        <a href="candidate-award.html">Awards</a>
    </li>

    <li class="list-group-item {{ Request::is('candidat/editare-profil') ? 'active' : '' }}">
        <a href="{{route('editare_profil_candidat')}}">Editare Profil</a >
    </li>

    <li class="list-group-item">
        <a href="candidate-resume.html" >Resume Upload</a >
    </li>

    <li class="list-group-item">
        <a href="{{ route('logout_candidat') }}">Logout</a>
    </li>
</ul>