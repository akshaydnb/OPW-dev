<?php

namespace App\Listeners;

use App\Events\AddUpdateJSONFile;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Product;
use App\Customer;
use App\Supplier;
use App\Branch;

class MakeJsonFile
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  AddUpdateJSONFile  $event
     * @return void
     */
    public function handle(AddUpdateJSONFile $event)
    {
        if($event->type == "productBinding"){
            $productsArray = array();
            $productBindingArray = array();
            $products = Product::get();
            foreach ($products as $product) {
                $productsArray[$product->id]['title'] = $product->title;
                $productsArray[$product->id]['status'] = $product->status;
                $productBindingArray[$product->id] = array();
            }        
            Storage::put('public/json/products.json', json_encode($productsArray));
            $productBindings = Product::get();
            foreach ($productBindings as $productBinding) {
                $tempArray = array();
                $tempArray['id'] = $productBinding->id;
                $tempArray['title'] = $productBinding->title;
                $tempArray['type'] = $productBinding->type;// for display 0 for textbox, 1 for row and 2 for column
                $tempArray['status'] = $productBinding->status;
                $tempArray['for_type'] = $productBinding->for_type;// 1 for purchase and sales both and 2 for sales only
                array_push($productBindingArray[$productBinding->product_id] , $tempArray);
            }
            Storage::put('public/json/productBinding.json', json_encode($productBindingArray));
        }
        if($event->type == "customerBinding"){
            $customerBindingArray = array();
            $customers = Customer::with('branches')->orderBy('created_at', 'desc')->get();
            foreach ($customers as $customer) {
                $customerBindingArray[$customer->id] = array();
                foreach ($customer->branches as $branche) {
                    $tempArray = array();
                    $tempArray['id'] = $branche->id;
                    $tempArray['shop_name'] = $branche->shop_name;
                    $tempArray['branch_name'] = $branche->branch_name;
                    $tempArray['landline_number'] = $branche->landline_number;
                    $tempArray['address'] = $branche->address;
                    $tempArray['city'] = $branche->city;
                    $tempArray['gst_number'] = $branche->gst_number;
                    $tempArray['gst_type'] = $branche->gst_type;// 1 for CGST/SGST and 2 for IGST                     
                    $tempArray['created_at'] = $branche->created_at;
                    $tempArray['updated_at'] = $branche->updated_at;
                    array_push($customerBindingArray[$customer->id] , $tempArray);
                }
            }
            Storage::put('public/json/customerBinding.json', json_encode($customerBindingArray));
        }
        if($event->type == "supplierBinding"){
            $supplierBindingArray = array();
            $suppliers = Supplier::with('branches')->orderBy('created_at', 'desc')->get();
            foreach ($suppliers as $supplier) {
                $supplierBindingArray[$supplier->id] = array();
                foreach ($supplier->branches as $branche) {
                    $tempArray = array();
                    $tempArray['id'] = $branche->id;
                    $tempArray['shop_name'] = $branche->shop_name;
                    $tempArray['branch_name'] = $branche->branch_name;
                    $tempArray['landline_number'] = $branche->landline_number;
                    $tempArray['address'] = $branche->address;
                    $tempArray['city'] = $branche->city;
                    $tempArray['gst_number'] = $branche->gst_number;
                    $tempArray['gst_type'] = $branche->gst_type;// 1 for CGST/SGST and 2 for IGST                     
                    $tempArray['created_at'] = $branche->created_at;
                    $tempArray['updated_at'] = $branche->updated_at;
                    array_push($supplierBindingArray[$supplier->id] , $tempArray);
                }
            }
            Storage::put('public/json/supplierBinding.json', json_encode($supplierBindingArray));
        }
    }
}
