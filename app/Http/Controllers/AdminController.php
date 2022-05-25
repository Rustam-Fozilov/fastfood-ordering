<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function show()
    {
        return view('fastfood/admin');
    }

    public function manageAdmin()
    {
        return view('fastfood/manageAdmin');
    }

    public function manageCategory()
    {
        return view('fastfood/manageCategory');
    }

    public function manageFood()
    {
        return view('fastfood/manageFood');
    }

    public function manageOrder()
    {
        return view('fastfood/manageOrder');
    }
}
