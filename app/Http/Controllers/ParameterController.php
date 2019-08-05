<?php

namespace App\Http\Controllers;

use App\Parameter;
use App\Product;
use App\ParameterBinding;
use App\Http\Requests\ParameterRequest;
use App\Events\AddUpdateJSONFile;

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
                $products = $products->pluck('title')->all();
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
        $is_date = (isset($request->is_date)) ? 1 : 0;
        $parameter = Parameter::create([
            'title' => $request->title,
            'for_type' => $request->for_type,
            'is_date' => $is_date
        ]);

        $parameter->addParameterBinding($request->products);
        
        event(new AddUpdateJSONFile('productBinding'));
        return redirect()->route($this->routePrefix . 'index')
                ->with('success', 'Parameter added successfully');
    }

    public function changeStatus(parameter $parameter)
    {

        $parameter->status = $parameter->status == 1 ? 0 : 1;
        $parameter->save();
        return redirect()->route($this->routePrefix . 'index')
                ->with('success', 'Parameter status changed successfully');
    }
}
