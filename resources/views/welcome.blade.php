@extends('layouts.app')
@section('content')

<div id="wrapper-admin">
    <div class="container">
        <div class="row">
            <div class="offset-md-4 col-md-4">
                <div class="logo border border-danger">
                  <img src="{{ asset('images/library.png') }}" alt="">
                </div>
                <form class="yourform" action="{{ route("login") }}" method="post">
                  <h3 class="heading">Admin Login</h3>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" value="" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" value="" required>
                    </div>
                    <input type="submit" name="login" class="btn btn-danger" value="login" />
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
