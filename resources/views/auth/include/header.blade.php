<header class="maine mb-0">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="logo col-md-4">
                <a href="{{route('home')}}"><img src="{{asset('/')}}/images/logo.png" alt="construction" /></a>
            </div>
            <div class="post-job col-md-6">
                <ul class="navbar-nav header-top">
                    <li class="nav-item">
                        <a class="nav-link" href="{{asset('login')}}">LOGIN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('register')}}">SIGNUP</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('job.post')}}" class="btn post-job-btn">post a job</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>

<nav class="navbar main-navigation-bar navbar-expand-lg navbar-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav m-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">FIND A CONTRACTOR</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">HOME RENOVATIONS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">COMMERCIAL PROJECTS</a>
            </li>

        </ul>
    </div>
</nav>
