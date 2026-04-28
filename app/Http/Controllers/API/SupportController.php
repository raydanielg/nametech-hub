<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\SupportTicket;
use App\Models\TicketReply;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class SupportController extends Controller
{
    public function index()
    {
        $tickets = SupportTicket::with('user')->latest()->paginate(20);
        return response()->json(['status' => 'success', 'data' => $tickets]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
            'priority' => 'required|in:low,medium,high',
        ]);

        if ($validator->fails()) return response()->json(['errors' => $validator->errors()], 422);

        $ticket = SupportTicket::create([
            'id' => (string) Str::uuid(),
            'user_id' => auth()->id(),
            'subject' => $request->subject,
            'message' => $request->message,
            'priority' => $request->priority,
            'status' => 'open',
        ]);

        return response()->json(['status' => 'success', 'data' => $ticket], 201);
    }

    public function show($id)
    {
        $ticket = SupportTicket::with(['user', 'replies.user'])->find($id);
        if (!$ticket) return response()->json(['message' => 'Ticket not found'], 404);
        return response()->json(['status' => 'success', 'data' => $ticket]);
    }

    public function update(Request $request, $id)
    {
        $ticket = SupportTicket::find($id);
        if (!$ticket) return response()->json(['message' => 'Ticket not found'], 404);
        $ticket->update($request->all());
        return response()->json(['status' => 'success', 'data' => $ticket]);
    }

    public function reply(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'message' => 'required|string',
        ]);

        if ($validator->fails()) return response()->json(['errors' => $validator->errors()], 422);

        $reply = TicketReply::create([
            'id' => (string) Str::uuid(),
            'ticket_id' => $id,
            'user_id' => auth()->id(),
            'message' => $request->message,
        ]);

        return response()->json(['status' => 'success', 'data' => $reply], 201);
    }

    public function destroy($id)
    {
        $ticket = SupportTicket::find($id);
        if (!$ticket) return response()->json(['message' => 'Ticket not found'], 404);
        $ticket->delete();
        return response()->json(['status' => 'success', 'message' => 'Ticket deleted']);
    }
}

