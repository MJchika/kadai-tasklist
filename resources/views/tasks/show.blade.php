@extends('layouts.app')

@section('content')

    <h1>updated tasks</h1>

    <p>task :    {{ $tasks->content }}</p>
     <p>status :    {{ $tasks->status }}</p>

    {!! link_to_route('tasks.edit', 'Edit this task', ['id' => $tasks->id]) !!}

    {!! Form::model($tasks, ['route' => ['tasks.destroy', $tasks->id], 'method' => 'delete']) !!}
        {!! Form::submit('Delete this task') !!}
    {!! Form::close() !!}

@endsection