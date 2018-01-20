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
    <script type="text/javascript" src="{{ url('public/js/common.js')}}"></script>

    <!-- Styles -->

</head>
@if (Route::has('register'))
<div class="top-right links">
    <a href="{{ route('home_path') }}">Home</a>
    <a href="{{ route('logout') }}">Logout</a>
</div>
@endif
<body>
    @include('message')
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-md-offset-3">
                <div class="panel panel-login">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-6">
                                <span class="pull-right" id="register-form-link">Add Vendors</span>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>User - {{$user->name}}</label>
                                </div>
                                <form id="register-form" class="form-inline" action="{{route('create_vendor')}}" method="post">
                                    {{csrf_field()}}
                                    <p><strong>Vendors:</strong></p>
                                    <div class="form-group">
                                        @foreach($vendors as $vendor)
                                        <input type="checkbox" name="vendors[]" value="{{$vendor->id}}">
                                        <label>{{$vendor->name}}</label>
                                        @endforeach
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6 col-sm-offset-3">
                                                <input type="submit" id="add_vendor" name="add_vendor" tabindex="1" class="btn btn-register" value="Add Vendor">
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