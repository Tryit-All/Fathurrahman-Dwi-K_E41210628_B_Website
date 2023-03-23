<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    // Method index() akan langsung mengeksekusi folder view : frondend.home sata controller di panggil 
    {
        return view('frontend.home');
    }
}