<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $test = 'View function test';
        return view('home', compact('test'));
    }
}
