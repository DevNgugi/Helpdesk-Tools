<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id',
        'comment',
        'post_id'
    ];
    
    public function getCommentRelation(){
        return $this->belongsTo('App\Models\User','user_id','id');
    }
}
