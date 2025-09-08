<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class businessAdvertise extends Model
{
    protected $table = 'business_advertises';
    protected $fillable = [
        'busname',
        'bustype',
        'shortdesc',
        'longdesc',
        'services',
    ];
}
