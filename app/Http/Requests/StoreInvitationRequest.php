<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreInvitationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'receiver_name' => '',
            'reciever_phone' => '',
            'receiver_email' => '',
            'guests_number' => '',
            'qr_code_image' => '',
            'is_confirmed' => '',
            'confirmed_at' => '',
            'guest_additional_message' => '',
            'qr_code_path' => '',
        ];
    }
}
