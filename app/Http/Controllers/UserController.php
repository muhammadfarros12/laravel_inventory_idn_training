<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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
}
