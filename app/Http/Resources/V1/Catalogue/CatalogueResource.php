<?php

namespace App\Http\Resources\V1\Catalogue;

use Illuminate\Http\Resources\Json\JsonResource;

class CatalogueResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'name'=> $this->name,
            'type'=> $this->type,
        ];
    }
}
