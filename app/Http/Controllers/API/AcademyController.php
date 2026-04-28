<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\AcademyCourse;
use App\Models\Enrollment;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class AcademyController extends Controller
{
    public function index()
    {
        $courses = AcademyCourse::latest()->paginate(20);
        return response()->json(['status' => 'success', 'data' => $courses]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'duration' => 'nullable|string',
        ]);

        if ($validator->fails()) return response()->json(['errors' => $validator->errors()], 422);

        $course = AcademyCourse::create([
            'id' => (string) Str::uuid(),
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'description' => $request->description,
            'duration' => $request->duration,
            'status' => 'active',
        ]);

        return response()->json(['status' => 'success', 'data' => $course], 201);
    }

    public function show($id)
    {
        $course = AcademyCourse::with('enrollments.user')->find($id);
        if (!$course) return response()->json(['message' => 'Course not found'], 404);
        return response()->json(['status' => 'success', 'data' => $course]);
    }

    public function update(Request $request, $id)
    {
        $course = AcademyCourse::find($id);
        if (!$course) return response()->json(['message' => 'Course not found'], 404);
        
        if ($request->has('title')) {
            $request->merge(['slug' => Str::slug($request->title)]);
        }
        
        $course->update($request->all());
        return response()->json(['status' => 'success', 'data' => $course]);
    }

    public function destroy($id)
    {
        $course = AcademyCourse::find($id);
        if (!$course) return response()->json(['message' => 'Course not found'], 404);
        $course->delete();
        return response()->json(['status' => 'success', 'message' => 'Course deleted']);
    }

    public function enroll(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id',
        ]);

        if ($validator->fails()) return response()->json(['errors' => $validator->errors()], 422);

        $enrollment = Enrollment::create([
            'id' => (string) Str::uuid(),
            'user_id' => $request->user_id,
            'academy_course_id' => $id,
            'status' => 'active',
            'progress' => 0,
        ]);

        return response()->json(['status' => 'success', 'message' => 'Enrolled successfully', 'data' => $enrollment]);
    }
}

