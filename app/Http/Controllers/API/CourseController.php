<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Enrollment;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::latest()->paginate(20);
        return response()->json(['status' => 'success', 'data' => $courses]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        if ($validator->fails()) return response()->json(['errors' => $validator->errors()], 422);

        $course = Course::create([
            'id' => (string) Str::uuid(),
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'description' => $request->description,
            'status' => 'active',
        ]);

        return response()->json(['status' => 'success', 'data' => $course], 201);
    }

    public function show($id)
    {
        $course = Course::find($id);
        if (!$course) return response()->json(['message' => 'Course not found'], 404);
        return response()->json(['status' => 'success', 'data' => $course]);
    }

    public function update(Request $request, $id)
    {
        $course = Course::find($id);
        if (!$course) return response()->json(['message' => 'Course not found'], 404);
        $course->update($request->all());
        return response()->json(['status' => 'success', 'data' => $course]);
    }

    public function destroy($id)
    {
        $course = Course::find($id);
        if (!$course) return response()->json(['message' => 'Course not found'], 404);
        $course->delete();
        return response()->json(['status' => 'success', 'message' => 'Course deleted']);
    }
}

