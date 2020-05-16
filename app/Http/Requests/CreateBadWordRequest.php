<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateBadWordRequest extends FormRequest
{
    public function rules()
    {
        return [
            'word' => 'string|required',
            'how_bad_is_it' => 'string|in:unspeakable,horrible,very bad,bad',
        ];
    }

    public function bodyParameters()
    {
        return [
            'word' => [
                'description' => 'The bad word.',
                'example' => 'family',
            ],
            'how_bad_is_it' => [
                'description' => 'How bad the word is.',
            ],
        ];
    }
}
