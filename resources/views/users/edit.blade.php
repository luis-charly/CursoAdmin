@extends('layouts.admin')

@section('content')

    {!! Form::model($user,['route'=>['users.update',$user->id],'method'=>'PUT']) !!}

        @include('users.forms.text')
        {!! Form::submit('Editar',['class'=>'btn btn-primary']) !!}

    {!! Form::close() !!}

@stop