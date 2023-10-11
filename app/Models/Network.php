<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Network extends Model {


    use HasFactory;

    protected $table = 'network';

    protected $casts = [
        'updated_at' => 'date:Y-m-d H:i:s',
    ];

    protected $fillable = [
        'ipaddress',
        'netmask',
        'gateway',
    ];
}
