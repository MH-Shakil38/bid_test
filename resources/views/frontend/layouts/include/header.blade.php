<header class="maine mb-0">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="logo col-md-4">
                <a href="{{route('home')}}"><img src="{{asset('/')}}/images/logo.png" alt="construction"/></a>
            </div>
            <div class="post-job col-md-6">
                <ul class="navbar-nav header-top">
                    @if(user_type() == 2)
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('dashboard')}}">Bidder</a>
                        </li>
                    @elseif(user_type() == 1)
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('dashboard')}}">Contractor</a>
                        </li>
                    @endif

                    @if(user_type() == null)
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('login')}}">LOGIN</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('register')}}">SIGNUP</a>
                        </li>
                    @endif
                    @if(user_type() == 3)

                        <li class="nav-item">
                            <a href="{{route('dashboard')}}" class="btn post-job-btn">Owner</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('job.post')}}" class="btn post-job-btn">post a job</a>
                        </li>

                            <li class="nav-item">
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                                <a href="#" class="btn post-job-btn" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                            </li>
                    @endif

                </ul>

            </div>
        </div>
    </div>
</header>

<nav class="navbar main-navigation-bar navbar-expand-lg navbar-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
