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
        return view($this->viewPrefix . 'create');
    }

    public function store(CustomerRequest $request)
    {
        $customer = Customer::create([
            'name' => $request->name
        ]);

        $branch = Branch::create([
            'owners_id' => $customer->id,
            'owners_type' => 'Customer',
            'shop_name' => $request->shop_name,
            'branch_name' => $request->branch_name,
            'landline_number' => $request->landline_number,
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'gst_number' => $request->gst_number,
            'gst_type' => $request->gst_type,
        ]);
        for($i = 1; $i <= $request->shop_name; $i++){
            contactPerson::create([
                'branch_id' => $branch->id,
                'full_name' => $request->fullName[$i],
                'mobile_number' => $request->mobileNumber[$i],
                'whatsapp_number' => $request->whatsAppNumber[$i],
                'official_email' => $request->officialEmailID[$i],
                'personal_email' => $request->personalEmailID[$i],
                'designation' => $request->designation[$i],
            ]);
        }

        return redirect()->route($this->routePrefix . 'index')
                ->with('success', 'Customer added successfully');
    }

    public function edit(customer $customer)
    {
        return view($this->viewPrefix . 'edit', compact('customer'));
    }

    public function update(CustomerRequest $request, customer $customer)
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

    public function show(customer $customer)
    {
        $branches = Branch::where([
                                ['owners_id', '=', $customer->id],
                                ['owners_type', '=', 'Customer'],
                            ])->orderBy('created_at', 'desc')->get();
        return view($this->viewPrefix . 'branch.index', compact('branches'));
    }
}
