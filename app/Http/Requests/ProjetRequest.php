<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjetRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //image, title, description, tags, url, github
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_author' => 'nullable|string|max:255',
            'image_author_link' => 'nullable|url|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'tags' => 'nullable|string',
            'project_link' => 'nullable|url|max:255',
            'github_link' => 'nullable|url|max:255'
        ];
    }
}
