<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Milestone;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class MilestoneController extends Controller
{
    public function index()
    {
        $milestones = Milestone::with('startup')->latest()->paginate(20);
        return response()->json(['status' => 'success', 'data' => $milestones]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'startup_id' => 'required|exists:startups,id',
            'title' => 'required|string|max:255',
            'due_date' => 'nullable|date',
        ]);

        if ($validator->fails()) return response()->json(['errors' => $validator->errors()], 422);

        $milestone = Milestone::create(array_merge($request->all(), ['id' => (string) Str::uuid(), 'status' => 'pending']));
        return response()->json(['status' => 'success', 'data' => $milestone], 201);
    }

    public function show($id)
    {
        $milestone = Milestone::with('startup')->find($id);
        if (!$milestone) return response()->json(['message' => 'Milestone not found'], 404);
        return response()->json(['status' => 'success', 'data' => $milestone]);
    }

    public function update(Request $request, $id)
    {
        $milestone = Milestone::find($id);
        if (!$milestone) return response()->json(['message' => 'Milestone not found'], 404);
        $milestone->update($request->all());
        return response()->json(['status' => 'success', 'data' => $milestone]);
    }

    public function destroy($id)
    {
        $milestone = Milestone::find($id);
        if (!$milestone) return response()->json(['message' => 'Milestone not found'], 404);
        $milestone->delete();
        return response()->json(['status' => 'success', 'message' => 'Milestone deleted']);
    }
}

