@extends('layouts.master')
@section('content')


<div class="container">
    <div class="row">
        <div class="card-body">
            <header>
                <h2>Actualizar mi perfil</h2>
            </header>
            <form id="formularioModificarPerfil" method="post" enctype="multipart/form-data" action="modificarPerfil.php">
                <div>
                    <label>Nombre</label>
                    <input type="text" placeholder="Escribe tu nombre" name="Nombre" value="{{ $usuario->nombre_apellido }}" >
                    <p>
                        <label>Escoge tus tres mejores fotografías (tamaño recomendado: 410px alto * 380px ancho y peso max:9mb)</label>
                        <input type="file" name="foto1" id="foto1" accept="image/*" />
                        <?php echo "<img src='https://i.pinimg.com/originals/92/31/a1/9231a1c4bc5519f04cb79739d2f79374.jpg'" ?>
                    </p>
                    <p>
                        <input type="file" name="foto2" id="foto2" accept="image/*" />
                        <?php echo "<img src='https://i.pinimg.com/originals/92/31/a1/9231a1c4bc5519f04cb79739d2f79374.jpg'" ?>
                    </p>
                    <p>
                        <input type="file" name="foto3" id="foto3" accept="image/*" />
                        <?php echo "<img src='https://i.pinimg.com/originals/92/31/a1/9231a1c4bc5519f04cb79739d2f79374.jpg'" ?>
                    </p>

                    <p>
                        <label>Sexo</label>

                        <label class="miradio">Hombre
                            <input type="radio" name="Sexo" value="M" {{ ($usuario->sexo) == 'M' ? 'checked' : '' }}>
                            <span class="checkmark"></span>
                        </label>
                        <label class="miradio">Mujer
                            <input type="radio" name="Sexo" value="F" {{ ($usuario->sexo) == 'M' ? 'checked' : '' }}>
                            <span class="checkmark"></span>
                        </label>

                    </p>
                    <label>Nivel de estudios acadmémicos</label>
                    <textarea type="text" placeholder="Escribe que estudias actualmente" name="Escuela" >{{ $usuario->estudios }}</textarea>

                    <label>Sobre ti</label>
                    <textarea type="text" placeholder="Describe cuales son tus gustos, que buscas, qué haces..." name="Sobre_ti" >{{ $usuario->sobre_mi }}</textarea>
                    <label>Celular</label>
                    <input type="tel" maxlength="10" placeholder="Num. Celular" name="Celular" value="{{ $usuario->celular }}">
                    <p>
                        <label>Me interesa</label>

                        <label class="miradio">Hombres
                            <input type="radio" name="Interes" value="M" {{ ($usuario->me_interesa) == 'M' ? 'checked' : '' }} >
                            <span class="checkmark"></span>
                        </label>
                        <label class="miradio">Mujeres
                            <input type="radio" name="Interes" value="F" {{ ($usuario->me_interesa) == 'F' ? 'checked' : '' }}>
                            <span class="checkmark"></span>
                        </label>
                        <label class="miradio">Hombres y mujeres
                            <input type="radio" name="Interes" value="T" {{ ($usuario->me_interesa) == 'T' ? 'checked' : '' }}>
                            <span class="checkmark"></span>
                        </label>
                    </p>
                    <label>Contraseña nueva</label>
                    <input type="password" placeholder="Escribe tu nueva contraseña" name="password_1">
                    <label>Confirmar contraseña nueva</label>
                    <input type="password" placeholder="Confirma tu nueva contraseña" name="password_2">
                    <label>Ingresa tu actual contraseña para realizar tus cambios</label>
                    <input type="password" placeholder="Escribe tu contraseña actual" name="password_actual">
                </div>
                <br>
                <p>
                    <input type="submit" id="submitModificarPerfil" name="editar" value="Actualizar" />
                </p>
            </form>
        </div>
    </div>
</div>


@stop