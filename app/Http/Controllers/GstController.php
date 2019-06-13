<?php

namespace App\Http\Controllers;

use App\Gst;
use App\Product;
use App\Http\Requests\GstRequest;
use Response;

class GstController extends Controller
{
    private $viewPrefix = 'master.gst.';
    private $routePrefix = 'gst.';    

    public function index()
    {
        $HSNCodes = Gst::orderBy('created_at', 'desc')->get();
        foreach ($HSNCodes as $HSNCode) {
            $productIds = explode('#', $HSNCode->products . '0');
            $products = '';
            if(count($productIds) > 0){
                $products = Product::whereIn('id',$productIds)->orderBy('title');
                $products =$products->pluck('title')->all();
                $products = implode(', ',$products);
            }
            $HSNCode->products = $products;
        }
        return view($this->viewPrefix . 'index', compact('HSNCodes'));
    }

    public function create()
    {
        $products = Product::where('status', 1)->orderBy('title')->pluck('title', 'id');
        return view($this->viewPrefix . 'create', compact('products'));
    }

    public function store(GstRequest $request)
    {
        Gst::create([
            'hsn_code' => $request->hsn_code,
            'gst_percentage' => $request->gst_percentage,
            'products' => $request->products,
        ]);

        return redirect()->route($this->routePrefix . 'index')
                ->with('success', 'HSN Code added successfully');
    }

    public function edit(Gst $gst)
    {
        $products = Product::where('status', 1)->orderBy('title')->pluck('title', 'id');
        return view($this->viewPrefix . 'edit', compact('gst', 'products'));
    }

    public function update(GstRequest $request, Gst $gst)
    {
        $gst->update([
            'hsn_code' => $request->hsn_code,
            'gst_percentage' => $request->gst_percentage,
            'products' => $request->products,
        ]);
        return redirect()->route($this->routePrefix . 'index')
                ->with('success', 'HSN Code updated successfully');
    }

    public function detail($hsn_code)
    {
        $HSNCode = Gst::where('hsn_code', $hsn_code)->first();
        if(isset($HSNCode->id) && $HSNCode->id > 0)
            return $HSNCode->id . "#" .$HSNCode->gst_percentage;
        else
            return 'false';
    }

    public function changeStatus($id)
    {
        $Gst = Gst::findOrFail($id);
        $Gst->status = $Gst->status == 1 ? 0 : 1;
        $Gst->save();
        return redirect()->route($this->routePrefix . 'index')
                ->with('success', 'HSN Code status changed successfully');
    }

    public function autosuggest($hsn_code)
    {
        $HSNCodes = Gst::where('hsn_code', 'like', '%' . $hsn_code . '%')->
                        orderBy('hsn_code', 'asc')->
                        select('id', 'hsn_code')->get();
        $results = array();
        foreach ($HSNCodes as $HSNCode)
        {
            $results[] = [ 'id' => $HSNCode->id, 'value' => $HSNCode->hsn_code ];
        }
        return Response::json($results);
    }
}
