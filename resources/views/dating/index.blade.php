@extends('layouts.master')
@section('content')
<div class="row">
    @if($arrayPersona!=null)

    <!-- Features -->
    <section id="features">
        <div class="container">
            <header>
                <h2>¿Te gustaría conocer a <strong>{{ $arrayPersona->nombre_apellido }}</strong>?</h2>
            </header>
            <div class="row aln-center">
                <div class="col-4 col-6-medium col-12-small">

                    <!-- Feature -->
                    <section>
                        <img class="responsive_pareja" src=" {{ $arrayPersona->foto2 ? $arrayPersona->foto1 : 'https://t4.ftcdn.net/jpg/00/64/67/63/360_F_64676383_LdbmhiNM6Ypzb3FM4PPuFP9rHe7ri8Ju.jpg' }}" alt="" />
                        <header>
                            <h3>Estudios</h3>
                        </header>
                        <p>{{ $arrayPersona->estudios }}</p>
                    </section>

                </div>
                <div class="col-4 col-6-medium col-12-small">

                    <!-- Feature -->
                    <section>
                        <img class="responsive_pareja" src=" {{ $arrayPersona->foto2 ? $arrayPersona->foto2 : 'https://t4.ftcdn.net/jpg/00/64/67/63/360_F_64676383_LdbmhiNM6Ypzb3FM4PPuFP9rHe7ri8Ju.jpg' }}" alt="" />
                        <header>
                            <h3>Información...</h3>
                        </header>
                        <p>{{ $arrayPersona->sobre_mi }}</p>
                    </section>

                </div>
                <div class="col-4 col-6-medium col-12-small">

                    <!-- Feature -->
                    <section>
                        <img class="responsive_pareja" src=" {{ $arrayPersona->foto3 ? $arrayPersona->foto3 : 'https://t4.ftcdn.net/jpg/00/64/67/63/360_F_64676383_LdbmhiNM6Ypzb3FM4PPuFP9rHe7ri8Ju.jpg' }}" alt="" />
                        <header>
                            <h3>Su edad</h3>
                        </header>
                        <p>
                            @php
                            $valor = "$arrayPersona->fecha_nacimiento";
                            // Calculo la edad, se evalúa con la fecha actual.
                            $fecha = new DateTime($valor);
                            $hoy = new DateTime();
                            $annos = $hoy->diff($fecha);
                            echo $annos->y;
                            @endphp años.</p>
                    </section>

                </div>
                <div class="col-12">
                    <form action="" method="post" style="display:inline">
                        {{ csrf_field() }}
                        <div>
                            <input type="text" name="like" id="like" value=" {{ $arrayPersona->id }}" readonly style="display:none;">
                            <button type="submit">Me gusta</button>
                        </div>
                    </form><br>
                    <form action="" method="post" style="display:inline">
                        {{ csrf_field() }}
                        <div>
                            <input type="text" name="dislike" id="dislike" value=" {{ $arrayPersona->id }}" readonly style="display:none;">
                            <button type="submit">No me gusta</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    @else
    <section id="features">
        <div class="container">
            <header>
                <h2>En este momento no hay parejas disponibles</h2>
            </header>
            <div class="row aln-center">
                ¡Comparte este sitio web con tus amigos y descubre gente nueva!
                <img src="{{ url('assets/images/buscarpareja.jpg') }}" class="responsive" />
            </div>
        </div>
    </section>
    @endif
    @include('partials.footer')

</div>
@stop