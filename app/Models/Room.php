<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Room extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'rooms';

    protected $fillable = [
        'name',
        'description',
        'priority',
        'profile_id',
    ];

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}
