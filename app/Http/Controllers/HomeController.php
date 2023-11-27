<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function invoke()
    {
        return view("pages.home");
    }
}
