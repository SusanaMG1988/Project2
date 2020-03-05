<?php

namespace App\Http\Controllers;
use\App\RecetasDePasteles;
use Illuminate\Http\Request;

class PastelController extends Controller
{


    public function index(){
        $pasteles = RecetasDePasteles::all();
        return view('recetas-de-pasteles.index')->with('pasteles', $pasteles);
    }


    public function crear()
    {
        return view('recetas-de-pasteles.crear');
    }

    public function store(Request $request){

        $validateData = $request->validate([
            'titulo'=>'required|unique:recetas_pasteles|min:6',
            'ingredientes'=>'required',
            'preparacion'=>'required'

        ]);

            $pastel =  new RecetasDePasteles;
            $pastel->titulo = $request->titulo;
            $pastel->ingredientes = $request->ingredientes;
            $pastel->preparacion = $request->preparacion;

            $pastel->save();

            return redirect('/recetas-de-pasteles');


    }
}
