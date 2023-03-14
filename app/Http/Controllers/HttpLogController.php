<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HttpLogController extends Controller
{
    public function form(Request $request)
    {
        echo $request->input('text');
        return view('HttpLogForm');
    }

}
