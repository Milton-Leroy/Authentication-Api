<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['nullable', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255', 'unique:posts,slug,'.$this->post],
            'content' => ['nullable', 'string', 'min:10'],
            'user_id' => ['nullable', 'integer', 'exists:users,id']
        ];
    }
}
