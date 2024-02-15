<?php

// app/Models/Passenger.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Passenger extends Model
{
    use SoftDeletes;

    protected $primaryKey = 'passenger_id';
    public $incrementing = false;

    protected $fillable = [
        'ticket_id',
        'travel_id',
        'checked_in',
    ];

    public function ticket()
    {
        return $this->belongsTo(Ticket::class, 'ticket_id');
    }

    public function travel()
    {
        return $this->belongsTo(Travel::class, 'travel_id');
    }
}
