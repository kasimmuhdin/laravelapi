<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\Attributes\StopOnFirstFailure;
use Illuminate\Foundation\Http\FormRequest;

class StoreJobRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|unique:job_listings',
            'salary' => 'required|string',
        ];
    }
    public function messages(): array
    {
        return [
            'title.required' => ':attribute is required.',
            'title.unique' => ':attribute should be unique.',
            'salary.required' => ':attribute is required.',
        ];
    }
    public function attributes(): array
    {
        return [
            'title' => 'Job title',
            'salary' => 'job salary',
        ];
    }
}
