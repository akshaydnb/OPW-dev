<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ParameterRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        switch($this->method()){
            case 'POST':
                return [
                    'title' => 'required|max:255|unique:parameters,title'
                ];
        }
    }

    public function messages()
    {
        return [
            'title.required' => 'Title should not be empty. Please enter title',
            'title.max' => 'Title should not have more then 255 characters',
            'title.unique' => 'Parameters title already available. Please enter unique title'
        ];
    }
}
