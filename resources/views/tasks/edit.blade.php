@extends('layouts.app')

@section('content')
       
        <div class="col-xs-12">
        <div class="col-sm-8 col-sm-offset-2">
        <div class="col-md-8 col-md-offset-2">
        <div class="col-lg-6 col-lg-offset-3">

    <h1>Edit id: {{ $tasks->id }} </h1>
    
  <div class="row">
    {!! Form::model($tasks, ['route' => ['tasks.update', $tasks->id], 'method' => 'put']) !!}

 <div class="form-group">
        {!! Form::label('content', 'task:') !!}
        {!! Form::text('content') !!}
      </div>
     
 <div class="form-group">
        {!! Form::label('status', 'status:') !!}
        {!! Form::text('status') !!}
      </div>
        {!! Form::submit('update', ['class' => 'btn btn-default']) !!}

    {!! Form::close() !!}
     </div>
     </div>
     </div>
     </div>
     </div>
@endsection