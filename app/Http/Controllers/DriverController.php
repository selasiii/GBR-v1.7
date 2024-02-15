<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function index()
    {
        $drivers = Driver::all();
        return view('drivers.index', compact('drivers'));
    }

    public function create()
    {
        return view('drivers.create');
    }

    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'licence_number' => 'required|string|unique:drivers',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email|unique:drivers',
            'phone_number' => 'required|string|unique:drivers',
            'password' => 'required|string',
            'gender' => 'nullable|string',
            'date_of_birth' => 'nullable|date',
        ]);

        Driver::create($request->all());

        return redirect()->route('drivers.index')->with('success', 'Driver created successfully.');
    }

    public function edit(Driver $driver)
    {
        return view('drivers.edit', compact('driver'));
    }

    public function update(Request $request, Driver $driver)
    {
        // Validation
        $request->validate([
            'licence_number' => 'required|string|unique:drivers,licence_number,' . $driver->driver_id,
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email|unique:drivers,email,' . $driver->driver_id,
            'phone_number' => 'required|string|unique:drivers,phone_number,' . $driver->driver_id,
            'password' => 'required|string',
            'gender' => 'nullable|string',
            'date_of_birth' => 'nullable|date',
        ]);

        $driver->update($request->all());

        return redirect()->route('drivers.index')->with('success', 'Driver updated successfully.');
    }

    public function destroy(Driver $driver)
    {
        $driver->delete();

        return redirect()->route('drivers.index')->with('success', 'Driver deleted successfully.');
    }
}
