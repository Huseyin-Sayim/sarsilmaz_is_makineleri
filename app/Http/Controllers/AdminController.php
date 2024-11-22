<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        if (auth()->guest()) {
            return view('auth.login');
        } else {
            return view("admin.index");
        }
    }
}
