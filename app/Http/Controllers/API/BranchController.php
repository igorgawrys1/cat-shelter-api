<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;

use App\Models\Branch;
use App\Http\Requests\BranchRequest;
use App\Http\Controllers\Controller;

class BranchController extends Controller
{
    public function index()
    {
        return Branch::all();
    }

    public function store(BranchRequest $request)
    {
        try {
            $branch = Branch::create($request->all());

            return response()->json($branch, 201);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function show(Branch $branch)
    {
        return $branch;
    }

    public function update(BranchRequest $request, Branch $branch)
    {
        try {
            $branch->update($request->all());

            return response()->json($branch, 200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function destroy(Branch $branch)
    {
        try {
            $branch->delete();

            return response()->json(null, 204);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
