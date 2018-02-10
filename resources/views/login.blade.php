<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistema Laravel | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
{!!Html::style("bootstrap/css/bootstrap.min.css")!!}
<!-- Font Awesome -->
{!!Html::style("https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css")!!}
<!-- Ionicons -->
{!!Html::style("https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css")!!}
<!-- Theme style -->
{!!Html::style("dist/css/AdminLTE.min.css")!!}
<!-- iCheck -->
{!!Html::style("plugins/iCheck/square/blue.css")!!}

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    {!! HTML::Script('https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js') !!}
    {!! HTML::Script('https://oss.maxcdn.com/respond/1.4.2/respond.min.js') !!}
    <![endif]-->
</head>
<body class="hold-transition login-page">
<div class="login-box">

    @include('alerts.errors')

    <div class="login-logo">
        <a href="#"><b>Sistema</b>Laravel</a>
    </div><!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Ingrese al sistema</p>


        {!! Form::open(['route' => 'login.store', 'method' => 'POST']) !!}
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

            <div class="form-group has-feedback">
                {!! Form::label('Correo:') !!}
                {!! Form::text('email',null,['class'=>'form-control', 'placeholder'=>'Ingresa tu correo']) !!}
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                {!! Form::label('Contraseña:') !!}
                {!! Form::password('password',['class'=>'form-control', 'placeholder'=>'Ingresa tu contraseña']) !!}
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>

            <div class="row">
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
                </div><!-- /.col -->
            </div>
        {!! Form::close() !!}

    </div><!-- /.login-box-body -->
</div><!-- /.login-box -->

<!-- jQuery 2.1.4 -->
{!! HTML::Script('../../plugins/jQuery/jQuery-2.1.4.min.js') !!}
<!-- Bootstrap 3.3.5 -->
{!! HTML::Script('../../bootstrap/js/bootstrap.min.js') !!}
<!-- iCheck -->
{!! HTML::Script('plugins/iCheck/icheck.min.js') !!}

<script>

    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>


</body>
</html>
