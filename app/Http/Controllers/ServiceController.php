<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    public function index()
    {
        $services = DB::table("services")->leftJoin("gallery", "services.service_image", "=", "gallery.id")->select("services.*", "gallery.media_url")->get();
        return view("pages.services", compact(["services"]));
    }

    public function details ($id)
    {
        $services = DB::table("services")->leftJoin("gallery", "services.service_image", "=", "gallery.id")->select("services.*", "gallery.media_url")->get();
        $service = Service::query()->findOrFail($id);
        $image = $service->gallery()->get();
        return view('pages.service_details', compact(["services", "service", "image"]));
    }
}
