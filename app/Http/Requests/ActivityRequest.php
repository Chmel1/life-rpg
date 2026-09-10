<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Validator;

class ActivityRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'base_xp' => ['required', 'integer', 'min:1', 'max:100'],

            'skills' => ['required', 'array', 'min:1'],

            'skills.*.id' => ['required','integer',],

            'skills.*.xp' => ['required','integer','min:1',],
        ];
    }
    public function after(): array
{
    return [
        function (Validator $validator) {

            $baseXp = (int) $this->input('base_xp', 0);

            $skillsXp = collect($this->input('skills', []))
                ->sum(function ($skill) {
                    return (int) ($skill['xp'] ?? 0);
                });

            if ($skillsXp > $baseXp) {
                $validator->errors()->add(
                    'skills',
                    'Суммарный XP навыков не может превышать XP активности.'
                );
            }
        },
    ];
}

    
}
