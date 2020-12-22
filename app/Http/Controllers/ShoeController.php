<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shoe;

class ShoeController extends Controller
{
    public function add(Request $request){
        $this->_validation($request);
        $img = $request->file('img');
        $shoe = Shoe::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'img' => $img->getClientOriginalName(),

        ]);
        $img->move('assets',$img->getClientOriginalName());
        return redirect('/');
    }

    public function update(Request $request,$id){
        $this->_editvalidation($request);
        $img = $request->file('img');
        $shoe = Shoe::find($id);
        $shoe->name = $request->name;
        $shoe->description = $request->description;
        $shoe->price = $request->price;
        if($img != null){
            $shoe->img = $img->getClientOriginalName();
            $img->move('img',$img->getClientOriginalName());
        }
        $shoe->save();
        return redirect()->route('updateshoe',$id);
    }

    public function _validation(Request $request){
        $validation = $request->validate([
            'name'  => 'required',
            'description'  => 'required',
            'price'  => 'required|digits_between:3,100|numeric',
            'img' => 'required|mimes:jpg,png,jpeg'
        ],
        [
            'digits_between' => 'Price must be at least 100'
        ]
    );
    }

    public function _editvalidation(Request $request){
        $validation = $request->validate([
            'name'  => 'required',
            'description'  => 'required',
            'price'  => 'required|digits_between:3,100|numeric',
            'img' => 'nullable|mimes:jpg,png,jpeg'
        ],
        [
            'digits_between' => 'Price must be at least 100'
        ]);
    }
}
