<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GalleryController extends Controller
{
    public function index()
    {
        $gallery = Gallery::query()->where("media_status", "=", "1")->get();
        $services = DB::table("services")->leftJoin("gallery", "services.service_image", "=", "gallery.id")->select("services.*", "gallery.media_url")->get();
        return view("pages.gallery", compact(['gallery', 'services']));
    }
}
