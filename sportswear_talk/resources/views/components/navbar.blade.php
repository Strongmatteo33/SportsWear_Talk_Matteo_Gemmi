
<nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('homepage') }}">SportsWear</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('homepage') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('index')}}">Articoli</a>
                </li>
                @auth
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('careers')}}">Lavora con noi</a>
                    </li>
                @if(Auth::user()->is_writer)
                    <li class="nav-item">
                        <a href="{{ route('create') }}" class="nav-link">Create</a>
                    </li>
                @endif
                @endauth
            </ul>

            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 me-5">
                <li class="nav-item dropdown">
                    @auth   
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Ciao, {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu">
                        
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><hr class="dropdown-divider"></li>
                        @if(Auth::user()->is_admin)
                        <li><a href="{{ route('admin.dashboard') }}" class="dropdown-item">Dashboard Admin</a></li>
                        @endif
                        @if(Auth::user()->is_revisor)
                        <li><a href="{{ route('revisor.dashboard') }}" class="dropdown-item">Dashboard Revisore</a></li>
                        @endif
                        <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Disconettiti</a></li>
                        <form id="form-logout" method="POST" action="{{ route('logout') }}" class="d-none">@csrf</form>        
                    </ul>
                    @endauth


                    @guest
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Accedi
                    </a>
                    <ul class="dropdown-menu">

                        
                        <li><a class="dropdown-item" href="{{ route('accedi') }}">Accedi</a></li>
                        <li><a class="dropdown-item" href="{{ route('registrati') }}">Registrati</a></li>

                    </ul>
                    @endguest



                </li>
            </ul>
        </div>
    </div>
</nav>
