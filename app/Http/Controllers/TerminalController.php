<?php

// app/Http/Controllers/TerminalController.php

namespace App\Http\Controllers;

use App\Models\Terminal;
use Illuminate\Http\Request;

class TerminalController extends Controller
{
    public function index()
    {
        $terminals = Terminal::all();
        return view('terminals.index', compact('terminals'));
    }

    public function create()
    {
        return view('terminals.create');
    }

    public function store(Request $request)
    {
        // Validate and store terminal details
        Terminal::create($request->all());

        return redirect()->route('terminals.index')->with('success', 'Terminal created successfully');
    }

    public function show(Terminal $terminal)
    {
        return view('terminals.show', compact('terminal'));
    }

    public function edit(Terminal $terminal)
    {
        return view('terminals.edit', compact('terminal'));
    }

    public function update(Request $request, Terminal $terminal)
    {
        // Validate and update terminal details
        $terminal->update($request->all());

        return redirect()->route('terminals.index')->with('success', 'Terminal updated successfully');
    }

    public function destroy(Terminal $terminal)
    {
        $terminal->delete();
        return redirect()->route('terminals.index')->with('success', 'Terminal deleted successfully');
    }
}
