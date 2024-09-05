<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidarUsuario extends Controller
{
    public function validarUsario(Request $request){
     // dd('validar');
          $request->validate([
            'email' => 'required|email|max:30',
            'password' => 'required|numeric',
          ]);

       $usuario = "admin@admin.com";
       $pass = 12345;
       if ($usuario == $request->email  && $pass == $request->password){
          return view('welcome');
       }else{
          return back()->with('error','errodatos'); 
       }
        
    }
}
