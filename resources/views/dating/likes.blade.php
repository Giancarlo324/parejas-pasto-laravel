@extends('layouts.master')
@section('content')
<div class="row">
    @if( $arrayPersona != null )
    @foreach( $arrayPersona as $persona )

    <!-- Features -->
    <section id="features">
        <div class="container">
            <table class="table">

                <thead style="text-align: center;">
                    <tr>
                        <th>Nombre: {{ $persona->nombre_apellido }} </th>
                    </tr>
                    <tr>
                        <td class="responsive_pareja">
                            <!-- Muestro las tres imágenes -->
                            <div id="imgPersona">
                                <img class="responsive_pareja" src="https://i.pinimg.com/originals/92/31/a1/9231a1c4bc5519f04cb79739d2f79374.jpg">
                            </div>
                            <!-- Cierre muestra de las tres imágenes -->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <ul class="actions">
                                <li><a href=" {{ url('profile/' . $persona->idUsuarioMeGusta) }}" class="button icon solid fa-file">Ver su perfil</a></li>
                            </ul>
                        </td>
                    </tr>
            </table>
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