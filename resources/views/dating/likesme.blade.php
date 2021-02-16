@extends('layouts.master')
@section('content')
<div class="row">
    @if( $arrayPersona != null )
    @foreach( $arrayPersona as $persona )

    <!-- Features -->
    <section id="features">
        <div class="container">Nombre: {{ $persona->nombre_apellido }}
            <!-- Muestro las tres imágenes -->
            <div class="row aln-center">

                <div class="col-4 col-6-medium col-12-small">
                    <section>
                        <img class="responsive_pareja" src=" {{ $persona->foto1 ? $persona->foto1 : 'https://t4.ftcdn.net/jpg/00/64/67/63/360_F_64676383_LdbmhiNM6Ypzb3FM4PPuFP9rHe7ri8Ju.jpg' }}" alt="" />
                    </section>
                </div>
                <div class="col-4 col-6-medium col-12-small">
                    <section>
                        <img class="responsive_pareja" src=" {{ $persona->foto2 ? $persona->foto2 : 'https://t4.ftcdn.net/jpg/00/64/67/63/360_F_64676383_LdbmhiNM6Ypzb3FM4PPuFP9rHe7ri8Ju.jpg' }}" alt="" />
                    </section>
                </div>
                <div class="col-4 col-6-medium col-12-small">
                    <section>
                        <img class="responsive_pareja" src=" {{ $persona->foto3 ? $persona->foto3 : 'https://t4.ftcdn.net/jpg/00/64/67/63/360_F_64676383_LdbmhiNM6Ypzb3FM4PPuFP9rHe7ri8Ju.jpg' }}" alt="" />
                    </section>
                </div>

            </div>
            <!-- Cierre muestra de las tres imágenes -->

            <ul class="actions">
                <li><a href=" {{ url('profile/' . $persona->idUsuario) }}" class="button icon solid fa-file">Ver su perfil</a></li>
            </ul>

        </div>
    </section>
    @endforeach
    @else
    <section id="features">
        <div class="container">
            <header>
                <h2>No pierdas la esperanza, encontrarás tu pareja perfecta</h2>
            </header>
            <div class="row aln-center">
                <p class="textos"> Prueba a conocer personas distintas, crea conexiones y diviertete!</p>
                <img src="{{ url('assets/images/buscarpareja.jpg') }}" class="responsive" />
            </div>
        </div>
    </section>
    @endif
    @include('partials.footer')

</div>
@stop