<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class InvoiceController extends Controller
{
    public function index()
    {
        $invoices = Invoice::with('user')->latest()->paginate(20);
        return response()->json(['status' => 'success', 'data' => $invoices]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id',
            'total_amount' => 'required|numeric|min:0',
            'type' => 'required|string',
        ]);

        if ($validator->fails()) return response()->json(['errors' => $validator->errors()], 422);

        $invoice = Invoice::create([
            'id' => (string) Str::uuid(),
            'invoice_number' => 'INV-' . strtoupper(Str::random(8)),
            'user_id' => $request->user_id,
            'total_amount' => $request->total_amount,
            'type' => $request->type,
            'status' => 'pending',
        ]);

        return response()->json(['status' => 'success', 'data' => $invoice], 201);
    }

    public function show($id)
    {
        $invoice = Invoice::with(['user', 'payments'])->find($id);
        if (!$invoice) return response()->json(['message' => 'Invoice not found'], 404);
        return response()->json(['status' => 'success', 'data' => $invoice]);
    }

    public function update(Request $request, $id)
    {
        $invoice = Invoice::find($id);
        if (!$invoice) return response()->json(['message' => 'Invoice not found'], 404);
        $invoice->update($request->all());
        return response()->json(['status' => 'success', 'data' => $invoice]);
    }

    public function destroy($id)
    {
        $invoice = Invoice::find($id);
        if (!$invoice) return response()->json(['message' => 'Invoice not found'], 404);
        $invoice->delete();
        return response()->json(['status' => 'success', 'message' => 'Invoice deleted']);
    }

    public function pay(Request $request, $id)
    {
        $invoice = Invoice::find($id);
        if (!$invoice) return response()->json(['message' => 'Invoice not found'], 404);

        $validator = Validator::make($request->all(), [
            'amount' => 'required|numeric|min:0',
            'payment_method' => 'required|string',
        ]);

        if ($validator->fails()) return response()->json(['errors' => $validator->errors()], 422);

        $payment = Payment::create([
            'id' => (string) Str::uuid(),
            'invoice_id' => $id,
            'amount' => $request->amount,
            'payment_method' => $request->payment_method,
            'status' => 'completed',
        ]);

        $paidAmount = $invoice->payments()->where('status', 'completed')->sum('amount');
        if ($paidAmount >= $invoice->total_amount) {
            $invoice->update(['status' => 'paid']);
        }

        return response()->json(['status' => 'success', 'message' => 'Payment recorded', 'data' => $payment]);
    }
}

