<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Cart;
use App\Transaction;
use App\TransactionDetail;

class CartController extends Controller
{
    public function add(Request $request, $id){
        $this->_validateCart($request);
        $c = Cart::Where('shoeID',$id)->where('userID',Auth::id())->first();
        if($c != null){
            $c->quantity = $c->quantity + $request->quantity;
            $c->update();
        }else{
            $cart = Cart::create([
                'shoeID' => $id,
                'userID' => Auth::id(),
                'quantity' => $request->quantity,
            ]);
        }
        
        return redirect('/');
    }

    public function update(Request $request,$id){
        $this->_validateCart($request);
        $c = Cart::Where('shoeID',$id)->where('userID',Auth::id())->first();
        $c->quantity = $request->quantity;
        $c->save();
        return redirect('viewcart');
    }

    public function delete($id){
        $c = Cart::Where('shoeID',$id)->where('userID',Auth::id())->delete();
        return redirect('viewcart');
    }

    public function checkout(){
        $transaction = Transaction::create([
            'userID' => Auth::id(),
            'date' => now(),
        ]);
        $carts = Cart::Where('userID',Auth::id())->get();
        foreach($carts as $c){
            $td = TransactionDetail::create([
                'transactionID' => $transaction->id,
                'shoeID' => $c->shoeID,
                'quantity' => $c->quantity,
            ]);
            $c->delete();
        }
        return redirect('viewtransaction');
    }

    private function _validateCart(Request $request){
        $validation = $request->validate([
            'quantity'  => 'required|numeric|min:0',
        ]);
    }
}
