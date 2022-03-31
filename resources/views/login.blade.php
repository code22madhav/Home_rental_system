@extends('layout')
@section("content")
<div class="container custom">
    <div class="row">
    <div class="col-sm-4 col-sm-4 mx-auto"> 
        <form action="login" method="POST">
        <div class="form-group">
            @csrf
            <br></br>
            <br></br>
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <br></br>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <br></br>
        <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
    </div>
</div>
@endsection
