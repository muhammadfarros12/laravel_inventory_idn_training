<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\User;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rooms = Room::all();
        $users = User::all(); 
        return view('rooms.index', compact('rooms', 'users'));
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
            'size' => 'required|in:small,medium,large',
            'user_id' => 'required|exists:users,id'
        ]);

        $input['room_number'] = 'Ruangan' . ' ' . random_int(100, 9999);
        $input['room_name'] = $request->room_name;
        
        $room = new Room;
        $room->fill($input);
        $room->save();

        return redirect()->route('room.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $room = Room::findOrFail($id);
        $user = User::all();
        return view('rooms.edit', compact('room', 'user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $room = Room::findOrFail($id);
        $data = $request->all();
        $room->update($data);
        return redirect()->route('room.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Room $room)
    {
        //
    }
}
