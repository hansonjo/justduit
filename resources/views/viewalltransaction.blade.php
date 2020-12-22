@extends('masterbar')

@section('title')
    Just Du It
@endsection

@section('content')
    <div style="margin-left: 10%; margin-top:2%; border: 0.1px gray solid; margin-right: 10%; margin-bottom:2%">
        <div style="text-align: center; padding: 2%; font-size: 20px; background-color: #49a0e7">
            View All Transaction
        </div>
        <div>
            @foreach ($transactions as $t)
                    <div style="margin-left:10%; margin-right:10%; font-size: 25px; margin-top:2%; padding:2%; border-radius:10px; background-color: #c6e1f6; display:flex">
                        <div style="flex:1"><label>{{$t->date}}</label></div>
                        <div style="flex:1"><label>Total Rp. 
                            <?php $total = 0;?>
                            @foreach ($t->transactiondetails as $td) 
                                <?php $total = $total + $td->quantity * $td->shoe->price; ?>
                            @endforeach
                            {{$total}}
                        </label></div>
                    </div>
                    
                    <div class="row row-cols-3 row-cols-md-3 mt-3" style="margin-left: 20px">
                        @foreach ($t->transactiondetails as $td)
                            <div class="col mb-4 mr-2">
                                <img src="{{asset('assets/'.$td->shoe->img)}}" height="250px" width="250px">
                            </div>
                        @endforeach
                    </div>
            @endforeach
        </div>
        <br><br>
    </div>
@endsection