<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\User;
class UserLogged extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {

        $user = User::find($this->id)->first();
        return [
            'id'        => $this->id,
            'name'      => $this->name,
            'last_name' => $this->last_name,
            'email'     => $this->email,
            'active'    => $this->active,
            'token'     => $user->createToken($this->id)->plainTextToken,
        ];
    }
}
