@extends('layouts.app')

@section('content')

    <h1>tasklists</h1>

    {!! Form::model($tasks, ['route' => 'tasks.store']) !!}
    
     {!! Form::label('content', 'task:') !!}
        {!! Form::text('content') !!}

      {!! Form::label('status', 'status:') !!}
        {!! Form::text('status') !!}

        {!! Form::submit('post') !!}

    {!! Form::close() !!}

@endsection