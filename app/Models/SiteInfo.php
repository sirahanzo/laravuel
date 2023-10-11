<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteInfo extends Model {


    use HasFactory;

    protected $table = 'site_info';

    protected $casts = [
        'updated_at' => 'date:Y-m-d H:i:s',
    ];

    protected $fillable = [
        'site_id',
        'site_name',
        'site_address',
        'part_number',
        'serial_number',
        //'model',
        'hardware',
        'software',
    ];
}
