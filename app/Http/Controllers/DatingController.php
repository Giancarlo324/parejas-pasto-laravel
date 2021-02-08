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

    public function getShow($id)
    {
        // array ( $this->arrayPeliculas[$id] );
        return view('dating.show', array('pelicula' => $pelicula));
        // return view('dating.show', array( $this->arrayPeliculas[$id] ));
        //return view('dating.show', [ 'id' => $id ]);
    }

    public function getCreate()
    {
        return view('dating.create');
    }

    public function getEdit($id)
    {
        return view('dating.edit', array('pelicula' => $pelicula));
    }

    public function postCreate(Request $request)
    {
        $postCreateMovie = new Movie;
        $postCreateMovie->title = $request->input('title');
        $postCreateMovie->year = $request->input('year');
        $postCreateMovie->director = $request->input('director');
        $postCreateMovie->poster = $request->input('poster');
        $postCreateMovie->synopsis = $request->input('synopsis');
        $postCreateMovie->save();
        return redirect('/catalog');
    }

    public function putEdit(Request $request)
    {
        $putEditMovie =  Movie::findOrFail($request->id);
        $putEditMovie->title = $request->input('title');
        $putEditMovie->year = $request->input('year');
        $putEditMovie->director = $request->input('director');
        $putEditMovie->poster = $request->input('poster');
        $putEditMovie->synopsis = $request->input('synopsis');
        $putEditMovie->save();
        return redirect('/catalog/show/' . $request->id);
    }
}
