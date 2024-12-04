<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = DB::table("blog")->leftJoin("gallery", "blog.blog_image", "=", "gallery.id")->select("blog.*", "gallery.media_url")->limit(3)->orderBy("created_at", "desc")->get();
        $all_blogs = DB::table("blog")->leftJoin("gallery", "blog.blog_image", "=", "gallery.id")->select("blog.*", "gallery.media_url")->get();
        $services = DB::table("services")->leftJoin("gallery", "services.service_image", "=", "gallery.id")->select("services.*", "gallery.media_url")->get();
        return view('pages/blogs', compact(["blogs", "services", "all_blogs"]));
    }

    public function details($id)
    {
        $blogs = DB::table("blog")->leftJoin("gallery", "blog.blog_image", "=", "gallery.id")->select("blog.*", "gallery.media_url")->limit(3)->orderBy("created_at", "desc")->get();
        $services = DB::table("services")->leftJoin("gallery", "services.service_image", "=", "gallery.id")->select("services.*", "gallery.media_url")->get();
        $blog = Blog::query()->findOrFail($id);
        $image = $blog->gallery()->get();
        return view("pages.blog_details", compact(["services", "blog", "image","blogs"]));
    }
}