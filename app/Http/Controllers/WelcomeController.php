<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello()
    {
        return 'Hello world';
    }
    public function greeting()
{
    return view('blog.hello')
        ->with('name', 'Annisa')
        ->with('occupation', 'Astronaut');
}
}
