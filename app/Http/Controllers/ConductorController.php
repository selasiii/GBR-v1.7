<?php

namespace App\Http\Controllers;

use App\Models\Conductor;
use Illuminate\Http\Request;

class ConductorController extends Controller
{
    public function index()
    {
        $conductors = Conductor::all();
        return view('conductors.index', compact('conductors'));
    }

    public function create()
    {
        return view('conductors.create');
    }

    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email|unique:conductors',
            'phone_number' => 'required|string|unique:conductors',
            'password' => 'required|string',
            'gender' => 'nullable|string',
            'date_of_birth' => 'nullable|date',
        ]);

        Conductor::create($request->all());

        return redirect()->route('conductors.index')->with('success', 'Conductor created successfully.');
    }

    public function edit(Conductor $conductor)
    {
        return view('conductors.edit', compact('conductor'));
    }

    public function update(Request $request, Conductor $conductor)
    {
        // Validation
        $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email|unique:conductors,email,' . $conductor->conductor_id,
            'phone_number' => 'required|string|unique:conductors,phone_number,' . $conductor->conductor_id,
            'password' => 'required|string',
            'gender' => 'nullable|string',
            'date_of_birth' => 'nullable|date',
        ]);

        $conductor->update($request->all());

        return redirect()->route('conductors.index')->with('success', 'Conductor updated successfully.');
    }

    public function destroy(Conductor $conductor)
    {
        $conductor->delete();

        return redirect()->route('conductors.index')->with('success', 'Conductor deleted successfully.');
    }
}
