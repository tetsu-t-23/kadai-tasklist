@extends('layouts.app')
@section('content')
    <h1>タスクの追加ページ</h1>

    <div class="row">
        <div class="col-6">
            {!! Form::model($tasks, ['route' => 'tasks.store']) !!}

                <div class="form-group">
                    {!! Form::label('content', 'タスク:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                    
                </div>

                {!! Form::submit('追加', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
@endsection