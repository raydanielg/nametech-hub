<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class ReportController extends Controller
{
    public function index()
    {
        $reports = Report::latest()->paginate(20);
        return response()->json(['status' => 'success', 'data' => $reports]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'type' => 'required|string',
            'data' => 'required|array',
        ]);

        if ($validator->fails()) return response()->json(['errors' => $validator->errors()], 422);

        $report = Report::create([
            'id' => (string) Str::uuid(),
            'title' => $request->title,
            'type' => $request->type,
            'data' => $request->data,
            'generated_by' => auth()->id(),
        ]);

        return response()->json(['status' => 'success', 'data' => $report], 201);
    }

    public function show($id)
    {
        $report = Report::find($id);
        if (!$report) return response()->json(['message' => 'Report not found'], 404);
        return response()->json(['status' => 'success', 'data' => $report]);
    }

    public function destroy($id)
    {
        $report = Report::find($id);
        if (!$report) return response()->json(['message' => 'Report not found'], 404);
        $report->delete();
        return response()->json(['status' => 'success', 'message' => 'Report deleted']);
    }
}

