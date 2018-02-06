@extends('layouts.admin')

@section('content')

    <div class="form-group">
        <label for="">Nombre</label>
        <input type="text" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Correo</label>
        <input type="text" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Contraseña</label>
        <input type="text" class="form-control">
    </div>
    <button class="btn btn-primary">Registrar</button>
@stop