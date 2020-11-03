<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BookingSetting extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'booking_settings';

    protected $guarded = [];

    protected $casts = [
        'contact_via_phone' => 'boolean',
        'contact_via_email' => 'boolean',
        'email_confirmation' => 'boolean',
        'survey' => 'boolean',
        'end_time' => 'boolean',
        'allow_cancel' => 'boolean',
        'online_gather_email' => 'boolean',
        'online_email_required' => 'boolean',
        'online_gather_zip' => 'boolean',
        'online_gather_address' => 'boolean',
        'online_newsletter' => 'boolean',
        'online_confirm_duration' => 'boolean',
        'online_email_all_book' => 'boolean',
        'online_email_notes_book' => 'boolean',
        'manual_table_suggestion' => 'boolean',
    ];

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}
