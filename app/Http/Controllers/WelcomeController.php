<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Display blank calendar page with form
     *
     * @return object
     */
    public function index()
    {
        return view('welcome');
    }
}
