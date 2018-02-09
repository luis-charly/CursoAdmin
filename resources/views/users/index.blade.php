@extends('layouts.admin')

    @section('content-header')
    @include('alerts.success')

@section('content')
    <div class="box">
        <div class="box-header">
                <div class="col-sm-3"><h3 class="box-title">Hover Data Table</h3></div>
                <div class="col-sm-4 col-sm-offset-9"><a href="{{URL::to('/users/create')}}" class="btn btn-primary">Registrar</a></div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                <div class="row">
                    <div class="col-sm-6"></div>
                    <div class="col-sm-6"></div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table id="example2" class="table table-bordered table-hover dataTable" role="grid"
                               aria-describedby="example2_info">
                            <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                    aria-sort="ascending"
                                    aria-label="Rendering engine: activate to sort column descending">
                                    Nombre
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                    aria-label="Browser: activate to sort column ascending">Correo
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                    aria-label="Platform(s): activate to sort column ascending">Operacion
                                </th>
                            </tr>
                            </thead>
                            @foreach($users as $user)
                            <tbody>
                            <tr role="row" class="odd">
                                <td class="sorting_1">{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    {!! link_to_route('users.edit', $title = 'Editar', $parameters = $user->id, $attributes = ['class' => 'btn btn-primary']) !!}
                                </td>
                            </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
                {!! $users->render() !!}
            </div>
        </div>
        <!-- /.box-body -->
    </div>
    @endsection
@stop