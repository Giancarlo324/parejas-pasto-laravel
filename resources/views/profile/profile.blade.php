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
            <form method="post" enctype="multipart/form-data" action="">
                {{method_field('PUT')}}
                {{ csrf_field() }}
                <div>
                    <label for="nombre_apellido">Nombre</label>
                    <input type="text" placeholder="Escribe tu nombre" id="nombre_apellido" name="nombre_apellido" value="{{ $usuario->nombre_apellido }}" require>

                    <!-- Subir imágenes -->
                    <label>Fotos max(4mb por foto)</label>
                    <div class="form-group">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>
                                        <img class="responsive_pareja" src=" {{ $usuario->foto1 ? $usuario->foto1 : 'https://t4.ftcdn.net/jpg/00/64/67/63/360_F_64676383_LdbmhiNM6Ypzb3FM4PPuFP9rHe7ri8Ju.jpg' }}" alt="" />
                                    </th>
                                    <th>
                                        <img class="responsive_pareja" src=" {{ $usuario->foto2 ? $usuario->foto2 : 'https://t4.ftcdn.net/jpg/00/64/67/63/360_F_64676383_LdbmhiNM6Ypzb3FM4PPuFP9rHe7ri8Ju.jpg' }}" alt="" />
                                    </th>
                                    <th>
                                        <img class="responsive_pareja" src=" {{ $usuario->foto3 ? $usuario->foto3 : 'https://t4.ftcdn.net/jpg/00/64/67/63/360_F_64676383_LdbmhiNM6Ypzb3FM4PPuFP9rHe7ri8Ju.jpg' }}" alt="" />
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <input type="file" name="foto1" class="form-control" accept="image/*">
                                        @error('imagen1')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="file" name="foto2" class="form-control" accept="image/*">
                                        @error('imagen2')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="file" name="foto3" class="form-control" accept="image/*">
                                        @error('imagen3')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div><br>
                    <!-- Fin subir imágenes -->

                    <p>
                        <label for="sexo">Sexo</label>

                        <label class="miradio">Hombre
                            <input type="radio" name="sexo" value="M" {{ ($usuario->sexo) == 'M' ? 'checked' : '' }}>
                            <span class="checkmark"></span>
                        </label>
                        <label class="miradio">Mujer
                            <input type="radio" name="sexo" value="F" {{ ($usuario->sexo) == 'F' ? 'checked' : '' }}>
                            <span class="checkmark"></span>
                        </label>

                    </p>
                    <label for="estudios">Nivel de estudios acadmémicos</label>
                    <textarea id="estudios" type="text" placeholder="Escribe que estudias actualmente" name="estudios" require>{{ $usuario->estudios }}</textarea>

                    <label for="sobre_mi">Sobre ti</label>
                    <textarea id="sobre_mi" type="text" placeholder="Describe cuales son tus gustos, que buscas, qué haces..." name="sobre_mi" require>{{ $usuario->sobre_mi }}</textarea>
                    <label for="celular">Celular</label>
                    <input id="celular" type="tel" maxlength="10" placeholder="Num. Celular" name="celular" value="{{ $usuario->celular }}" require>
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
                    <label for="email">Email(Solo lectura)</label>
                    <input id="email" type="email" name="email" value="{{ $usuario->email }}" require readonly>

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