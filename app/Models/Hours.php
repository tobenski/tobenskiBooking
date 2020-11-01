<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hours extends Model
{
    use HasFactory;

    protected $table = 'hours';

    protected $fillable = [
        'weekday',
        'opening_time',
        'closing_time',
        'online_booking',
        'profile_id',
    ];

    protected $dates = [
        'opening_time',
        'closing_time',
    ];

    protected $casts = [
        'online_booking' => 'boolean',
    ];

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}
