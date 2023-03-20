<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    // Creada por Rafix para validación:

    // protected function prepareForValidation()
    // {
    //     //
    //     $this->merge([
    //         'slug' => Str::of($this->slug)->slug()
    //     ]);

    // }


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|unique:posts|max:255',
            'description' => 'required|min:7|max:255',
            'slug' => 'required|max:255|unique:posts',
            'content' => 'required'
        ];
    }
}
