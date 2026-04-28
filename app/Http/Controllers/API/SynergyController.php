<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\SynergyLog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class SynergyController extends Controller
{
    public function index()
    {
        $logs = SynergyLog::with('user')->latest()->paginate(20);
        return response()->json(['status' => 'success', 'data' => $logs]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'action' => 'required|string',
            'details' => 'nullable|array',
        ]);

        if ($validator->fails()) return response()->json(['errors' => $validator->errors()], 422);

        $log = SynergyLog::create([
            'id' => (string) Str::uuid(),
            'user_id' => auth()->id(),
            'action' => $request->action,
            'details' => $request->details,
        ]);

        return response()->json(['status' => 'success', 'data' => $log], 201);
    }

    public function show($id)
    {
        $log = SynergyLog::with('user')->find($id);
        if (!$log) return response()->json(['message' => 'Log not found'], 404);
        return response()->json(['status' => 'success', 'data' => $log]);
    }

    public function destroy($id)
    {
        $log = SynergyLog::find($id);
        if (!$log) return response()->json(['message' => 'Log not found'], 404);
        $log->delete();
        return response()->json(['status' => 'success', 'message' => 'Log deleted']);
    }
}

