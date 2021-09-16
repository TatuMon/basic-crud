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

        $item = item::create([
            'name' => $data['name'],
            'price' => $data['price'],
            'status' => 2,
            'user_id' => auth()->user()->id
        ]);

        return json_encode(['id' => $item->id, 'name' => $item->name, 'price' => $item->price, 'status' => 'pending']);
    }

    public function delete(){
        $data = request()->validate([
            'id' => 'numeric|required'
        ]);

        item::findOrFail($data['id'])->delete();
    }
}
