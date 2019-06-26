<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SupplierRequest extends FormRequest
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
                    'name' => 'required|max:255',
                    'shop_name' => 'required|max:255',
                    'branch_name' => 'required|max:255',
                    'landline_number' => 'required|numeric',
                    'address' => 'required|max:255',
                    'city' => 'required|max:255',
                    'state' => 'required|max:255',
                    'gst_number' => 'required|max:255',
                    'gst_type' => 'required|max:255',
                ];
            case 'PATCH' :
                return [
                    'name' => 'required|max:255',
                    // 'barcode' => 'required|max:255|unique:barcodes,barcode,'. $this->route('barcode')->id,
                    'defaultBillingBranch' => 'required|exists:branches,id',
                    'defaultShippingBranch' => 'required|exists:branches,id',
                ];
        }
    }

    public function messages()
    {
        return [
            'name.required' => 'Supplier Name should not be empty',
            'name.max' => 'Supplier Name should not have more then 255 characters',
            // 'barcode.unique' => 'Barcode already available. Please enter unique HSN Code',
            'shop_name.required' => 'Shop Name should not be empty',
            'shop_name.max' => 'Shop Name should not have more then 255 characters',
            'branch_name.required' => 'Shop Name should not be empty',
            'branch_name.max' => 'Shop Name should not have more then 255 characters',
            'normal_sales_price.required' => 'Landline Number should not be empty',
            'normal_sales_price.numeric' => 'Landline Number should be a number',
            'address.required' => 'Address should not be empty',
            'address.max' => 'Address should not have more then 255 characters',
            'city.required' => 'City should not be empty',
            'city.max' => 'City should not have more then 255 characters',
            'state.required' => 'State should not be empty',
            'state.max' => 'State should not have more then 255 characters',
            'gst_number.required' => 'GST Number should not be empty',
            'gst_number.max' => 'GST Number should not have more then 255 characters',
            'gst_type.required' => 'GST Option should not be empty',
            'gst_type.max' => 'GST Option should not have more then 255 characters',
            'defaultBillingBranch.required' => 'Default Billing Branch should not be empty',
            'defaultBillingBranch.exists' => 'Invalid Default Billing Branch. Please try again',
            'defaultShippingBranch.required' => 'Default Shipping Branch should not be empty',
            'defaultShippingBranch.exists' => 'Invalid Default Shipping Branch. Please try again',
        ];
    }
}
