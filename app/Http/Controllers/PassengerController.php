<?php

namespace App\Http\Controllers;

use App\Models\Passenger;
use Illuminate\Http\Request;

class PassengerController extends Controller
{
    public function index()
    {
        $passengers = Passenger::all();
        return view('passengers.index', compact('passengers'));
    }

    public function create()
    {
        // You may need to fetch data for dropdowns (e.g., tickets, travels)
        return view('passengers.create');
    }

    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'ticket_id' => 'required|exists:tickets,ticket_id',
            'travel_id' => 'required|exists:travels,travel_id',
            'checked_in' => 'nullable|boolean',
        ]);

        Passenger::create($request->all());

        return redirect()->route('passengers.index')->with('success', 'Passenger created successfully.');
    }

    public function edit(Passenger $passenger)
    {
        // You may need to fetch data for dropdowns (e.g., tickets, travels)
        return view('passengers.edit', compact('passenger'));
    }

    public function update(Request $request, Passenger $passenger)
    {
        // Validation
        $request->validate([
            'ticket_id' => 'required|exists:tickets,ticket_id',
            'travel_id' => 'required|exists:travels,travel_id',
            'checked_in' => 'nullable|boolean',
        ]);

        $passenger->update($request->all());

        return redirect()->route('passengers.index')->with('success', 'Passenger updated successfully.');
    }

    public function destroy(Passenger $passenger)
    {
        $passenger->delete();

        return redirect()->route('passengers.index')->with('success', 'Passenger deleted successfully.');
    }
}
