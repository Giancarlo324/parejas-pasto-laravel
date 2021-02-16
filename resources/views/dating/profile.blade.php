@extends('layouts.master')
@section('content')
<!-- Features -->
<section id="features">
    <div class="container">
        <header>
            <h2>Perfil de <strong>{{ $usuario->nombre_apellido }}</strong></h2>
        </header>
        <div class="prueba">
            <!-- Muestro las tres imágenes -->
            <div class="row aln-center">

                <div class="col-4 col-6-medium col-12-small">
                    <!-- Muestro las tres imágenes -->
                    <section>
                        <img class="responsive_pareja" src=" {{ $usuario->foto1 ? $usuario->foto1 : 'https://t4.ftcdn.net/jpg/00/64/67/63/360_F_64676383_LdbmhiNM6Ypzb3FM4PPuFP9rHe7ri8Ju.jpg' }}" alt="" />
                    </section>
                </div>
                <div class="col-4 col-6-medium col-12-small">
                    <section>
                        <img class="responsive_pareja" src=" {{ $usuario->foto2 ? $usuario->foto2 : 'https://t4.ftcdn.net/jpg/00/64/67/63/360_F_64676383_LdbmhiNM6Ypzb3FM4PPuFP9rHe7ri8Ju.jpg' }}" alt="" />
                    </section>
                </div>
                <div class="col-4 col-6-medium col-12-small">
                    <section>
                        <img class="responsive_pareja" src=" {{ $usuario->foto3 ? $usuario->foto3 : 'https://t4.ftcdn.net/jpg/00/64/67/63/360_F_64676383_LdbmhiNM6Ypzb3FM4PPuFP9rHe7ri8Ju.jpg' }}" alt="" />
                    </section>
                </div>
                <!-- Cierre muestra de las tres imágenes -->

            </div>
            <!-- Cierre muestra de las tres imágenes -->
            <h4>{{ __('Celular:') }}</h4>
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