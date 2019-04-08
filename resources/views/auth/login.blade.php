@extends('auth.layouts.app')

@section('content')

    <body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="/">{!! config('app.logo', '<b>Admin</b>LTE') !!}</a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">Вход в систему</p>
            <form action="{{ route('login') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="Email">
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} has-feedback">
                    <input id="password" type="password" class="form-control" name="password" required placeholder="Пароль">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Запам'ятати мене
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Вход</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>


            {{--<a href="{{ route('password.request') }}">Відновити пароль</a><br>--}}
            {{--<a href="{{ route('register') }}" class="text-center">Зарегистрироваться</a>--}}

        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->
    </body>
@endsection
