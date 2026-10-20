@extends('frontend.frontend-layout.app')

@section('title', 'Dedicated Offshore AI & Software Development | MEHR Website Design and Software Services')
@section('description', 'Dedicated offshore AI, web, and mobile developers for startups and agencies in Malaysia, MEA, USA, and Canada—structured, reliable, and long-term.')
@section('content')

    <div class="font-sans text-green text-slate-900 tialiased">

        <section class="relative bg-white px-4 pt-24 md:pt-32 lg:pt-48 pb-20 md:pb-24 lg:pb-32 overflow-hidden">

            <div class="top-0 right-0 absolute blur-[120px] rounded-full w-[300px] lg:w-[700px] h-[400px] lg:h-[750px] pointer-events-none"
                style="background-color: rgba(0, 134, 246, 0.16);" data-aos="fade-down-left" data-aos-delay="400"
                data-aos-duration="2500" data-aos-easing="ease-out-cubic">
            </div>

            <div class="-z-10 absolute inset-0"
                style="background-image: radial-gradient(ellipse at top right, #eff6ff, transparent);" data-aos="fade"
                data-aos-delay="500" data-aos-duration="3000"> </div>

            <div class="relative mx-auto max-w-7xl">
                <div class="max-w-5xl" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="1000"
                    data-aos-easing="ease-out-cubic" data-aos-once="true">
                    <div class="inline-flex items-center gap-2 mt-[50px] lg:mt-0 mb-6 md:mb-8 px-3 py-1.5 rounded-full font-bold text-xs md:text-sm"
                        style="background-color: #ebf5ff; color: #002f7d;">
                        <span class="rounded-full w-2 h-2 animate-pulse" style="background-color: #0086f6;"></span>
                        Global Engineering Partners:
                        <span id="typing-text-inner"></span>
                    </div>

                    <h1
                        class="mb-6 md:mb-8 font-extrabold text-[#0F172A] lg:text-[70px] text-3xl sm:text-4xl md:text-5xl leading-[1.1] md:leading-[1.2] lg:leading-[1.1] tracking-tight">
                        Professional Web Design & Website Development
                        <span class="relative" style="color: #0086f6;">
                            in USA
                            <span class="-bottom-1 md:-bottom-2 left-0 absolute rounded-full w-full h-1.5 md:h-2"
                                style="background-color: rgba(0, 134, 246, 0.5);"></span>
                        </span>
                    </h1>

                    <p
                        class="mb-8 md:mb-10 max-w-4xl font-medium text-slate-500 text-lg md:text-xl lg:text-2xl leading-relaxed">
                        We create modern, high-performance websites tailored to businesses across the USA, combining
                        professional design with seamless user experiences. Our website development solutions help you
                        strengthen your online presence, attract more customers, and grow your business.
                        <strong
                            style="font-weight: 700; color: #0F172A; text-decoration: underline; text-decoration-color: rgba(0, 134, 246, 0.3); text-decoration-thickness: 4px;">
                            Professional Design. Powerful Development. Built for Your Success.
                        </strong>
                    </p>

                    <div class="flex sm:flex-row flex-col gap-8 md:gap-6">
                        <a href="{{ route('contact') }}"
                            class="bg-[#0F172A] hover:bg-slate-800 shadow-slate-200 shadow-xl px-8 py-4 rounded-full font-bold text-white text-center whitespace-nowrap transition-all hover:-translate-y-1">
                            Let's Explore If This Fits
                        </a>
                        <a href="#solution"
                            class="bg-[#F1F5F9] hover:bg-[#E2E8F0] px-8 py-4 rounded-full font-bold text-[#0F172A] text-center whitespace-nowrap transition-all hover:-translate-y-1">
                            Learn How It Works
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-[#F8FAFC] px-3 lg:px-0 py-24">

            <div class="mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
                <div class="mb-16 lg:text-center" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="1000"
                    data-aos-easing="ease-out-cubic" data-aos-once="true">
                    <h2 class="flex lg:justify-center items-center mb-4 min-h-[1.2em] font-extrabold text-[#0F172A] text-3xl md:text-5xl"
                        id="typing-text-container">
                        <span id="typing-text"></span><span class="typing-cursor">|</span>
                    </h2>
                    <p class="mx-auto max-w-4xl font-medium text-slate-500 text-lg">
                        Transform your vision into a powerful digital experience with modern web design and high-performance
                        website development that engages customers, builds trust, and drives business growth across the USA.
                    </p>
                </div>

                <div class="gap-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
                    @php
                        $challenges = [
                            [
                                'icon' => 'M12 1v22M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6',
                                'title' => 'Complex Development Costs',
                                'desc' => 'Investing in professional websites without compromising quality, performance, or long-term value.',
                                'color' => '#FEE2E2'
                            ],
                            [
                                'icon' => 'M12 6v6l4 2',
                                'title' => 'Faster Time to Market',
                                'desc' => 'Streamlined development processes that turn ideas into market-ready websites efficiently.',
                                'color' => '#FFF7ED'
                            ],
                            [
                                'icon' => 'M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2',
                                'title' => 'Seamless User Experience',
                                'desc' => 'Intuitive, responsive interfaces designed to build customer trust and increase engagement.',
                                'color' => '#F0F9FF'
                            ],
                            [
                                'icon' => 'M23 6l-9.5 9.5-5-5L1 18',
                                'title' => 'Scalable Digital Solutions',
                                'desc' => 'Flexible, high-performance websites built to adapt to evolving business goals and growth.',
                                'color' => '#F0FDF4'
                            ]
                        ];
                    @endphp

                    @foreach($challenges as $item)
                        <div class="group bg-white shadow-sm hover:shadow-md p-8 border border-slate-100 rounded-2xl transition-shadow hover:cursor-pointer"
                            style="border-color: #e2e8f0;" onmouseenter="this.style.borderColor='#0086f6'"
                            onmouseleave="this.style.borderColor='#e2e8f0'" data-aos="zoom-in"
                            data-aos-delay="{{ $loop->index * 400 }}" data-aos-duration="1000" data-aos-easing="ease-out-cubic">
                            <div class="flex justify-center items-center mb-6 rounded-xl w-12 h-12 group-hover:scale-125 transition-transform duration-300 ease-out transform"
                                style="background-color: #ebf5ff; color: #0086f6;">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="{{ $item['icon'] }}" />
                                </svg>
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
                    <div data-aos="fade-right" data-aos-duration="1200" data-aos-easing="ease-out-cubic">
                        <h2 class="mb-6 font-extrabold text-[#0F172A] md:text-3xl text-2xl">
                            Our Approach to Professional Web Design & Development
                        </h2>

                        <p class="mb-10 font-medium text-slate-500 text-lg">
                            We create modern, responsive, and high-performance websites that help businesses across the USA
                            strengthen their online presence and achieve sustainable digital growth.
                        </p>

                        <ul class="space-y-5 mb-10">
                            @foreach([
                                    'Custom designs tailored to your brand.',
                                    'Responsive experiences across all devices.',
                                    'Reliable development built for long-term growth.'
                                ] as $list)
                                <li class="flex items-center gap-4 font-bold text-[#0F172A] text-lg">
                                    <svg class="flex-shrink-0 w-6 h-6" style="color: #0086f6;" fill="none" stroke="currentColor"
                                        stroke-width="3" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                    </svg>
                                    {{ $list }}
                                </li>
                            @endforeach
                        </ul>

                        <div class="inline-block p-6 border rounded-2xl w-full"
                            style="background-color: #ebf5ff; border-color: #dbeafe;" data-aos="fade-up"
                            data-aos-delay="400" data-aos-duration="1200">
                            <p class="flex items-center gap-3 font-bold text-xl" style="color: #002f7d;">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2.5"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                Strategy, Quality, and Results That Matter.
                            </p>
                        </div>
                    </div>

                    <div class="relative bg-[#0F172A] shadow-xl p-10 lg:p-14 rounded-xl overflow-hidden text-white"
                        data-aos="fade-left" data-aos-duration="1300" data-aos-delay="200" data-aos-easing="ease-out-cubic">
                        <div class="top-0 right-0 absolute blur-[80px] -mt-16 -mr-16 rounded-full w-64 h-64"
                            style="background-color: rgba(0, 134, 246, 0.1);"></div>

                        <h3 class="z-10 relative mb-10 font-bold text-2xl">
                            Why Choose Our Web Development Services?
                        </h3>

                        <ul class="z-10 relative space-y-7">
                            @foreach([
                                    'Custom website design aligned with your brand identity',
                                    'Mobile-first and responsive development',
                                    'Fast-loading, performance-focused websites',
                                    'SEO-friendly structure and clean code',
                                    'Scalable solutions tailored to your business goals'
                                ] as $diff)
                                <li class="flex items-start gap-4">
                                    <div class="flex flex-shrink-0 justify-center items-center mt-1 rounded-full w-6 h-6"
                                        style="background-color: rgba(0, 134, 246, 0.2); color: #0086f6;">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="3"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                    <span class="font-semibold text-slate-300 text-lg">{{ $diff }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

        </section>

        <section id="solution" class="relative px-3 lg:px-0 py-24 overflow-hidden text-white"
            style="background-color: #002f7d;">
            <div class="z-10 relative mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
                <div class="mx-auto mb-16 max-w-3xl lg:text-center">
                    <h2 class="mb-6 h-[80px] font-extrabold text-3xl md:text-5xl leading-tight">
                        <span id="typing-text-cost"></span>
                    </h2>
                    <p class="font-medium text-white text-xl">
                        Get professional website design and development tailored to your business, combining modern
                        technology, exceptional user experiences, and reliable performance to support long-term growth.
                    </p>
                </div>

                <div class="bg-black/10 backdrop-blur-xl p-3 md:p-5 border border-white/20 rounded-xl">
                    <div class="gap-12 grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4">
                        @php
                            $techs = [
                                ['name' => 'HTML5', 'icon' => 'fa-brands fa-html5', 'type' => 'fa'],
                                ['name' => 'CSS3', 'icon' => 'fa-brands fa-css3-alt', 'type' => 'fa'],
                                ['name' => 'JavaScript', 'icon' => 'fa-brands fa-js', 'type' => 'fa'],
                                ['name' => 'React.js', 'icon' => 'fa-brands fa-react', 'type' => 'fa'],
                                ['name' => 'Vue.js', 'icon' => 'fa-brands fa-vuejs', 'type' => 'fa'],
                                ['name' => 'PHP & Laravel', 'icon' => 'fa-brands fa-laravel', 'type' => 'fa'],
                                ['name' => 'Node.js', 'icon' => 'fa-brands fa-node-js', 'type' => 'fa'],
                                ['name' => 'WordPress', 'icon' => 'fa-brands fa-wordpress', 'type' => 'fa'],
                                ['name' => 'Bootstrap', 'icon' => 'fa-brands fa-bootstrap', 'type' => 'fa'],
                                ['name' => 'Python', 'icon' => 'fa-brands fa-python', 'type' => 'fa'],
                                ['name' => 'MySQL', 'icon' => 'fa-solid fa-database', 'type' => 'fa'],
                                ['name' => 'Responsive Design', 'icon' => 'fa-solid fa-mobile-screen-button', 'type' => 'fa'],
                            ];
                        @endphp

                        @foreach($techs as $tech)
                            <div class="group flex flex-col items-center gap-2 text-center hover:cursor-pointer"
                                data-aos="flip-up" data-aos-delay="{{ $loop->index * 100 }}" data-aos-duration="1000"
                                data-aos-easing="ease-out-cubic">

                                <div
                                    class="flex justify-center items-center bg-white/20 shadow-lg border border-white/10 group-hover:border-white rounded-2xl w-16 h-16 group-hover:scale-110 transition-transform duration-300 ease-out transform">
                                    @if($tech['type'] === 'fa')
                                        <i class="{{ $tech['icon'] }} text-3xl" aria-hidden="true"></i>
                                    @else
                                        <img src="{{ $tech['icon'] }}" alt="" class="w-8 h-8 object-contain" aria-hidden="true"
                                            loading="lazy" decoding="async">
                                    @endif
                                </div>
                                <span class="font-bold text-md leading-snug">{{ $tech['name'] }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-white px-3 lg:px-0 py-24">
            <div class="mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
                <div class="gap-16 grid grid-cols-1 lg:grid-cols-12">

                    <div class="flex flex-col justify-center lg:col-span-5" data-aos="fade-right" data-aos-duration="1200"
                        data-aos-easing="ease-out-cubic">
                        <h2 class="mb-8 font-extrabold text-[#0F172A] md:text-3xl text-3xl">
                            Who We Build Websites For
                        </h2>

                        <div class="space-y-4 mb-12">
                            @foreach([
                                    'Startups building their digital presence',
                                    'Small and medium-sized businesses growing online',
                                    'Digital agencies seeking reliable development partners'
                                ] as $work)

                                <div class="flex items-center gap-4 bg-slate-50 p-5 border border-slate-100 rounded-xl"
                                    data-aos="fade-up" data-aos-delay="{{ $loop->index * 400 }}" data-aos-duration="1000">

                                    <div class="flex flex-shrink-0 justify-center items-center rounded-full w-10 h-10"
                                        style="background-color: #ebf5ff; color: #0086f6;">
                                        <svg class="fill-current w-5 h-5" viewBox="0 0 24 24">
                                            <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z" />
                                        </svg>
                                    </div>

                                    <span class="font-bold text-slate-800 text-md">{{ $work }}</span>
                                </div>

                            @endforeach
                        </div>

                        <div class="relative mt-4" data-aos="fade-up" data-aos-delay="400">

                            <img src="{{ asset('assets/images/others/logo-header.png') }}"
                                class="top-1/2 left-1/2 -z-10 absolute opacity-[0.07] w-[450px] -translate-x-1/2 -translate-y-1/2 pointer-events-none"
                                alt="MEHR Website Design and Software Services logo" loading="lazy" decoding="async" />
                            <div
                                class="flex items-center gap-3 mb-6 font-black text-[#0F172A] text-xs uppercase tracking-[0.2em]">
                                Headquarters
                                <span class="bg-slate-200 w-12 h-[1px]"></span>
                            </div>

                            <div class="gap-4 grid grid-cols-1">

                                <div class="group flex items-start gap-4 p-4 border rounded-xl transition-colors"
                                    style="border-color: #e2e8f0;" onmouseenter="this.style.borderColor='#0086f6'"
                                    onmouseleave="this.style.borderColor='#e2e8f0'" data-aos="fade-up" data-aos-delay="400"
                                    data-aos-duration="1000">
                                    <div class="flex justify-center items-center rounded-full w-10 h-10 transition-all shrink-0"
                                        style="background-color: #eff6ff; color: #0086f6;"
                                        onmouseenter="this.style.backgroundColor='#0086f6';this.style.color='#fff'"
                                        onmouseleave="this.style.backgroundColor='#eff6ff';this.style.color='#0086f6'">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="mb-0.5 font-bold text-slate-500 text-xs uppercase tracking-wider">Location
                                        </p>
                                        <p class="font-semibold text-slate-700 text-sm leading-relaxed">2681 Winterfell St
                                            Corpus Christi, TX 78415 USA</p>
                                    </div>
                                </div>

                                <a data-aos="fade-up" data-aos-delay="800" data-aos-duration="1000"
                                    href="https://wa.me/18326775343"
                                    class="group flex items-start gap-4 p-4 border rounded-xl transition-colors"
                                    style="border-color: #e2e8f0;" onmouseenter="this.style.borderColor='#0086f6'"
                                    onmouseleave="this.style.borderColor='#e2e8f0'">
                                    <div class="flex justify-center items-center rounded-full w-10 h-10 transition-all shrink-0"
                                        style="background-color: #eff6ff; color: #0086f6;"
                                        onmouseenter="this.style.backgroundColor='#0086f6';this.style.color='#fff'"
                                        onmouseleave="this.style.backgroundColor='#eff6ff';this.style.color='#0086f6'">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="mb-0.5 font-bold text-slate-500 text-xs uppercase tracking-wider">Phone
                                        </p>
                                        <p class="font-semibold text-slate-700 text-sm leading-relaxed">+1 (832) 677-5343
                                        </p>
                                    </div>
                                </a>

                                <a data-aos="fade-up" data-aos-delay="1200" data-aos-duration="1000"
                                    href="mailto:Malikmisbah@mtzproducts.com"
                                    class="group flex items-start gap-4 p-4 border rounded-xl transition-colors"
                                    style="border-color: #e2e8f0;" onmouseenter="this.style.borderColor='#0086f6'"
                                    onmouseleave="this.style.borderColor='#e2e8f0'">
                                    <div class="flex justify-center items-center rounded-full w-10 h-10 transition-all shrink-0"
                                        style="background-color: #eff6ff; color: #0086f6;"
                                        onmouseenter="this.style.backgroundColor='#0086f6';this.style.color='#fff'"
                                        onmouseleave="this.style.backgroundColor='#eff6ff';this.style.color='#0086f6'">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="mb-0.5 font-bold text-slate-500 text-xs uppercase tracking-wider">Email
                                        </p>
                                        <p class="font-semibold text-slate-700 text-sm leading-relaxed">
                                            Malikmisbah@mtzproducts.com</p>
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
                                                style="color: #0086f6;">*</span></label>
                                        <input type="text" name="name" placeholder="Jane Doe" required
                                            class="bg-slate-50/50 px-5 py-4 border border-slate-200 rounded-xl outline-none w-full transition-all"
                                            style="border-color: #e2e8f0;"
                                            onfocus="this.style.borderColor='#0086f6';this.style.boxShadow='0 0 0 1px #0086f6'"
                                            onblur="this.style.borderColor='#e2e8f0';this.style.boxShadow='none'">
                                    </div>

                                    <div data-aos="fade-up" data-aos-delay="250">
                                        <label class="block mb-2 font-bold text-slate-700 text-sm">Work Email <span
                                                style="color: #0086f6;">*</span></label>
                                        <input type="email" name="email" placeholder="jane@company.ca" required
                                            class="bg-slate-50/50 px-5 py-4 border border-slate-200 rounded-xl outline-none w-full transition-all"
                                            style="border-color: #e2e8f0;"
                                            onfocus="this.style.borderColor='#0086f6';this.style.boxShadow='0 0 0 1px #0086f6'"
                                            onblur="this.style.borderColor='#e2e8f0';this.style.boxShadow='none'">
                                    </div>

                                </div>

                                <div data-aos="fade-up" data-aos-delay="350">
                                    <label class="block mb-2 font-bold text-slate-700 text-sm">Company Name <span
                                            style="color: #0086f6;">*</span></label>
                                    <input type="text" name="company_name" placeholder="Acme Tech Inc." required
                                        class="bg-slate-50/50 px-5 py-4 border border-slate-200 rounded-xl outline-none w-full transition-all"
                                        style="border-color: #e2e8f0;"
                                        onfocus="this.style.borderColor='#0086f6';this.style.boxShadow='0 0 0 1px #0086f6'"
                                        onblur="this.style.borderColor='#e2e8f0';this.style.boxShadow='none'">
                                </div>

                                <div data-aos="fade-up" data-aos-delay="450">
                                    <label class="block mb-2 font-bold text-slate-700 text-sm">How can we help?</label>
                                    <textarea rows="4" name="message"
                                        placeholder="Tell us about your current engineering needs..."
                                        class="bg-slate-50/50 px-5 py-4 border border-slate-200 rounded-xl outline-none w-full transition-all resize-none"
                                        style="border-color: #e2e8f0;"
                                        onfocus="this.style.borderColor='#0086f6';this.style.boxShadow='0 0 0 1px #0086f6'"
                                        onblur="this.style.borderColor='#e2e8f0';this.style.boxShadow='none'"></textarea>
                                </div>

                                {{-- Recaptcha --}}

                                <div class="row" data-aos="fade-up" data-aos-delay="550">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}"></div>

                                            @if ($errors->has('g-recaptcha-response'))
                                                <span class="text-sm" style="color: #0086f6;">
                                                    {{ $errors->first('g-recaptcha-response') }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" data-aos="fade-up" data-aos-delay="650"
                                    class="flex justify-center items-center gap-3 shadow-lg py-5 rounded-full w-full font-black text-md text-white lg:text-lg transition-all"
                                    style="background-color: #002f7d;" onmouseenter="this.style.backgroundColor='#007fcf'"
                                    onmouseleave="this.style.backgroundColor='#002f7d'">
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