<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Item;

class ApiController extends Controller
{
    public function getItem(){

        return response()->json(Item::get(), 200);
    }

    public function getItemById(int $id){

        $item = Item::find($id);
        if (is_null($item)) {
            return response()->json(['error' => true, 'message' => 'Item not found'], 404);
        }
        return response()->json($item, 200);
    }

    public function addItem(Request $request){

        $item = Item::create($request->all());
        return response()->json($item, 201);
    }

    public function editItem(Request $request, $id){
        $item = Item::find($id);
        if (is_null($item)) {
            return response()->json(['error' => true, 'message' => 'Item not found'], 404);
        }
        $item->update($request->all());
        return response()->json($item, 200);
    }

    public function deleteItem(Request $request, $id){
        $item = Item::find($id);
        if (is_null($item)) {
            return response()->json(['error' => true, 'message' => 'Item not found'], 404);
        }
        $item->delete();
        return response()->json('', 204);
    }
}
