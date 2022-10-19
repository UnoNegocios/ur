<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_name',
        'title',
        'category',
        'main_event_hall_name',
        'main_event_title',
        'main_event_address',
        'ceremony_address',
        'dresscode',
        'date',
        'time',
        'datetime',
        'last_day_for_confirmation_date',
        'user_id',

    ];

    protected $casts = [
        'featured_people' => 'array',
        'donations_bank_information' => 'array',
    ];

    public function details(){
        return $this->hasMany(Detail::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function invitations(){
        return $this->hasMany(Invitation::class);
    }

    public function getConfirmedInvitations(){
        return $this->invitations()->where('is_confirmed',1)->count();
    }

}
