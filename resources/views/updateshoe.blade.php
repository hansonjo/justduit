@extends('masterbar')

@section('title')
    Just Du It
@endsection

@section('content')
<div style="margin-left: 10%; margin-top:2%; border: 0.1px gray solid; margin-right: 10%; margin-bottom:2%">
    <div style="text-align: center; padding: 2%; font-size: 20px; background-color: #49a0e7">
        Edit Shoe
    </div>
    <div style="margin-left: 20px; margin-top:20px; margin-bottom:20px; margin-right:20px">
        <div class="ml-2 mr-3" style="display: flex;">
            <div style="flex:1">
                <img src="{{asset('assets/'.$shoe->img)}}" class="card-img-top" alt="" height="300px" width="250px">
            </div>
            <div style="flex:2; margin-left:2%">
                <label style="font-size: 30px">{{$shoe->name}}</label><br>
                <label style="font-size: 23px;margin-top:1%">Rp. {{$shoe->price}}</label><br>
                <label style="font-size: 15px;margin-top:1%">{{$shoe->description}}</label><br><br>
            </div>
        </div>
        <form action="{{route('updateshoe',$shoe->id)}}" method="POST">
            @csrf
            @method('post')
            <div style="margin-top: 20px">
                <form style="padding:2%" action="/addshoe" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="bd-example" style="text-align: right">
                        <div style="text-align: left; margin-left:20%">
                            @error('name')
                            <small style="color: red">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3 row">
                          <label class="col-sm-2 col-form-label">Shoe Name</label>
                          <div class="col-sm-4">
                            <input type="text" class="form-control"name="name" value="{{$shoe->name}}">
                          </div>
                        </div>
                        <div style="text-align: left; margin-left:20%">
                            @error('price')
                            <small style="color: red">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Price</label>
                            <div class="col-sm-4">
                              <input type="text" class="form-control" name="price" value="{{$shoe->price}}">
                            </div>
                        </div>
                        <div style="text-align: left; margin-left:20%">
                            @error('description')
                            <small style="color: red">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-4">
                              <input type="text" class="form-control" name="description" value="{{$shoe->description}}">
                            </div>
                        </div>
                        <div style="text-align: left; margin-left:20%">
                            @error('img')
                            <small style="color: red">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Image</label>
                            <div class="col-sm-4">
                              <input type="file" class="form-control" name="img">
                            </div>
                        </div>
                      </div><br>
                    <button type="submit" class="btn btn-primary mb-4" style="margin-left:17%">Update Shoe</button>
                </form>
            </div>
        </form>
    </div>
</div>
@endsection