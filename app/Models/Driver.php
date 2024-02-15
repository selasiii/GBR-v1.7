<?php

// app/Models/Driver.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Driver extends Model
{
    use SoftDeletes;

    protected $primaryKey = 'driver_id';
    public $incrementing = false;

    protected $fillable = [
        'licence_number',
        'first_name',
        'last_name',
        'email',
        'address',
        'phone_number',
        'password',
        'gender',
        'date_of_birth',
    ];

    public function travels()
    {
        return $this->hasMany(Travel::class, 'driver_id');
    }
}
