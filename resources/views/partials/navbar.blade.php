<!-- Header -->
<section id="header">
    <div class="container">

        <!-- Logo -->
        <h1 id="logo"><a href="/">Encuentra Pareja Pasto</a></h1>
        <p>Si estás solo, si estás de visita, ten un encuentro casual y disfruta del momento...</p>

        <!-- Nav -->
        <nav id="nav">
            <ul>
                @if( Auth::check() )
                <li><a class="icon solid fa-heart" href="{{ url('/dating') }}"><span>Encontrar pareja</span></a></li>
                <li><a class="icon solid fa-grin-hearts" href="{{ url('/likes') }}"><span>Mis gustos</span></a></li>
                <li><a class="icon solid fa-fire" href="{{ url('/likesme') }}"><span>A quien le gusto</span></a></li>
                <li><a class="icon solid fa-database" href="{{ url('/profile/edit/' . Auth::user()->id ) }}"><span>Actualizar perfil</span></a></li>
                <li><form action="{{ url('/logout') }}" method="POST" style="display:inline">
                    {{ csrf_field() }}
                    <button type="submit" class="icon solid fa-sign-out-alt" style="display:inline;cursor:pointer">
                        Cerrar sesión
                    </button>
                </form></li>
                @elseif( !Auth::check() )
                <li><a class="icon solid fa-sign-in-alt" href="{{url('/login')}}"><span>Iniciar Sesión</span></a></li>
                <li><a class="icon solid fa-user-plus" href="{{url('/register')}}"><span>Registrarse</span></a></li>
                @endif
            </ul>
        </nav>
    </div>
</section>