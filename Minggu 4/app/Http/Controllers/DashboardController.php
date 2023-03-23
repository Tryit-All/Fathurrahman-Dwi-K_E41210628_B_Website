<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    // Method index() akan langsung mengeksekusi folder view : frondend_2.home sata controller di panggil 
    {
        return view('frontend_2.home');
    }
}