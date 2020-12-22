@extends('masterbar')

@section('title')
    Just Du It
@endsection

@section('content')
    <div style="margin-left: 10%; margin-top:2%; border: 0.1px gray solid; margin-right: 10%; margin-bottom:2%">
        <div style="text-align: center; padding: 2%; font-size: 20px; background-color: #49a0e7">
            Add To Cart
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
            <form action="{{route('addtocart',$shoe->id)}}" method="POST">
                @csrf
                @method('post')
                <div style="margin-top: 20px">
                    @error('quantity')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                    <div style="display: flex">
                        <div><label for="staticEmail" class="col-form-label">Quantity :</label></div>
                        <div class="col-sm-15" style="margin-left: 15px">
                        <input class="form-control"type="text" name="quantity" value="{{ old('quantity') }}" id="search"></div>
                    </div>
                    <button class="btn btn-primary" type="submit" style="margin-top: 20px; margin-left: 80px">Add To Cart</button>
                </div>
            </form>
        </div>
    </div>
@endsection