<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BarcodeRequest extends FormRequest
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
                    'barcode' => 'required|max:255|unique:barcodes,barcode',
                    'hsn_code' => 'required|max:255',
                    'normal_sales_price' => 'required|numeric',
                    'discount_sales_price' => 'required|numeric',
                    'product_id' => 'required|exists:products,id',
                    'gst_percentage' => 'required_if:gst_id,0|numeric',
                ];
            case 'PATCH' :
                return [
                    'barcode' => 'required|max:255|unique:barcodes,barcode,'. $this->route('barcode')->id,
                    'hsn_code' => 'required|max:255',
                    'normal_sales_price' => 'required|numeric',
                    'discount_sales_price' => 'required|numeric',
                    'product_id' => 'required|exists:products,id',
                    'gst_percentage' => 'required_if:gst_id,0|numeric',
                ];
        }
    }

    public function messages()
    {
        return [
            'barcode.required' => 'Barcode should not be empty',
            'barcode.max' => 'Barcode should not have more then 255 characters',
            'barcode.unique' => 'Barcode already available. Please enter unique HSN Code',
            'hsn_code.required' => 'HSN Code should not be empty',
            'hsn_code.max' => 'HSN Code should not have more then 255 characters',
            'normal_sales_price.required' => 'Normal Sales Price should not be empty',
            'normal_sales_price.numeric' => 'Normal Sales Price should be a number',
            'discount_sales_price.required' => 'Discount Sales Price should not be empty',
            'discount_sales_price.numeric' => 'Discount Sales Price should be a number',
            'product_id.required' => 'Product should not be empty',
            'product_id.exists' => 'Product Could not find ',
            'gst_percentage.required_if' => 'GST Percentage should be a number ',
        ];
    }
}
