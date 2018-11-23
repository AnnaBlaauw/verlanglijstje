<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListController extends Controller
{
    public finction create(request $request)
    {
        return $request->all();
    }
}
