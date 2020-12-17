@extends('master')
@section("content")
    <div class="container custom-login">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                <div class="login-lefti">
                <h2 class="login-header">Change Password</h2>
            <form action="changepassword" method="post">
                @csrf
                <div class="form-group">
                <label for="exampleInputEmail1"><i class="fa fa-lock" aria-hidden="true"></i>Old Password </label>
                <input type="password" name="oldpassword" class="form-control" id="exampleInputEmail1" placeholder="User Name">
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1"><i class="fa fa-lock" aria-hidden="true"></i> New Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                <label for="exampleInputPassword1"><i class="fa fa-lock" aria-hidden="true"></i>Confirm Password</label>
                <input type="password" name="password-confirm" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" name="change" class="btn btn-primary login-button">Change</button>
                </form>
                </div>
            </div>
        </div>
</div>
@endsection 