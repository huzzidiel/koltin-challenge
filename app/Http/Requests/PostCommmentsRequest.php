<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostCommmentsRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nickname' => 'required|string|min:2|max:255',
            'x_twitter' => 'required|url:http,https',
            'comment' => 'required|string|min:2|max:255',
        ];
    }
}
