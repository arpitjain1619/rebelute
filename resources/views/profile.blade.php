<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Rebelute</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="{{ url('public/css/common.css')}}" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="{{ url('public/lib/jquery-2.2.4.min.js') }}"></script>
    <link href="{{ url('public/lib/bootstrap-3.3.7-dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ url('public/lib/bootstrap-3.3.7-dist/js/bootstrap.min.js') }}"></script>

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
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-login">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-6">
                                <span class="pull-right" id="register-form-link">Profile</span>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form id="register-form" action="{{route('user.add.vendor')}}" method="get">
                                    <div class="form-group">
                                        <label>User - {{$data->name}}</label>
                                    </div>
                                    <p><strong>Vendors:</strong></p>
                                    @if(count($data->vendors) > 0 )
                                    <div class="form-group">
                                        <ul class="list-group">
                                            @foreach($data->vendors as $vendor)
                                                <li class="list-group-item">{{$vendor->name}}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @else
                                    <span>No vendors added</span>
                                    @endif
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6 col-sm-offset-3">
                                                <input type="submit" tabindex="1" class="btn btn-register" value="Add New Vendor">
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