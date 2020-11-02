<?php

namespace App\Models;

use Carbon\Carbon;
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

    public function getOpeningTimeAttribute()
    {
        return Carbon::createFromTimeString($this->attributes['opening_time'])->toTimeString('minute');
    }

    public function getClosingTimeAttribute()
    {
        return Carbon::createFromTimeString($this->attributes['closing_time'])->toTimeString('minute');
    }

    public function setOpeningTimeAttribute($value)
    {
        $this->attributes['opening_time'] = Carbon::createFromFormat('H:i', $value);
    }

    public function setClosingTimeAttribute($value)
    {
        $this->attributes['closing_time'] = Carbon::createFromFormat('H:i', $value);
    }

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }

}
