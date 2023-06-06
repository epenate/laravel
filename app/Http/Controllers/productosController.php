<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class productosController extends Controller
{
    public function index()
    {
        return view('productos');
    }
    public function mostrar()
    {
        echo "metodo mostrar";
    }
    public function crear()
    {
       return view("crear");
    }

    public function show($post)
    {
        return "Aca se mando un valor como parametro el valor es de : $post";
    }

    /*public function dataformulario()
    {
        return request();

    }*/
    ////rettornando solo una valor

    public function dataformulario(Request $request)
    {
        return $request->input('nombre');

    }










    

    public function lista()
    {
        $prod = DB::table('productos')->get();

       return view('productos',[$prod]);
       //echo 'llego al metodo';

    }

    public function listaProd()
    {
       /* $productos =[
            ['nombre'=>'PC DELL'],
            ['nombre'=>'PC HP']
        
        ];*/
        $prod = DB::table('productos')->get();

        return view('productos',['prod'=>$prod]);
    }



}
