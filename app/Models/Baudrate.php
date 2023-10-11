<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Baudrate extends Model {


    use HasFactory;

    protected $table = 'baudrate';

    protected $casts = [
        'updated_at' => 'date:Y-m-d H:i:s',
    ];
    protected $fillable = [
        'value',
    ];
}
