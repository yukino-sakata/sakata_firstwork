<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atte_Work extends Model
{
    use HasFactory;

    protected $guarded = array('id');
    public static $rules = array(
        'atte_user_id' => 'required',
        'date' => 'required',
        'work_start_at' => 'required',
    );

    public function atte_rest(){
        return $this->hasMany('App\Models\Rest');
    }
}
