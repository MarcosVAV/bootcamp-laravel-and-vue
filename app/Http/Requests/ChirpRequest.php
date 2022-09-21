<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChirpRequest extends FormRequest
{
    public function rules()
    {
        return [
            'message' => 'required|string|max:255'
        ];
    }
}