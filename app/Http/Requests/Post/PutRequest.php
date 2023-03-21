<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;


class PutRequest extends FormRequest
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
        return [
            'title' => 'required|max:255',
            'description' => 'required|min:7|max:255',
            //'slug' => 'required|max:255|unique:posts',
            'content' => 'required',
            'category_id' => 'required|integer',
            'posted' => 'required'
        ];
    }
}
