<?php

namespace App\Listeners;

use App\Events\AddUpdateProductParameter;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Product;

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
     * @param  AddUpdateProductParameter  $event
     * @return void
     */
    public function handle(AddUpdateProductParameter $event)
    {
        $productsArray = array();
        $productBindingArray = array();
        $products = Product::get();
        foreach ($products as $product) {
            $productsArray[$product->id]['title'] = $product->title;
            $productsArray[$product->id]['status'] = $product->status;
            $productBindingArray[$product->id] = array();
        }        
        Storage::put('public/json/products.json', json_encode($productsArray));
        $productBindings = DB::table('parameters')
            ->join('parameter_bindings', 'parameters.id', '=', 'parameter_bindings.parameter_id')
            ->select('parameter_bindings.product_id', 'parameter_bindings.type', 'parameters.title', 'parameters.status', 'parameters.for_type', 'parameters.id')
            ->orderBy('product_id')
            ->get();
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
}
