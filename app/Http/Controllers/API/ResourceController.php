<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Resource;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class ResourceController extends Controller
{
    public function index()
    {
        $resources = Resource::latest()->paginate(20);
        return response()->json(['status' => 'success', 'data' => $resources]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'type' => 'required|string',
            'file_url' => 'required|string',
        ]);

        if ($validator->fails()) return response()->json(['errors' => $validator->errors()], 422);

        $resource = Resource::create(array_merge($request->all(), ['id' => (string) Str::uuid()]));
        return response()->json(['status' => 'success', 'data' => $resource], 201);
    }

    public function show($id)
    {
        $resource = Resource::find($id);
        if (!$resource) return response()->json(['message' => 'Resource not found'], 404);
        return response()->json(['status' => 'success', 'data' => $resource]);
    }

    public function update(Request $request, $id)
    {
        $resource = Resource::find($id);
        if (!$resource) return response()->json(['message' => 'Resource not found'], 404);
        $resource->update($request->all());
        return response()->json(['status' => 'success', 'data' => $resource]);
    }

    public function destroy($id)
    {
        $resource = Resource::find($id);
        if (!$resource) return response()->json(['message' => 'Resource not found'], 404);
        $resource->delete();
        return response()->json(['status' => 'success', 'message' => 'Resource deleted']);
    }
}

