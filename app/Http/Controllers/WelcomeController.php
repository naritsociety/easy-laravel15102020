<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index ()
    {
        $name = 'Narit Charoenval';
        $date = date('Y-m-d');

        return view('welcome.index', compact('name', 'date'));
    }
}
