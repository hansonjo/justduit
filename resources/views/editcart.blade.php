@extends('masterbar')

@section('title')
    Just Du It
@endsection

@section('content')
    <div style="margin-left: 10%; margin-top:2%; margin-right: 10%">
        <div style="display: flex">
            <div style="flex:1">
                <img src="{{asset('assets/'.$cart->shoe->img)}}" class="card-img-top" alt="" height="350px" width="250px">
            </div>
            <div style="flex:2; margin-left:2%">
                <label style="font-size: 30px">Name : {{$cart->shoe->name}}</label><br>
                <label style="font-size: 23px;margin-top:1%">Price : Rp. {{$cart->shoe->price}}</label><br>
                <label style="font-size: 18px;margin-top:1%">Description :</label><br>
                <label style="font-size: 15px;margin-top:1%">{{$cart-> shoe->description}}</label><br><br>
                @error('quantity')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                <form action="{{route('updatecart',$cart->shoeID)}}" method="POST">
                <div style="display: flex">
                    <div><label for="staticEmail" class="col-form-label">Quantity :</label></div>
                    <div class="col-sm-15" style="margin-left: 15px">
                    <input class="form-control"type="text" name="quantity" value="{{ $cart->quantity }}" id="search"></div>
                </div><br><br>
                <div style="display: flex">
                    <div>
                            @csrf
                            @method('POST')
                            <button type="submit" class="btn btn-primary">Update Cart</button>
                        </form>
                    </div>
                    <div style="margin-left: 5%">
                        <form action="{{route('deletecart',$cart->shoeID)}}" method="POST">
                            @csrf
                            @method('POST')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection