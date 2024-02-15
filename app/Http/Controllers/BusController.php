<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use Illuminate\Http\Request;

class BusController extends Controller
{
    public function index()
    {
        $buses = Bus::all();
        return view('buses.index', compact('buses'));
    }

    public function create()
    {
        return view('buses.create');
    }

    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'bus_number' => 'required|string|unique:buses',
            'capacity' => 'required|integer',
            'model' => 'required|string',
            'make' => 'required|string',
            'year' => 'required|string',
            'color' => 'required|string',
            'parked_at' => 'required|string',
            'status' => 'required|in:active,inactive',
            'bus_state' => 'required|in:working,faulty,damaged',
        ]);

        Bus::create($request->all());

        return redirect()->route('buses.index')->with('success', 'Bus created successfully.');
    }

    public function edit(Bus $bus)
    {
        return view('buses.edit', compact('bus'));
    }

    public function update(Request $request, Bus $bus)
    {
        // Validation
        $request->validate([
            'bus_number' => 'required|string|unique:buses,bus_number,' . $bus->bus_id,
            'capacity' => 'required|integer',
            'model' => 'required|string',
            'make' => 'required|string',
            'year' => 'required|string',
            'color' => 'required|string',
            'parked_at' => 'required|string',
            'status' => 'required|in:active,inactive',
            'bus_state' => 'required|in:working,faulty,damaged',
        ]);

        $bus->update($request->all());

        return redirect()->route('buses.index')->with('success', 'Bus updated successfully.');
    }

    public function destroy(Bus $bus)
    {
        $bus->delete();

        return redirect()->route('buses.index')->with('success', 'Bus deleted successfully.');
    }
}
