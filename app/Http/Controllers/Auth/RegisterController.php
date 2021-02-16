<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\Console\Input\Input;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nombre_apellido' => ['required', 'string', 'max:255'],
            'sexo' => ['required', 'in:M,F,T'],
            'fecha_nacimiento' => ['required', 'before:-18 years'],
            'foto1' => ['required', 'image','max:4098'],
            'foto2' => ['required', 'image','max:4098'],
            'foto3' => ['required', 'image','max:4098'],
            'estudios' => ['required', 'string', 'max:1000'],
            'sobre_mi' => ['required', 'string', 'max:1000'],
            'celular' => ['required', 'string', 'max:10', 'min:10'],
            'me_interesa' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data){

        $user =  User::create([
            'nombre_apellido' => $data['nombre_apellido'],
            'sexo' => $data['sexo'],
            'fecha_nacimiento' => $data['fecha_nacimiento'],
            'estudios' => $data['estudios'],
            'sobre_mi' => $data['sobre_mi'],
            'celular' => $data['celular'],
            'me_interesa' => $data['me_interesa'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);


        if(request()->hasFile('foto1') && request()->hasFile('foto2') && request()->hasFile('foto3')){
            $foto1 = request()->file('foto1')->getClientOriginalName();
            request()->file('foto1')->storeAs('public/imageUser', $user->id.'/'.$foto1, '');
            $foto2 = request()->file('foto2')->getClientOriginalName();
            request()->file('foto2')->storeAs('public/imageUser', $user->id.'/'.$foto2, '');
            $foto3 = request()->file('foto3')->getClientOriginalName();
            request()->file('foto3')->storeAs('public/imageUser', $user->id.'/'.$foto3, '');
            $cadena = '/storage/imageUser/'.$user->id.'/';
            $user->update(['foto1' => $cadena.$foto1]);
            $user->update(['foto2' => $cadena.$foto2]);
            $user->update(['foto3' => $cadena.$foto3]);
        }

        return $user;
    }
}
