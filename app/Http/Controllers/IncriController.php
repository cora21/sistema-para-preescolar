<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Incri;

class IncriController extends Controller{

    public function index(){
        $incrip = Incri::all();
        return view('admin.incri.inscripciones', compact('incrip'));
    }
    public function create(){

    }
    public function store(Request $request){
        $incrip = new Incri();

        $incrip->nom_ape = $request->nom_ape;
        $incrip->sexo = $request->sexo;
        $incrip->fechanaci = $request->fechanaci;
        $incrip->condiciones = $request->condiciones;
        $incrip->comentario = $request->comentario;
        $incrip->nom_ape_ma = $request->nom_ape_ma;
        $incrip->correoma = $request->correoma;
        $incrip->cedulama = $request->cedulama;
        $incrip->telefo1ma = $request->telefo1ma;
        $incrip->telefo2ma = $request->telefo2ma;
        $incrip->legalesma = $request->legalesma;
        $incrip->comentarioma = $request->comentarioma;
        $incrip->nom_ape_pa = $request->nom_ape_pa;
        $incrip->correopa = $request->correopa;
        $incrip->cedulapa = $request->cedulapa;
        $incrip->telefo1pa = $request->telefo1pa;
        $incrip->telefo2pa = $request->telefo2pa;
        $incrip->legalespa = $request->legalespa;
        $incrip->comentariopa = $request->comentariopa;
        $incrip->nom_ape_auto = $request->nom_ape_auto;
        $incrip->cedu = $request->cedu;
        $incrip->comentarioauto = $request->comentarioauto;
        $incrip->save();
        return redirect()->route('inscripciones.index')->with('registrado', '');
    }

    public function update(Request $request, $id){
        $incrip = Incri::find($id);
        $incrip->update($request->all());
        return redirect()->route('inscripciones.index');
    }

    public function edit($id){
        $incrip = Incri::find($id);
        return view('admin.edit', compact('incrip'));
    }

    
    public function destroy($id){
        $incrip = Incri::find($id);
        $incrip->delete();
        return redirect()->route('inscripciones.index');

    }
}
