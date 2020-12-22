<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'carts';
    protected $primaryKey = 'shoeID';
    public $timestamps = false;

    protected $fillable = [
        'userID', 'shoeID', 'quantity',
    ];

    public function shoe(){
        return $this->belongsTo(Shoe::class,'shoeID');
    }

    public function user(){
        return $this->belongsTo(User::class,'userID');
    }
}
