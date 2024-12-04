<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Settings;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $services = Service::query()->get();
        $about = Settings::query()->where("key", "=", "about")->get();
        return view("pages.about", compact(["services", "about"]));
    }
}
