<?php

// app/Models/Bus.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bus extends Model
{
    use SoftDeletes;

    protected $primaryKey = 'bus_id';
    public $incrementing = false;

    protected $fillable = [
        'bus_number',
        'capacity',
        'model',
        'make',
        'year',
        'color',
        'parked_at',
        'status',
        'bus_state',
    ];
}
