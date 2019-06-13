<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GstRequest extends FormRequest
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
                    'hsn_code' => 'required|max:255|unique:gsts,hsn_code',
                    'gst_percentage' => 'required|numeric|min:0|max:100',
                    'products' => 'required',
                ];
            case 'PATCH' :
                return [
                    'hsn_code' => 'required|max:255|unique:gsts,hsn_code,' . $this->route('gst')->id,
                    'gst_percentage' => 'required|numeric|min:0|max:100',
                    'products' => 'required',
                ];
        }
    }
    
    public function messages()
    {
        return [
            'hsn_code.required' => 'HSN Code should not be empty',
            'hsn_code.max' => 'HSN Code should not have more then 255 characters',
            'hsn_code.unique' => 'HSN Code already available. Please enter unique HSN Code',
            'gst_percentage.required' => 'GST Percentage should not be empty',
            'gst_percentage.numeric' => 'GST Percentage should be a number',
            'gst_percentage.min' => 'GST Percentage between 0 to 100',
            'gst_percentage.max' => 'GST Percentage between 0 to 100',
            'products' => 'Any one product should be checked'
        ];
    }
}
