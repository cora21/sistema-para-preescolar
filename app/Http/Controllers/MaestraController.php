<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Maestra;

class MaestraController extends Controller{
        public function index(){
            $maestras = Maestra::all();

            return view('admin.maestras.maestra', compact('maestras'));
    }

    public function store(Request $request){
        $this->validate($request,[
            'nombre' => 'required',
            'apellido' => 'required',
            'cedula' => 'required',
            'salon' => 'required',
            'comentarios' => 'required',
        ]);
        $maestras = new Maestra;

        $maestras->nombre = $request->input('nombre');
        $maestras->apellido = $request->input('apellido');
        $maestras->cedula = $request->input('cedula');
        $maestras->salon = $request->input('salon');
        $maestras->comentarios = $request->input('comentarios');
        $maestras->save();
        return redirect()->route('maestra.index')->with('success', '');
    }
    public function update(Request $request, $id){
        $maestras = Maestra::find($id);
        $maestras->update($request->all());
        return redirect()->route('maestra.index')->with('maestras');
    }
    public function edit($id){
        $maestras = Maestra::find($id);
        return redirect()->route('maestra.index');
    }
    public function destroy($id){

        $maestras = Maestra::find($id);
        $maestras->delete();
        return redirect()->route('maestra.index')->with('borrar');
    }

}
?>

