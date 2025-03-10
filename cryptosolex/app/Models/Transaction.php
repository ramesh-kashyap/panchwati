<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'ttime','user_id','user_id_fk','amount','remarks'
    ];
    
     public function user()
 {
     return $this->belongsTo('App\Models\User', 'user_id');
 } 

}
