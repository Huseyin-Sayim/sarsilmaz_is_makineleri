<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $title = 'Galeri';
        $sub_title = "Kütüphane";
        return view("admin.gallery.gallery", compact(["title", "sub_title"]));
    }

    public function create()
    {
        $title = 'Galeri';
        $sub_title = "Ekle";
        return view("admin.gallery.create_gallery", compact(["title", "sub_title"]));
    }

    public function store(Request $request)
    {

    }
}
