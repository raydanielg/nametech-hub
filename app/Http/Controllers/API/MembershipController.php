<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Membership;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class MembershipController extends Controller
{
    public function index()
    {
        $memberships = Membership::with('user')->latest()->paginate(20);
        return response()->json(['status' => 'success', 'data' => $memberships]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id',
            'plan_name' => 'required|string',
            'amount' => 'required|numeric',
        ]);

        if ($validator->fails()) return response()->json(['errors' => $validator->errors()], 422);

        $membership = Membership::create([
            'id' => (string) Str::uuid(),
            'user_id' => $request->user_id,
            'plan_name' => $request->plan_name,
            'amount' => $request->amount,
            'status' => 'active',
            'expires_at' => now()->addYear(),
        ]);

        return response()->json(['status' => 'success', 'data' => $membership], 201);
    }

    public function show($id)
    {
        $membership = Membership::with('user')->find($id);
        if (!$membership) return response()->json(['message' => 'Membership not found'], 404);
        return response()->json(['status' => 'success', 'data' => $membership]);
    }

    public function update(Request $request, $id)
    {
        $membership = Membership::find($id);
        if (!$membership) return response()->json(['message' => 'Membership not found'], 404);
        $membership->update($request->all());
        return response()->json(['status' => 'success', 'data' => $membership]);
    }

    public function destroy($id)
    {
        $membership = Membership::find($id);
        if (!$membership) return response()->json(['message' => 'Membership not found'], 404);
        $membership->delete();
        return response()->json(['status' => 'success', 'message' => 'Membership deleted']);
    }
}

