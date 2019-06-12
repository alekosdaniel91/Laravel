@extends('layouts.app')
@section('title', 'trainers')
@section('content') 
    <form action="/trainer" class="form-group" method="POST">
        @csrf
        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" name="name" class="form-conltrol">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
    
 @endsection



