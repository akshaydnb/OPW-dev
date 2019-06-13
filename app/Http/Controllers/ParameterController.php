<?php

namespace App\Http\Controllers;

use App\Parameter;
use App\Product;
use App\ParameterBinding;
use App\Http\Requests\ParameterRequest;
use App\Events\AddUpdateProductParameter;

class ParameterController extends Controller
{
    private $viewPrefix = 'master.parameter.';
    private $routePrefix = 'parameter.';

    public function index()
    {
        $parameters = Parameter::with('parameterBindings')->orderBy('created_at', 'desc')->get();
        foreach ($parameters as $parameter) {
            $tempProductIDs = $parameter->parameterBindings->pluck('product_id')->all();
            $products = '';
            if(count($tempProductIDs) > 0){
                $products = Product::whereIn('id',$tempProductIDs)->orderBy('title');
                $products =$products->pluck('title')->all();
                $products = implode(', ',$products);
                $parameter->displayProduct = $products;
            }
        }
        return view($this->viewPrefix . 'index', compact('parameters'));
    }

    public function create()
    {
        $products = Product::where('status', '=', 1)->orderBy('title')->pluck('title', 'id');
        return view($this->viewPrefix . 'create', compact('products'));
    }

    public function store(ParameterRequest $request)
    {
        $parameter = Parameter::create([
            'title' => $request->title,
            'for_type' => $request->for_type
        ]);
        if(isset($request->products) && count($request->products) > 0){
            foreach ($request->products as $product) {
                ParameterBinding::create([
                    'product_id' => $product,
                    'parameter_id' => $parameter->id
                ]);
            }
        }
        event(new AddUpdateProductParameter());
        return redirect()->route($this->routePrefix . 'index')
                ->with('success', 'Parameter added successfully');
    }

    public function changeStatus($id)
    {
        $parameter = Parameter::findOrFail($id);
        $parameter->status = $parameter->status == 1 ? 0 : 1;
        $parameter->save();
        return redirect()->route($this->routePrefix . 'index')
                ->with('success', 'Parameter status changed successfully');
    }
}
