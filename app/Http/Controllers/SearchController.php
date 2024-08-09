<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function search(Request $request)
    {
        $barang = Item::all();
        $cari = $request->get('keyword');
        if($cari)
        {
            $barang = Item::where('item_name','LIKE',"%$cari%")->paginate(10);
        }
        return view('welcome', compact('barang','cari'));
    }
}