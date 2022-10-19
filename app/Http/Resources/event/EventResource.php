<?php

namespace App\Http\Resources\event;

use Illuminate\Http\Resources\Json\JsonResource;

class EventResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'event_name' => $this->event_name,
            'title' => $this->title,
            'category' => $this->category,
            'main_event_hall_name' => $this->main_event_hall_name,
            'main_event_title' => $this->main_event_title,
            'main_event_address' => $this->main_event_address,
            'ceremony_address' => $this->ceremony_address,
            'dresscode' => $this->dresscode,
            'date' => $this->date,
            'time' => $this->time,
            'datetime' => $this->datetime,
            'last_day_for_confirmation_date' => $this->last_day_for_confirmation_date,
            'total_invitations' => $this->invitations->count(),
            'invitations_confirmed' => $this->getConfirmedInvitations(),
        ];
    }
}
