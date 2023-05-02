<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index() {
        $name = 'Miguel A Alvarez';
        return view('welcome')->with([
            'name' => $name,
        ]);
    }
}
