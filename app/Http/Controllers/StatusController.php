<?php

namespace App\Http\Controllers;

use App\Http\Requests\StatusRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class StatusController extends Controller
{
    // create function store
    public function store(StatusRequest $request)
    {
        // create status
        $request->make($request->body);

        // redirect back
        return redirect()->back();
    }
}
