<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    protected $table = 'transactiondetails';
    public $timestamps = false;

    protected $fillable = [
        'transactionID', 'shoeID', 'quantity'
    ];

    public function shoe(){
        return $this->belongsTo(Shoe::class,'shoeID');
    }

    public function transaction(){
        return $this->belongsTo(Transaction::class,'transactionID');
    }
}
