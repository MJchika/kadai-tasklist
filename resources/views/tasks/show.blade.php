@extends('layouts.app')

@section('content')

    <h1>updated tasks</h1>

   <table class="table table-bordered">
     
        <tr>
            <th>id</th>
            <td>{{ $tasks->id }}</td>
        </tr>
        <tr>
            <th>タスク</th>
            <td>{{ $tasks->content }}</td>
        </tr>
        <tr>
            <th>ステータス</th>
            <td>{{ $tasks->status }}</td>
        </tr>
     
       
    </table>

    {!! link_to_route('tasks.edit', 'Edit this task', ['id' => $tasks->id], ['class' => 'btn btn-default']) !!}

    {!! Form::model($tasks, ['route' => ['tasks.destroy', $tasks->id], 'method' => 'delete']) !!}
        {!! Form::submit('delete', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}

@endsection