<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Mentor;
use App\Models\MentorAssignment;
use App\Models\MentorSession;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class MentorController extends Controller
{
    public function index()
    {
        $mentors = Mentor::with('user')->latest()->paginate(20);
        return response()->json(['status' => 'success', 'data' => $mentors]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id|unique:mentors,user_id',
            'expertise_areas' => 'required|array',
            'years_of_experience' => 'required|integer',
        ]);

        if ($validator->fails()) return response()->json(['errors' => $validator->errors()], 422);

        $mentor = Mentor::create(array_merge($request->all(), ['id' => (string) Str::uuid()]));
        return response()->json(['status' => 'success', 'data' => $mentor], 201);
    }

    public function show($id)
    {
        $mentor = Mentor::with(['user', 'assignments.startup'])->find($id);
        if (!$mentor) return response()->json(['message' => 'Mentor not found'], 404);
        return response()->json(['status' => 'success', 'data' => $mentor]);
    }

    public function update(Request $request, $id)
    {
        $mentor = Mentor::find($id);
        if (!$mentor) return response()->json(['message' => 'Mentor not found'], 404);
        $mentor->update($request->all());
        return response()->json(['status' => 'success', 'data' => $mentor]);
    }

    public function destroy($id)
    {
        $mentor = Mentor::find($id);
        if (!$mentor) return response()->json(['message' => 'Mentor not found'], 404);
        $mentor->delete();
        return response()->json(['status' => 'success', 'message' => 'Mentor deleted']);
    }
}

