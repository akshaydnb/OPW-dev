<?php

namespace App\Http\Controllers;

use App\ParameterValue;
use App\Parameter;
use App\Http\Requests\ParameterValueRequest;
use Response;

class ParameterValueController extends Controller
{
    private $viewPrefix = 'master.parameter-value.';
    private $routePrefix = 'parameter-value.';

    public function index()
    {
        $parameterValues = ParameterValue::with('parameter')->orderBy('created_at', 'desc')->get();
        return view($this->viewPrefix . 'index', compact('parameterValues'));
    }

    public function create()
    {
        $parameters = Parameter::where('status', '=', 1)->orderBy('title', 'asc')->pluck('title', 'id');
        return view($this->viewPrefix . 'create', compact('parameters'));
    }

    public function store(ParameterValueRequest $request)
    {
        ParameterValue::create([
            'parameter_id' => $request->parameter_id,
            'value' => $request->value
        ]);
        return redirect()->route($this->routePrefix . 'index')
                ->with('success', 'Parameter value added successfully');
    }

    public function checkAndStore($parameter_id , $value)
    {
        $parameterValue = ParameterValue::where([
                                ['parameter_id', '=', $parameter_id],
                                ['value', '=', $value],
                            ])->select('id')->first();
        if($parameterValue){
            $parameterValue = ParameterValue::create([
                'parameter_id' => $parameter_id,
                'value' => $value
            ]);
        }
        return $parameterValue->id;
    }

    public function autosuggest($id, $search)
    {
        $parameterValues = ParameterValue::where([
                                ['parameter_id', '=', $id],
                                ['value', 'like', '%' . $search . '%'],
                            ])->orderBy('value', 'asc')->select('id', 'value')->get();
        foreach ($parameterValues as $parameterValue)
        {
            $results[] = [ 'id' => $parameterValue->id, 'value' => $parameterValue->value ];
        }
        return Response::json($results);
    }
}
