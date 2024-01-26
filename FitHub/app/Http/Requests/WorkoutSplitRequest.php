<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Validator;

class WorkoutSplitRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
//            'workout_name' => 'required|string|max:255',
//            'workout_description' => 'required|string',
              'email' => 'required|email',
              'message' => 'required|string|max:255',
              'subject' => 'required|string',
        ];
    }
}
