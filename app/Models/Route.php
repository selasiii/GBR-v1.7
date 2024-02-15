<?php

// app/Models/Route.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Route extends Model
{
    use SoftDeletes;

    protected $primaryKey = 'route_id';
    public $incrementing = false;

    protected $fillable = [
        'route_name',
        'base_price',
        'start_terminal_id',
        'end_terminal_id',
    ];

    public function startTerminal()
    {
        return $this->belongsTo(Terminal::class, 'start_terminal_id');
    }

    public function endTerminal()
    {
        return $this->belongsTo(Terminal::class, 'end_terminal_id');
    }
}
