@extends('layouts.app')
@section('title', 'Edit')
@section('content') 
@include('commons.errors')

    


    {!! Form::open(['route'=>['trainer.update',$trainer], 'method'=>'PUT', 'files' => true]) !!}
        @include('trainer.form')
        {!! Form::submit('guardar',['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
    {{-- <form action="/trainer/{{$trainer->slugs}}" class="form-group" method="POST" enctype="multipart/form-data">
        @method('PUT') 
        @csrf
        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" name="name" value="{{$trainer->name}}" class="form-conltrol">
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <input type="text" name="description" value="{{$trainer->description}}" class="form-conltrol">
        </div>
        <div class="form-group">
                <label for="">Avatar</label>
                <input type="file" value="{{$trainer->avatar}}" name="avatar" >
            </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form> --}}
    
 @endsection



