@extends('Frontend.frontend-layout.app')

@section('title', 'Contact MEHR Website Design and Software Services | Book a Discovery Call')
@section('description', 'Get in touch with MEHR Website Design and Software Services to discuss your product roadmap, engineering capacity, or offshore development needs.')
@section('content')

  <div class="bg-white overflow-hidden text-slate-500" style="font-family: 'Inter', sans-serif;">

    <section class="bg-[#f8fafc] py-20 lg:py-32 font-['Inter'] border-b border-slate-100 relative overflow-hidden">

      <div
        class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-full bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-[#0086f6]/5 via-transparent to-transparent pointer-events-none">
      </div>

      <div class="mx-auto max-w-7xl px-6 lg:px-8 text-center relative z-10 py-20 lg:py-0">

        <span
          class="inline-flex items-center rounded-full px-4 py-1 text-[11px] font-extrabold tracking-[0.2em] text-[#002f7d] bg-[#EBF5FF] border border-[#BFDBFE] uppercase mb-8"
          data-aos="fade-up">
          Connect with us
        </span>

        <h2
          class="text-[36px] md:text-5xl lg:text-[56px] font-[900] text-slate-900 tracking-tight leading-[1.1] mb-8 max-w-4xl mx-auto"
          data-aos="fade-up" data-aos-delay="100">
          Let's Build Your Next
          <span class="block lg:inline bg-gradient-to-r from-[#0086f6] to-[#002f7d] bg-clip-text text-transparent">
            Digital Success Story.
          </span>
        </h2>

        <p class="text-base md:text-lg lg:text-[20px] text-white max-w-2xl mx-auto leading-relaxed font-medium opacity-90 mb-6"
          data-aos="fade-up" data-aos-delay="200">
          Have a project in mind? Connect with MEHR Website Design and Software Services to discuss
          your goals and discover how professional website design, custom web development, and
          tailored digital solutions can strengthen your online presence and help your business
          grow across the USA.
        </p>

        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
          <a href="https://mtzproducts.com/" target="_blank"
            class="group relative inline-flex items-center gap-2 px-8 py-4 bg-slate-900 text-white rounded-full font-bold hover:bg-[#002f7d] transition-all duration-300 shadow-xl shadow-slate-200">
            Explore Our Projects
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"
              class="group-hover:translate-x-1 transition-transform">
              <path d="M5 12h14m-7-7 7 7-7 7" />
            </svg>
          </a>
        </div>
      </div>
    </section>

    <section id="contact" class="bg-white px-3 lg:px-0 py-24">
      <div class="mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
        <div class="gap-16 grid grid-cols-1 lg:grid-cols-12">

          <div class="flex flex-col justify-center lg:col-span-5" data-aos="fade-right" data-aos-duration="1200"
            data-aos-easing="ease-out-cubic">

            <h2 class="mb-8 font-extrabold text-[#0F172A] md:text-[40px] text-3xl">
              Who We Work Best With
            </h2>

            <div class="space-y-4 mb-12">
              @foreach([
                  'Small and medium-sized businesses building their online presence',
                  'Growing companies seeking custom website development',
                  'Startups and digital agencies needing reliable web solutions'
                ] as $work)

                <div class="flex items-center gap-4 bg-slate-50 p-5 border border-slate-100 rounded-xl" data-aos="fade-up"
                  data-aos-delay="{{ $loop->index * 400 }}" data-aos-duration="1000">

                  <div
                    class="flex flex-shrink-0 justify-center items-center bg-[#EBF5FF] rounded-full w-10 h-10 text-[#0086f6]">
                    <svg class="fill-current w-5 h-5" viewBox="0 0 24 24">
                      <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z" />
                    </svg>
                  </div>

                  <span class="font-bold text-slate-800 text-lg">{{ $work }}</span>
                </div>

              @endforeach
            </div>

            <div class="relative mt-4" data-aos="fade-up" data-aos-delay="400">

              <img src="{{ asset('assets/images/others/logo-header.png') }}"
                class="top-1/2 left-1/2 -z-10 absolute opacity-[0.07] w-[450px] -translate-x-1/2 -translate-y-1/2 pointer-events-none"
                alt="MEHR Website Design and Software Services logo">

              <h4 class="flex items-center gap-3 mb-6 font-black text-[#0F172A] text-xs uppercase tracking-[0.2em]">
                Get in Touch
                <span class="bg-slate-200 w-12 h-[1px]"></span>
              </h4>

              <div class="gap-4 grid grid-cols-1">

                <!-- Business Address -->
                <div class="group flex items-start gap-4 p-4 border hover:border-[#0086f6] rounded-xl transition-colors"
                  data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">

                  <div
                    class="flex justify-center items-center bg-blue-50 group-hover:bg-[#0086f6] rounded-full w-10 h-10 group-hover:text-white transition-all shrink-0">
                    <svg class="w-5 h-5 text-[#0086f6] group-hover:text-white" fill="none" stroke="currentColor"
                      stroke-width="2" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round"
                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                      <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                  </div>

                  <div>
                    <p class="mb-0.5 font-bold text-slate-400 text-xs uppercase tracking-wider">
                      Business Address
                    </p>
                    <p class="font-semibold text-slate-700 text-sm leading-relaxed">
                      2681 Winterfell St Corpus Christi, TX 78415 USA
                    </p>
                  </div>
                </div>

                <!-- Phone -->
                <a data-aos="fade-up" data-aos-delay="800" data-aos-duration="1000" href="https://wa.me/18326775343"
                  class="group flex items-start gap-4 p-4 border hover:border-[#0086f6] rounded-xl transition-colors">

                  <div
                    class="flex justify-center items-center bg-blue-50 group-hover:bg-[#0086f6] rounded-full w-10 h-10 group-hover:text-white transition-all shrink-0">
                    <svg class="w-5 h-5 text-[#0086f6] group-hover:text-white" fill="none" stroke="currentColor"
                      stroke-width="2" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                  </div>

                  <div>
                    <p class="mb-0.5 font-bold text-slate-400 text-xs uppercase tracking-wider">
                      Call or WhatsApp
                    </p>
                    <p class="font-semibold text-slate-700 text-sm leading-relaxed">
                      +1 (832) 677-5343
                    </p>
                  </div>
                </a>

                <!-- Email -->
                <a data-aos="fade-up" data-aos-delay="1200" data-aos-duration="1000"
                  href="mailto:Malikmisbah@mtzproducts.com"
                  class="group flex items-start gap-4 p-4 border hover:border-[#0086f6] rounded-xl transition-colors">

                  <div
                    class="flex justify-center items-center bg-blue-50 group-hover:bg-[#0086f6] rounded-full w-10 h-10 group-hover:text-white transition-all shrink-0">
                    <svg class="w-5 h-5 text-[#0086f6] group-hover:text-white" fill="none" stroke="currentColor"
                      stroke-width="2" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                  </div>

                  <div>
                    <p class="mb-0.5 font-bold text-slate-400 text-xs uppercase tracking-wider">
                      Email Us
                    </p>
                    <p class="font-semibold text-slate-700 text-sm leading-relaxed break-all">
                      Malikmisbah@mtzproducts.com
                    </p>
                  </div>
                </a>

              </div>
            </div>
          </div>

          <div class="lg:col-span-7" data-aos="fade-left" data-aos-duration="1300" data-aos-delay="200"
            data-aos-easing="ease-out-cubic">
            <div class="bg-white shadow-slate-200 shadow-xl p-4 md:p-12 border border-slate-50 rounded-xl">

             <h3 class="mb-2 font-extrabold text-[#0F172A] text-3xl">
                                Let’s Build Your Digital Future
                            </h3>

                            <p class="mb-5 font-medium text-slate-500">
                                Discover tailored web design and development solutions to strengthen your online presence
                                and grow your business.
                            </p>
              <form action="{{ route('studentContact.store') }}" method="POST" class="space-y-6">
                @csrf

                <div class="gap-6 grid grid-cols-1 md:grid-cols-2">

                  <div data-aos="fade-up" data-aos-delay="100">
                    <label class="block mb-2 font-bold text-slate-700 text-sm">Full Name <span
                        class="text-[#0086f6]">*</span></label>
                    <input type="text" name="name" placeholder="Jane Doe" required
                      class="bg-slate-50/50 px-5 py-4 border border-slate-200 focus:border-[#0086f6] rounded-xl outline-none focus:ring-[#0086f6] focus:ring-1 w-full transition-all">
                  </div>

                  <div data-aos="fade-up" data-aos-delay="250">
                    <label class="block mb-2 font-bold text-slate-700 text-sm">Work Email <span
                        class="text-[#0086f6]">*</span></label>
                    <input type="email" name="email" placeholder="jane@company.ca" required
                      class="bg-slate-50/50 px-5 py-4 border border-slate-200 focus:border-[#0086f6] rounded-xl outline-none focus:ring-[#0086f6] focus:ring-1 w-full transition-all">
                  </div>

                </div>

                <div data-aos="fade-up" data-aos-delay="350">
                  <label class="block mb-2 font-bold text-slate-700 text-sm">Company Name <span
                      class="text-[#0086f6]">*</span></label>
                  <input type="text" name="company_name" placeholder="Acme Tech Inc." required
                    class="bg-slate-50/50 px-5 py-4 border border-slate-200 focus:border-[#0086f6] rounded-xl outline-none focus:ring-[#0086f6] focus:ring-1 w-full transition-all">
                </div>

                <div data-aos="fade-up" data-aos-delay="450">
                  <label class="block mb-2 font-bold text-slate-700 text-sm">How can we help?</label>
                  <textarea rows="4" name="message" placeholder="Tell us about your current engineering needs..."
                    class="bg-slate-50/50 px-5 py-4 border border-slate-200 focus:border-[#0086f6] rounded-xl outline-none focus:ring-[#0086f6] focus:ring-1 w-full transition-all resize-none"></textarea>
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

  </div>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({ duration: 1000, once: true });
  </script>

@endsection