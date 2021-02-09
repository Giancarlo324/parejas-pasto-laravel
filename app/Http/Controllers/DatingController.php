<?php

namespace App\Http\Controllers;

use App\Models\Megusta;
use Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class DatingController extends Controller
{
    public function getIndex()
    {
        if (Request::isMethod('get')) {
            $usuario = Auth::user();
            $miInteres = $usuario->me_interesa;
            $miSexo = $usuario->sexo;
            // Hombre busca hombre.
            if ($miSexo == 'M' && $miInteres == 'M') $usuariosInteres = User::where('sexo', 'M')->where('me_interesa', 'M')->where('id', '!=', $usuario->id)->get();
            // Hombre busca mujer.
            elseif ($miSexo == 'M' && $miInteres == 'F') $usuariosInteres = User::where('sexo', 'F')->where('me_interesa', 'M')->where('id', '!=', $usuario->id)->get();
            // Hombre busca todo.
            elseif ($miSexo == 'M' && $miInteres == 'T') $usuariosInteres = User::where('sexo', 'M')->where('me_interesa', 'T')->where('id', '!=', $usuario->id)->get();
            // Mujer busca mujer.
            elseif ($miSexo == 'F' && $miInteres == 'F') $usuariosInteres = User::where('sexo', 'F')->where('me_interesa', 'F')->where('id', '!=', $usuario->id)->get();
            // Mujer busca hombre.
            elseif ($miSexo == 'F' && $miInteres == 'M') $usuariosInteres = User::where('sexo', 'M')->where('me_interesa', 'F')->where('id', '!=', $usuario->id)->get();
            // Mujer busca todo.
            elseif ($miSexo == 'F' && $miInteres == 'T') $usuariosInteres = User::where('sexo', 'F')->where('me_interesa', 'T')->where('id', '!=', $usuario->id)->get();
            // $out = new \Symfony\Component\Console\Output\ConsoleOutput(); // Usado para mostrar cosas en la consola.
            // Verificación si al usuario que aparece ya le di 'me gusta o 'no me gusta'.
            foreach ($usuariosInteres as $posicion => $usuarioInteres) {
                $validarMeGusta = Megusta::where('idUsuario', $usuario->id)->where('idUsuarioMeGusta', $usuarioInteres->id)->orWhere('idUsuarioNoGusta', $usuarioInteres->id)->get();
                foreach ($validarMeGusta as $meGusta) {
                    // $out->writeln("ya: " . $meGusta->idUsuario); // Usado para mostrar cosas en la consola.
                    $usuariosInteres->forget($usuarioInteres[$posicion]); // Eliminar si aparece en la consulta.
                    $usuariosInteres->pull($posicion); // Refrescar la colección.
                }
            }
            return view('dating.index', ['arrayPersona' => $usuariosInteres->first()]);
        }
        if (Request::isMethod('post') && Request::input('like')) {
            $usuario = Auth::user()->id;
            $like = new Megusta;
            $like->idUsuario = $usuario;
            $like->idUsuarioMeGusta = Request::input('like');
            $like->save();
            return redirect('/dating');
        } elseif (Request::isMethod('post') && Request::input('dislike')) {
            $usuario = Auth::user()->id;
            $dislike = new Megusta;
            $dislike->idUsuario = $usuario;
            $dislike->idUsuarioNoGusta = Request::input('dislike');
            $dislike->save();
            return redirect('/dating');
        }
    }

    public function getLikes()
    {
        $usuario = Auth::user()->id;

        $usuariosMegusta = DB::table('users')
            ->join('megustas', 'users.id', '=', 'megustas.idUsuarioMeGusta')
            ->where('megustas.idUsuario', $usuario)->get();

        //

        return view('dating.likes', ['arrayPersona' => $usuariosMegusta]);
    }

    public function getLikesme()
    {
        $usuario = Auth::user()->id;

        $usuariosLesGusto = DB::table('users')
            ->join('megustas', 'users.id', '=', 'megustas.idUsuario')
            ->where('megustas.idUsuarioMeGusta', $usuario)->get();

        return view('dating.likesme', ['arrayPersona' => $usuariosLesGusto]);
    }

    public function getProfile($id){
        $usuario = User::findOrFail($id);
        return view('dating.profile', array('usuario'=>$usuario));
    }
}
