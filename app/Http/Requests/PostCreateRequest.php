<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostCreateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['required', 'string', 'max:255', 'unique:posts,slug'],
            'content' => ['required', 'string', 'min:10'],
            'user_id' => ['required', 'integer', 'exists:users,id']
        ];
    }
}
