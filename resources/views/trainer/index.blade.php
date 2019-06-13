@extends('layouts.app')
@section('title', 'trainers')
@section('content')
@include('commons.errors')
    <div class="row">
        @foreach ($trainers as $trainer)
            <div class="col-sm">
                <div class="card text-center" style="width: 18rem; margin-top: 5px" >
                    <img style="height:100px;width:100px;margin:20px; background-color: #efefef;" class="card-img-top rounded-circle mx-auto d-block" 
                    src="/images/{{$trainer->avatar}}" alt="">
                    <div class="card-body">
                      <h5 class="card-title">{{$trainer->name}}</h5>
                      <p class="card-text">{{$trainer->description}}</p>
                      <a href="/trainer/{{$trainer->slugs}}" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>        
        @endforeach
    </div>
    
@endsection



