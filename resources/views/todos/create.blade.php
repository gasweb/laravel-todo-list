@extends('layout/app')
@section('content')
    <h1>Create todo</h1>

    {!! Form::open(['action' => 'TodosController', 'method' => 'POST']) !!}
        {{ Form::bsText('text') }}
    {!! Form::close() !!}

@endsection