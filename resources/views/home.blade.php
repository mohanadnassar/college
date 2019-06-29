@extends('layouts.app')
<!-- LOGOUT BUTTON -->
<a href="{{ URL::to('logout') }}"><button>Logout</button></a>


<!DOCTYPE html>
<html>
<head>
    <style>
        .button {
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<h2>Welcome to our website</h2>
<a href="{{ URL::to('/create/application') }}"><button>create application</button></a>
<a href="{{ URL::to('/create/course') }}"><button>create course</button></a>




</body>
</html>

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
    <div class="container">
        @if(\Session::has('success'))
            <div class="alert alert-success">
                {{\Session::get('success')}}
            </div>
        @endif

        <div class="row">
            <a href="{{url('/create/course')}}" class="btn btn-success">Create Course</a>
            <a href="{{url('/courses')}}" class="btn btn-default">All Courses</a>
        </div>
    </div>
@endsection

@section('content')
    <div class="container">
        @if(\Session::has('error'))
            <div class="alert alert-danger">
                {{\Session::get('error')}}
            </div>
        @endif
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        <a href="{{url('admin/routes')}}">Admin</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container">
        @if(\Session::has('success'))
            <div class="alert alert-success">
                {{\Session::get('success')}}
            </div>
        @endif

        <div class="row">
            <a href="{{url('/create/application')}}" class="btn btn-success">Create Application</a>
            <a href="{{url('/applications')}}" class="btn btn-default">All Application</a>
        </div>
    </div>
@endsection