<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Http\Resources\ItemResource;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    // List all items
    public function listAll()
    {
        //dd(ItemResource::collection(Item::all()));
        return ItemResource::collection(Item::all());
    }
    // List individual item
    public function listIndividual($id)
    {
        $item = Item::find($id);
        if (!$item) {
            return response()->json(['error' => 'Item not found'], 404);
        }
        return response()->json($item);
    }

    // Handle contact form submission
    public function contact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Here, you would typically store the contact message or send an email.
        return response()->json(['success' => 'Thank you for contacting us!']);
    }
}
