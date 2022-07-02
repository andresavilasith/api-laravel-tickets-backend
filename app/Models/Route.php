<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function origin_city()
    {
        return $this->belongsTo(City::class, 'origin_city_id');
    }

    public function destiny_city()
    {
        return $this->belongsTo(City::class, 'destiny_city_id');
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
