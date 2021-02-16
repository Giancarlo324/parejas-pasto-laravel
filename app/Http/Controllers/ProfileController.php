<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function getEdit($id)
    {
        $usuario = User::findOrFail($id);
        return view('profile.profile', array('usuario' => $usuario));
    }

    public function putEdit(Request $request)
    {
        $usuarioEditar = User::findOrFail($request->id);
        $usuarioEditar->nombre_apellido = $request->input('nombre_apellido');
        $usuarioEditar->sexo = $request->input('sexo');
        $usuarioEditar->fecha_nacimiento = $usuarioEditar->fecha_nacimiento;
        $usuarioEditar->estudios = $request->input('estudios');
        $usuarioEditar->sobre_mi = $request->input('sobre_mi');
        $usuarioEditar->celular = $request->input('celular');
        $usuarioEditar->me_interesa = $request->input('me_interesa');
        $usuarioEditar->email = $usuarioEditar->email;
        $usuarioEditar->password = $usuarioEditar->password;
        // Validación a que solo reciba imágenes
        
        //
        $cadena = '/storage/imageUser/' . $request->id . '/';
        if(request()->hasFile('foto1')){
            $request->validate([
                'foto1' => 'required | image | max:4098'
            ]);

            $foto1 = request()->file('foto1')->getClientOriginalExtension() ;
            request()->file('foto1')->storeAs('public/imageUser', $request->id . '/1.' . $foto1, '');
            // Storage::delete($usuarioEditar->foto1);
            $usuarioEditar->foto1 = $cadena . '1.' . $foto1;
        }
        if(request()->hasFile('foto2')){
            $request->validate([
                'foto2' => 'required | image | max:4098'
            ]);
            $foto2 = request()->file('foto2')->getClientOriginalExtension();
            request()->file('foto2')->storeAs('public/imageUser', $request->id . '/2.' . $foto2, '');
            $usuarioEditar->foto2 = $cadena . '2.' . $foto2;
        }
        if(request()->hasFile('foto3')){
            $request->validate([
                'foto3' => 'required | image | max:4098'
            ]);
            $foto3 = request()->file('foto3')->getClientOriginalExtension();
            request()->file('foto3')->storeAs('public/imageUser', $request->id . '/3.' . $foto3, '');
            $usuarioEditar->foto3 = $cadena . '3.' . $foto3;
        }
        $usuarioEditar->save();

        return redirect('/profile/edit/' . $request->id);
    }
}
