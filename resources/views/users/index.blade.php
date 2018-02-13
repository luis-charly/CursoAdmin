@extends('layouts.admin')

@section('content-header')
    @include('alerts.success')

@section('content')
    <div class="box">
        <div class="box-header">
            <div class="col-sm-3"><h3 class="box-title">Hover Data Table</h3></div>
            @if(Auth::user() -> id == 1)
                <div class="col-sm-4 col-sm-offset-9"><a href="{{URL::to('/users/create')}}" class="btn btn-primary">Registrar</a>
                </div>
            @endif
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
                                @if(Auth::user() -> id == 1)
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                        aria-label="Platform(s): activate to sort column ascending">Operación
                                    </th>
                                @endif
                            </tr>
                            </thead>
                            @foreach($users as $user)
                                <tbody>
                                <tr role="row" class="odd">
                                    <td class="sorting_1">{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    @if(Auth::user() -> id == 1) {{--Si está logeado en "admin", podrá editar--}}
                                    <td>
                                        {!! link_to_route('users.edit', $title = 'Editar', $parameters = $user->id, $attributes = ['class' => 'btn btn-primary']) !!}

                                        <a href="#myModal" data-toggle="modal" data-name="{{ $user->name }}"
                                           data-id="{{ $user->id }}" title="Eliminar"
                                           class="btn btn-red mb-10 modalDelete"><i
                                                    class="glyphicon glyphicon-trash"></i><span></span></a>
                                    </td>

                                    <!— Modal —>
                                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog"
                                         aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h3 class="modal-title custom-font">Eliminar Cuenta</h3>
                                                </div>
                                                <div class="modal-body" id="bodyDelete">
                                                    ¿Está seguro de eliminar esta cuenta?
                                                </div>
                                                <div class="modal-footer">
                                                    <input type="hidden" name="_token" value="{{csrf_token()}}"
                                                           id="token">
                                                    <button class="btn btn-success btn-ef btn-ef-3 btn-ef-3c"
                                                            data-dismiss="modal" onclick="deleteUser()"><i
                                                                class="fa fa-arrow-right"></i> Eliminar
                                                    </button>
                                                    <button class="btn btn-lightred btn-ef btn-ef-4 btn-ef-4c"
                                                            data-dismiss="modal"><i class="fa fa-arrow-left"></i>
                                                        Cancelar
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{--<td>--}}
                                    {{--{!! Form::open(['route'=>['users.destroy',$user->id],'method'=>'DELETE']) !!}--}}
                                    {{--{!! Form::submit('Eliminar',['class'=>'btn btn-danger']) !!}--}}
                                    {{--{!! Form::close() !!}--}}
                                    {{--</td>--}}

                                    @endif
                                </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
                {!! $users->render() !!} {{-- Paginación de la tabla usuarios que está asignada a al array $users --}}
            </div>
        </div>
        <!-- /.box-body -->
    </div>
@endsection
    @section('scripts')
        {!!Html::script("js/script.js")!!}
    @endsection
@stop
