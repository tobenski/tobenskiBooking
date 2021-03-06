<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profile extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'profiles';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'zip',
        'city',
        'country',
        'lang',
        'timezone',
        '24_hour',
        'logo',
    ];

    protected $casts =[
        '24_hour' => 'boolean',
        'active' => 'boolean',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function hours()
    {
        return $this->hasMany(Hours::class);
    }

    public function weekdayHours($day)
    {
        return $this->hasMany(Hours::class)->where('weekday', $day)->get();
    }

    public function rooms()
    {
        return $this->hasMany(Room::class);
    }

    public function tables()
    {
        return $this->hasMany(Table::class);
    }

    public function bookingSetting()
    {
        return $this->hasOne(BookingSetting::class);
    }
}
