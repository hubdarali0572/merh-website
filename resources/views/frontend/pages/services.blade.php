@extends('Frontend.frontend-layout.app')

@section('title', 'Software Development Services | Offshore AI, Web & Mobile Teams')
@section('description', 'Explore SmartAI Soft services for AI, web, mobile, and product engineering with dedicated offshore teams tuned for fast-moving startups.')
@section('content')
  @php
    $services = [
      [
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 8V4H8"/><rect width="16" height="12" x="4" y="8" rx="2"/><path d="M2 14h2"/><path d="M20 14h2"/><path d="M15 13v2"/><path d="M9 13v2"/></svg>',
        'title' => 'Offshore AI development team for U.S. startups',
        'desc' => 'Build product-ready AI features with a dedicated team aligned to your roadmap and delivery cadence.',
      ],
      [
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m12 3-1.912 5.813a2 2 0 0 1-1.275 1.275L3 12l5.813 1.912a2 2 0 0 1 1.275 1.275L12 21l1.912-5.813a2 2 0 0 1 1.275-1.275L21 12l-5.813-1.912a2 2 0 0 1-1.275-1.275L12 3Z"/><path d="M5 3v4"/><path d="M19 17v4"/><path d="M3 5h4"/><path d="M17 19h4"/></svg>',
        'title' => 'Custom LLM integration services for businesses',
        'desc' => 'Connect your workflows with secure LLM systems, prompt tooling, and practical AI automation.',
      ],
      [
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="14" height="20" x="5" y="2" rx="2" ry="2"/><path d="M12 18h.01"/></svg>',
        'title' => 'Hire remote React Native developers in Pakistan',
        'desc' => 'Add mobile engineering capacity fast with experienced React Native talent in a predictable model.',
      ],
    ];
  @endphp

  <div class="min-h-screen flex flex-col bg-white">


    <main class="flex-1 pt-28 pb-20">
      <section class="relative overflow-hidden bg-white">

        <div class="absolute inset-0 z-10 pointer-events-none overflow-hidden mt-5">
          <div
            class="absolute -top-[500px] left-1/2 -translate-x-1/2 w-[1000px] h-[600px] bg-[#FF0055]/20 blur-[103px] rounded-full">
          </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center py-10 lg:py-16">
            <div class="lg:col-span-7 max-w-3xl">
            
              <div
                class="inline-flex items-center gap-2 rounded-full border border-[#FFDEE9] bg-[#FFF0F5] px-4 py-2 text-sm font-semibold text-[#FF0055] mb-6">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                  <circle cx="12" cy="12" r="10" />
                  <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20" />
                  <path d="M2 12h20" />
                </svg>
                Services for U.S., Canada, Malaysia & MEA
              </div>
              <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-balance mb-6 text-[#0F172A]">
                Engineering services built for fast-moving teams.
              </h1>
              <p class="text-lg sm:text-xl text-slate-500 leading-relaxed mb-8 max-w-2xl">
                SmartAI Soft helps startups and businesses launch AI products, integrate LLMs, and scale mobile apps with
                experienced offshore teams.
              </p>
              <div class="flex flex-col sm:flex-row gap-4">
                <a href="#services-list"
                  class="inline-flex items-center justify-center gap-2 rounded-xl bg-[#FF0055] px-6 py-3 font-semibold text-white transition-all hover:opacity-90 shadow-lg shadow-[#FF0055]/20">
                  Explore services
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                    <path d="M5 12h14" />
                    <path d="m12 5 7 7-7 7" />
                  </svg>
                </a>
                <a href="#contact-form"
                  class="inline-flex items-center justify-center gap-2 rounded-xl border border-slate-200 bg-white px-6 py-3 font-semibold text-[#0F172A] transition-colors hover:border-[#FF0055] hover:text-[#FF0055]">
                  Talk to us
                </a>
              </div>
            </div>

            <div class="lg:col-span-5">
              <div class="rounded-2xl border border-slate-100 bg-white p-6 shadow-2xl shadow-black/5">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                  <div class="rounded-2xl bg-slate-50 p-5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                      class="h-6 w-6 text-[#FF0055] mb-3">
                      <path
                        d="m12.83 2.18a2 2 0 0 0-1.66 0L2.6 6.08a1 1 0 0 0 0 1.83l8.58 3.91a2 2 0 0 0 1.66 0l8.58-3.9a1 1 0 0 0 0-1.83Z" />
                      <path d="m22 17.65-9.17 4.16a2 2 0 0 1-1.66 0L2 17.65" />
                      <path d="m22 12.65-9.17 4.16a2 2 0 0 1-1.66 0L2 12.65" />
                    </svg>
                    <p class="text-xs font-bold text-slate-400 uppercase">Flexible teams</p>
                    <p class="font-bold text-[#0F172A]">Dedicated delivery</p>
                  </div>

                  <div class="rounded-2xl bg-slate-50 p-5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                      class="h-6 w-6 text-[#FF0055] mb-3">
                      <path d="m18 16 4-4-4-4" />
                      <path d="m6 8-4 4 4 4" />
                      <path d="m14.5 4-5 16" />
                    </svg>
                    <p class="text-xs font-bold text-slate-400 uppercase">Modern stack</p>
                    <p class="font-bold text-[#0F172A]">React, AI, mobile</p>
                  </div>

                  <div class="md:col-span-2 rounded-2xl bg-[#FF0055] p-6 text-white">
                    <p class="text-xs uppercase tracking-wider opacity-80 font-bold">Best fit</p>
                    <p class="mt-2 text-2xl font-bold leading-tight">Offshore engineering for growth-stage teams</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="services-list" class="py-6 lg:py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-3 gap-6">
            @foreach($services as $service)
              <div
                class="group border border-slate-100 bg-white p-8 shadow-sm rounded-2xl transition-all duration-300 ease-in-out hover:-translate-y-2 hover:shadow-xl hover:border-[#f43f5e] hover:cursor-pointer">
              
                <div class="mb-6 inline-flex h-14 w-14 items-center justify-center rounded-2xl bg-[#FFF0F5] text-[#FF0055]">
                  {!! $service['icon'] !!}
                </div>
                <h2 class="text-2xl font-bold mb-3 text-balance text-[#0F172A]">{{ $service['title'] }}</h2>
                <p class="text-slate-500 leading-relaxed">{{ $service['desc'] }}</p>
              </div>
            @endforeach
          </div>
        </div>
      </section>

      <section id="contact-form" class="py-8 lg:py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
            <div class="lg:col-span-5 flex flex-col gap-8">
              <div class="rounded-2xl bg-[#0F172A] p-10 text-white shadow-2xl">
                <p class="text-xs uppercase tracking-[0.2em] text-slate-400 mb-4 font-bold">Start here</p>
                <h2 class="text-3xl font-bold mb-4">Need a team that ships?</h2>
                <p class="text-slate-400 leading-relaxed">
                  Tell us what you’re building and we’ll recommend the best service and team structure.
                </p>
              </div>
              <div class="flex justify-center items-center py-8" data-aos="fade-up">
                <img src="{{ asset('assets/images/others/logo-header.png') }}"
                  class="w-full max-w-[500px] h-auto object-contain opacity-[0.08] pointer-events-none"
                  alt="smartai soft logo">
              </div>

            </div>


            <div class="lg:col-span-7">
              <div class="rounded-2xl border border-slate-100 bg-white p-10 shadow-xl">
                <h3 class="text-3xl font-extrabold text-[#0F172A] mb-2">Let’s talk about your project</h3>
                <p class="text-slate-500 mb-10">Book a discovery call and we’ll recommend the right team setup.</p>


                <form action="{{ route('studentContact.store') }}" method="POST" class="space-y-6">
                  @csrf

                  <div class="gap-6 grid grid-cols-1 md:grid-cols-2">

                    <div data-aos="fade-up" data-aos-delay="100">
                      <label class="block mb-2 font-bold text-slate-700 text-sm">Full Name <span
                          class="text-[#f43f5e]">*</span></label>
                      <input type="text" name="name" placeholder="Jane Doe" required
                        class="bg-slate-50/50 px-5 py-4 border border-slate-200 focus:border-[#f43f5e] rounded-xl outline-none focus:ring-[#f43f5e] focus:ring-1 w-full transition-all">
                    </div>

                    <div data-aos="fade-up" data-aos-delay="250">
                      <label class="block mb-2 font-bold text-slate-700 text-sm">Work Email <span
                          class="text-[#f43f5e]">*</span></label>
                      <input type="email" name="email" placeholder="jane@company.ca" required
                        class="bg-slate-50/50 px-5 py-4 border border-slate-200 focus:border-[#f43f5e] rounded-xl outline-none focus:ring-[#f43f5e] focus:ring-1 w-full transition-all">
                    </div>

                  </div>

                  <div data-aos="fade-up" data-aos-delay="350">
                    <label class="block mb-2 font-bold text-slate-700 text-sm">Company Name <span
                        class="text-[#f43f5e]">*</span></label>
                    <input type="text" name="company_name" placeholder="Acme Tech Inc." required
                      class="bg-slate-50/50 px-5 py-4 border border-slate-200 focus:border-[#f43f5e] rounded-xl outline-none focus:ring-[#f43f5e] focus:ring-1 w-full transition-all">
                  </div>

                  <div data-aos="fade-up" data-aos-delay="450">
                    <label class="block mb-2 font-bold text-slate-700 text-sm">How can we help?</label>
                    <textarea rows="4" name="message" placeholder="Tell us about your current engineering needs..."
                      class="bg-slate-50/50 px-5 py-4 border border-slate-200 focus:border-[#f43f5e] rounded-xl outline-none focus:ring-[#f43f5e] focus:ring-1 w-full transition-all resize-none"></textarea>
                  </div>

                  {{-- Recaptcha --}}
                  
                    <div class="row"data-aos="fade-up" data-aos-delay="550">
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}"></div>

                                @if ($errors->has('g-recaptcha-response'))
                                    <span class="text-[#f43f5e] text-sm">
                                        {{ $errors->first('g-recaptcha-response') }}
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>

                  <button type="submit"  data-aos="fade-up" data-aos-delay="650"
                    class="flex justify-center items-center gap-3 bg-[#f43f5e] shadow-lg shadow-pink-200 py-5 rounded-full w-full font-black text-md text-white lg:text-lg transition-all">
                    Submit
                  </button>
                  <p class="font-bold text-[11px] text-slate-400 text-center uppercase tracking-widest">
                    No commitment required. We respect your inbox.
                  </p>

                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
  </div>
@endsection