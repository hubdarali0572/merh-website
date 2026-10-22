@extends('Frontend.frontend-layout.app')

@section('title', 'Software Development Services | Offshore AI, Web & Mobile Teams')
@section('description', 'Explore MEHR Website Design and Software Services for AI, web, mobile, and product engineering with dedicated offshore teams tuned for fast-moving startups.')
@section('content')
 @php
    $services = [
      [
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="14" rx="2"/><path d="M8 22h8"/><path d="M12 18v4"/><path d="m8 10 2 2 5-5"/></svg>',
        'title' => 'Custom Web Design and Development',
        'desc' => 'Build modern, visually appealing, and user-friendly websites tailored to your brand, business goals, and customer needs.',
      ],
      [
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m16 18 6-6-6-6"/><path d="m8 6-6 6 6 6"/><path d="m14 4-4 16"/></svg>',
        'title' => 'Laravel and Custom Software Development',
        'desc' => 'Develop secure, scalable web applications, business systems, and custom software using Laravel and modern development technologies.',
      ],
      [
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="2" width="14" height="20" rx="2"/><path d="M12 18h.01"/><path d="M2 8h2"/><path d="M20 8h2"/></svg>',
        'title' => 'Mobile App Development',
        'desc' => 'Create intuitive Android and iOS applications with React Native and Flutter for seamless experiences across mobile devices.',
      ],
      [
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18"/><path d="M9 21V9"/></svg>',
        'title' => 'E-Commerce Development with Shopify',
        'desc' => 'Build professional online stores with product management, secure checkout, responsive layouts, and smooth shopping experiences.',
      ],
      [
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/><path d="m8 11 2 2 4-4"/></svg>',
        'title' => 'WordPress Website Development',
        'desc' => 'Create flexible, easy-to-manage WordPress websites, business portals, and custom themes designed around your requirements.',
      ],
      [
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-11V5l-8-3-8 3v6c0 7 8 11 8 11z"/><path d="m9 12 2 2 4-4"/></svg>',
        'title' => 'MERN Stack Application Development',
        'desc' => 'Build dynamic, full-stack web applications using MongoDB, Express.js, React, and Node.js for scalable digital products.',
      ],
      [
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v20"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>',
        'title' => 'Python Development and Automation',
        'desc' => 'Develop practical Python solutions, automate repetitive workflows, and build backend services that improve business efficiency.',
      ],
      [
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="M7 8h10"/><path d="M7 12h6"/><path d="M7 16h8"/></svg>',
        'title' => 'Zoho Solutions and Business Integration',
        'desc' => 'Streamline business operations with Zoho tools, workflow automation, CRM configuration, and integrations tailored to your processes.',
      ],
      [
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18"/><path d="M9 3v18"/><path d="m14 14 2 2 4-4"/></svg>',
        'title' => 'Responsive Design, Optimization and Maintenance',
        'desc' => 'Keep websites and applications fast, mobile-friendly, secure, and reliable with performance optimization, regular updates, and ongoing technical support.',
      ],
    ];
@endphp

  <div class="min-h-screen flex flex-col bg-white" style="background: linear-gradient(180deg, #eff6ff 0, #ffffff 720px) no-repeat;">


    <main class="flex-1 pt-28 pb-20">
      <section class="relative overflow-hidden">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center py-10 lg:py-16">

            <!-- Left Content -->
            <div class="lg:col-span-7 max-w-3xl">

              <div
                class="inline-flex items-center gap-2 rounded-full border border-[#BFDBFE] bg-[#EBF5FF] px-4 py-2 text-sm font-semibold text-[#002f7d] mb-6">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                  <circle cx="12" cy="12" r="10" />
                  <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20" />
                  <path d="M2 12h20" />
                </svg>
                Professional Web Services for U.S. Businesses
              </div>

              <h1 class="text-4xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight text-balance mb-6 text-[#0F172A]">
                Custom Web, Mobile App & Software Development
              </h1>

              <p class="text-lg sm:text-xl text-slate-500 leading-relaxed mb-8 max-w-2xl">
                MEHR Website Design and Software Services helps businesses across the USA build powerful digital solutions
                through custom web development, mobile app development, and business software integrations. We specialize
                in WordPress, Laravel, Shopify, Zoho, React Native, Flutter, MERN Stack, and Python to create responsive
                websites, user-friendly mobile applications, and scalable software tailored to your business needs. Our
                focus is on delivering reliable technology solutions that improve efficiency, enhance user experiences,
                and support long-term business growth.
              </p>

              <div class="flex flex-col sm:flex-row gap-4">
                <a href="#services-list"
                  class="inline-flex items-center justify-center gap-2 rounded-xl bg-[#002f7d] hover:bg-[#007fcf] px-6 py-3 font-semibold text-white transition-all shadow-lg shadow-blue-200">
                  Explore Our Services
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                    <path d="M5 12h14" />
                    <path d="m12 5 7 7-7 7" />
                  </svg>
                </a>

                <a href="#contact-form"
                  class="inline-flex items-center justify-center gap-2 rounded-xl border border-slate-200 bg-white px-6 py-3 font-semibold text-[#0F172A] transition-colors hover:border-[#0086f6] hover:text-[#0086f6]">
                  Discuss Your Project
                </a>
              </div>
            </div>

            <!-- Right Feature Cards -->
            <div class="lg:col-span-5">
              <div class="rounded-2xl border border-slate-100 bg-white p-6 shadow-2xl shadow-black/5">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                  <!-- Website Design -->
                  <div class="rounded-2xl bg-slate-50 p-5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                      class="h-6 w-6 text-[#0086f6] mb-3">
                      <rect x="3" y="4" width="18" height="14" rx="2" />
                      <path d="M8 22h8" />
                      <path d="M12 18v4" />
                    </svg>

                    <p class="text-xs font-bold text-slate-400 uppercase">
                      Creative Design
                    </p>
                    <p class="font-bold text-[#0F172A]">
                      Modern User Experiences
                    </p>
                  </div>

                  <!-- Web Development -->
                  <div class="rounded-2xl bg-slate-50 p-5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                      class="h-6 w-6 text-[#0086f6] mb-3">
                      <path d="m16 18 6-6-6-6" />
                      <path d="m8 6-6 6 6 6" />
                      <path d="m14.5 4-5 16" />
                    </svg>

                    <p class="text-xs font-bold text-slate-400 uppercase">
                      Reliable Technology
                    </p>
                    <p class="font-bold text-[#0F172A]">
                      Custom Web Development
                    </p>
                  </div>

                  <!-- Main Highlight -->
                  <div class="md:col-span-2 rounded-2xl bg-[#002f7d] p-6 text-white">
                    <p class="text-xs uppercase tracking-wider opacity-80 font-bold">
                      Our Focus
                    </p>

                    <p class="mt-2 text-2xl font-bold leading-tight">
                      High-Performance Websites Built for Business Growth
                    </p>
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
                class="group border border-slate-100 bg-white p-8 shadow-sm rounded-xl transition-all duration-300 ease-in-out hover:-translate-y-2 hover:shadow-xl hover:border-[#0086f6] hover:cursor-pointer">

                <div class="mb-6 inline-flex h-14 w-14 items-center justify-center rounded-2xl bg-[#EBF5FF] text-[#007fcf]">
                  {!! $service['icon'] !!}
                </div>
                <h2 class="text-lg font-bold mb-3 text-balance text-[#0F172A]">{{ $service['title'] }}</h2>
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
                <p class="text-xs uppercase tracking-[0.2em] text-slate-400 mb-4 font-bold">
                  Professional Web & App Services
                </p>

                <h2 class="text-3xl font-bold mb-4">
                  Custom Web, Mobile App & Software Solutions
                </h2>

                <p class="text-slate-400 leading-relaxed">
                  Transform your ideas into a professional online presence with custom website design and development. We
                  build responsive, user-friendly, and high-performance websites that strengthen your brand and support
                  business growth across the USA.
                </p>
              </div>

              <div class="flex justify-center items-center py-8" data-aos="fade-up">
                <img src="{{ asset('assets/images/others/logo-header.png') }}"
                  class="w-full max-w-[500px] h-auto object-contain opacity-[0.08] pointer-events-none"
                  alt="MEHR Website Design and Software Services logo">
              </div>
            </div>

            <div class="lg:col-span-7">
              <div class="rounded-2xl border border-slate-100 bg-white p-10 shadow-xl">
                <h3 class="text-3xl font-extrabold text-[#0F172A] mb-2">
                  Turn Your Vision into a Powerful Website
                </h3>

                <p class="text-slate-500 mb-10">
                  Partner with our experts to create modern, responsive, and high-performance websites tailored to your
                  business objectives and designed for long-term digital success.
                </p>

                <form action="{{ route('studentContact.store') }}" method="POST" class="space-y-6">
                  @csrf

                  @if (session('success'))
                    <p role="status" class="rounded-lg bg-green-50 p-4 text-green-800">{{ session('success') }}</p>
                  @endif
                  @if ($errors->any())
                    <div role="alert" class="rounded-lg border border-red-200 bg-red-50 p-4 text-red-800">
                      <p>Please correct the following before submitting:</p>
                      <ul class="mt-2 list-inside list-disc">
                        @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                        @endforeach
                      </ul>
                    </div>
                  @endif

                  <div class="gap-6 grid grid-cols-1 md:grid-cols-2">

                    <div data-aos="fade-up" data-aos-delay="100">
                      <label for="services-contact-name" class="block mb-2 font-bold text-slate-700 text-sm">Full Name <span
                          class="text-[#0086f6]">*</span></label>
                      <input id="services-contact-name" type="text" name="name" value="{{ old('name') }}" placeholder="Jane Doe" required
                        class="bg-slate-50/50 px-5 py-4 border border-slate-200 focus:border-[#0086f6] rounded-xl outline-none focus:ring-[#0086f6] focus:ring-1 w-full transition-all">
                    </div>

                    <div data-aos="fade-up" data-aos-delay="250">
                      <label for="services-contact-email" class="block mb-2 font-bold text-slate-700 text-sm">Work Email <span
                          class="text-[#0086f6]">*</span></label>
                      <input id="services-contact-email" type="email" name="email" value="{{ old('email') }}" placeholder="jane@company.ca" required
                        class="bg-slate-50/50 px-5 py-4 border border-slate-200 focus:border-[#0086f6] rounded-xl outline-none focus:ring-[#0086f6] focus:ring-1 w-full transition-all">
                    </div>

                  </div>

                  <div data-aos="fade-up" data-aos-delay="350">
                    <label for="services-contact-company" class="block mb-2 font-bold text-slate-700 text-sm">Company Name <span
                        class="text-[#0086f6]">*</span></label>
                    <input id="services-contact-company" type="text" name="company_name" value="{{ old('company_name') }}" placeholder="Acme Tech Inc." required
                      class="bg-slate-50/50 px-5 py-4 border border-slate-200 focus:border-[#0086f6] rounded-xl outline-none focus:ring-[#0086f6] focus:ring-1 w-full transition-all">
                  </div>

                  <div data-aos="fade-up" data-aos-delay="450">
                    <label for="services-contact-message" class="block mb-2 font-bold text-slate-700 text-sm">How can we help?</label>
                    <textarea id="services-contact-message" rows="4" name="message" placeholder="Tell us about your current engineering needs..."
                      class="bg-slate-50/50 px-5 py-4 border border-slate-200 focus:border-[#0086f6] rounded-xl outline-none focus:ring-[#0086f6] focus:ring-1 w-full transition-all resize-none">{{ old('message') }}</textarea>
                  </div>

                  {{-- Recaptcha --}}

                  <div class="row" data-aos="fade-up" data-aos-delay="550">
                    <div class="col-md-12">
                      <div class="form-group">
                        <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}"></div>

                        @if ($errors->has('g-recaptcha-response'))
                          <span class="text-[#0086f6] text-sm">
                            {{ $errors->first('g-recaptcha-response') }}
                          </span>
                        @endif
                      </div>
                    </div>
                  </div>

                  <button type="submit" data-aos="fade-up" data-aos-delay="650"
                    class="flex justify-center items-center gap-3 bg-[#002f7d] hover:bg-[#007fcf] shadow-lg shadow-blue-200 py-5 rounded-full w-full font-black text-md text-white lg:text-lg transition-all">
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