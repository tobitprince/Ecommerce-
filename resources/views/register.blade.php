@extends('master')
@include('flash-message')
@section("content")

    <div class="container custom-login">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                <div class="login-lefti">
                <h2 class="login-header">Register</h2>
            <form action="register" method="post">
                @csrf
                <div class="form-group">
                <label for="exampleInputEmail1"><i class="fa fa-user" aria-hidden="true"></i></i>User Name </label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="User Name">
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1"><i class="fa fa-envelope" aria-hidden="true"></i> Email Address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                <label for="exampleInputPassword1"><i class="fa fa-lock" aria-hidden="true"></i>Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" name="login" class="btn btn-primary login-button">Register</button>
                </form>
                </div>
            </div>
        </div>
</div>
@endsection 