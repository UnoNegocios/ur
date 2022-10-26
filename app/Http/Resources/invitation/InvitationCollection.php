<?php

namespace App\Http\Resources\invitation;

use Illuminate\Http\Resources\Json\ResourceCollection;

class InvitationCollection extends ResourceCollection
{

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

    public function with($request)
    {
        return [
            'meta' => [
                'perro' => 1,
            ],
        ];
    }


}
