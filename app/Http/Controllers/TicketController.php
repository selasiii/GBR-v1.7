<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
    {
        $tickets = Ticket::all();
        return view('tickets.index', compact('tickets'));
    }

    public function create()
    {
        // You may need to fetch data for dropdowns (e.g., customers, travels, payments)
        return view('tickets.create');
    }

    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'issued_date' => 'required|date',
            'expiry_date' => 'required|date|after:issued_date',
            'price' => 'required|numeric',
            'status' => 'required|string',
            'customer_id' => 'required|exists:users,customer_id',
            'travel_id' => 'required|exists:travels,travel_id',
            'payment_id' => 'required|exists:payments,payment_id',
        ]);

        Ticket::create($request->all());

        return redirect()->route('tickets.index')->with('success', 'Ticket created successfully.');
    }

    public function edit(Ticket $ticket)
    {
        // You may need to fetch data for dropdowns (e.g., customers, travels, payments)
        return view('tickets.edit', compact('ticket'));
    }

    public function update(Request $request, Ticket $ticket)
    {
        // Validation
        $request->validate([
            'issued_date' => 'required|date',
            'expiry_date' => 'required|date|after:issued_date',
            'price' => 'required|numeric',
            'status' => 'required|string',
            'customer_id' => 'required|exists:users,customer_id',
            'travel_id' => 'required|exists:travels,travel_id',
            'payment_id' => 'required|exists:payments,payment_id',
        ]);

        $ticket->update($request->all());

        return redirect()->route('tickets.index')->with('success', 'Ticket updated successfully.');
    }

    public function destroy(Ticket $ticket)
    {
        $ticket->delete();

        return redirect()->route('tickets.index')->with('success', 'Ticket deleted successfully.');
    }
}
