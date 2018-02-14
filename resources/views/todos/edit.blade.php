@extends('layout/app')
@section('content')


    <a href="/todo/{{ $todo->id }}" class="btn btn-default">Back</a>

    <h1>Create todo</h1>

    {!! Form::open(['action' => ['TodosController@update', $todo->id], 'method' => 'POST']) !!}
        {{ Form::bsText('text', $todo->text, []) }}
        {{ Form::bsTextArea('body', $todo->body, []) }}
        {{ Form::bsText('due', $todo->due, []) }}
        {{ Form::bsTextSubmit('submit', ['class' => 'btn btn-primary']) }}
        {{ Form::hidden('_method', 'PUT') }}
    {!! Form::close() !!}

@endsection