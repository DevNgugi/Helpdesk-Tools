<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable=[
        'title',
        'body',
        'user_id'
    ];
    public function getUserRelation(){
        return $this->belongsTo('App\Models\User','user_id','id');
    }
}
