<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Weather extends Model
{
    use HasFactory;

    protected $fillable = [
       'condition',
       'temperature',
       'feels_like',
       'humidity',
       'wind_speed',
       'city_id',
       'icon',
    ];


    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }
}
