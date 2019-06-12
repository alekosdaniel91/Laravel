<div class="form-group">
        {!! Form::label('name', 'Nombre:') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}    
    </div>
    <div class="form-group">
        {!! Form::label('description', 'description:') !!}
        {!! Form::text('description',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('avatar', 'avatar:') !!}
        {!! Form::file('avatar') !!}
    </div>
