@extends('layouts.admin')

@section('content-header')
    @include('alerts.success')

@section('content')
    @include('alerts.errors')
    <div class="box">
        Welcome
    </div>
@endsection
@stop