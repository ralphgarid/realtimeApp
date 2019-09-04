<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;


class Question extends Model
{
    //
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function replies(){
        return $this->hasMany(reply::class);
    }
    public function categorie(){
        return $this->belongsTo(Category::class);
    }
}
