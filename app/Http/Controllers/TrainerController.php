<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trainer;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainers=Trainer::all();
        return view('trainer.index',compact('trainers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('trainer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData=$request->validate([
            'name'=>'required|max:10',
            'avatar'=>'required|image',
            'description'=>'required'
        ]);
        if($request->hasfile('avatar')){
            $file=$request->file('avatar');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/',$name);
        }
        $trainer = new Trainer();
        $trainer->name=$request->input('name');
        $trainer->description=$request->input('description');
        $trainer->avatar=$name;
        $trainer->slugs=$request->input('name');
        $trainer->save();
        return 'guardado';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Trainer $trainer)
    {
        return view('trainer.show',compact('trainer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Trainer $trainer)
    {
        return view('trainer.edit',compact('trainer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trainer $trainer)
    {
        $trainer->fill($request->except('avatar'));
        if($request->hasfile('avatar')){
            $file=$request->file('avatar');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/',$name);
        }
        $trainer->save();
        return 'listo';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
