<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PastelController extends Controller
{
    public function index(){
        $pasteles = [''];
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

            $pasteles =  new pastel;
            $pasteles->titulo = $request->titulo;
            $pasteles->ingredientes = $request->ingredienteds;
            $pasteles->preparacion = $request->preparacion;

            $pasteles->save();

            return redirect('/recetas-de-pasteles');


    }
}
