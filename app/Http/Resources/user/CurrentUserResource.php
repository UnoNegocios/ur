<?php

namespace App\Http\Resources\user;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\permission\PermissionResource;
use App\Http\Resources\role\RoleResource;
use App\Http\Resources\user\UserSelectorResource;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Arr;

class CurrentUserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return
        [
            'id' => (string)$this->id,
            'name' => $this->name,
            'last' => $this->last,
            'email' => $this->email,
            'email_verified_at' => $this->email_verified_at,
            'profile_photo_url' => $this->profile_photo_url
        ];

    }
}
