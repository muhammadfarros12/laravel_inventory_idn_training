<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class UserController extends Controller
{
    // index => dapat data
    // create => nampilkan view create
    // store => menambahkan data
    // edit => menampilkan view edit
    // update => melakukan perubahan data
    // delete => hapus data
    public function index(){
        $users = User::all();
        return view('users.index', compact('users'));   
    }

    public function store(Request $request) {
        $input = $request->all();
        if($request->input('password')){
            $input['password'] = bcrypt($input['password']);
        }
        User::create($input);
        return redirect('/user');
    }

    function edit($id){
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    function update(Request $request, $id) {
        $user = User::findOrFail($id);
        $data = $request->all();
        if($request->input('password')){
            $data['password'] = bcrypt($data['password']);
        } else {
            $data = Arr::except($data, ['password']);
        }
        $user->update($data);
        return redirect('/user');
    }

    function show($id) {
        $user = User::findOrFail($id);
        return view('users.detail', compact('user'));
    }

    function destroy($id) {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect('/user');
    }
}
