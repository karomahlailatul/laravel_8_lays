<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {

        $data = [
            'title' => 'Home Page',
            'content' => 'This is the home page'
        ];
        return view('front.index', $data);
    }
}
