<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestLecture extends Controller
{
    public function test()
    {
        $user = 'Test User';
        return view("test-lecture", compact('user'));
    }
}