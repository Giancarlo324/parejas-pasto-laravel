<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function getIndex($id)
    {
        $usuario = User::findOrFail($id);
        return view('profile.profile', array('usuario'=>$usuario));
    }
}
