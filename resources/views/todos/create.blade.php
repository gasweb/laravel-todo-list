@extends('layout/app')
@section('content')
    <h1>Create todo</h1>

    {!! Form::open(['action' => 'TodosController@create', 'method' => 'POST']) !!}
        {{ Form::bsText('first_name', '', []) }}
    {!! Form::close() !!}

@endsection