<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CatRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:3',
            'breed' => 'nullable',
            'age' => 'nullable|integer|min:0',
            'branch_id' => 'required|exists:branches,id|same_branch',
            'employee_id' => 'required|exists:employees,id'
        ];
    }
}
