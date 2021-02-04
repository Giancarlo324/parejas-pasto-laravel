<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function getIndex()
    {
        return view('welcome');
    }

    public function getHome(){
        // return redirect()->action([DatingController::class, 'getIndex']);
        // if(!Auth::check()) return redirect('/login');
        return redirect()->action([HomeController::class, 'getIndex']);
    }
}
