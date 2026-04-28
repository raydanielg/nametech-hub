<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\StudioProject;
use App\Models\ProjectMilestone;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class StudioProjectController extends Controller
{
    public function index()
    {
        $projects = StudioProject::with(['client', 'developers'])->latest()->paginate(20);
        return response()->json(['status' => 'success', 'data' => $projects]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'client_id' => 'required|exists:studio_clients,id',
            'start_date' => 'required|date',
        ]);

        if ($validator->fails()) return response()->json(['errors' => $validator->errors()], 422);

        $project = StudioProject::create(array_merge($request->all(), ['id' => (string) Str::uuid()]));
        return response()->json(['status' => 'success', 'data' => $project], 201);
    }

    public function show($id)
    {
        $project = StudioProject::with(['client', 'developers', 'milestones'])->find($id);
        if (!$project) return response()->json(['message' => 'Project not found'], 404);
        return response()->json(['status' => 'success', 'data' => $project]);
    }

    public function update(Request $request, $id)
    {
        $project = StudioProject::find($id);
        if (!$project) return response()->json(['message' => 'Project not found'], 404);
        $project->update($request->all());
        return response()->json(['status' => 'success', 'data' => $project]);
    }

    public function destroy($id)
    {
        $project = StudioProject::find($id);
        if (!$project) return response()->json(['message' => 'Project not found'], 404);
        $project->delete();
        return response()->json(['status' => 'success', 'message' => 'Project deleted']);
    }
}

