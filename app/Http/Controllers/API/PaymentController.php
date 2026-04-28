<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class PaymentController extends Controller
{
    public function index()
    {
        $payments = Payment::with('invoice.user')->latest()->paginate(20);
        return response()->json(['status' => 'success', 'data' => $payments]);
    }

    public function show($id)
    {
        $payment = Payment::with('invoice.user')->find($id);
        if (!$payment) return response()->json(['message' => 'Payment not found'], 404);
        return response()->json(['status' => 'success', 'data' => $payment]);
    }

    public function update(Request $request, $id)
    {
        $payment = Payment::find($id);
        if (!$payment) return response()->json(['message' => 'Payment not found'], 404);
        $payment->update($request->all());
        return response()->json(['status' => 'success', 'data' => $payment]);
    }

    public function destroy($id)
    {
        $payment = Payment::find($id);
        if (!$payment) return response()->json(['message' => 'Payment not found'], 404);
        $payment->delete();
        return response()->json(['status' => 'success', 'message' => 'Payment deleted']);
    }
}

