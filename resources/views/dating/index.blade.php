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
                        <img class="responsive_pareja" src="https://i.pinimg.com/originals/92/31/a1/9231a1c4bc5519f04cb79739d2f79374.jpg" alt="" />
                        <header>
                            <h3>Estudios</h3>
                        </header>
                        <p>{{ $arrayPersona->estudios }}</p>
                    </section>

                </div>
                <div class="col-4 col-6-medium col-12-small">

                    <!-- Feature -->
                    <section>
                        <img class="responsive_pareja" src="https://i.pinimg.com/originals/92/31/a1/9231a1c4bc5519f04cb79739d2f79374.jpg" alt="" />
                        <header>
                            <h3>Información...</h3>
                        </header>
                        <p>{{ $arrayPersona->sobre_mi }}</p>
                    </section>

                </div>
                <div class="col-4 col-6-medium col-12-small">

                    <!-- Feature -->
                    <section>
                        <img class="responsive_pareja" src="https://i.pinimg.com/originals/92/31/a1/9231a1c4bc5519f04cb79739d2f79374.jpg" alt="" />
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
                    <div>
                        <form action="" method="post" style="display:inline">
                            {{ csrf_field() }}
                            <div>
                                <input type="text" name="like" id="like" value=" {{ $arrayPersona->id }}" readonly style="display:none;">
                                <button type="submit">Me gusta</button>
                            </div>
                        </form>
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