@extends('layouts.main')

@section('content')
    <div id="new-account">
     <!-- add error partial -->

        {{ Form::open(array('url' => 'users/create')) }}

         <p>
             {{ Form::label('firstname') }}
             {{ Form::text('firstname') }}
         </p>

         <p>
             {{ Form::label('lastname') }}
             {{ Form::text('lastname') }}
         </p>

         <p>
            {{ Form::label('email') }}
            {{ Form::select('email') }}
         </p>

         <p>
            {{ Form::label('password') }}
            {{ Form::password('password') }}
         </p>
         <p>
             {{ Form::label('password_confirmation') }}
             {{ Form::password('password_confirmation') }}
         </p>
        {{ Form::submit('CREATE ACCOUNT', array('class' => 'btn btn-success')) }}
        {{ Form::close() }}
    </div>
@stop