<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Composite;

class CompositeController extends Controller
{
    // Show the form
    public function create()
    {
        return view('composites.create');
    }

    // Handle form submission and insert data
    public function store(Request $request)
    {
        // Validate form input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        // Insert data into the database
        Composite::create($validated);

        // Redirect to a success page or back to the form
        return redirect('/composites/create')->with('success', 'Composite added successfully!');
    }
}
