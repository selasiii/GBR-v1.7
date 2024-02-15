<?php

// app/Models/Terminal.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Terminal extends Model
{
    use SoftDeletes;

    protected $primaryKey = 'terminal_id';
    public $incrementing = false;

    protected $fillable = [
        'terminal_name',
        'location',
        'region',
        'country',
    ];
}
