<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="/" style="color:#777"><span style="font-size:15pt">&#9820;</span> Parejas Pasto</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        @if( Auth::check() )
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item {{ Request::is('catalog') && ! Request::is('catalog/create')? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/catalog')}}">
                            <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                            Encontrar pareja
                        </a>
                    </li>
                    <li class="nav-item {{  Request::is('catalog/create') ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/catalog/create')}}">
                            <span>&#10010</span> Matches
                        </a>
                    </li>
                </ul>

                <ul class="navbar-nav navbar-right">
                    <li class="nav-item">
                        <form action="{{ url('/logout') }}" method="POST" style="display:inline">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-link nav-link" style="display:inline;cursor:pointer">
                                Cerrar sesión
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        @elseif( !Auth::check() )
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item" style="margin: 0.75em 0 0.75em 0;">
                        <a class="icon solid fa-sign-in-alt" href="{{url('/login')}}">
                            <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                            Iniciar Sesión
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="icon solid fa-user-plus" href="{{url('/register')}}">
                            <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                            Registrarse
                        </a>
                    </li>
                </ul>
            </div>
        @endif
    </div>
</nav>
