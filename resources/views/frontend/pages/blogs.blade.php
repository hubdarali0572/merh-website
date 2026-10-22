@extends('Frontend.frontend-layout.app')

@section('title', 'Insights & Tech Blog | MEHR Website Design and Software Services')
@section('description', 'Read MEHR Website Design and Software Services’ insights on offshore engineering, AI, product delivery, and startup growth from our team of experts.')
@section('content')


  <div class="min-h-screen bg-white custom-font text-slate-500 overflow-hidden">

    <section class="relative overflow-hidden bg-white pt-32 pb-24">

      <div
        class="top-0 right-0 absolute bg-blue-400/40 blur-[120px] rounded-full w-[300px] lg:w-[700px] h-[400px] lg:h-[750px] pointer-events-none">
      </div>
      <div class="mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl mt-6">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 xl:gap-10 items-start">

          <div class="lg:col-span-7" data-aos="fade-right">
            <h1 class="mb-8 font-black text-slate-900 text-4xl md:text-5xl leading-[0.9] tracking-tighter">
              Custom Web & Mobile <br>
              <span class="text-[#0086f6] italic">App Development.</span>
            </h1>

            <p class="text-slate-500 text-lg leading-relaxed max-w-xl mb-12 font-medium">
              MEHR delivers custom websites, mobile apps, e-commerce platforms, and business software
              for businesses across the USA, creating scalable digital solutions that enhance user
              experiences, streamline operations, and drive business growth.
            </p>

            <div class="relative p-10 rounded-lg bg-slate-950 text-white overflow-hidden shadow-2xl">
              <img src="{{ asset('assets/images/others/logo-header.png') }}"
                class="brand-logo absolute -right-1 bottom-5 w-64 opacity-20 pointer-events-none" alt="MEHR logo">
              <div class="relative z-10">
                <div class="flex items-center gap-4 mb-6">
                  <span class="h-px w-8 bg-[#0086f6]"></span>
                  <p class="text-[#007fcf] font-black text-[10px] uppercase tracking-[0.3em]">
                    Executive Summary
                  </p>
                </div>

                <p class="text-2xl md:text-3xl font-medium leading-tight mb-8">
                  " We build digital solutions that turn your ideas into
                  <span class="text-[#0086f6] font-bold">better experiences, smarter operations, and lasting business
                    growth.</span>"
                </p>

                <div class="flex items-center gap-4">
                  <img
                    src="https://ui-avatars.com/api/?name=MEHR+Website+Design+and+Software+Services&background=002f7d&color=fff"
                    class="w-10 h-10 rounded-full border-2 border-white/10" alt="Author">

                  <div>
                    <p class="text-xs font-black uppercase tracking-widest text-white leading-none mb-1">
                      MEHR Website Design and Software Services
                    </p>
                    <p class="text-[9px] font-bold text-slate-500 uppercase tracking-tighter">
                      Software & AI Innovation Team
                    </p>
                  </div>
                </div>
              </div>
            </div>

          </div>

          <div class="lg:col-span-5 lg:sticky lg:top-32" data-aos="fade-left">
            <div class="bg-white rounded-lg border border-slate-100 p-3 shadow-[0_30px_70px_-20px_rgba(0,0,0,0.08)]">
              <div class="bg-slate-50/50 rounded-lg overflow-hidden">
                <div class="p-8 pb-6 border-b border-white">
                  <div class="flex items-center gap-2 mb-2">
                    <span class="w-2 h-2 bg-[#0086f6] rounded-full animate-pulse"></span>
                    <p class="text-[#0086f6] font-black text-[10px] uppercase tracking-[0.3em]">Knowledge Base</p>
                  </div>
                  <h3 class="font-black text-slate-900 text-3xl tracking-tighter">
                    Related <span class="text-slate-400 font-light italic">Insights</span>
                  </h3>
                </div>

                <div class="divide-y divide-slate-100/50">
                  @foreach($blogs->take(5) as $blog)
                    <a href="{{ route('frontend.show', $blog->slug) }}">
                      <span class="group flex items-center gap-6 p-4 transition-all duration-500 hover:bg-white">

                        <div class="relative">
                          <span
                            class="text-sm font-black text-slate-200 group-hover:text-[#0086f6] transition-colors duration-300 italic">
                            0{{ $loop->iteration }}
                          </span>
                          <div
                            class="absolute -left-3 top-1/2 -translate-y-1/2 w-1 h-0 bg-[#0086f6] rounded-full group-hover:h-4 transition-all duration-500">
                          </div>
                        </div>

                        <div class="flex-grow">
                          <div class="flex items-center gap-3 mb-1.5">
                            <span class="text-[9px] font-bold text-slate-400 uppercase tracking-widest">Blog Title</span>
                          </div>
                          <h4
                            class="font-bold text-slate-600 group-hover:text-slate-950 text-[15px] leading-snug transition-colors duration-300 line-clamp-2">
                            {{ $blog->title }}
                          </h4>
                        </div>
                      </span>
                    </a>
                  @endforeach
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="py-10 lg:py-16 bg-white relative overflow-hidden" id="sidebarlink">
      <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-full opacity-40 pointer-events-none">
        <div class="absolute top-[-10%] left-[-10%] w-[40%] h-[40%] rounded-full bg-blue-50 blur-[120px]"></div>
        <div class="absolute bottom-[-10%] right-[-10%] w-[40%] h-[40%] rounded-full bg-indigo-50 blur-[120px]"></div>
      </div>

      <div class="mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
          @foreach($blogs as $item)
            <a href="{{ route('frontend.show', $item->slug) }}">
              <article
                class="group flex flex-col h-full bg-white border border-slate-200/60 rounded-3xl overflow-hidden relative transition-all duration-500 ease-out 
                                                    hover:scale-[1.03] hover:-translate-y-2 hover:z-20 
                                                    hover:border-[#0086f6] hover:shadow-[0_30px_60px_-15px_rgba(0,134,246,0.2)]"
                data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">

                <div class="h-1.5 w-full bg-gradient-to-r from-[#0086f6] to-[#002f7d]"></div>

                <div class="p-8 lg:p-10 flex flex-col flex-grow relative">
                  <div class="mb-6 flex items-center justify-between">
                    <div class="flex items-center gap-3 text-[10px] font-bold text-slate-400 uppercase tracking-[0.2em]">
                      <span class="flex items-center gap-1.5">
                        <i class="fa-regular fa-calendar text-[#0086f6]"></i>
                        {{ $item->created_at->format('M d, Y') }}
                      </span>
                      <span class="w-1 h-1 bg-slate-300 rounded-full"></span>
                      <span class="flex items-center gap-1.5">
                        <i class="fa-regular fa-clock text-[#0086f6]"></i>
                        {{ \Carbon\Carbon::parse($item->created_at)->diffForHumans() }}
                      </span>
                    </div>
                  </div>

                  <h3
                    class="text-2xl font-black text-slate-900 leading-snug mb-4 tracking-tight group-hover:text-[#0086f6] transition-colors duration-300">
                    {{ $item->title }}
                  </h3>

                  <p class="text-slate-500 text-[15px] leading-relaxed mb-8 line-clamp-3">
                    {{ $item->short_description }}
                  </p>

                  <div class="flex flex-wrap gap-2 mb-8 mt-auto relative z-10">
                    @php 
                                                                                                                                                                          if (is_string($item->tags)) {
                        $tags = array_map(function ($t) {
                          return trim($t, ' []"');
                        }, explode(',', $item->tags));
                      } else {
                        $tags = (array) $item->tags;
                      }
                    @endphp
                    @foreach($tags as $tag)
                      @if(!empty(trim($tag)))
                        <span
                          class="px-3 py-1 bg-transparent text-slate-600 text-[9px] font-black uppercase tracking-widest rounded-lg border border-slate-100 group-hover:border-[#BFDBFE] group-hover:bg-[#EBF5FF] transition-all">
                          #{{ trim($tag) }}
                        </span>
                      @endif
                    @endforeach
                  </div>

                  <div class="pt-6 flex items-center justify-between relative bg-white/50 backdrop-blur-sm">

                    <img src="{{ asset('assets/images/others/logo-header.png') }}"
                      class="absolute bottom-[-30px] right-[-20px] opacity-[0.06] w-[250px] pointer-events-none -z-10 group-hover:scale-110 group-hover:opacity-[0.1] transition-all duration-700"
                      alt="MEHR Website Design and Software Services logo">
                  </div>
                </div>

              </article>
            </a>
          @endforeach

        </div>
      </div>
    </section>

    <div class="mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
      <div id="capabilities" class="items-center gap-16 grid grid-cols-1 lg:grid-cols-2 py-5 lg:py-10" data-aos="fade-up">
        <div
          class="top-0 left-0 absolute bg-blue-400/40 blur-[120px] rounded-full w-[300px] lg:w-[500px] h-[400px] lg:h-[850px] pointer-events-none">
        </div>
        <div>
          <div
            class="inline-flex items-center gap-2 bg-[#EBF5FF] mb-6 px-3 py-1.5 rounded-full font-bold text-[#002f7d] text-xs tracking-wide">
            <i class="animate-spin-slow fa-solid fa-globe-americas"></i>
            <span>Global Technology Excellence</span>
          </div>

          <h2 class="mb-8 font-[900] text-slate-950 text-4xl md:text-6xl leading-[1.1] tracking-tighter">
            Innovation That <br>
          </h2>

          <p class="mb-12 max-w-lg font-medium text-slate-500 text-xl leading-relaxed">
            We go beyond traditional outsourcing by building lasting
            <span class="font-bold text-slate-950 decoration-[#BFDBFE] decoration-4 underline underline-offset-4">
              Technology Partnerships
            </span>
            that give businesses access to specialized expertise, flexible development teams, and scalable solutions
            without geographical limitations.
          </p>
        </div>

        <div class="gap-6 grid grid-cols-1 sm:grid-cols-2">
          <div
            class="group bg-white shadow-blue-500/5 shadow-xl p-8 border border-slate-100 rounded-[1rem] transition-all hover:-translate-y-2 duration-500">
            <div
              class="flex justify-center items-center bg-[#EBF5FF] group-hover:bg-[#002f7d] shadow-inner mb-6 rounded-2xl w-12 h-12 text-[#007fcf] group-hover:text-white transition-all duration-500">
              <i class="text-xl fa-solid fa-users-gear"></i>
            </div>
            <h3 class="mb-3 font-black text-slate-950 text-lg">Managed Teams</h3>
            <p class="text-slate-500 text-sm italic leading-relaxed">Dedicated developers integrated directly into your
              workflow.</p>
          </div>
          <div
            class="group bg-white shadow-blue-500/5 shadow-xl p-8 border border-slate-100 rounded-[1rem] transition-all hover:-translate-y-2 duration-500">
            <div
              class="flex justify-center items-center bg-[#EBF5FF] group-hover:bg-[#002f7d] shadow-inner mb-6 rounded-2xl w-12 h-12 text-[#007fcf] group-hover:text-white transition-all duration-500">
              <i class="text-xl fa-solid fa-check-double"></i>
            </div>
            <h3 class="mb-3 font-black text-slate-950 text-lg">Quality First</h3>
            <p class="text-slate-500 text-sm leading-relaxed">Rigorous code reviews and automated testing protocols.</p>
          </div>
          <div
            class="group bg-[#002f7d] shadow-2xl p-8 border border-white-800 rounded-[1rem] transition-all hover:-translate-y-2 duration-500">
            <div class="flex justify-center items-center bg-white/10 mb-6 rounded-2xl w-12 h-12 text-white">
              <i class="fa-layer-group text-xl fa-solid"></i>
            </div>
            <h3 class="mb-3 font-black text-white text-lg">Modern Stack</h3>
            <p class="text-white text-sm leading-relaxed">Expertise in Laravel, React, AI/ML,Python,Angular,ReactNative
              and Flutter.</p>
          </div>
          <div
            class="group bg-[#007fcf] shadow-blue-500/20 shadow-xl p-8 border border-[#0086f6] rounded-[1rem] transition-all hover:-translate-y-2 duration-500">
            <div class="flex justify-center items-center bg-white/20 mb-6 rounded-2xl w-12 h-12 text-white">
              <i class="text-xl fa-solid fa-clock"></i>
            </div>
            <h3 class="mb-3 font-black text-white text-lg">24/7 Sync</h3>
            <p class="text-white text-sm leading-relaxed">Overlap-friendly schedules across USA, MEA,Malaysia and Canada.
            </p>
          </div>

        </div>
      </div>
    </div>

  </div>

@endsection