<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Startup;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class StartupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $startups = Startup::with(['founder', 'cohort'])->latest()->paginate(20);
        return response()->json([
            'status' => 'success',
            'data' => $startups
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'founder_id' => 'required|exists:users,id',
            'industry' => 'nullable|string',
            'website' => 'nullable|url',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $startup = Startup::create([
            'id' => (string) Str::uuid(),
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'description' => $request->description,
            'founder_id' => $request->founder_id,
            'primary_contact_user_id' => $request->founder_id,
            'industry' => $request->industry,
            'website' => $request->website,
            'status' => 'pending',
            'progress' => 0,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Startup created successfully',
            'data' => $startup
        ], 210);
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $startup = Startup::with(['founder', 'cohort', 'milestones', 'members'])->find($id);

        if (!$startup) {
            return response()->json(['message' => 'Startup not found'], 404);
        }

        return response()->json([
            'status' => 'success',
            'data' => $startup
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $startup = Startup::find($id);

        if (!$startup) {
            return response()->json(['message' => 'Startup not found'], 404);
        }

        $validator = Validator::make($request->all(), [
            'name' => 'sometimes|string|max:255',
            'status' => 'sometimes|in:pending,active,graduated,inactive',
            'progress' => 'sometimes|integer|min:0|max:100',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        if ($request->has('name')) {
            $request->merge(['slug' => Str::slug($request->name)]);
        }

        $startup->update($request->all());

        return response()->json([
            'status' => 'success',
            'message' => 'Startup updated successfully',
            'data' => $startup
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $startup = Startup::find($id);

        if (!$startup) {
            return response()->json(['message' => 'Startup not found'], 404);
        }

        $startup->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Startup deleted successfully'
        ]);
    }
}
