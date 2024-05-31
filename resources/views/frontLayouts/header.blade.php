<div class="nav-bar">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <a href="#" class="navbar-brand">MENU</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav mr-auto">
                    <a href="{{ route('home') }}" class="nav-item nav-link {{ Request::routeIs('home') ? 'active' : '' }}">Home</a>
                    <a href="{{ route('about') }}" class="nav-item nav-link {{ Request::routeIs('about') ? 'active' : '' }}">About</a>
                    <a href="{{ route('services') }}" class="nav-item nav-link {{ Request::routeIs('services') ? 'active' : '' }}">Service</a>
                    <a href="{{ route('team') }}" class="nav-item nav-link {{ Request::routeIs('team') ? 'active' : '' }}">Team</a>
{{--                    <a href="{{ url('portfolio.html') }}" class="nav-item nav-link {{ Request::is('portfolio.html') ? 'active' : '' }}">Project</a>--}}

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu">
                            <a href="{{route('blogCard')}}" class="dropdown-item {{ Request::is('blogCard') ? 'active' : '' }}" >Blog Page</a>
{{--                            <a href="{{route('blog-details')}}" class="dropdown-item {{ Request::is('blog-details') ? 'active' : '' }}">Single Page</a>--}}
                        </div>
                    </div>
                    <a href="{{route('contact')}}" class="nav-item nav-link {{ Request::is('contact') ? 'active' : '' }}">Contact</a>
                </div>
                <div class="ml-auto">
                    <a class="btn" href="">Download Catalogue</a>
                </div>
            </div>
        </nav>
    </div>
</div>
