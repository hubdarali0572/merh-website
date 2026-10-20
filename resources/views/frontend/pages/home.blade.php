@extends('frontend.frontend-layout.app')

@section('title', 'Dedicated Offshore AI & Software Development | SmartAI Soft')
@section('description', 'Dedicated offshore AI, web, and mobile developers for startups and agencies in Malaysia, MEA, USA, and Canada—structured, reliable, and long-term.')
@section('content')

    <div class="font-sans text-green text-slate-900 tialiased">

        <section class="relative bg-white px-4 pt-24 md:pt-32 lg:pt-48 pb-20 md:pb-24 lg:pb-32 overflow-hidden">

        <div  class="top-0 right-0 absolute bg-pink-400/40 blur-[120px] rounded-full w-[300px] lg:w-[700px] h-[400px] lg:h-[750px] pointer-events-none"
        data-aos="fade-down-left" data-aos-delay="400"data-aos-duration="2500"data-aos-easing="ease-out-cubic">
        </div>

        <div class="-z-10 absolute inset-0 bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-pink-50 via-transparent to-transparent"
        data-aos="fade" data-aos-delay="500" data-aos-duration="3000"> </div>

            <div class="relative mx-auto max-w-7xl">
                <div class="max-w-4xl" data-aos="zoom-in" data-aos-delay="200"
                    data-aos-duration="1000" data-aos-easing="ease-out-cubic" data-aos-once="true">
                    <div class="inline-flex items-center gap-2 bg-[#FFEBF2] mt-[50px] lg:mt-0 mb-6 md:mb-8 px-3 py-1.5 rounded-full font-bold text-[#be123c] text-xs md:text-sm">
                        <span class="bg-[#f43f5e] rounded-full w-2 h-2 animate-pulse"></span>
                        Global Engineering Partners: 
                        <span id="typing-text-inner"></span>
                    </div>

                    <h1 class="mb-6 md:mb-8 font-extrabold text-[#0F172A] lg:text-[70px] text-3xl sm:text-4xl md:text-5xl leading-[1.1] md:leading-[1.2] lg:leading-[1.1] tracking-tight">
                        Scale Your Engineering <br class="hidden md:block">
                        Team Without <br>
                        <span class="inline-block relative text-[#f43f5e]">
                            Local Hiring Constraints
                            <span class="-bottom-1 md:-bottom-2 left-0 absolute bg-[#f43f5e]/50 rounded-full w-full h-1.5 md:h-2"></span>
                        </span>
                    </h1>

                    <p class="mb-8 md:mb-10 max-w-2xl font-medium text-slate-500 text-lg md:text-xl lg:text-2xl leading-relaxed">
                        Dedicated Offshore Developers for Startups & Agencies across Malaysia, MEA, USA, and Canada — 
                        <strong class="font-bold text-[#0F172A] decoration-[#f43f5e]/30 decoration-4 underline">Structured, Reliable, Long-Term.</strong>
                    </p>

                    <div class="flex sm:flex-row flex-col gap-8 md:gap-6">
                        <a href="{{ route('contact') }}" class="bg-[#0F172A] hover:bg-slate-800 shadow-slate-200 shadow-xl px-8 py-4 rounded-full font-bold text-white text-center whitespace-nowrap transition-all hover:-translate-y-1">
                            Let's Explore If This Fits
                        </a>
                        <a href="#solution" class="bg-[#F1F5F9] hover:bg-[#E2E8F0] px-8 py-4 rounded-full font-bold text-[#0F172A] text-center whitespace-nowrap transition-all hover:-translate-y-1">
                            Learn How It Works
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-[#F8FAFC] px-3 lg:px-0 py-24">

            <div class="mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
               <div class="mb-16 lg:text-center" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-out-cubic" data-aos-once="true">
                    <h2 class="flex lg:justify-center items-center mb-4 min-h-[1.2em] font-extrabold text-[#0F172A] text-3xl md:text-5xl" id="typing-text-container">
                        <span id="typing-text"></span><span class="typing-cursor">|</span>
                    </h2>
                    <p class="mx-auto max-w-2xl font-medium text-slate-500 text-lg">
                        Hiring locally is breaking startup budgets and stalling product roadmaps globally.
                    </p>
                </div>

                <div class="gap-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
                    @php
                        $challenges = [
                            [
                                'icon' => 'M12 1v22M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6',
                                'title' => 'High Costs',
                                'desc' => '$6,000–$9,000 per developer/month',
                                'color' => '#FEE2E2'
                            ],
                            ['icon' => 'M12 6v6l4 2', 'title' => 'Slow Process', 'desc' => '2–4 months recruitment cycle', 'color' => '#FFF7ED'],
                            [
                                'icon' => 'M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2',
                                'title' => 'Instability',
                                'desc' => 'High local turnover rates',
                                'color' => '#F0F9FF'
                            ],
                            ['icon' => 'M23 6l-9.5 9.5-5-5L1 18', 'title' => 'Heavy Burden', 'desc' => 'Increasing payroll & tax burden', 'color' => '#F0FDF4']
                        ];
                    @endphp

                    @foreach($challenges as $item)
                        <div class="group bg-white shadow-sm hover:shadow-md p-8 border border-slate-100 hover:border-[#f43f5e] rounded-2xl transition-shadow hover:cursor-pointer"
                        data-aos="zoom-in" data-aos-delay="{{ $loop->index * 400 }}" data-aos-duration="1000" data-aos-easing="ease-out-cubic">
                            <div class="flex justify-center items-center bg-[#FFEBF2] mb-6 rounded-xl w-12 h-12 text-[#f43f5e] group-hover:scale-125 transition-transform duration-300 ease-out transform">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round"
                                 stroke-linejoin="round" d="{{ $item['icon'] }}"/></svg>
                            </div>
                            <h3 class="mb-2 font-bold text-[#0F172A] text-xl">{{ $item['title'] }}</h3>
                            <p class="font-medium text-slate-500">{{ $item['desc'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="bg-white px-3 lg:px-0 py-24">

            <div class="mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
                <div class="items-center gap-16 grid grid-cols-1 lg:grid-cols-2">
                    <div  data-aos="fade-right" data-aos-duration="1200" data-aos-easing="ease-out-cubic">
                        <h2 class="mb-6 font-extrabold text-[#0F172A] md:text-[40px] text-3xl">The SmartAI Soft Approach</h2>
                        <p class="mb-10 font-medium text-slate-500 text-lg">
                            We provide dedicated full-time offshore engineers who work as direct extensions of your team.
                        </p>
                        <ul class="space-y-5 mb-10">
                            @foreach(['No freelancers.', 'No hourly chaos.', 'No short-term contracts.'] as $list)
                                <li class="flex items-center gap-4 font-bold text-[#0F172A] text-lg">
                                    <svg class="flex-shrink-0 w-6 h-6 text-[#f43f5e]" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
                                    {{ $list }}
                                </li>
                            @endforeach
                        </ul>
                        <div class="inline-block bg-[#FFEBF2] p-6 border border-pink-100 rounded-2xl w-full" data-aos="fade-up"
                            data-aos-delay="400"
                            data-aos-duration="1200">
                            <p class="flex items-center gap-3 font-bold text-[#f43f5e] text-xl">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                Just structured, sprint-based delivery.
                            </p>
                        </div>
                    </div>

                    <div class="relative bg-[#0F172A] shadow-xl p-10 lg:p-14 rounded-xl overflow-hidden text-white"  data-aos="fade-left"
                                data-aos-duration="1300"
                                data-aos-delay="200"
                                data-aos-easing="ease-out-cubic" >
                        <div class="top-0 right-0 absolute bg-[#f43f5e]/10 blur-[80px] -mt-16 -mr-16 rounded-full w-64 h-64"></div>
                        <h3 class="z-10 relative mb-10 font-bold text-2xl">What Makes Us Different</h3>
                        <ul class="z-10 relative space-y-7">
                            @foreach([
                                    '30+ in-house engineers',
                                    '3-month minimum (stable team commitment)',
                                    'Replacement guarantee',
                                    'Transparent pricing',
                                    'Agile workflow integration'
                                ] as $diff)
                                <li class="flex items-start gap-4">
                                    <div class="flex flex-shrink-0 justify-center items-center bg-[#f43f5e]/20 mt-1 rounded-full w-6 h-6 text-[#f43f5e]">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                    </div>
                                    <span class="font-semibold text-slate-300 text-lg">{{ $diff }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section id="solution" class="relative bg-[#e11d48] px-3 lg:px-0 py-24 overflow-hidden text-white">
            <div class="z-10 relative mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
                <div class="mx-auto mb-16 max-w-3xl lg:text-center">
                    <h2 class="mb-6 h-[80px] font-extrabold text-3xl md:text-5xl leading-tight">
                        <span id="typing-text-cost"></span>
                    </h2>
                    <p class="font-medium text-white text-xl">
                        Save 40–60% compared to local hiring while maintaining structured delivery and quality control across all regions.
                    </p>
                </div>

                <div class="bg-black/10 backdrop-blur-xl p-8 md:p-16 border border-white/20 rounded-xl">
                    <h3 class="mb-12 font-black text-white text-sm text-center uppercase tracking-[0.2em]">Technology Focus</h3>
                    
                    <div class="gap-12 grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4">
                        @php
                            $techs = [
                                ['name' => 'React', 'icon' => 'fa-brands fa-react', 'type' => 'fa'],
                                ['name' => 'Angular', 'icon' => 'fa-brands fa-angular', 'type' => 'fa'],
                                ['name' => 'Node.js', 'icon' => 'fa-brands fa-node-js', 'type' => 'fa'],
                                ['name' => 'Laravel', 'icon' => 'fa-brands fa-laravel', 'type' => 'fa'],
                                ['name' => 'Python (Django, Flask)', 'icon' => 'fa-brands fa-python', 'type' => 'fa'],
                                ['name' => 'AI/ML', 'icon' => 'fa-solid fa-robot', 'type' => 'fa'],
                                ['name' => 'React Native', 'icon' => 'fa-brands fa-react', 'type' => 'fa'],
                                ['name' => 'Flutter', 'icon' => asset('assets/images/others/flutter-logo.webp'), 'type' => 'img'],
                            ];
                        @endphp

                        @foreach($techs as $tech)
                            <div class="group flex flex-col items-center gap-5 text-center hover:cursor-pointer"
                                data-aos="flip-up"
                                data-aos-delay="{{ $loop->index * 100 }}"
                                data-aos-duration="1000"
                                data-aos-easing="ease-out-cubic">

                                <div class="flex justify-center items-center bg-white/20 shadow-lg border border-white/10 group-hover:border-white rounded-2xl w-16 h-16 group-hover:scale-110 transition-transform duration-300 ease-out transform">
                                    @if($tech['type'] === 'fa')
                                        <i class="{{ $tech['icon'] }} text-3xl" aria-hidden="true"></i>
                                    @else
                                        <img src="{{ $tech['icon'] }}" alt="" class="w-8 h-8 object-contain" aria-hidden="true" loading="lazy" decoding="async">
                                    @endif
                                </div>
                                <span class="font-bold text-md leading-snug">{{ $tech['name'] }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <section  class="bg-white px-3 lg:px-0 py-24">
            <div class="mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
              <div class="gap-16 grid grid-cols-1 lg:grid-cols-12">

                    <div class="flex flex-col justify-center lg:col-span-5"
                        data-aos="fade-right" data-aos-duration="1200" data-aos-easing="ease-out-cubic">
                        <h2 class="mb-8 font-extrabold text-[#0F172A] md:text-[40px] text-3xl"> Who We Work Best With</h2>

                        <div class="space-y-4 mb-12">
                            @foreach(['SaaS startups (Seed to Series B)', 'Product companies scaling engineering', 'Digital agencies needing overflow capacity'] as $work)

                                <div class="flex items-center gap-4 bg-slate-50 p-5 border border-slate-100 rounded-xl"
                                    data-aos="fade-up" data-aos-delay="{{ $loop->index * 400 }}" data-aos-duration="1000">
                                    <div class="flex flex-shrink-0 justify-center items-center bg-[#FFEBF2] rounded-full w-10 h-10 text-[#f43f5e]">
                                        <svg class="fill-current w-5 h-5" viewBox="0 0 24 24">
                                            <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>
                                        </svg>
                                    </div>

                                    <span class="font-bold text-slate-800 text-lg">{{ $work }}</span>
                                </div>

                            @endforeach
                        </div>

                    <div class="relative mt-4" data-aos="fade-up" data-aos-delay="400">

                        <img src="{{ asset('assets/images/others/logo-header.png') }}"
                            class="top-1/2 left-1/2 -z-10 absolute opacity-[0.07] w-[450px] -translate-x-1/2 -translate-y-1/2 pointer-events-none"
                            alt="SmartAI Soft Logo" loading="lazy" decoding="async" />
                        <div class="flex items-center gap-3 mb-6 font-black text-[#0F172A] text-xs uppercase tracking-[0.2em]">
                            Headquarters
                            <span class="bg-slate-200 w-12 h-[1px]"></span>
                        </div>

                    <div class="gap-4 grid grid-cols-1">

                        <div class="group flex items-start gap-4 p-4 border hover:border-[#f43f5e] rounded-xl transition-colors"
                          data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                            <div class="flex justify-center items-center bg-rose-50 group-hover:bg-[#f43f5e] rounded-full w-10 h-10 group-hover:text-white transition-all shrink-0">
                                <svg class="w-5 h-5 text-[#f43f5e] group-hover:text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="mb-0.5 font-bold text-slate-500 text-xs uppercase tracking-wider">Location</p>
                                <p class="font-semibold text-slate-700 text-sm leading-relaxed">Phase 1, DHA, Lahore, Pakistan</p>
                            </div>
                        </div>

                        <a  data-aos="fade-up" data-aos-delay="800" data-aos-duration="1000" href="https://wa.me/923704343002" class="group flex items-start gap-4 p-4 border hover:border-[#f43f5e] rounded-xl transition-colors">
                            <div class="flex justify-center items-center bg-rose-50 group-hover:bg-[#f43f5e] rounded-full w-10 h-10 group-hover:text-white transition-all shrink-0">
                                <svg class="w-5 h-5 text-[#f43f5e] group-hover:text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="mb-0.5 font-bold text-slate-500 text-xs uppercase tracking-wider">Phone</p>
                                <p class="font-semibold text-slate-700 text-sm leading-relaxed">+92 370 4343002</p>
                            </div>
                        </a>

                        <a  data-aos="fade-up" data-aos-delay="1200" data-aos-duration="1000" href="mailto:info@smartaisoft.com" class="group flex items-start gap-4 p-4 border hover:border-[#f43f5e] rounded-xl transition-colors">
                            <div class="flex justify-center items-center bg-rose-50 group-hover:bg-[#f43f5e] rounded-full w-10 h-10 group-hover:text-white transition-all shrink-0">
                                <svg class="w-5 h-5 text-[#f43f5e] group-hover:text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="mb-0.5 font-bold text-slate-500 text-xs uppercase tracking-wider">Email</p>
                                <p class="font-semibold text-slate-700 text-sm leading-relaxed">info@smartaisoft.com</p>
                            </div>
                        </a>
                    </div>
                    </div>
                    </div>

                    <div class="lg:col-span-7" data-aos="fade-left"
                        data-aos-duration="1300" data-aos-delay="200" data-aos-easing="ease-out-cubic" >
                        <div class="bg-white shadow-slate-200 shadow-xl p-4 md:p-12 border border-slate-50 rounded-xl">

                            <h3 class="mb-2 font-extrabold text-[#0F172A] text-3xl"> Let’s Explore Your Growth Plan </h3>

                            <p class="mb-10 font-medium text-slate-500">
                                Schedule a 15-minute discovery call to see if our model fits your engineering needs.
                            </p>

                            <form action="{{ route('studentContact.store') }}" method="POST" class="space-y-6">
                                @csrf

                                <div class="gap-6 grid grid-cols-1 md:grid-cols-2">

                                    <div data-aos="fade-up" data-aos-delay="100">
                                        <label class="block mb-2 font-bold text-slate-700 text-sm">Full Name <span class="text-[#f43f5e]">*</span></label>
                                        <input type="text" name="name" placeholder="Jane Doe" required
                                        class="bg-slate-50/50 px-5 py-4 border border-slate-200 focus:border-[#f43f5e] rounded-xl outline-none focus:ring-[#f43f5e] focus:ring-1 w-full transition-all">
                                    </div>

                                    <div data-aos="fade-up" data-aos-delay="250">
                                        <label class="block mb-2 font-bold text-slate-700 text-sm">Work Email <span class="text-[#f43f5e]">*</span></label>
                                        <input type="email" name="email" placeholder="jane@company.ca"required
                                        class="bg-slate-50/50 px-5 py-4 border border-slate-200 focus:border-[#f43f5e] rounded-xl outline-none focus:ring-[#f43f5e] focus:ring-1 w-full transition-all">
                                    </div>

                                </div>

                                <div data-aos="fade-up" data-aos-delay="350">
                                    <label class="block mb-2 font-bold text-slate-700 text-sm">Company Name <span class="text-[#f43f5e]">*</span></label>
                                    <input type="text" name="company_name" placeholder="Acme Tech Inc." required
                                    class="bg-slate-50/50 px-5 py-4 border border-slate-200 focus:border-[#f43f5e] rounded-xl outline-none focus:ring-[#f43f5e] focus:ring-1 w-full transition-all">
                                </div>

                                <div data-aos="fade-up" data-aos-delay="450">
                                    <label class="block mb-2 font-bold text-slate-700 text-sm">How can we help?</label>
                                    <textarea rows="4" name="message"
                                    placeholder="Tell us about your current engineering needs..."
                                    class="bg-slate-50/50 px-5 py-4 border border-slate-200 focus:border-[#f43f5e] rounded-xl outline-none focus:ring-[#f43f5e] focus:ring-1 w-full transition-all resize-none"></textarea>
                                </div>

                             {{-- Recaptcha --}}
                             
                                <div class="row" data-aos="fade-up" data-aos-delay="550">
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

                                <button type="submit" data-aos="fade-up" data-aos-delay="650"
                                    class="flex justify-center items-center gap-3 bg-[#e11d48] shadow-lg shadow-pink-200 py-5 rounded-full w-full font-black text-md text-white lg:text-lg transition-all" >
                                   Submit
                                </button>
                                <p class="font-bold text-[11px] text-slate-500 text-center uppercase tracking-widest">
                                    No commitment required. We respect your inbox.
                                </p>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection