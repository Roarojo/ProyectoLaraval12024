<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RutasController extends Controller
{
    public function mostrarpagina2(){
       // dd('Pagina 2');
       return view('pagina2');
    } 


    public function SumaNumero(){
        return view('login');
    }

    public function SumarNumeros(Request $request){
        $request->validate([
            'numero1' =>'required|numeric|max:100|min:1',
            'numero2' =>'required|numeric|min:1|max:100',
        ]);
        //dd('sumar');
        //dd($request->numero1." ".$request->numero2);
        $n1 = $request->numero1;
        $n2 = $request->numero2;
        $res =  $n1+ $n2;
        
        //return back()->with('resultado','hola');
        return view('resultado',['resultado'=>$res, 'oper' =>'suma']);
       
    }


    public function mostraResta(){
      return view('resta');
    }

    public function RestarN(Request $request){
        
        //dd('resta');
        $request->validate([
            'numero1' =>'required|numeric|max:100|min:1',
            'numero2' =>'required|numeric|min:1|max:100',
        ]);
        
        $n3 = $request->numero1;
        $n4 = $request->numero2;
 
        $res = $n3 - $n4;

        return view('resultado',['resultado'=>$res, 'oper' =>'resta']);

    }
}
