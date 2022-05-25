<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class MyCartController extends Controller
{
    public function MyCart()
    {
        return view('fastfood/mycart');
    }

    public function store(Request $request) {
//        $data = $request->all();
//        dd($data);

    }
}
