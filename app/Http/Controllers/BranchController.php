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
        return view($this->viewPrefix . 'index', compact('branches', 'owners_type', 'owners_id' ));
    }

    public function create($owners_type, $owners_id)
    {
        return view($this->viewPrefix . 'create');
    }

    public function store($owners_type, $owners_id)
    {
        return view($this->viewPrefix . 'create');
    }

    public function changeStatus($owners_type, $owners_id, $id)
    {
        $branch = Branch::findOrFail($id);
        $branch->status = $branch->status == 1 ? 0 : 1;
        $branch->save();
        return back()->with('success', 'Branch status changed successfully');
    }
}
