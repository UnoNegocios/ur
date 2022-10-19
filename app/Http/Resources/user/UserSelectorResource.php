<?php

namespace App\Http\Resources\user;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\influencer\InfluencerSelectorResource;

class UserSelectorResource extends JsonResource
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
        'influencers_assigned' => $this->when($this->children, InfluencerSelectorResource::collection($this->children))
        ];
    }
}
