<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Rebelute</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="{{ url('public/css/common.css')}}" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="{{ url('public/lib/jquery-2.2.4.min.js') }}"></script>
    <link href="{{ url('public/lib/bootstrap-3.3.7-dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ url('public/lib/bootstrap-3.3.7-dist/js/bootstrap.min.js') }}"></script>
    <!-- Styles -->

</head>
@if (Route::has('register'))
<div class="top-right links">
    <a href="{{ route('home_path') }}">Home</a>
</div>
@endif
<body>
    @include('message')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-login">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-6">
                                <span class="pull-right" id="register-form-link">Register</span>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form id="register-form" action="{{route('validate_register')}}" method="post">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Name" value="">
                                        @if ($errors->has('username'))<p
                                        style="color:red;">{!!$errors->first('username')!!}</p>@endif
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" tabindex="2" class="form-control" placeholder="Email" value="">
                                        @if ($errors->has('email'))<p
                                        style="color:red;">{!!$errors->first('email')!!}</p>@endif
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" id="password" tabindex="3" class="form-control" placeholder="Password">
                                        @if ($errors->has('password'))<p
                                        style="color:red;">{!!$errors->first('password')!!}</p>@endif
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="contact" id="contact" tabindex="5" class="form-control" placeholder="Contact">
                                        @if ($errors->has('contact'))<p
                                        style="color:red;">{!!$errors->first('contact')!!}</p>@endif
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6 col-sm-offset-3">
                                                <input type="submit" name="register-submit" id="register-submit" tabindex="6" class="btn btn-register" value="Register Now">
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
</body>
</html>