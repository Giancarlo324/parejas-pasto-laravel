<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function getEdit($id){
        $usuario = User::findOrFail($id);
        return view('profile.profile', array('usuario'=>$usuario));
    }

    public function putEdit(Request $request){
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
        $usuarioEditar->save();

        return redirect('/profile/edit/'.$request->id);
        
    }
}
