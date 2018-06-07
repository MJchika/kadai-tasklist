@extends('layouts.app')

@section('content')
       <div class = "container">
         <div class="row">
           <div class="col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
       
    <h1>tasklists</h1>

       
            
    {!! Form::model($tasks, ['route' => 'tasks.store']) !!}
    
     <div class="form-group">
     {!! Form::label('content', 'task:') !!}
        {!! Form::text('content', null, ['class' => 'form-control']) !!}
 </div>

<div class="form-group">
      {!! Form::label('status', 'status:') !!}
        {!! Form::text('status', null, ['class' => 'form-control']) !!}
 </div>

        {!! Form::submit('post', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}
 </div>
 </div> 
 </div>
@endsection

