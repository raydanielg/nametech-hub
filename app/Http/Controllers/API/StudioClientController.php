<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\StudioClient;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class StudioClientController extends Controller
{
    public function index()
    {
        $clients = StudioClient::latest()->paginate(20);
        return response()->json(['status' => 'success', 'data' => $clients]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:studio_clients,email',
            'company_name' => 'nullable|string|max:255',
        ]);

        if ($validator->fails()) return response()->json(['errors' => $validator->errors()], 422);

        $client = StudioClient::create(array_merge($request->all(), ['id' => (string) Str::uuid()]));
        return response()->json(['status' => 'success', 'data' => $client], 201);
    }

    public function show($id)
    {
        $client = StudioClient::with('projects')->find($id);
        if (!$client) return response()->json(['message' => 'Client not found'], 404);
        return response()->json(['status' => 'success', 'data' => $client]);
    }

    public function update(Request $request, $id)
    {
        $client = StudioClient::find($id);
        if (!$client) return response()->json(['message' => 'Client not found'], 404);
        $client->update($request->all());
        return response()->json(['status' => 'success', 'data' => $client]);
    }

    public function destroy($id)
    {
        $client = StudioClient::find($id);
        if (!$client) return response()->json(['message' => 'Client not found'], 404);
        $client->delete();
        return response()->json(['status' => 'success', 'message' => 'Client deleted']);
    }
}

