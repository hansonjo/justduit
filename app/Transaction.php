<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transactions';
    public $timestamps = false;

    protected $fillable = [
        'userID', 'date',
    ];

    public function user(){
        return $this->belongsTo(User::class,'userID');
    }

    public function transactiondetails(){
        return $this->hasMany(TransactionDetail::class,'transactionID');
    }

}
