@extends('masterbar')

@section('title')
    Just Du It
@endsection

@section('content')
<div style="margin-left: 10%; margin-top:2%; border: 0.1px gray solid; margin-right: 10%; margin-bottom:2%">
    <div style="text-align: center; padding: 2%; font-size: 20px; background-color: #49a0e7">
        Add Shoe
    </div>
    <div style="margin-left: 20px; margin-top:20px; margin-bottom:20px">
        <form style="padding:2%" action="/addshoe" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="bd-example" style="text-align: right">
                <div style="text-align: left; margin-left:35%">
                    @error('name')
                    <small style="color: red">{{$message}}</small>
                    @enderror
                </div>
                <div class="mb-3 row">
                    <div class="col-sm-1"></div>
                  <label for="staticEmail" class="col-sm-3 col-form-label">Shoe Name</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control"name="name" value="{{old('name')}}">
                  </div>
                </div>
                <div style="text-align: left; margin-left:35%">
                    @error('price')
                    <small style="color: red">{{$message}}</small>
                    @enderror
                </div>
                <div class="mb-3 row">
                    <div class="col-sm-1"></div>
                    <label for="staticEmail" class="col-sm-3 col-form-label">Price</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="price" value="{{old('price')}}">
                    </div>
                </div>
                <div style="text-align: left; margin-left:35%">
                    @error('description')
                    <small style="color: red">{{$message}}</small>
                    @enderror
                </div>
                <div class="mb-3 row">
                    <div class="col-sm-1"></div>
                    <label for="staticEmail" class="col-sm-3 col-form-label">Description</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="description" value="{{old('description')}}">
                    </div>
                </div>

                <div style="text-align: left; margin-left:35%">
                    @error('img')
                    <small style="color: red">{{$message}}</small>
                    @enderror
                </div>
                <div class="mb-3 row">
                    <div class="col-sm-1"></div>
                    <label for="staticEmail" class="col-sm-3 col-form-label">Image</label>
                    <div class="col-sm-7">
                      <input type="file" class="form-control" name="img" value="{{old('img')}}">
                    </div>
                </div>

                
              </div><br>
            <button type="submit" class="btn btn-primary mb-4" style="margin-left:35%">Register</button>
        </form>
    </div>
</div>
@endsection