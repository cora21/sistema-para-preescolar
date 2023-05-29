<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class Sessioncontroller extends Controller
{
    
    public function create(){
        return view('auth.login');
    }

    public function store(){
        if(auth()->attempt(request(['email', 'password'])) == false ){
            return back()->withErrors([
                'message' => 'El campo usuario debe contener una direccion de correo valida',
            ]);
        } else{
            if(auth()->user()->role == 'admin'){
                return redirect()->route('admin.index');
            }else{
                return redirect()->to('/');
            }
        }
    }
    public function destroy(){
        auth()->logout();

        return redirect()->to('/');
    }
}
