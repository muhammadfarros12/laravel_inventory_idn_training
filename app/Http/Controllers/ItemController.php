<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use App\Models\Room;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Item::all();
        $rooms = Room::all();
        $categories = Category::all();
        return view('items.index', compact('items', 'rooms', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->validate([
            'image' => 'required',
        ]);

        $input = $request->all();
        if($request->hasFile('image')){
            $path = 'public/images/item';
            $image = $request->file('image');
            $name = $image->getClientOriginalName();
            $destination = $request->file('image')->storeAs($path, $name);
            $input['image'] = $name;
        }

        $input['item_number'] = 'Barang' . ' ' . random_int(1, 999);
        Item::create($input);
        return redirect()->route('item.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $item = Item::findOrFail($id);
        return view('items.detail', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $item = Item::find($id);
        $category = Category::all();
        $room = Room::all();
        return view('items.edit', compact('item', 'category', 'room'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $item = Item::findOrFail($id);
        if($request->hasFile('image')){
            $path = 'public/images/item';
            $image = $request->file('image');
            $name = $image->getClientOriginalName();
            $destination = $request->file('image')->storeAs($path, $name);
            $data['image'] = $name;
        }

        $item->update($data);
        return redirect()->route('item.index');
   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $item = Item::findOrFail($id);
        $item->delete();
        return redirect()->route('item.index');
    }
}
