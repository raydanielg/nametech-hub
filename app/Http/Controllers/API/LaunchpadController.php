<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Program;
use App\Models\ProgramApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class LaunchpadController extends Controller
{
    public function index()
    {
        $programs = Program::where('type', 'Launchpad')->latest()->paginate(20);
        return response()->json(['status' => 'success', 'data' => $programs]);
    }

    public function applications()
    {
        $applications = ProgramApplication::with(['user', 'program'])->latest()->paginate(20);
        return response()->json(['status' => 'success', 'data' => $applications]);
    }

    public function apply(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'program_id' => 'required|exists:programs,id',
            'startup_name' => 'required|string',
            'pitch_deck_url' => 'nullable|url',
        ]);

        if ($validator->fails()) return response()->json(['errors' => $validator->errors()], 422);

        $application = ProgramApplication::create([
            'id' => (string) Str::uuid(),
            'user_id' => auth()->id(),
            'program_id' => $request->program_id,
            'startup_name' => $request->startup_name,
            'pitch_deck_url' => $request->pitch_deck_url,
            'status' => 'pending',
        ]);

        return response()->json(['status' => 'success', 'data' => $application], 201);
    }
}

