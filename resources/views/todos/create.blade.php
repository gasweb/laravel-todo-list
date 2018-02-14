@extends('layout/app')
@section('content')
    <h1>Create todo</h1>

    {!! Form::open(['action' => 'TodosController@create', 'method' => 'POST']) !!}
        {{ Form::bsText('text', '', []) }}
        {{ Form::bsTextArea('body', '', []) }}
        {{ Form::bsText('due', '', []) }}
        {{ Form::bsTextSubmit('submit', ['class' => 'btn btn-primary']) }}
    {!! Form::close() !!}

@endsection