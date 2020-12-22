@extends('master')

@section('title')
    Just Du It!
@endsection

@section('content')
<div style="height:40%; width:40%; margin-left: 30%; margin-top: 2%;border:1px solid gray; border-radius:5px; ">
    <div style="text-align: center; background-color: #49a0e7" >
    <label class="form-check-label pt-2 pb-3" style="font-size: 20px">Login</label></div>
    <form style="padding:2%" action="login" method="POST">
    @csrf
    @if (session('failed'))
    <div style="text-align: center; margin-bottom:2%">
    <label class="text-danger">
        {{session('failed')}}
    </label></div>
    @endif
    <div class="bd-example" style="text-align: right">
        <div class="mb-3 row">
          <div class="col-sm-1"></div>
          <div class="col-sm-2 col-form-label"><label>Email</label></div>
          <div class="col-sm-7">
            <input type="email" class="form-control" name="email" value="{{old('email')}} " >
          </div>
        </div>
        <div class="mb-3 row">
          <div class="col-sm-1"></div>
          <div class="col-sm-2 col-form-label"><label>Password</label></div>
          <div class="col-sm-7">
            <input type="password" class="form-control" name="password">
          </div>
        </div>
      </div><br>
    <div class="form-group form-check row" style="margin-left: 24%">
        <div><input type="checkbox" class="form-check-input" name="rememberMe"></div>
        <label class="form-check-label">Remember Me</label>
    </div><br>
    <button type="submit" class="btn btn-primary" style="margin-left:26%">Login</button>
</form>
</div>
@endsection
