<?php

namespace App\Http\Controllers;

use App\Models\Blog;

class FrontendController extends Controller
{

    // Home Page
    public function home()
    {
        return view('frontend.pages.home');
    }

    //    Blogs Page
    public function blogs()
    {
        $blogs = Blog::where('status', 'published')->get();
        return view('frontend.pages.blogs', compact('blogs'));
    }
    public function contact()
    {
        return view('frontend.pages.contact');
    }
    public function about()
    {
        return view('frontend.pages.about');
    }
    public function project()
    {
        return view('frontend.pages.project');
    }
    public function gallary()
    {
        return view('frontend.pages.gallary');
    }

    //    Services Page
    public function services()
    {
        return view('frontend.pages.services');
    }

    // Privacy Policy Page
    public function privacyPolicy()
    {
        return view('frontend.pages.privacy');
    }

    // Terms of Service Page
    public function termsOfService()
    {
        return view('frontend.pages.terms-of-service');
    }

    public function detailPage($slug)
    {
        // Fetch the specific blog
        $blog = Blog::where('slug', $slug)->where('status', 'published')->firstOrFail();

        // Increment view count
        $blog->increment('views');

        // Fetch related/recent blogs for the sidebar
        $relatedBlogs = Blog::where('slug', '!=', $slug)
            ->where('status', 'published')
            ->latest()
            ->take(5)
            ->get();

        return view('frontend.pages.detail-blog', compact('blog', 'relatedBlogs'));
    }
}
