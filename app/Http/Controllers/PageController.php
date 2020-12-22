<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Shoe;
use App\Transaction;
use App\Cart;

class PageController extends Controller
{
    public function home(Request $request){
        $shoes = Shoe::all();
        $shoes = Shoe::paginate(6);
        $search = $request->input('search');
        $shoes = Shoe::where('name', 'like', "%$search%")->paginate(6);
        return view('home',compact('shoes'));
    }

    public function login(){
        if(Auth::User()) return redirect('/');
        return view('login');
    }

    public function register(){
        if(Auth::User()) return redirect('/');
        return view('register');
    }

    public function detail($id){
        $shoe = Shoe::find($id);
        return view('shoedetail',compact('shoe'));
    }

    public function addToCart($id){
        if(Auth::User() && Auth::User()->role != 'member') return redirect('/');
        $shoe = Shoe::find($id);
        return view('addtocart',compact('shoe'));
    }

    public function addShoe(){
        if(Auth::User() && Auth::User()->role != 'admin') return redirect('/');
        return view('addshoe');
    }

    public function updateShoe($id){
        if(Auth::User() && Auth::User()->role != 'admin') return redirect('/');
        $shoe = Shoe::find($id);
        return view('updateshoe',compact('shoe'));
    }

    public function viewTransaction(){
        if(Auth::User() && Auth::User()->role != 'member') return redirect('/');
        return view('viewtransaction');
    }

    public function viewAllTransaction(){
        if(Auth::User() && Auth::User()->role != 'admin') return redirect('/');
        $transactions = Transaction::all();
        return view('viewalltransaction',compact('transactions'));
    }

    public function viewCart(){
        if(Auth::User() && Auth::User()->role != 'member') return redirect('/');
        return view('viewcart');
    }

    public function editCart($id){
        if(Auth::User() && Auth::User()->role != 'member') return redirect('/');
        $cart = Cart::Where('userID',Auth::id())->Where('shoeID',$id)->first();
        return view('editcart',compact('cart'));
    }


}
