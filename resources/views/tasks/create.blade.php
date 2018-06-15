

@extends('layouts.app')

@section('content')

    <h1>メッセージ新規作成ページ</h1>

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

