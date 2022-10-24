<?php

namespace App\Http\Resources\invitation;

use Illuminate\Http\Resources\Json\JsonResource;

class InvitationResource extends JsonResource
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
            'receiver_name' => $this->receiver_name,
            'reciever_phone' => $this->reciever_phone,
            'receiver_email' => $this->receiver_email,
            'guests_number' => $this->guests_number,
            'qr_code_image' => $this->qr_code_image,
            'is_confirmed' => $this->is_confirmed,
            'guest_additional_message' => $this->guest_additional_message,
            //'qr_code_path' => $this->getQrImage(),
        ];
    }
}

