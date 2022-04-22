<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
        //belongsTo(modeloTabla, nombreClaveForanea (user_id - tabla profile), nombreClave (id - tabla User))
    }
}