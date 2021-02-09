@extends('layouts.master')
@section('content')
<!-- Features -->
<section id="features">
    <div class="container">
        <header>
            <h2>Perfil de <strong>{{ $usuario->nombre_apellido }}</strong></h2>
        </header>
        <div class="prueba">
            <h4>Nombre: </h4>
            <li class="informacion">{{ $usuario->nombre_apellido }}</li>
            <h4>Celular: </h4>
            <li class="informacion">{{ $usuario->celular }}</li>
            <h4>Email: </h4>
            <li class="informacion">{{ $usuario->email }}</li>
            <h4>Busco conocer: </h4>
            <li class="informacion">
                @php
                $interes = $usuario->me_interesa ;
                if ($interes == 'M') echo "Hombres";
                if ($interes == 'F') echo "Mujeres";
                if ($interes == 'T') echo "Hombres o mujeres";
                @endphp
            </li>
            <h4>Tengo: </h4>
            <li class="informacion">
                @php
                $valor = "$usuario->fecha_nacimiento";
                // Calculo la edad, se evalúa con la fecha actual.
                $fecha = new DateTime($valor);
                $hoy = new DateTime();
                $annos = $hoy->diff($fecha);
                echo $annos->y;
                @endphp años.
            </li>
            <h4>Ocupación: </h4>
            <li class="informacion">{{ $usuario->estudios }}</li>
            <h4>Información: </h4>
            <li class="informacion">{{ $usuario->sobre_mi }}</li>
        </div>
    </div>
</section>
@stop