@extends('masterbar')

@section('title')
    Just Du It
@endsection

@section('content')
    <div style="margin-left: 10%; margin-top:2%; margin-right: 10%">
        <div style="display: flex">
            <div style="flex:1">
                <img src="{{asset('assets/'.$shoe->img)}}" class="card-img-top" alt="" height="110%" width="250px">
            </div>
            <div style="flex:2; margin-left:2%">
                <label style="font-size: 30px">Name : {{$shoe->name}}</label><br>
                <label style="font-size: 23px;margin-top:1%">Price : Rp. {{$shoe->price}}</label><br>
                <label style="font-size: 18px;margin-top:1%">Description :</label><br>
                <label style="font-size: 15px;margin-top:1%">{{$shoe->description}}</label><br><br>
                
                @if(Auth::User() && Auth::User()->role == 'member')
                    <a href="{{route('addtocart',$shoe->id)}}" style="font-size: 18px; text-decoration: none">Add to Cart</a>
                @elseif(Auth::User() && Auth::User()->role == 'admin')
                    <a href="{{route('updateshoe',$shoe->id)}}" style="font-size: 18px; text-decoration: none">Update Shoe</a>
                @endif
            </div>
        </div>
    </div>
@endsection