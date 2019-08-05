<?php

namespace App\Http\Controllers;

use App\Product;
use App\Parameter;
use App\ParameterBinding;
use App\Http\Requests\ProductRequest;
use App\Events\AddUpdateJSONFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    private $viewPrefix = 'master.product.';
    private $routePrefix = 'product.';

    public function index()
    {
        $products = json_decode(Storage::get('public/json/products.json'), true);
        $productBinding = json_decode(Storage::get('public/json/productBinding.json'), true);
        foreach ($products as $key => $value) {
            $products[$key]['id'] = $key;
            $products[$key]['displayParameter'] = implode(',', array_pluck($productBinding[$key], 'title'));
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

        $product->addParameterBinding($request->parameters, $request->grid_column, $request->grid_row);

        event(new AddUpdateJSONFile('productBinding'));
        return redirect()->route($this->routePrefix . 'index')
                ->with('success', 'Product added successfully');
    }

    public function changeStatus(product $product)
    {
        $product->status = $product->status == 1 ? 0 : 1;
        $product->save();
        event(new AddUpdateJSONFile('productBinding'));
        return redirect()->route($this->routePrefix . 'index')
                ->with('success', 'Product status changed successfully');
    }
}
