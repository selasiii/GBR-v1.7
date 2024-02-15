<?php

// app/Models/Ticket.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ticket extends Model
{
    use SoftDeletes;

    protected $primaryKey = 'ticket_id';
    public $incrementing = false;

    protected $fillable = [
        'issued_date',
        'expiry_date',
        'price',
        'status',
        'customer_id',
        'travel_id',
        'payment_id',
    ];

    public function customer()
    {
        return $this->belongsTo(User::class, 'customer_id');
    }

    public function travel()
    {
        return $this->belongsTo(Travel::class, 'travel_id');
    }

    public function payment()
    {
        return $this->belongsTo(Payment::class, 'payment_id');
    }
}
