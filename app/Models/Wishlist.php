<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;
    protected $fillable=['jobID','userID',];
    public function job(){
        return $this->belongsTo('App\Job');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
