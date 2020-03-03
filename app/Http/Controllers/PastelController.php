<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pastelController extends Controller
{

    public function index(){
         $pasteles = [];

        return view('recetas-de-pasteles.index')->with('pasteles', $pasteles);
    }

    public function show($id)
    {
        return view('recetas-de-pasteles.show', ['id' => $id]);
    }
    public function crear()
    {
        return view('recetas-de-pasteles.crear');
    }
    public function store(Request $request){

        $validateData = $request->validate([
            'titulo'=>'required|unique:pasteles|min:6',
            'ingredientes'=>'required',
            'preparacion'=>'required'

        ]);

        
    }
}
