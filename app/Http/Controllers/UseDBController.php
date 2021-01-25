<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UseDBController extends Controller
{
    public function index(Request $request)
    {
        // DB class
        /// $items = DB::select('select * from people');
        // Query Builder
        $items = DB::table('people')->get();
        return view('hello.index', ['items' => $items]);
    }

    public function show(Request $request)
    {
        $items = DB::table('people')->offset(1)->limit(1)->get();
        return view('hello.show', ['items' => $items]);
    }

}
