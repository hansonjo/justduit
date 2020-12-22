@extends('master')

@section('title')
    Just Du It
@endsection

@section('content')
<div style="height:40%; width:40%; margin-left: 30%; margin-top: 2%;border:1px solid gray; border-radius:5px; ">
    <div style="text-align: center; background-color: #49a0e7" >
    <label class="form-check-label pt-2 pb-3" style="font-size: 20px">Register</label></div>
    <form style="padding:2%" action="register" method="POST">
    @csrf
    <div class="bd-example" style="text-align: right">
        <div style="text-align: left; margin-left:35%">
            @error('username')
            <small style="color: red">{{$message}}</small>
            @enderror
        </div>
        <div class="mb-3 row">
            <div class="col-sm-1"></div>
          <label for="staticEmail" class="col-sm-3 col-form-label">Username</label>
          <div class="col-sm-7">
            <input type="text" class="form-control"name="username" value="{{old('username')}}">
          </div>
        </div>
        <div style="text-align: left; margin-left:35%">
            @error('email')
            <small style="color: red">{{$message}}</small>
            @enderror
        </div>
        <div class="mb-3 row">
            <div class="col-sm-1"></div>
            <label for="staticEmail" class="col-sm-3 col-form-label">Email</label>
            <div class="col-sm-7">
              <input type="email" class="form-control" name="email" value="{{old('email')}}">
            </div>
          </div>
        <div style="text-align: left; margin-left:35%">
            @error('password')
            <small style="color: red">{{$message}}</small>
            @enderror
        </div>
        <div class="mb-3 row">
            <div class="col-sm-1"></div>
            <label for="inputPassword" class="col-sm-3 col-form-label">Password</label>
            <div class="col-sm-7">
              <input type="password" class="form-control" name="password">
            </div>
          </div>
        <div style="text-align: left; margin-left:35%">
            @error('confirm')
            <small style="color: red">{{$message}}</small>
            @enderror
        </div>
        <div class="mb-2 row">
            <div class="col-sm-1"></div>
            <label class="col-sm-3 col-form-label">Confirm Password</label>
            <div class="col-sm-7">
              <input type="password" class="form-control" name="confirm">
            </div>
          </div>
      </div><br>
    <button type="submit" class="btn btn-primary mb-4" style="margin-left:35%">Register</button>
</form>
</div>
@endsection
