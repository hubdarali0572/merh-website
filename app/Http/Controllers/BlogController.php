<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\Rule;


class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::all();

        return view('pages.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.blogs.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 1. Validate
        $request->validate([
            'title'   => 'required|string|max:255',
            'content' => 'required',
            'status'  => 'required|in:draft,published',
           'featured_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:20480',
        ]);

        $blog = new Blog();
        $blog->title             = $request->title;
        $blog->short_description = $request->short_description;
        $blog->content           = $request->content;
        $blog->category          = $request->category;
        $blog->status            = $request->status;
        $blog->meta_title        = $request->meta_title;
        $blog->meta_description  = $request->meta_description;
        $blog->slug = str::slug($request->title);

        if ($request->hasFile('featured_image')) {
            $image = $request->file('featured_image');
            $imageName = time() . '_img_' . $image->getClientOriginalName();
            $image->move(public_path('assets/blog/images'), $imageName);
            $blog->featured_image = $imageName;
        }

        $blog->tags = $request->tags ? array_map('trim', explode(',', $request->tags)) : [];
        $blog->published_at = ($request->status === 'published') ? now() : null;

        $blog->save();

        return redirect()->route('smartai-blog.index')->with('success', 'Blog post created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blog = Blog::findOrFail($id);

        return view('pages.blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $blog = Blog::findOrFail($id);

        $request->validate([
            'title' => [
                'required',
                'string',
                'max:255',
                Rule::unique('blogs', 'title')->ignore($blog->id),
            ],
            'content' => 'required',
            'status' => 'required|in:draft,published',
            'featured_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:20480',
        ]);

        $blog->title = $request->title;
        $blog->slug = Str::slug($request->title);
        $blog->short_description = $request->short_description;
        $blog->content = $request->content;
        $blog->category = $request->category;
        $blog->status = $request->status;
        $blog->meta_title = $request->meta_title;
        $blog->meta_description = $request->meta_description;

        if ($request->hasFile('featured_image')) {

            // Delete old image
            if (
                $blog->featured_image &&
                File::exists(public_path('assets/blog/images/' . $blog->featured_image))
            ) {

                File::delete(public_path('assets/blog/images/' . $blog->featured_image));
            }

            // Upload new image
            $image = $request->file('featured_image');
            $imageName = time() . '_' . $image->getClientOriginalName();

            $image->move(public_path('assets/blog/images'), $imageName);

            $blog->featured_image = $imageName;
        }

        $blog->tags = $request->tags
            ? json_encode(array_map('trim', explode(',', $request->tags)))
            : null;

        $blog->published_at = $request->status === 'published'
            ? ($blog->published_at ?? now())
            : null;

        $blog->save();

        return redirect()
            ->route('smartai-blog.index')
            ->with('success', 'Blog updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return redirect()->route('smartai-blog.index')->with('success', 'Blog deleted successfully.');
    }
}
