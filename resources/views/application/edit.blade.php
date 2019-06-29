
@extends('layouts.app')

@section('content')
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
        @endif
        <div class="row">
            <form method="post" action="{{action('ApplicationController@update', ['id' => $id])}}" >
                {{csrf_field()}}
                <input name="_method" type="hidden" value="POST">
                <div class="form-group">
                    <input type="hidden" value="{{csrf_token()}}" name="_token" />
                    <label for="username">Application Title:</label>
                    <input type="text" class="form-control" name="username"/>
                </div>
                <div class="form-group">
                    <label for="email">email:</label>
                    <textarea cols="2" rows="2" class="form-control" name="email"></textarea>
                </div>

                <div class="form-group">
                    <label for="courses">Courses:</label>
                    <textarea cols="2" rows="2" class="form-control" name="courses"></textarea>
                </div>

                <div class="form-group">
                    <label for="phoneNumber">PhoneNumber:</label>
                    <textarea cols="2" rows="2" class="form-control" name="phoneNumber"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection