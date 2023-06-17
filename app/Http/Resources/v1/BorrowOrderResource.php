<?php

namespace App\Http\Resources\v1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BorrowOrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'member' => new MemberResource($this->whenLoaded('member')),
            'borrowedBook' => new BookResource($this->whenLoaded('book')),
            'status' => $this->status,
            'borrowDate' => $this->borrow_date,
            'returnDate' => $this->return_date
        ];
    }
}
