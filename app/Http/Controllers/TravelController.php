<?php

namespace App\Http\Controllers;

use App\Models\Travel;
use Illuminate\Http\Request;

class TravelController extends Controller
{
    public function index()
    {
        $travels = Travel::all();
        return view('travels.index', compact('travels'));
    }

    public function create()
    {
        // You may need to fetch data for dropdowns (e.g., drivers, conductors, buses, routes)
        return view('travels.create');
    }

    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'driver_id' => 'required|exists:drivers,driver_id',
            'conductor_id' => 'required|exists:conductors,conductor_id',
            'bus_id' => 'required|exists:buses,bus_id',
            'departure_datetime' => 'required|date',
            'arrival_datetime' => 'required|date|after:departure_datetime',
            'travel_status' => 'required|string',
            'route_id' => 'required|exists:routes,route_id',
            'estimated_time_of_arrival' => 'required|date|after:departure_datetime',
            'is_complete' => 'nullable|boolean',
        ]);

        Travel::create($request->all());

        return redirect()->route('travels.index')->with('success', 'Travel created successfully.');
    }

    public function edit(Travel $travel)
    {
        // You may need to fetch data for dropdowns (e.g., drivers, conductors, buses, routes)
        return view('travels.edit', compact('travel'));
    }

    public function update(Request $request, Travel $travel)
    {
        // Validation
        $request->validate([
            'driver_id' => 'required|exists:drivers,driver_id',
            'conductor_id' => 'required|exists:conductors,conductor_id',
            'bus_id' => 'required|exists:buses,bus_id',
            'departure_datetime' => 'required|date',
            'arrival_datetime' => 'required|date|after:departure_datetime',
            'travel_status' => 'required|string',
            'route_id' => 'required|exists:routes,route_id',
            'estimated_time_of_arrival' => 'required|date|after:departure_datetime',
            'is_complete' => 'nullable|boolean',
        ]);

        $travel->update($request->all());

        return redirect()->route('travels.index')->with('success', 'Travel updated successfully.');
    }

    public function destroy(Travel $travel)
    {
        $travel->delete();

        return redirect()->route('travels.index')->with('success', 'Travel deleted successfully.');
    }
}
