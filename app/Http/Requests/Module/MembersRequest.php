<?php

namespace App\Http\Requests\Module;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class MembersRequest extends FormRequest
{
    /**
     * Indicates if the validator should stop on the first rule failure.
     *
     * @var bool
     */
    protected $stopOnFirstFailure = false;

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
            'member_name' => ['required',Rule::unique('data_members', 'name')->ignore($this->uid), 'max:255'],
            'member_contact' => 'required|numeric',
            'member_address' => 'required',
            'member_dob' => 'required|date',
        ];
    }

}
