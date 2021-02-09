@extends('layouts.master')
@section('content')

@php
if( Auth::user()->id === $usuario->id ){
@endphp
<div class="container">
    <div class="row">
        <div class="card-body">
            <header>
                <h2>Actualizar mi perfil</h2>
            </header>
            <form id="formularioModificarPerfil" method="post" enctype="multipart/form-data" action="">
                {{method_field('PUT')}}
                {{ csrf_field() }}
                <div>
                    <label>Nombre</label>
                    <input type="text" placeholder="Escribe tu nombre" name="nombre_apellido" value="{{ $usuario->nombre_apellido }}" require>

                    <p>
                        <label>Sexo</label>

                        <label class="miradio">Hombre
                            <input type="radio" name="sexo" value="M" {{ ($usuario->sexo) == 'M' ? 'checked' : '' }}>
                            <span class="checkmark"></span>
                        </label>
                        <label class="miradio">Mujer
                            <input type="radio" name="sexo" value="F" {{ ($usuario->sexo) == 'F' ? 'checked' : '' }}>
                            <span class="checkmark"></span>
                        </label>

                    </p>
                    <label>Nivel de estudios acadmémicos</label>
                    <textarea type="text" placeholder="Escribe que estudias actualmente" name="estudios" require>{{ $usuario->estudios }}</textarea>

                    <label>Sobre ti</label>
                    <textarea type="text" placeholder="Describe cuales son tus gustos, que buscas, qué haces..." name="sobre_mi" require>{{ $usuario->sobre_mi }}</textarea>
                    <label>Celular</label>
                    <input type="tel" maxlength="10" placeholder="Num. Celular" name="celular" value="{{ $usuario->celular }}" require>
                    <p>
                        <label>Me interesa</label>

                        <label class="miradio">Hombres
                            <input type="radio" name="me_interesa" value="M" {{ ($usuario->me_interesa) == 'M' ? 'checked' : '' }}>
                            <span class="checkmark"></span>
                        </label>
                        <label class="miradio">Mujeres
                            <input type="radio" name="me_interesa" value="F" {{ ($usuario->me_interesa) == 'F' ? 'checked' : '' }}>
                            <span class="checkmark"></span>
                        </label>
                        <label class="miradio">Hombres y mujeres
                            <input type="radio" name="me_interesa" value="T" {{ ($usuario->me_interesa) == 'T' ? 'checked' : '' }}>
                            <span class="checkmark"></span>
                        </label>
                    </p>
                    <label>Email(Solo lectura)</label>
                    <input type="email" name="email" value="{{ $usuario->email }}" readonly>
                    
                </div>
                <br>
                <p>
                    <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                        Editar
                    </button>
                </p>
            </form>
        </div>
    </div>
</div>
@php
}else{
@endphp
<div class=''>No tienes permiso para ver esta pagina!</div>
@include('partials.footer')
@php
}
@endphp


@stop