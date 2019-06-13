<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ParameterValueRequest extends FormRequest
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
        switch($this->method()){
            case 'POST':
                return [
                    'parameter_id' => 'required|numeric',
                    'value' => 'required|max:255',
                    'value' => Rule::unique('parameter_values')->where(function ($query){
                            return $query->where('parameter_id', $this->request->get('parameter_id'));
                        })
                ];
        }
    }

    public function messages()
    {
        return [
            'parameter_id.required' => 'Select parameter',
            'parameter_id.numeric' => 'Select atleast parameter',
            'value.required' => 'Value should not be empty',
            'value.max' => 'Value should not have more then 255 characters',
            'value.unique' => 'Parameter value already available. Please enter unique value'
        ];
    }
}
