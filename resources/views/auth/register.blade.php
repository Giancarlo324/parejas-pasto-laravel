@extends('layouts.master')

@section('content')
<div class="container">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">{{ __('Registrarse') }}</div>

            <div class="card-body">
                <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                    @csrf

                    <div>
                        <label for="nombre_apellido" class="col-md-5 col-form-label text-md-right">{{ __('Nombres y apellidos') }}</label>

                        <div>
                            <input id="nombre_apellido" type="text" class="form-control @error('nombre_apellido') is-invalid @enderror" name="nombre_apellido" value="{{ old('nombre_apellido') }}" required autocomplete="nombre_apellido" autofocus>

                            @error('nombre_apellido')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <!-- Nuevos campos -->
                    <div>
                        <label for="sexo" class="col-md-4 col-form-label text-md-right">{{ __('Sexo') }}</label>

                        <div class="col-md-6">
                            <label class="miradio">{{ __('Hombre') }}
                                <input class="form-control @error('sexo') is-invalid @enderror" id="sexo" type="radio" name="sexo" value="M" {{ old('sexo') == 'M' ? 'checked' : '' }} autocomplete="sexo">
                                <span class="checkmark form-control @error('sexo') is-invalid @enderror"></span>
                            </label>
                            <label class="miradio">{{ __('Mujer') }}
                                <input class="form-control @error('sexo') is-invalid @enderror" id="sexo" type="radio" name="sexo" value="F" {{ old('sexo') == 'F' ? 'checked' : '' }} autocomplete="sexo">
                                <span class="checkmark form-control @error('sexo') is-invalid @enderror"></span>
                            </label>

                            @error('sexo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <label for="fecha_nacimiento" class="col-md-4 col-form-label text-md-right">{{ __('Fecha de nacimiento') }}</label>
                        <div class="col-4">
                            <input class="form-control @error('fecha_nacimiento') is-invalid @enderror" id="fecha_nacimiento" type="date" name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}">
                        </div>

                        @error('fecha_nacimiento')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div><br>

                    <label>Escoge tus 3 mejores fotos (4mb max por foto)</label>
                    <div>
                        <input type="file" name="foto1" class="form-control" accept="image/*" require>
                        @error('foto1')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                        <input type="file" name="foto2" class="form-control" accept="image/*" require>
                        @error('foto2')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                        <input type="file" name="foto3" class="form-control" accept="image/*" require>
                        @error('foto3')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div><br>

                    <div>
                        <label for="estudios" class="col-md-4 col-form-label text-md-right">{{ __('Nivel académico') }}</label>

                        <div class="col-md-6">
                            <textarea id="estudios" type="text" class="form-control @error('estudios') is-invalid @enderror" name="estudios" required autocomplete="estudios">{{ old('estudios') }}</textarea>

                            @error('estudios')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <label for="sobre_mi" class="col-md-4 col-form-label text-md-right">{{ __('Escribe algo sobre ti') }}</label>

                        <div class="col-md-6">
                            <textarea id="sobre_mi" type="text" class="form-control @error('sobre_mi') is-invalid @enderror" name="sobre_mi" required autocomplete="sobre_mi">{{ old('sobre_mi') }}</textarea>

                            @error('sobre_mi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <label for="celular" class="col-md-5 col-form-label text-md-right">{{ __('Celular') }}</label>

                        <div class="col-md-6">
                            <input id="celular" type="tel" class="form-control @error('celular') is-invalid @enderror" maxlength="10" name="celular" value="{{ old('celular') }}" required autocomplete="celular">

                            @error('celular')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <label for="me_interesa" class="col-md-4 col-form-label text-md-right">{{ __('Me interesa') }}</label>

                        <div class="col-md-6">
                            <label class="miradio">{{ __('Hombres') }}
                                <input class="form-control @error('me_interesa') is-invalid @enderror" id="me_interesa" type="radio" name="me_interesa" value="M" {{ old('me_interesa') == 'M' ? 'checked' : '' }} autocomplete="me_interesa">
                                <span class="checkmark form-control @error('me_interesa') is-invalid @enderror"></span>
                            </label>
                            <label class="miradio">{{ __('Mujeres') }}
                                <input class="form-control @error('me_interesa') is-invalid @enderror" id="me_interesa" type="radio" name="me_interesa" value="F" {{ old('me_interesa') == 'F' ? 'checked' : '' }} autocomplete="me_interesa">
                                <span class="checkmark form-control @error('me_interesa') is-invalid @enderror"></span>
                            </label>
                            <label class="miradio">{{ __('Hombres y mujeres') }}
                                <input class="form-control @error('me_interesa') is-invalid @enderror" id="me_interesa" type="radio" name="me_interesa" value="T" {{ old('me_interesa') == 'T' ? 'checked' : '' }} autocomplete="me_interesa">
                                <span class="checkmark form-control @error('me_interesa') is-invalid @enderror"></span>
                            </label>

                            @error('sexo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <!-- Nuevos campos -->

                    <div>
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Contraseña') }}</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>
                    <br>
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Registrarse') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection