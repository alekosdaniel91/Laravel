@extends('layouts.app')
@section('title', 'trainers')
@section('content') 

@include('commons.errors')

    {!! Form::open(['route'=>'trainer.store', 'method'=>'POST', 'files' => true]) !!}
        @include('trainer.form')
        {!! Form::submit('guardar',['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!} 

{{-- <form action="/trainer" class="form-group" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" name="name" class="form-conltrol">
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <input type="text" name="description" class="form-conltrol">
        </div>
        <div class="form-group">
                <label for="">Avatar</label>
                <input type="file" name="avatar" >
            </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form> --}}
    
 @endsection



