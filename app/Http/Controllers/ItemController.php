<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\item;

class ItemController extends Controller
{
    public function read(){
        return view('welcome', [
            'items' => item::latest('updated_at')->orderBy('id', 'desc')->get()
        ]);
    }

    public function create(){
        $data = request()->validate([
            'name' => 'required',
            'price' => 'required|numeric'
        ]);

        item::create([
            'name' => $data['name'],
            'price' => $data['price'],
            'status' => 2,
            'user_id' => auth()->user()->id
        ]);

        return json_encode(['name' => $data['name'], 'price' => $data['price'], 'status' => 'pending']);
    }
}
