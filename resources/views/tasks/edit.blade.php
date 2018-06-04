@extends('layouts.app')

@section('content')

    <h1>Edit id: {{ $tasks->id }} </h1>

    {!! Form::model($tasks, ['route' => ['tasks.update', $tasks->id], 'method' => 'put']) !!}

        {!! Form::label('content', 'task:') !!}
        {!! Form::text('content') !!}
     
        {!! Form::label('status', 'status:') !!}
        {!! Form::text('status') !!}

        {!! Form::submit('update') !!}

    {!! Form::close() !!}

@endsection