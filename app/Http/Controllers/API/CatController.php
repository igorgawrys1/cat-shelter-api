<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;

use App\Models\Cat;
use App\Http\Requests\CatRequest;
use App\Http\Controllers\Controller;

class CatController extends Controller
{
    public function index()
    {
        return Cat::all();
    }

    public function store(CatRequest $request)
    {
        try {
            $cat = Cat::create($request->all());

            return response()->json($cat, 201);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function show(Cat $cat)
    {
        return $cat;
    }

    public function update(CatRequest $request, Cat $cat)
    {
        try {
            $cat->update($request->all());

            return response()->json($cat, 200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function destroy(Cat $cat)
    {
        try {
            $cat->delete();

            return response()->json(null, 204);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
