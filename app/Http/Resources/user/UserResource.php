<?php

namespace App\Http\Resources\user;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\role\RoleResource;
use App\Http\Resources\permission\PermissionResource;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Arr;


class UserResource extends JsonResource
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
          'id' => (string)$this->id,
          'name' => $this->name,
          'last' => $this->last,
          'email' => $this->email,
        ];
    }
}
