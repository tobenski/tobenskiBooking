<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Table extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'tables';

    protected $fillable = [
        'name',
        'description',
        'priority',
        'seats',
        'profile_id',
        'room_id',
    ];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}
