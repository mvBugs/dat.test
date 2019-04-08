@extends('auth.layouts.app')

@section('content')
    <body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <a href="/">{!! config('app.logo', '<b>Admin</b>LTE') !!}</a>
        </div>

        <div class="register-box-body">
            <p class="login-box-msg">Регистрация нового пользователя</p>

            <form action="{{ route('register') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} has-feedback">
                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus placeholder="Имя и фамилия">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="Email">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
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

                <div class="form-group has-feedback">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Повторить пароль">
                    <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                </div>

                <div class="row">
                    {{--<div class="col-xs-8" style="visibility: hidden">--}}
                        {{--<div class="checkbox icheck">--}}
                            {{--<label>--}}
                                {{--<input type="checkbox"> Я согласен с <a href="#">условиями</a>--}}
                            {{--</label>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    <!-- /.col -->
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Отправить</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>


            <a href="{{ url('/login') }}" class="text-center">У меня уже есть учетная запись</a>
        </div>
        <!-- /.form-box -->
    </div>
    <!-- /.register-box -->

    </body>
@endsection
