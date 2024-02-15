<?php

// app/Models/Travel.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Travel extends Model
{
    use SoftDeletes;

    protected $primaryKey = 'travel_id';
    public $incrementing = false;

    protected $fillable = [
        'driver_id',
        'conductor_id',
        'bus_id',
        'departure_datetime',
        'arrival_datetime',
        'travel_status',
        'route_id',
        'estimated_time_of_arrival',
        'is_complete',
    ];

    public function driver()
    {
        return $this->belongsTo(Driver::class, 'driver_id');
    }

    public function conductor()
    {
        return $this->belongsTo(Conductor::class, 'conductor_id');
    }

    public function bus()
    {
        return $this->belongsTo(Bus::class, 'bus_id');
    }

    public function route()
    {
        return $this->belongsTo(Route::class, 'route_id');
    }
}
