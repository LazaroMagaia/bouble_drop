<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArtistRequestUpdate extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        $id = $this->segment(3);
        return [
             "name" => [
                "required",
                "max:25",
                "unique:artist,name,{$id},id"
            ],
            "image" => [
                'nullable',
                'image',
                'max:2048',
                'mimes:jpeg,png,jpg'
            ],
            "gender" =>[
                "required"
            ],
            "description"=>[
                "required"
            ]
        ];
    }
}
