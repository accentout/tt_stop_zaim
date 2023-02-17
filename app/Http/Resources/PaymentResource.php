<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PaymentResource extends JsonResource
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
            'client' => $this->client,
            'contract' => $this->contract,
            'type_id' => $this->type_id,
            'date' => $this->date,
            'summ' => $this->summ,
            'source_id' => $this->source_id,
            'status_id' => $this->status_id,
            'created_at' => $this->created_at
        ];
    }
}
