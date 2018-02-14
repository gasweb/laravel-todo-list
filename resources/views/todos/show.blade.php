@extends('layout/app')
@section('content')
    <a href="/" class="btn btn-default">Back</a>
    <h1>{{ $todo->text }}</h1>
    <p>
        {{ $todo->body }}
    </p>
    <hr>
    <a href="/todo/{{$todo->id}}/edit" class="btn btn-default">Edit</a>
    {!! Form::open(['action' => ['TodosController@destroy', $todo->id], 'method' => 'POST']) !!}
    {{ Form::bsTextSubmit('Delete', ['class' => 'btn btn-danger']) }}
    {{ Form::hidden('_method', 'DELETE') }}
    {!! Form::close() !!}
@endsection