<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    // List all items
    public function index()
{
    return response()->json(\App\Models\Item::all());
}
    // Get a single item by ID
    public function show($id)
{
    $item = \App\Models\Item::find($id);
    if (!$item) {
        return response()->json(['message' => 'Item not found'], 404);
    }
    return response()->json($item);
}


    // Create a new item
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'price' => 'required|numeric',
    ]);

    $item = \App\Models\Item::create($validatedData);
    return response()->json($item, 201);
}

}
