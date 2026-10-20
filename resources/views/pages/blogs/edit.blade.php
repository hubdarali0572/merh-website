@extends('layout.master')

@push('plugin-styles')
    <link href="{{ asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
    @include('includes.messages')

    <h1 class="text-2xl font-semibold mb-2">Edit Blog: {{ $blog->title }}</h1>

    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('smartai-blog.update', $blog->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <!-- Title -->
                            <div class="col-12 col-md-6 mb-3">
                                <label for="title" class="form-label"><strong>Title</strong> <span
                                        class="text-red-600">*</span></label>
                                <input type="text" name="title" id="title" class="form-control"
                                    value="{{ old('title', $blog->title) }}" required>
                            </div>

                            <!-- Meta Title -->
                            <div class="col-12 col-md-6 mb-3">
                                <label for="meta_title" class="form-label"><strong>Meta Title (SEO)</strong></label>
                                <input type="text" name="meta_title" id="meta_title" class="form-control"
                                    value="{{ old('meta_title', $blog->meta_title) }}">
                            </div>


                            <!-- Category -->
                            <div class="col-12 col-md-6 mb-3">
                                <label for="category" class="form-label"><strong>Category</strong></label>
                                <input type="text" name="category" id="category" class="form-control"
                                    value="{{ old('category', $blog->category) }}">
                            </div>

                            <!-- Tags -->
                            <div class="col-12 col-md-6 mb-3">
                                <label for="tags" class="form-label"><strong>Tags</strong> <small class="text-muted">(comma
                                        separated)</small></label>
                                @php
                                    $tags = $blog->tags;

                                    if (is_string($tags)) {
                                        $tagsArray = json_decode($tags, true) ?? explode(',', $tags);
                                    } else {
                                        $tagsArray = $tags ?? [];
                                    }

                                    $tagsString = implode(',', $tagsArray);
                                @endphp

                                <input type="text" name="tags" id="tags" class="form-control"
                                    value="{{ old('tags', $tagsString) }}">
                            </div>

                            <!-- Image -->
                            <div class="col-12 col-md-6 mb-3">
                                <label for="featured_image" class="form-label"><strong>Featured Image</strong></label>
                                <input type="file" name="featured_image" id="featured_image" class="form-control"
                                    accept="image/*">
                                @if($blog->featured_image)
                                    <div class="mt-2">
                                        <img src="{{ asset('assets/blog/images/' . $blog->featured_image) }}" alt="Preview"
                                            style="height: 80px; border-radius: 5px;">
                                    </div>
                                @endif
                            </div>

                            <!-- Status -->
                            <div class="col-12 col-md-6 mb-3">
                                <label for="status" class="form-label"><strong>Status</strong></label>
                                <select name="status" id="status" class="form-control">
                                    <option value="draft" {{ old('status', $blog->status) == 'draft' ? 'selected' : '' }}>
                                        Draft</option>
                                    <option value="published" {{ old('status', $blog->status) == 'published' ? 'selected' : '' }}>Published</option>
                                </select>
                            </div>

                            <!-- Short Description -->
                            <div class="col-12 mb-3">
                                <label for="short_description" class="form-label"><strong>Short Description</strong></label>
                                <textarea name="short_description" id="short_description" class="form-control"
                                    rows="2">{{ old('short_description', $blog->short_description) }}</textarea>
                            </div>

                            <!-- Main Content -->
                            <div class="col-12 mb-3">
                                <label for="content" class="form-label"><strong>Content</strong> <span
                                        class="text-red-600">*</span></label>
                                <textarea name="content" id="content" class="form-control" rows="6"
                                    required>{{ old('content', $blog->content) }}</textarea>
                            </div>

                            <!-- Meta Description -->
                            <div class="col-12 mb-3">
                                <label for="meta_description" class="form-label"><strong>Meta Description
                                        (SEO)</strong></label>
                                <textarea name="meta_description" id="meta_description" class="form-control"
                                    rows="2">{{ old('meta_description', $blog->meta_description) }}</textarea>
                            </div>

                            <div class="flex justify-center items-start mt-4 gap-2">
                                <a href="{{ route('smartai-blog.index') }}"
                                    class="btn bg-slate-200 text-[#0F1B31] hover:bg-slate-200  font-semibold">Cancel</a>
                                <button type="submit"
                                    class="btn bg-slate-200 text-[#0F1B31] hover:bg-slate-200  font-semibold">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection