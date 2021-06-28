<?php

namespace App\Http\Resources\V2;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class PostColletion extends ResourceCollection
{

    public $collects = PostResource::class;
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => $this->collection,
            'meta' => [
                'organitation' => 'Ceative-Alliance',
                'authors' => [
                    'Cesar-Fontalvo',
                    'Ceative-Alliance'
                ]

            ],
            'type'=> 'articles'
        ];
    }
}
