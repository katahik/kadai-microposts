<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Micropost extends Model
{
    protected $fillable = ['content'];
    public function user(){
        return $this->belongsTo(User::class);
    }
    
    public function favoriters()
    {
        return $this->belongsToMany(User::class, 'favorite', 'micropost_id', 'user_id')->withTimestamps();
    }
   
}
