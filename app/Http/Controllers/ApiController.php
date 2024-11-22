<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Http\Resources\ItemResource;
use Illuminate\Http\Request;
use App\Models\Contact;
class ApiController extends Controller
{
    // List all items
    public function listAll()
    {
        //dd(ItemResource::collection(Item::all()));
        //return ItemResource::collection(Item::all());
        // return ItemResource::collection(Item::paginate(2));
        return Item::paginate(2);
    }

    public function fetchItems()
    {
        return Item::paginate(2); // API endpoint to return paginated items
    }
    
    // List individual item
    public function listIndividual(Item $id)
    {
       
        return response()->json($id);
    }
    

    // Handle contact form submission
    public function contact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        Contact::create($validated);

        // Here, you would typically store the contact message or send an email.
        return response()->json(['success' => 'Thank you for contacting us!',
        'data' => $validated
        ]);

    }


}
