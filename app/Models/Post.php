<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function categorias(){
        return $this->belongsTo(Categoria::class);
    }

    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }

    public function comments(){
        return $this->morphMany(Comment::class, "commentable");
    }
}
