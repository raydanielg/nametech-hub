<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Program;
use App\Models\ProgramApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class ScaleController extends Controller
{
    public function index()
    {
        $programs = Program::where('type', 'Scale')->latest()->paginate(20);
        return response()->json(['status' => 'success', 'data' => $programs]);
    }

    public function apply(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'program_id' => 'required|exists:programs,id',
            'startup_name' => 'required|string',
        ]);

        if ($validator->fails()) return response()->json(['errors' => $validator->errors()], 422);

        $application = ProgramApplication::create([
            'id' => (string) Str::uuid(),
            'user_id' => auth()->id(),
            'program_id' => $request->program_id,
            'startup_name' => $request->startup_name,
            'status' => 'pending',
        ]);

        return response()->json(['status' => 'success', 'data' => $application], 201);
    }
}

