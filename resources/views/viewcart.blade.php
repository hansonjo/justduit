@extends('masterbar')

@section('title')
    Just Du It
@endsection

@section('content')
    <div style="margin-left: 10%; margin-top:2%; border: 0.1px gray solid; margin-right: 10%; margin-bottom:2%;">
        <div style="text-align: center; padding: 2%; font-size: 20px; background-color: #49a0e7">
            View Cart
        </div>
        <div style="margin-top: 5%; margin-left:2%; margin-right: 2%">
            @foreach(Auth::User()->carts as $c)
                <div style="display: flex">
                    <div style="flex:1"><img src="{{asset('assets/'.$c->shoe->img)}}" height="200px" width="200px"></div>
                    <div style="flex:1; margin-top:5%; font-size:20px; margin-right:2%"><label>{{$c->shoe->name}}</label></div>
                    <div style="flex:1; margin-top:5%;">
                        <label>{{$c->quantity}}</label>
                        <label style="margin-left: 10%; width:100px">Rp. {{$c->shoe->price * $c->quantity}}</label>
                        <a href="{{route('editcart',$c->shoeID)}}"class="btn btn-primary" style="margin-left: 30%">Edit</a>
                    </div>
                </div><br>
            @endforeach
        </div>
        @if(Auth::User()->carts->count() == 0) 
            <br><br>
        @else
            <div style="width: inherit; text-align: right">
                <form action="/checkout" method="POST">
                    @csrf
                    @method('POST')
                    <button type="submit" class="btn btn-primary">Check Out</button>
                </form>
            </div>
        @endif
    </div>
@endsection