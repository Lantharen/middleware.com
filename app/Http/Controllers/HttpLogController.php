<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HttpLogController extends Controller
{


    public function form(Request $request)
    {
        return view('form');
    }
    public function handle(Request $request)
    {
        return redirect()->back();
    }

}
