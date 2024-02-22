<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{


    public function hello()
    {
        return ('Hello World');
    }
    public function greeting()
    {
        return view('hello')->with('name', 'Muhammad Iqbal Makmur Al-Muniri')->with('occupation', 'Astronaut');
    }
}
