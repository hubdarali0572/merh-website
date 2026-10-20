@extends('Frontend.frontend-layout.app')

@section('title', $blog->meta_title ?? $blog->title . ' | SmartAI Soft')
@section('description', $blog->meta_description ?? \Illuminate\Support\Str::limit(strip_tags($blog->content), 160))
@section('content')
<div class="min-h-screen bg-white custom-font text-slate-500 overflow-hidden">

    <!-- 1. HERO SECTION -->
    <section class="relative overflow-hidden bg-white pt-32 pb-16">
        <div class="top-0 right-0 absolute bg-pink-400/20 blur-[120px] rounded-full w-[300px] lg:w-[700px] h-[400px] lg:h-[750px] pointer-events-none"></div>
        <div class="bottom-0 left-0 absolute bg-indigo-400/10 blur-[100px] rounded-full w-[300px] h-[300px] pointer-events-none"></div>
        
        <div class="mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl mt-6 relative">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
                
                <div class="lg:col-span-7" data-aos="fade-right">
                    <div class="flex items-center gap-3 mb-6">
                        @if($blog->category)
                            <span class="px-3 py-1 bg-rose-50 text-rose-500 text-[10px] font-black uppercase tracking-[0.2em] rounded-lg border border-rose-100">
                                {{ $blog->category }}
                            </span>
                        @endif
                        <span class="text-slate-300 text-xs font-bold tracking-widest uppercase">
                            {{ $blog->created_at->format('M d, Y') }}
                        </span>
                    </div>
                    
                    <h1 class="mb-8 font-black text-slate-900 text-4xl md:text-5xl lg:text-6xl leading-[0.95] tracking-tighter">
                        {{ $blog->title }}
                    </h1>

                    @if($blog->short_description)
                        <p class="text-slate-500 text-xl md:text-2xl leading-relaxed max-w-2xl mb-8 font-medium italic border-l-4 border-rose-500 pl-6">
                            "{{ $blog->short_description }}"
                        </p>
                    @endif

                    <div class="flex items-center gap-4">
                        <div class="relative">
                            <div class="absolute inset-0 bg-rose-500 blur-md opacity-20 rounded-full"></div>
                            <img src="https://ui-avatars.com/api/?name=SmartAI+Soft&background=f43f5e&color=fff" class="w-14 h-14 rounded-2xl relative border-2 border-white shadow-sm" alt="Author">
                        </div>
                        <div>
                            <p class="text-sm font-black text-slate-950 uppercase tracking-tighter mb-0.5">SmartAI Soft Team</p>
                            <p class="text-[10px] font-bold text-slate-400 uppercase tracking-[0.2em]">Engineering & Innovation</p>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-5" data-aos="fade-left">
                    <div class="relative rounded-2xl overflow-hidden shadow-[0_40px_80px_-20px_rgba(0,0,0,0.15)] bg-slate-100">
                        @if($blog->featured_image)
                            <img src="{{ asset('assets/blog/images/' . $blog->featured_image) }}" class="w-full h-[450px] transition-transform duration-1000 hover:scale-110" alt="{{ $blog->title }}">
                        @else
                            <div class="w-full h-[450px] bg-slate-900 flex items-center justify-center p-20">
                                <img src="{{ asset('assets/images/others/logo-header.png') }}" class="w-full opacity-20 grayscale invert brightness-200" alt="smartai soft logo">
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. MAIN CONTENT AREA -->
    <section class="py-20 bg-white">
        <div class="mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16">
                
                <div class="lg:col-span-8">

                    <article class="prose prose-slate prose-lg max-w-none 
                        prose-headings:text-slate-900 prose-headings:font-black prose-headings:tracking-tighter
                        prose-p:text-slate-600 prose-p:leading-relaxed prose-p:font-medium
                        prose-strong:text-slate-900 prose-strong:font-black
                        prose-a:text-rose-600 prose-a:no-underline hover:prose-a:underline
                        prose-img:rounded-3xl prose-img:shadow-2xl">
                        
                        {!! $blog->content !!}
                    </article>
                    @php 
                        $tags = is_string($blog->tags) ? json_decode($blog->tags, true) : $blog->tags;
                    @endphp
                    @if(!empty($tags))
                    <div class="mt-20 pt-10 border-t border-slate-100">
                        <div class="flex items-center gap-4 flex-wrap">
                            @foreach($tags as $tag)
                                <span class="px-4 py-2 bg-slate-50 text-slate-600 text-xs font-bold rounded-xl border border-slate-100 hover:border-rose-200 hover:bg-rose-50 transition-all cursor-default">
                                    #{{ trim($tag) }}
                                </span>
                            @endforeach
                        </div>
                    </div>
                    @endif
                </div>

                <div class="lg:col-span-4">
                    <div class="sticky top-32 space-y-10">
                        
                        @if($blog->meta_title || $blog->meta_description || $blog->meta_keywords)
                        <div class="bg-slate-50 rounded-2xl p-8 border border-slate-100">
                            <h4 class="text-slate-900 font-black text-lg tracking-tighter mb-6 flex items-center gap-2">
                                <i class="fa-solid fa-microchip text-rose-500 text-sm"></i>
                                Article Metadata
                            </h4>
                            
                            <div class="space-y-6">
                                @if($blog->meta_title)
                                <div>
                                    <p class="text-[9px] font-bold text-slate-400 uppercase tracking-widest mb-1">Focus Insight</p>
                                    <p class="text-sm font-bold text-slate-700 leading-snug">{{ $blog->meta_title }}</p>
                                </div>
                                @endif

                                @if($blog->meta_description)
                                <div>
                                    <p class="text-[9px] font-bold text-slate-400 uppercase tracking-widest mb-1">Abstract</p>
                                    <p class="text-xs text-slate-500 leading-relaxed">{{ $blog->meta_description }}</p>
                                </div>
                                @endif

                                @if($blog->meta_keywords)
                                <div>
                                    <p class="text-[9px] font-bold text-slate-400 uppercase tracking-widest mb-1">Core Tech Stack</p>
                                    <div class="flex flex-wrap gap-1 mt-2">
                                        @foreach(explode(',', $blog->meta_keywords) as $key)
                                            <span class="text-[10px] bg-white px-2 py-1 rounded-md border border-slate-200 text-slate-500 font-medium">{{ trim($key) }}</span>
                                        @endforeach
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                        @endif

                    </div>
                </div>

            </div>
        </div>
    </section>

</div>
@endsection