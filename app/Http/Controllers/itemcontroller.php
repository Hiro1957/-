<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class itemcontroller extends Controller
{
    //
    public function index()
    {
        return view('item.index');
    }

    public function create(Request $request)
    {
        return view('item.create');
    }

    public function store(Request $request)
    {
    }




}
