<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'postId' => $this->id,
            'postTitle' => $this->title,
            'postContent' => $this->content,
            'postCreatedAt' => $this->created_at,
            'postUpdatedAt' => $this->updated_at,
            'author' => $this->whenLoaded('author', function(){
                return new UserResource($this->author);
            }),
        ];
    }
}
