<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Branch;
use App\ContactPerson;
use App\Http\Requests\CustomerRequest;
use App\Events\AddUpdateJSONFile;

class CustomerController extends Controller
{
    private $viewPrefix = 'master.customer.';
    private $routePrefix = 'customer.';

    public function index()
    {
        $customers = Customer::with('branches')->orderBy('created_at', 'desc')->get();
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

        $branch = $customer->branches()->create([
            'shop_name' => $request->shop_name,
            'branch_name' => $request->branch_name,
            'landline_number' => $request->landline_number,
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'gst_number' => $request->gst_number,
            'gst_type' => $request->gst_type,
        ]);

        for($i = 0; $i < $request->currentCP; $i++){
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

        $customer->update([
            'billing_branch_id' => $branch->id,
            'shipping_branch_id' => $branch->id,
        ]);
        event(new AddUpdateJSONFile('customerBinding'));
        return redirect()->route($this->routePrefix . 'index')
                ->with('success', 'Customer added successfully');
    }

    public function edit(customer $customer)
    {
        return view($this->viewPrefix . 'edit', compact('customer'));
    }

    public function update(CustomerRequest $request, customer $customer)
    {
        $customer->update([
            'name' => $request->name,
            'defaultBillingBranch' => $request->defaultBillingBranch,
            'defaultShippingBranch' => $request->defaultShippingBranch,
        ]);

        return redirect()->route($this->routePrefix . 'index')
                ->with('success', 'Customer updated successfully');
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
