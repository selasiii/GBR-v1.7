<?php

// app/Models/Conductor.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Conductor extends Model
{
    use SoftDeletes;

    protected $primaryKey = 'conductor_id';
    public $incrementing = false;

    protected $fillable = [
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
        return $this->hasMany(Travel::class, 'conductor_id');
    }
}
