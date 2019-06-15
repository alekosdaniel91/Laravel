<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControllerTest extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function prueba(Request $request)
    {
        if($request->ajax()){
            return response()->json([
                 ['onwer'=>'Lisa','name'=>'saxofon'],
                ['onwer'=>'Bart','name'=>'patineta'],
                ['onwer'=>'Maggie','name'=>'chupon']

            ],200);
        }
        return view('pruebas.prueba');
        
    }
    public function store(Request $request)
    {
        if($request->ajax()){
            $objetos= new Propietarios;
            $objetos->name=$request->input('name');
            $objetos->picture=$request->input('picture');
            $objetos->save();
        }
        return response()->json([
            'message'=>'creado correctamente',
        ],200);
        
    }
}