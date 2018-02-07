@extends('layouts.admin')

@section('content')
    {!! Form::open(['route'=>'users.store', 'method'=>'POST']) !!}

        @include('users.forms.text')
        {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}

    {!! Form::close() !!}

@stop