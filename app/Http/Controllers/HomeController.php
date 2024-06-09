<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Gallery;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $blogs, $blog, $galleries, $gallery;

    public function index()
    {
        $this->blogs = Blog::getBlog();
        $this->galleries = Gallery::getGallery();
        return view('home', ['blogs' => $this->blogs, 'galleries' => $this->galleries]);
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function detail($id)
    {
        $this->blog = Blog::getSingleBlogById($id);
        return view('detail', ['blog' => $this->blog]);
    }

    public function detailGallery($id)
    {
        $this->gallery = Gallery::getSingleGalleryById($id);
        return view('detail-gallery', ['gallery' => $this->gallery]);
    }

}
