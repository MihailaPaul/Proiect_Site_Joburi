<div class="navbar-area" id="stickymenu">
    <!-- Menu For Mobile Device -->
    <div class="mobile-nav">
        <a href="index.html" class="logo">
            <img src="{{ asset('uploads/logo.png')}}" alt="" />
        </a>
    </div>

    <!-- Menu For Desktop Device -->
    <div class="main-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="index.html">
                    <img src="{{ asset('uploads/logo.png')}}" alt="" />
                </a>
                <div
                    class="collapse navbar-collapse mean-menu"
                    id="navbarSupportedContent"
                >
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a href="{{ route('acasa') }}" class="nav-link"> Home </a>
                        </li>
                        <li class="nav-item">
                            <a href="jobs.html" class="nav-link"> Find Jobs </a>
                        </li>
                        <li class="nav-item">
                            <a href="companies.html" class="nav-link"> Companies </a>
                        </li>
                        <li class="nav-item">
                            <a href="pricing.html" class="nav-link">Pricing </a >
                        </li>
                        <li class="nav-item">
                            <a href="blog.html" class="nav-link"> Blog</a >
                        </li>
                        <li class="nav-item">
                                <a href="login.html" ><i class="fas fa-sign-in-alt"></i> Login </a >
                         </li>
                        <li class="nav-item">
                                <a href="signup.html"><i class="fas fa-user"></i> Sign Up </a>
                         </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>