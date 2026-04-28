<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Investor;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class InvestorController extends Controller
{
    public function index()
    {
        $investors = Investor::with('user')->latest()->paginate(20);
        return response()->json(['status' => 'success', 'data' => $investors]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id|unique:investors,user_id',
            'investor_type' => 'required|string',
            'investment_focus' => 'required|array',
        ]);

        if ($validator->fails()) return response()->json(['errors' => $validator->errors()], 422);

        $investor = Investor::create(array_merge($request->all(), ['id' => (string) Str::uuid()]));
        return response()->json(['status' => 'success', 'data' => $investor], 201);
    }

    public function show($id)
    {
        $investor = Investor::with('user')->find($id);
        if (!$investor) return response()->json(['message' => 'Investor not found'], 404);
        return response()->json(['status' => 'success', 'data' => $investor]);
    }

    public function update(Request $request, $id)
    {
        $investor = Investor::find($id);
        if (!$investor) return response()->json(['message' => 'Investor not found'], 404);
        $investor->update($request->all());
        return response()->json(['status' => 'success', 'data' => $investor]);
    }

    public function destroy($id)
    {
        $investor = Investor::find($id);
        if (!$investor) return response()->json(['message' => 'Investor not found'], 404);
        $investor->delete();
        return response()->json(['status' => 'success', 'message' => 'Investor deleted']);
    }
}

