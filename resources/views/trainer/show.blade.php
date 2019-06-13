@extends('layouts.app')
@section('title', 'trainers Edit')
@section('content')
<div class="col-sm">
    <div class="card text-center" style="margin-top: 5px" >
        <img style="height:200px;width:200px;margin:20px; background-color: #efefef;" 
        class="card-img-top rounded-circle mx-auto d-block" src="/images/{{$trainer->avatar}}" alt="">
        <div class="card-body">
          <h5 class="card-title">{{$trainer->name}}</h5>
          <p class="card-text">{{$trainer->description}}</p>
          <a href="/trainer/{{$trainer->slugs}}/edit" class="btn btn-primary">Editar</a>
          {!! Form::open(['route'=>['trainer.destroy',$trainer->slugs],'method'=>'DELETE'])!!}
            {!! Form::submit('Eliminar',['class'=>'btn btn-secondary']) !!}
          {!!Form::close()!!}
        </div>
    </div>
</div>   
    
@endsection



