<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class AcResource extends JsonResource
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
            'acid'=> $this->acid,
            'type'=> $this->type,
            'excerpt'=> $this->excerpt,//El campo excert es un campo virtual en el modelo de POST
            'size'=> $this->size,
            
            

        ];
    }
}
