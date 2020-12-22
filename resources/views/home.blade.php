@extends('masterbar')

@section('title')
    Just Du It
@endsection

@section('content')
    <div style="margin-left: 10%; margin-top:2%; border: 0.1px gray solid; margin-right: 10%; margin-bottom:2%">
        <div style="text-align: center; padding: 2%; font-size: 20px; background-color: #49a0e7">
            View Shoe
        </div>
        <div>
            <div class="row row-cols-1 row-cols-md-3 mt-3 ml-2">
                @foreach ($shoes as $s)
                        <div class="col mb-4 mr-2">
                            <a href="{{route('shoedetail',$s->id)}}" style="color: black; text-decoration: none">
                            <div class="card h-100">
                                <img src="{{asset('assets/'.$s->img)}}" class="card-img-top" alt="" height="250px" width="250px">
                                <div class="card-body">
                                    <h4 class="card-title">{{$s->name}}</h4>
                                    <p class="card-text">Rp. {{$s->price}}</p>
                                </div>
                            </div>
                            </a>
                        </div>
                @endforeach
            </div>
            <div style="margin-left:42%"> 
                {{$shoes->withQueryString()->links()}}
            </div>
        </div>
    </div>
@endsection