@extends('Frontend.frontend-layout.app')

@section('title', 'Insights & Tech Blog | SmartAI Soft')
@section('description', 'Read SmartAI Soft’s insights on offshore engineering, AI, product delivery, and startup growth from our team of experts.')
@section('content')


  <div class="min-h-screen bg-white custom-font text-slate-500 overflow-hidden">

    <section class="relative overflow-hidden bg-white pt-32 pb-24">
    
      <div  class="top-0 right-0 absolute bg-pink-400/40 blur-[120px] rounded-full w-[300px] lg:w-[700px] h-[400px] lg:h-[750px] pointer-events-none">
      </div>
      <div class="mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl mt-6">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 xl:gap-10 items-start">

          <div class="lg:col-span-7" data-aos="fade-right">
            <h1 class="mb-8 font-black text-slate-900 text-4xl md:text-5xl leading-[0.9] tracking-tighter">
              Transform Ideas Into <br>
              <span class="text-rose-500 italic">Intelligent Solutions.</span><br>
              <span class="text-slate-400">Accelerate Business Growth.</span>
            </h1>

            <p class="text-slate-500 text-xl leading-relaxed max-w-xl mb-12 font-medium">
              We help startups, enterprises, and growing businesses build innovative software, AI-powered applications,
              and scalable digital solutions that drive efficiency, innovation, and long-term success.
            </p>
           <div class="relative p-10 rounded-2xl bg-slate-950 text-white overflow-hidden shadow-2xl">
        <img src="{{ asset('assets/images/others/logo-header.png') }}"
            class="absolute -right-1 bottom-5 w-64 opacity-20  grayscale invert rotate-12 pointer-events-none"
            alt="smartai soft logo">
        <div class="relative z-10">
            <div class="flex items-center gap-4 mb-6">
                <span class="h-px w-8 bg-rose-500"></span>
                <p class="text-rose-400 font-black text-[10px] uppercase tracking-[0.3em]">
                    Executive Summary
                </p>
            </div>

            <p class="text-2xl md:text-3xl font-medium leading-tight mb-8">
                "Technology is no longer a support function—it's the foundation of
                <span class="text-rose-400 font-bold">sustainable business growth.</span>"
            </p>

            <div class="flex items-center gap-4">
                <img src="https://ui-avatars.com/api/?name=SmartAI+Soft&background=f43f5e&color=fff"
                    class="w-10 h-10 rounded-full border-2 border-white/10"
                    alt="Author">

                <div>
                    <p class="text-xs font-black uppercase tracking-widest text-white leading-none mb-1">
                        SmartAI Soft
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
            <div class="bg-white rounded-2xl border border-slate-100 p-3 shadow-[0_30px_70px_-20px_rgba(0,0,0,0.08)]">
              <div class="bg-slate-50/50 rounded-2xl overflow-hidden">
                <div class="p-8 pb-6 border-b border-white">
                  <div class="flex items-center gap-2 mb-2">
                      <span class="w-2 h-2 bg-rose-500 rounded-full animate-pulse"></span>
                      <p class="text-rose-500 font-black text-[10px] uppercase tracking-[0.3em]">Knowledge Base</p>
                  </div>
                  <h3 class="font-black text-slate-900 text-3xl tracking-tighter">
                      Related <span class="text-slate-400 font-light italic">Insights</span>
                  </h3>
                </div>

                <div class="divide-y divide-slate-100/50">
                  @foreach($blogs->take(5) as $blog)
                    <a href="{{ route('frontend.show', $blog->slug) }}">
                    <span  
                      class="group flex items-center gap-6 p-4 transition-all duration-500 hover:bg-white">
                      
                      <div class="relative">
                          <span class="text-sm font-black text-slate-200 group-hover:text-rose-500 transition-colors duration-300 italic">
                              0{{ $loop->iteration }}
                          </span>
                          <div class="absolute -left-3 top-1/2 -translate-y-1/2 w-1 h-0 bg-rose-500 rounded-full group-hover:h-4 transition-all duration-500"></div>
                      </div>

                      <div class="flex-grow">
                        <div class="flex items-center gap-3 mb-1.5">
                            <span class="text-[9px] font-bold text-slate-400 uppercase tracking-widest">Blog Title</span>
                       </div>
                        <h4 class="font-bold text-slate-600 group-hover:text-slate-950 text-[15px] leading-snug transition-colors duration-300 line-clamp-2">
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
        <div class="absolute top-[-10%] left-[-10%] w-[40%] h-[40%] rounded-full bg-rose-50 blur-[120px]"></div>
        <div class="absolute bottom-[-10%] right-[-10%] w-[40%] h-[40%] rounded-full bg-indigo-50 blur-[120px]"></div>
      </div>

      <div class="mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
          @foreach($blogs as $item)
            <a href="{{ route('frontend.show', $item->slug) }}">
              <article
                  class="group flex flex-col h-full bg-white border border-slate-200/60 rounded-3xl overflow-hidden relative transition-all duration-500 ease-out 
                        hover:scale-[1.03] hover:-translate-y-2 hover:z-20 
                        hover:border-rose-500 hover:shadow-[0_30px_60px_-15px_rgba(244,63,94,0.2)]"
                  data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                  
                  <div class="h-1.5 w-full bg-gradient-to-r from-rose-500 to-orange-400"></div>

                  <div class="p-8 lg:p-10 flex flex-col flex-grow relative">
                      <div class="mb-6 flex items-center justify-between">
                          <div class="flex items-center gap-3 text-[10px] font-bold text-slate-400 uppercase tracking-[0.2em]">
                              <span class="flex items-center gap-1.5">
                                  <i class="fa-regular fa-calendar text-rose-500"></i>
                                  {{ $item->created_at->format('M d, Y') }}
                              </span>
                              <span class="w-1 h-1 bg-slate-300 rounded-full"></span>
                              <span class="flex items-center gap-1.5">
                                  <i class="fa-regular fa-clock text-rose-500"></i>
                                   {{ \Carbon\Carbon::parse($item->created_at)->diffForHumans() }}
                              </span>
                          </div>
                      </div>

                      <h3 class="text-2xl font-black text-slate-900 leading-snug mb-4 tracking-tight group-hover:text-rose-600 transition-colors duration-300">
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
                                  <span class="px-3 py-1 bg-transparent text-slate-600 text-[9px] font-black uppercase tracking-widest rounded-lg border border-slate-100 group-hover:border-rose-200 group-hover:bg-rose-50 transition-all">
                                      #{{ trim($tag) }}
                                  </span>
                              @endif
                          @endforeach
                      </div>

                      <div class="pt-6 flex items-center justify-between relative bg-white/50 backdrop-blur-sm">
                          
                          <img src="{{ asset('assets/images/others/logo-header.png') }}"
                              class="absolute bottom-[-30px] right-[-20px] opacity-[0.06] w-[250px] pointer-events-none -z-10 group-hover:scale-110 group-hover:opacity-[0.1] transition-all duration-700"
                              alt="smartai soft logo">
                      </div>
                  </div>

              </article>
              </a>
          @endforeach

        </div>
      </div>
    </section>
    
    <div class="mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
      <div id="capabilities" class="items-center gap-16 grid grid-cols-1 lg:grid-cols-2 py-5 lg:py-24" data-aos="fade-up">
        <div
          class="top-0 left-0 absolute bg-pink-400/40 blur-[120px] rounded-full w-[300px] lg:w-[500px] h-[400px] lg:h-[850px] pointer-events-none">
        </div>
          <div>
          <div
              class="inline-flex items-center gap-2 bg-[#f43f5e]-50 mb-6 px-3 py-1.5 rounded-full font-bold text-[#f43f5e] text-xs tracking-wide">
            <i class="animate-spin-slow fa-solid fa-globe-americas"></i>
            <span>Engineering Excellence</span>
            </div>
          <h2 class="mb-8 font-[900] text-slate-950 text-4xl md:text-6xl leading-[1.1] tracking-tighter">
            Global Talent. <br>
            <span class="block relative h-[70px] md:h-[110px] overflow-hidden text-[#f43f5e]">

              <span id="text-typing-talent" class="block flex items-center w-full h-full">
              </span>
              <svg class="bottom-0 left-0 absolute w-full h-3 text-[#f43f5e]/20" viewBox="0 0 100 10"
                preserveAspectRatio="none">
                <path d="M0 5 Q 50 10 100 5" stroke="currentColor" stroke-width="8" fill="transparent" />
              </svg>
            </span>
          </h2>
          <p class="mb-12 max-w-lg font-medium text-slate-500 text-xl leading-relaxed">
            We don't just provide developers; we build long-term <span
              class="font-bold text-slate-950 decoration-[#f43f5e]-100 decoration-4 underline underline-offset-4">Technical
              Partnerships</span> that eliminate local hiring constraints.
          </p>
          <div class="gap-6 grid grid-cols-2">
            <div
              class="group relative bg-slate-50 p-8 border border-slate-100 hover:border-[#f43f5e] rounded-[1rem] overflow-hidden transition-all duration-500">
              <div
                class="-top-4 -right-4 absolute bg-[#f43f5e]/5 rounded-full w-12 h-12 group-hover:scale-[3] transition-transform duration-700">
              </div>
              <h4 class="z-10 relative font-black text-slate-950 group-hover:text-[#f43f5e] text-4xl transition-colors">
                5+</h4>
              <p class="z-10 relative mt-2 font-black text-[10px] text-slate-400 uppercase tracking-widest">Engineering
                Hubs</p>
            </div>
            <div
              class="group relative bg-slate-50 p-8 border border-slate-100 hover:border-[#f43f5e] rounded-[1rem] overflow-hidden transition-all duration-500">
              <div
                class="-top-4 -right-4 absolute bg-[#f43f5e]/5 rounded-full w-12 h-12 group-hover:scale-[3] transition-transform duration-700">
                </div>
              <h4 class="z-10 relative font-black text-slate-950 group-hover:text-[#f43f5e] text-4xl transition-colors">
                  93% </h4>
              <p class="z-10 relative mt-2 font-black text-[10px] text-slate-400 uppercase tracking-widest">Client
                Retention</p>
            </div>
          </div>
        </div>
        <div class="gap-6 grid grid-cols-1 sm:grid-cols-2">
          <div
            class="group bg-white shadow-[#f43f5e]-500/5 shadow-xl p-8 border border-slate-100 rounded-[1rem] transition-all hover:-translate-y-2 duration-500">
              <div
              class="flex justify-center items-center bg-[#f43f5e]-50 group-hover:bg-[#f43f5e] shadow-inner mb-6 rounded-2xl w-12 h-12 text-[#f43f5e] group-hover:text-white transition-all duration-500">
              <i class="text-xl fa-solid fa-users-gear"></i>
            </div>
            <h3 class="mb-3 font-black text-slate-950 text-lg">Managed Teams</h3>
            <p class="text-slate-500 text-sm italic leading-relaxed">Dedicated developers integrated directly into your
              workflow.</p>
          </div>
          <div
              class="group bg-white shadow-[#f43f5e]-500/5 shadow-xl p-8 border border-slate-100 rounded-[1rem] transition-all hover:-translate-y-2 duration-500">
            <div
              class="flex justify-center items-center bg-[#f43f5e]-50 group-hover:bg-[#f43f5e] shadow-inner mb-6 rounded-2xl w-12 h-12 text-[#f43f5e] group-hover:text-white transition-all duration-500">
              <i class="text-xl fa-solid fa-check-double"></i>
            </div>
            <h3 class="mb-3 font-black text-slate-950 text-lg">Quality First</h3>
            <p class="text-slate-500 text-sm leading-relaxed">Rigorous code reviews and automated testing protocols.</p>
          </div>
          <div
            class="group bg-[#f43f5e] shadow-2xl p-8 border border-white-800 rounded-[1rem] transition-all hover:-translate-y-2 duration-500">
            <div class="flex justify-center items-center bg-white/10 mb-6 rounded-2xl w-12 h-12 text-white">
              <i class="fa-layer-group text-xl fa-solid"></i>
            </div>
            <h3 class="mb-3 font-black text-white text-lg">Modern Stack</h3>
            <p class="text-white text-sm leading-relaxed">Expertise in Laravel, React, AI/ML,Python,Angular,ReactNative
              and Flutter.</p>
          </div>
          <div
              class="group bg-[#f43f5e] shadow-[#f43f5e]/20 shadow-xl p-8 border border-[#f43f5e]-500 rounded-[1rem] transition-all hover:-translate-y-2 duration-500">
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