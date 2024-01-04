<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atte_Rest extends Model
{
    use HasFactory;

    protected $guarded = array('id');
    public static $rules = array(
        'atte_work_id' => 'required',
        'rest_start_at' => 'required',
    );
}
