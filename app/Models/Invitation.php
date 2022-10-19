<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Event;


class Invitation extends Model
{
    use HasFactory;

    protected $fillable = [
        'receiver_name',
        'reciever_phone',
        'receiver_email',
        'guests_number',
        'qr_code_image',
        'is_confirmed',
        'confirmed_at',
        'guest_additional_message',
        'qr_code_path',
        'event_id',
    ];

    protected $casts = [
        'guests_names' => 'array',
    ];

    public function event(){
        return $this->belongsTo(Event::class);
    }
}
