<?php

namespace App\Http\Controllers;

use App\Product;
use App\Parameter;
use App\ParameterBinding;
use App\Http\Requests\ProductRequest;
use App\Events\AddUpdateJSONFile;

class ProductController extends Controller
{

    private $viewPrefix = 'master.product.';
    private $routePrefix = 'product.';

    public function index()
    {
        $products = Product::with('parameterBindings')->orderBy('created_at', 'desc')->get();
        foreach ($products as $product) {
            $tempParameterIds = $product->parameterBindings->pluck('parameter_id')->all();
            $parameters = '';
            if(count($tempParameterIds) > 0){
                $parameters = Parameter::whereIn('id',$tempParameterIds)->orderBy('title');
                $parameters =$parameters->pluck('title')->all();
                $parameters = implode(', ',$parameters);
            }
            $product->displayParameter = $parameters;
        }
        return view($this->viewPrefix . 'index', compact('products'));
    }

    public function create()
    {
        $parameters = Parameter::orderBy('title')->pluck('title', 'id');
        return view($this->viewPrefix . 'create', compact('parameters'));
    }

    public function store(ProductRequest $request)
    {
        $product = Product::create([
            'title' => $request->title
        ]);
        if(isset($request->parameters) && count($request->parameters) > 0){
            foreach ($request->parameters as $parameter) {
                if($parameter == $request->grid_column || $parameter == $request->grid_row){
                    continue;
                }else{
                     ParameterBinding::create([
                        'product_id' => $product->id,
                        'parameter_id' => $parameter
                    ]);
                }
            }
        }
        if($request->grid_column > 0){
            ParameterBinding::create([
                'product_id' => $product->id,
                'parameter_id' => $request->grid_column,
                'type' => 1,
            ]);
        }
        if($request->grid_row > 0){
            ParameterBinding::create([
                'product_id' => $product->id,
                'parameter_id' => $request->grid_row,
                'type' => 2,
            ]);
        }
        event(new AddUpdateJSONFile('productBinding'));
        return redirect()->route($this->routePrefix . 'index')
                ->with('success', 'Product added successfully');
    }

    public function changeStatus($id)
    {
        $product = Product::findOrFail($id);
        $product->status = $product->status == 1 ? 0 : 1;
        $product->save();
        return redirect()->route($this->routePrefix . 'index')
                ->with('success', 'Product status changed successfully');
    }
}
