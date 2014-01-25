@extends('layout.main')

@section('content')

    {{ Form::open(array('url' => 'users/signin')) }}
        <p>
        {{ Form::label('email') }}
        {{ Form::text('email') }}
        </p>
        <p>
        {{ Form::label('password') }}
        {{ Form::password('email') }}
        </p>
        <p>
        {{ Form::button('Sign in', array('class' => 'btn btn-success')) }}
        </p>
    {{ Form::close() }}

@stop