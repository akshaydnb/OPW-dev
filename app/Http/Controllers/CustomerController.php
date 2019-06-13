<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Branch;
use App\contactPerson;
use App\Http\Requests\CustomerRequest;

class CustomerController extends Controller
{
    private $viewPrefix = 'master.customer.';
    private $routePrefix = 'customer.';

    public function index()
    {
        $customers = Customer::with('branch')->orderBy('created_at', 'desc')->get();
        return view($this->viewPrefix . 'index', compact('customers'));
    }

    public function create()
    {
        return view($this->viewPrefix . 'create', compact('products'));
    }

    public function store(BarcodeRequest $request)
    {
        $parameterDetail = '';

        if($request->inputNames != ''){

            $parameterDetailArray = array();
            $inputs = explode('#', $request->inputNames);

            for($i = 1; $i < count($inputs); $i++){

                if($request->input($inputs[$i]) != null){

                    $id = app(ParameterValueController::class)->
                            checkAndStore($inputs[$i], $request->input($inputs[$i]));

                    $parameterDetailArray[$inputs[$i]]['value'] = $request->input($inputs[$i]);
                    $parameterDetailArray[$inputs[$i]]['id'] = $id;

                }

            }

            $parameterDetail = json_encode($parameterDetailArray);
        }

        if($request->gst_id > 0){
            $gst_id = $request->gst_id;
        }else{
            $gst = Gst::create([
                'hsn_code' => $request->hsn_code,
                'gst_percentage' => $request->gst_percentage,
            ]);
            $gst_id = $gst->id;
        }

        Barcode::create([
            'barcode' => $request->barcode,
            'gst_id' => $gst_id,
            'product_id' => $request->product_id,
            'normal_sales_price' => $request->normal_sales_price,
            'discount_sales_price' => $request->discount_sales_price,
            'parameterDetail' => $parameterDetail,
        ]);

        return redirect()->route($this->routePrefix . 'index')
                ->with('success', 'HSN Code added successfully');
    }

    public function edit(barcode $barcode)
    {
        $barcode->hsn_code = $barcode->gst->hsn_code;
        return view($this->viewPrefix . 'edit', compact('barcode'));
    }

    public function update(BarcodeRequest $request, barcode $barcode)
    {
        $parameterDetail = '';

        if($request->inputNames != ''){

            $parameterDetailArray = array();
            $inputs = explode('#', $request->inputNames);

            for($i = 1; $i < count($inputs); $i++){

                if($request->input($inputs[$i]) != null){

                    $id = app(ParameterValueController::class)->
                            checkAndStore($inputs[$i], $request->input($inputs[$i]));

                    $parameterDetailArray[$inputs[$i]]['value'] = $request->input($inputs[$i]);
                    $parameterDetailArray[$inputs[$i]]['id'] = $id;

                }

            }

            $parameterDetail = json_encode($parameterDetailArray);
        }

        if($request->gst_id > 0){
            $gst_id = $request->gst_id;
        }else{
            $gst = Gst::create([
                'hsn_code' => $request->hsn_code,
                'gst_percentage' => $request->gst_percentage,
            ]);
            $gst_id = $gst->id;
        }

        $barcode->update([
            'barcode' => $request->barcode,
            'gst_id' => $gst_id,
            'product_id' => $request->product_id,
            'normal_sales_price' => $request->normal_sales_price,
            'discount_sales_price' => $request->discount_sales_price,
            'parameterDetail' => $parameterDetail,
        ]);

        return redirect()->route($this->routePrefix . 'index')
                ->with('success', 'Barcode updated successfully');
    }
}
