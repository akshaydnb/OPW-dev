<?php

namespace App\Http\Controllers;

use App\Supplier;
use App\Branch;
use App\ContactPerson;
use App\Http\Requests\SupplierRequest;
use App\Events\AddUpdateJSONFile;

class SupplierController extends Controller
{
    private $viewPrefix = 'master.supplier.';
    private $routePrefix = 'supplier.';

    public function index()
    {
        $suppliers = Supplier::with('branches')->orderBy('created_at', 'desc')->get();
        return view($this->viewPrefix . 'index', compact('suppliers'));
    }

    public function create()
    {
        return view($this->viewPrefix . 'create');
    }

    public function store(SupplierRequest $request)
    {
        $supplier = Supplier::create([
            'name' => $request->name
        ]);

        $branch = $supplier->branches()->create([
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

        $supplier->update([
            'billing_branch_id' => $branch->id,
            'shipping_branch_id' => $branch->id,
        ]);
        event(new AddUpdateJSONFile('supplierBinding'));
        return redirect()->route($this->routePrefix . 'index')
                ->with('success', 'Supplier added successfully');
    }

    public function edit(supplier $supplier)
    {
        return view($this->viewPrefix . 'edit', compact('supplier'));
    }

    public function update(SupplierRequest $request, supplier $supplier)
    {
        $supplier->update([
            'name' => $request->name,
            'defaultBillingBranch' => $request->defaultBillingBranch,
            'defaultShippingBranch' => $request->defaultShippingBranch,
        ]);

        return redirect()->route($this->routePrefix . 'index')
                ->with('success', 'Supplier updated successfully');
    }

    public function show(supplier $supplier)
    {
        $branches = Branch::where([
                                ['owners_id', '=', $supplier->id],
                                ['owners_type', '=', 'Supplier'],
                            ])->orderBy('created_at', 'desc')->get();
        return view($this->viewPrefix . 'branch.index', compact('branches'));
    }
}
