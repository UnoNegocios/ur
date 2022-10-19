<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEventRequest extends FormRequest
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
            'event_name' => '',
            'title' => '',
            'category' => '',
            'main_event_hall_name' => '',
            'main_event_title' => '',
            'main_event_address' => '',
            'ceremony_address' => '',
            'dresscode' => '',
            'date' => '',
            'time' => '',
            'datetime' => '',
            'last_day_for_confirmation_date' => '',
            'user_id' => '',
        ];
    }
}
