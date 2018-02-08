@extends('layouts.admin')

@section('content')
    @include('alerts.request')

    {!! Form::model($user,['route'=>['users.update',$user->id],'method'=>'PUT']) !!}
        @include('users.forms.text')
        {!! Form::submit('Editar',['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
    <p></p>
    {!! Form::open(['route'=>['users.destroy',$user->id],'method'=>'DELETE']) !!}
        {!! Form::submit('Eliminar',['class'=>'btn btn-danger']) !!}
    {!! Form::close() !!}

@stop