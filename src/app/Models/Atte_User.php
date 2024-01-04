<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atte_User extends Model
{
    use HasFactory;

    public function atte_work(){
        return $this->hasMany('App\Models\Work');
    }
}
