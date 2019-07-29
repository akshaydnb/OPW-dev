<?php

namespace App\Http\Controllers;

use App\Branch;
use Illuminate\Http\Request;

class BranchController extends Controller
{
	private $viewPrefix = 'master.branch.';
    private $routePrefix = 'branch.';  

    public function index($owners_type, $owners_id){
    	$branches = Branch::where([
    		['owners_type', 'App\\'.$owners_type],
    		['owners_id', $owners_id]
    	])->orderBy('created_at', 'desc')->get();
        return view($this->viewPrefix . 'index', compact('branches'));
    }

    public function changeStatus($id)
    {
        $Branch = Branch::findOrFail($id);
        $Branch->status = $Branch->status == 1 ? 0 : 1;
        $Branch->save();
        return redirect()->route($this->routePrefix . 'index')
                ->with('success', 'Branch status changed successfully');
    }
}
