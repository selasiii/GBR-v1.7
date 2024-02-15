<?php

// app/Http/Controllers/RouteController.php

namespace App\Http\Controllers;

use App\Models\Route;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function index()
    {
        $routes = Route::all();
        return view('routes.index', compact('routes'));
    }

    public function create()
    {
        return view('routes.create');
    }

    public function store(Request $request)
    {
        // Validate and store route details
        Route::create($request->all());

        return redirect()->route('routes.index')->with('success', 'Route created successfully');
    }

    public function show(Route $route)
    {
        return view('routes.show', compact('route'));
    }

    public function edit(Route $route)
    {
        return view('routes.edit', compact('route'));
    }

    public function update(Request $request, Route $route)
    {
        // Validate and update route details
        $route->update($request->all());

        return redirect()->route('routes.index')->with('success', 'Route updated successfully');
    }

    public function destroy(Route $route)
    {
        $route->delete();
        return redirect()->route('routes.index')->with('success', 'Route deleted successfully');
    }
}
