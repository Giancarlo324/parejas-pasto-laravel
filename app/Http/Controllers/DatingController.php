<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DatingController extends Controller
{
    public function getIndex()
    {
        $persona = User::all();
        return view('dating.index', ['arrayPersonas' => $persona]);
    }

    public function getShow($id)
    {
        // array ( $this->arrayPeliculas[$id] );
        return view('dating.show', array('pelicula'=>$pelicula));
        // return view('dating.show', array( $this->arrayPeliculas[$id] ));
        //return view('dating.show', [ 'id' => $id ]);
    }

    public function getCreate()
    {
        return view('dating.create');
    }

    public function getEdit($id)
    {
        return view('dating.edit', array('pelicula'=>$pelicula));
    }

    public function postCreate(Request $request)
    {
        $postCreateMovie = new Movie;
        $postCreateMovie->title=$request->input('title');
        $postCreateMovie->year=$request->input('year');
        $postCreateMovie->director=$request->input('director');
        $postCreateMovie->poster=$request->input('poster');
        $postCreateMovie->synopsis=$request->input('synopsis');
        $postCreateMovie->save();
        return redirect('/catalog');
    }

    public function putEdit(Request $request)
    {
        $putEditMovie =  Movie::findOrFail($request->id);
        $putEditMovie->title=$request->input('title');
        $putEditMovie->year=$request->input('year');
        $putEditMovie->director=$request->input('director');
        $putEditMovie->poster=$request->input('poster');
        $putEditMovie->synopsis=$request->input('synopsis');
        $putEditMovie->save();
        return redirect('/catalog/show/'.$request->id);
    }
}
