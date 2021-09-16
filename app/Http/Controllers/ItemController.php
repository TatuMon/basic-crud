<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\item;

class ItemController extends Controller
{
    public function read(){
        if(auth()->check()){
            return view('welcome', [
                'items' => item::latest('updated_at')->where('user_id', auth()->user()->id)->orderBy('id', 'desc')->get()
            ]);
        } else {
            return view('welcome', [
                'items' => []
            ]);
        }
    }

    public function create(){
        $data = request()->validate([
            'name' => 'required',
            'price' => 'nullable|numeric'
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
