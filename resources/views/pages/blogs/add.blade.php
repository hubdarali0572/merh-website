@extends('layout.master')
@push('plugin-styles')
    <link href="{{ asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
    @include('includes.messages')

    <h1 class="text-2xl font-semibold mb-2">Add The Blog</h1>
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('smartai-blog.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <!-- Row 1: Title and Status -->
                            <div class="col-12 col-md-6 mb-3">
                                <label for="title" class="form-label"><strong>Title</strong> <span
                                        class="text-red-600">*</span></label>
                                <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}"
                                    required placeholder="Enter blog title" required>
                            </div>


                            <div class="col-12 col-md-6 mb-3">
                                <label for="meta_title" class="form-label"><strong>Meta Title (SEO)</strong></label>
                                <input type="text" name="meta_title" id="meta_title" class="form-control"
                                    value="{{ old('meta_title') }}" placeholder="SEO optimized title">
                            </div>



                            <div class="col-12 col-md-6 mb-3">
                                <label for="category" class="form-label"><strong>Category</strong></label>
                                <input type="text" name="category" id="category" class="form-control"
                                    value="{{ old('category') }}" placeholder="e.g. Technology">
                            </div>

                            <div class="col-12 col-md-6 mb-3">
                                <label for="tags" class="form-label"><strong>Tags</strong> <span
                                        class="text-red-600">*</span> <small class="text-muted">(comma
                                        separated)</small></label>
                                <input type="text" name="tags" id="tags" class="form-control" value="{{ old('tags') }}"
                                    placeholder="Laravel, PHP, Web"required>
                            </div>

                            <!-- Row 3: Image and Meta Title -->
                            <div class="col-12 col-md-6 mb-3">
                                <label for="featured_image" class="form-label"><strong>Featured Image</strong></label>
                                <input type="file" name="featured_image" id="featured_image" class="form-control"
                                    accept="image/*">
                            </div>

                            <div class="col-12 col-md-6 mb-3">
                                <label for="status" class="form-label"><strong>Status <span
                                        class="text-red-600">*</span></strong></label>
                                <select name="status" id="status" class="form-control"required>
                                    <option value="draft" {{ old('status') == 'draft' ? 'selected' : '' }}>Draft</option>
                                    <option value="published" {{ old('status') == 'published' ? 'selected' : '' }}>Published
                                    </option>
                                </select>
                            </div>
                            <!-- Row 4: Short Description -->
                            <div class="col-12 mb-3">
                                <label for="short_description" class="form-label"><strong>Short Description <span
                                        class="text-red-600">*</span></strong></label>
                                <textarea name="short_description" id="short_description" class="form-control" rows="2"
                                    placeholder="Brief summary of the post..."required>{{ old('short_description') }}</textarea>
                            </div>



                            <!-- Row 5: Main Content -->
                            <div class="col-12 mb-3">
                                <label for="content" class="form-label"><strong>Content</strong> <span
                                        class="text-red-600">*</span></label>
                                <textarea name="content" id="content" class="form-control" rows="4" required
                                    placeholder="Write your blog content here...">{{ old('content') }}</textarea>
                            </div>

                            <!-- Row 6: Meta Description -->
                            <div class="col-12 mb-3">
                                <label for="meta_description" class="form-label"><strong>Meta Description
                                        (SEO)</strong></label>
                                <textarea name="meta_description" id="meta_description" class="form-control" rows="2"
                                    placeholder="SEO search result snippet...">{{ old('meta_description') }}</textarea>
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

@push('plugin-scripts')
    <script src="{{ asset('assets/plugins/select2/select2.min.js') }}"></script>
@endpush

@push('custom-scripts')
    <script src="{{ asset('assets/js/select2.js') }}"></script>
@endpush