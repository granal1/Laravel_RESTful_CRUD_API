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
}
