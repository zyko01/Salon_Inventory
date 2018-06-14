@extends('layouts.loginapp')

@section('content')
<div class="container">
<div class="row">
<div class="col-md-6 col-md-offset-3">
    <div class="panel panel-login">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-6">
                    <a href="#" class="active" id="login-form-link">Login</a>
                </div>
                <div class="col-xs-6">
                    <a href="#" id="register-form-link">Register</a>
                </div>
            </div>
            <hr>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-12">
                    <form id="login-form" action="{{ route('login.custom') }}" method="post" role="form" style="display: block;">
                        {{ csrf_field() }}
                        <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}" style="margin-bottom:30px">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user icons"></i></span>
                            <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email" value="{{ old('email') }}" required autofocus >
                            @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                    
                        <div class="input-group{{ $errors->has('password') ? ' has-error' : '' }}" style="margin-bottom:30px">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock icons"></i></span>
                            <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" required>
                            @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group col-md-12" style="padding:0;">
                            <div class="text-left col-md-6">        
                                <input type="checkbox" tabindex="3" class="" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label for="remember"> Remember Me</label>
                            </div>
                            <div class="text-right col-md-6">
                                        <a href="{{ route('password.request') }}" tabindex="5" class="forgot-password">Forgot Password?</a>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2 button-log">
                                    <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                                </div>
                            </div>
                        </div>
                    </form>

                <!-- REGISTER FORM -->

                    <form id="register-form" action="{{ route('register') }}" method="post" role="form" style="display: none;">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <input type="text" name="name" id="name" tabindex="1" class="form-control" placeholder="Fullname" value="">
                            @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
                            @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                            @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group">
                            <input type="password" name="password_confirmation" id="password_confirmation" tabindex="2" class="form-control" placeholder="Confirm Password">
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-8 col-sm-offset-2">
                                    <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection
