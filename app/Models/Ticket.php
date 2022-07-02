<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function route()
    {
        return $this->belongsTo(Route::class, 'route_id');
    }

    public function airline()
    {
        return $this->belongsTo(Airline::class, 'airline_id');
    }
    
}
