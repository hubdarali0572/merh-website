@extends('Frontend.frontend-layout.app')

@section('title', 'MEHR Website Design and Software Services Showcase | Team Photos & Office Highlights')
@section('description', 'Browse MEHR Website Design and Software Services showcase photos, office moments, and team highlights that reflect our culture and delivery environment.')
@section('content')

    <div class="bg-slate-50 overflow-hidden" style="font-family: 'Inter', sans-serif;">

        <!-- ENHANCED HERO SECTION -->
        <section class="relative py-24 lg:py-36 bg-[#f8fafc] overflow-hidden border-b border-slate-100">
            <!-- Sophisticated Background Elements -->
            <div
                class="top-0 right-0 absolute bg-blue-400/40 blur-[120px] rounded-full w-[300px] lg:w-[700px] h-[400px] lg:h-[750px] pointer-events-none">
            </div>

            <div class="-z-10 absolute inset-0 bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-blue-50 via-transparent to-transparent"
                data-aos="fade" data-aos-delay="500" data-aos-duration="3000"> </div>
            <div class="mx-auto max-w-7xl px-6 lg:px-8 relative z-10">
                <div class="text-center">
                    <!-- Professional Badge -->
                    <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white shadow-sm border border-slate-200 mb-8"
                        data-aos="fade-down">
                        <span class="relative flex h-2 w-2">
                            <span
                                class="animate-ping absolute inline-flex h-full w-full rounded-full bg-[#0086f6] opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-[#0086f6]"></span>
                        </span>
                        <span class="text-[10px] font-black uppercase tracking-[0.3em] text-slate-600">The Visual
                            Archive</span>
                    </div>

                    <!-- Main Title: Professional & Impactful -->
                    <h1 class="text-4xl md:text-6xl lg:text-[72px] font-[900] text-slate-900 tracking-tight leading-[1.05] mb-8"
                        data-aos="fade-up" data-aos-delay="100">
                        The Art of Impact: <br />
                        <span class="bg-gradient-to-r from-[#0086f6] via-[#007fcf] to-[#002f7d] bg-clip-text text-transparent">
                            Our Journey in Focus.
                        </span>
                    </h1>

                    <!-- Description: Elegant and Mission-Oriented -->
                    <p class="text-lg md:text-xl text-slate-600 max-w-3xl mx-auto leading-relaxed font-normal mb-12"
                        data-aos="fade-up" data-aos-delay="200">
                        Beyond lines of code and federal protocols lies a story of <strong>human-centric
                            innovation</strong>. Explore our visual legacy—where global standards meet the heart of our
                        local dedication to excellence.
                    </p>

                </div>
            </div>
        </section>

        <!-- 1. IMAGE GALLERY: THE VISUAL NARRATIVE -->
        <section class="py-24 px-6 bg-white overflow-hidden">
            <div class="max-w-7xl mx-auto">
                <!-- Section Header -->
                <div class="flex flex-col md:flex-row items-end justify-between mb-16 gap-4">
                    <div class="max-w-3xl" data-aos="fade-right">
                        <span
                            class="text-[#002f7d] font-black uppercase tracking-[0.3em] text-[11px] bg-[#EBF5FF] px-3 py-1 rounded-md">
                            Gallery
                        </span>

                        <h2 class="text-4xl md:text-5xl font-[900] text-slate-900 mt-4 tracking-tight">
                            Experience Our Journey Through Images
                        </h2>

                        <p class="text-slate-500 mt-4 text-lg leading-relaxed">
                            From significant milestones to everyday moments of collaboration, our gallery reflects the
                            passion, professionalism, and excellence that drive everything we do.
                        </p>
                    </div>
                </div>

                <!-- Grid: Professional Editorial Style -->
                <div class="grid grid-cols-12 gap-4 md:gap-6 mb-6">
                    <!-- Large Feature Image -->
                    <div class="col-span-12 md:col-span-8 group relative overflow-hidden rounded-3xl" data-aos="zoom-in"
                        oncontextmenu="return false;">
                        <div
                            class="absolute inset-0 bg-slate-900/20 group-hover:bg-slate-900/10 transition-colors duration-500 z-10">
                        </div>
                        <img src="{{ asset('assets/images/others/WhatsApp Image 2026-06-29 at 4.59.05 PM (4).jpeg') }}"
                            class="w-full h-[500px] object-cover transform group-hover:scale-105 transition-transform duration-1000"
                            alt="Office Life">
                    </div>

                    <!-- Vertical Image -->
                    <div class="col-span-12 md:col-span-4 space-y-6">
                        <div class="group relative overflow-hidden rounded-3xl h-[240px]" data-aos="fade-left"
                            data-aos-delay="100" oncontextmenu="return false;">
                            <img src="{{ asset('assets/images/others/WhatsApp Image 2026-06-29 at 4.59.05 PM (3).jpeg') }}"
                                class="w-full h-full object-cover" alt="Team">
                            <div
                                class="absolute inset-0 bg-[#0086f6]/0 group-hover:bg-[#0086f6]/20 transition-all duration-300">
                            </div>
                        </div>
                        <div class="group relative overflow-hidden rounded-3xl h-[240px]" data-aos="fade-left"
                            data-aos-delay="200" oncontextmenu="return false;">
                            <img src="{{ asset('assets/images/others/WhatsApp Image 2026-06-29 at 4.59.05 PM (2).jpeg') }}"
                                class="w-full h-full object-cover" alt="Event">
                            <div
                                class="absolute inset-0 bg-slate-900/0 group-hover:bg-slate-900/40 transition-all duration-300">
                            </div>
                        </div>
                    </div>

                    <!-- Small Square Grid -->
                    <div class="col-span-12 md:col-span-4 group relative overflow-hidden rounded-3xl h-[300px]"
                        data-aos="fade-up" data-aos-delay="100" oncontextmenu="return false;">
                        <img src="{{ asset('assets/images/others/WhatsApp Image 2026-06-29 at 4.59.05 PM (1).jpeg') }}"
                            class="w-full h-full object-cover" alt="Focus">
                    </div>
                    <div class="col-span-12 md:col-span-4 group relative overflow-hidden rounded-3xl h-[300px]"
                        data-aos="fade-up" data-aos-delay="200" oncontextmenu="return false;">
                        <img src="{{ asset('assets/images/others/WhatsApp Image 2026-06-29 at 4.59.05 PM (5).jpeg') }}"
                            class="w-full h-full object-cover" alt="Success">
                    </div>
                    <div class="col-span-12 md:col-span-4 group relative overflow-hidden rounded-3xl h-[300px]"
                        data-aos="fade-up" data-aos-delay="300" oncontextmenu="return false;">
                        <img src="{{ asset('assets/images/others/WhatsApp Image 2026-06-29 at 4.59.05 PM.jpeg') }}"
                            class="w-full h-full object-cover" alt="Culture">
                    </div>
                </div>
                <div class="grid grid-cols-12 gap-4 md:gap-6 mb-6">
                    <!-- Large Feature Image -->
                    <div class="col-span-12 md:col-span-8 group relative overflow-hidden rounded-3xl" data-aos="zoom-in"
                        oncontextmenu="return false;">
                        <div
                            class="absolute inset-0 bg-slate-900/20 group-hover:bg-slate-900/10 transition-colors duration-500 z-10">
                        </div>
                        <img src="{{ asset('assets/images/others/office.jpeg') }}"
                            class="w-full h-[500px] object-cover transform group-hover:scale-105 transition-transform duration-1000"
                            alt="Office Life">
                    </div>

                    <!-- Vertical Image -->
                    <div class="col-span-12 md:col-span-4 space-y-6">
                        <div class="group relative overflow-hidden rounded-3xl h-[240px]" data-aos="fade-left"
                            data-aos-delay="100" oncontextmenu="return false;">
                            <img src="{{ asset('assets/images/others/mangoparty1.jpeg') }}"
                                class="w-full h-full object-cover" alt="Team">
                            <div
                                class="absolute inset-0 bg-[#0086f6]/0 group-hover:bg-[#0086f6]/20 transition-all duration-300">
                            </div>
                        </div>
                        <div class="group relative overflow-hidden rounded-3xl h-[240px]" data-aos="fade-left"
                            data-aos-delay="200" oncontextmenu="return false;">
                            <img src="{{ asset('assets/images/others/mangoparty3.jpeg') }}"
                                class="w-full h-full object-cover" alt="Event">
                            <div
                                class="absolute inset-0 bg-slate-900/0 group-hover:bg-slate-900/40 transition-all duration-300">
                            </div>
                        </div>
                    </div>

                    <!-- Small Square Grid -->
                    <div class="col-span-12 md:col-span-4 group relative overflow-hidden rounded-3xl h-[300px]"
                        data-aos="fade-up" data-aos-delay="100" oncontextmenu="return false;">
                        <img src="{{ asset('assets/images/others/office1.jpeg') }}" class="w-full h-full object-cover"
                            alt="Focus">
                    </div>
                    <div class="col-span-12 md:col-span-4 group relative overflow-hidden rounded-3xl h-[300px]"
                        data-aos="fade-up" data-aos-delay="200" oncontextmenu="return false;">
                        <img src="{{ asset('assets/images/others/mangoparty2.jpeg') }}" class="w-full h-full object-cover"
                            alt="Success">
                    </div>
                    <div class="col-span-12 md:col-span-4 group relative overflow-hidden rounded-3xl h-[300px]"
                        data-aos="fade-up" data-aos-delay="300" oncontextmenu="return false;">
                        <img src="{{ asset('assets/images/others/mangoparty2.jpeg') }}" class="w-full h-full object-cover"
                            alt="Culture">
                    </div>
                </div>

                <div class="grid grid-cols-12 gap-4 md:gap-6 mt-3">
                    <!-- Large Feature Image -->
                    <div class="col-span-12 md:col-span-8 group relative overflow-hidden rounded-3xl" data-aos="zoom-in"
                        oncontextmenu="return false;">
                        <div
                            class="absolute inset-0 bg-slate-900/20 group-hover:bg-slate-900/10 transition-colors duration-500 z-10">
                        </div>
                        <img src="{{ asset('assets/images/others/WhatsApp Image 2026-06-29 at 5.14.39 PM.jpeg') }}"
                            class="w-full h-[500px] object-cover transform group-hover:scale-105 transition-transform duration-1000"
                            alt="Office Life">
                    </div>

                    <!-- Vertical Image -->
                    <div class="col-span-12 md:col-span-4 space-y-6">
                        <div class="group relative overflow-hidden rounded-3xl h-[240px]" data-aos="fade-left"
                            data-aos-delay="100" oncontextmenu="return false;">
                            <img src="{{ asset('assets/images/others/WhatsApp Image 2026-06-29 at 4.55.54 PM.jpeg') }}"
                                class="w-full h-full object-cover" alt="Team">
                            <div
                                class="absolute inset-0 bg-[#0086f6]/0 group-hover:bg-[#0086f6]/20 transition-all duration-300">
                            </div>
                        </div>
                        <div class="group relative overflow-hidden rounded-3xl h-[240px]" data-aos="fade-left"
                            data-aos-delay="200" oncontextmenu="return false;">
                            <img src="{{ asset('assets/images/others/image2323.jpeg') }}" class="w-full h-full object-cover"
                                alt="Event">
                            <div
                                class="absolute inset-0 bg-slate-900/0 group-hover:bg-slate-900/40 transition-all duration-300">
                            </div>
                        </div>
                    </div>

                    <!-- Small Square Grid -->
                    <div class="col-span-12 md:col-span-4 group relative overflow-hidden rounded-3xl h-[300px]"
                        data-aos="fade-up" data-aos-delay="100" oncontextmenu="return false;">
                        <img src="{{ asset('assets/images/others/WhatsApp Image 2026-06-29 at 5.18.17 PM.jpeg') }}"
                            class="w-full h-full object-cover" alt="Focus">
                    </div>
                    <div class="col-span-12 md:col-span-4 group relative overflow-hidden rounded-3xl h-[300px]"
                        data-aos="fade-up" data-aos-delay="200" oncontextmenu="return false;">
                        <img src="{{ asset('assets/images/others/WhatsApp Image 2026-06-29 at 5.18.18 PM.jpeg') }}"
                            class="w-full h-full object-cover" alt="Success">
                    </div>
                    <div class="col-span-12 md:col-span-4 group relative overflow-hidden rounded-3xl h-[300px]"
                        data-aos="fade-up" data-aos-delay="300" oncontextmenu="return false;">
                        <img src="{{ asset('assets/images/others/WhatsApp Image 2026-06-29 at 5.14.39 PM (1).jpeg') }}"
                            class="w-full h-full object-cover" alt="Culture">
                    </div>
                </div>

                <div class="grid grid-cols-12 gap-4 md:gap-6 mt-5">
                    <!-- Large Feature Image -->
                    <div class="col-span-12 md:col-span-8 group relative overflow-hidden rounded-3xl" data-aos="zoom-in"
                        oncontextmenu="return false;">
                        <div
                            class="absolute inset-0 bg-slate-900/20 group-hover:bg-slate-900/10 transition-colors duration-500 z-10">
                        </div>
                        <img src="{{ asset('assets/images/others/team5.jpeg') }}"
                            class="w-full h-[500px] object-cover transform group-hover:scale-105 transition-transform duration-1000"
                            alt="Office Life">
                    </div>

                    <!-- Vertical Image -->
                    <div class="col-span-12 md:col-span-4 space-y-6">
                        <div class="group relative overflow-hidden rounded-3xl h-[240px]" data-aos="fade-left"
                            data-aos-delay="100" oncontextmenu="return false;">
                            <img src="{{ asset('assets/images/others/WhatsApp Image 2026-06-29 at 5.24.22 PM.jpeg') }}"
                                class="w-full h-full object-cover" alt="Team">
                            <div
                                class="absolute inset-0 bg-[#0086f6]/0 group-hover:bg-[#0086f6]/20 transition-all duration-300">
                            </div>
                        </div>
                        <div class="group relative overflow-hidden rounded-3xl h-[240px]" data-aos="fade-left"
                            data-aos-delay="200" oncontextmenu="return false;">
                            <img src="{{ asset('assets/images/others/WhatsApp Image 2026-06-29 at 4.55.54 PM.jpeg') }}"
                                class="w-full h-full object-cover" alt="Event">
                            <div
                                class="absolute inset-0 bg-slate-900/0 group-hover:bg-slate-900/40 transition-all duration-300">
                            </div>
                        </div>
                    </div>

                    <!-- Small Square Grid -->
                    <div class="col-span-12 md:col-span-4 group relative overflow-hidden rounded-3xl h-[300px]"
                        data-aos="fade-up" data-aos-delay="100" oncontextmenu="return false;">
                        <img src="{{ asset('assets/images/others/WhatsApp Image 2026-06-29 at 5.24.21 PM.jpeg') }}"
                            class="w-full h-full object-cover" alt="Focus">
                    </div>
                    <div class="col-span-12 md:col-span-4 group relative overflow-hidden rounded-3xl h-[300px]"
                        data-aos="fade-up" data-aos-delay="200" oncontextmenu="return false;">
                        <img src="{{ asset('assets/images/others/WhatsApp Image 2026-06-29 at 5.24.20 PM.jpeg') }}"
                            class="w-full h-full object-cover" alt="Success">
                    </div>
                    <div class="col-span-12 md:col-span-4 group relative overflow-hidden rounded-3xl h-[300px]"
                        data-aos="fade-up" data-aos-delay="300" oncontextmenu="return false;">
                        <img src="{{ asset('assets/images/others/WhatsApp Image 2026-06-29 at 5.21.jpeg') }}"
                            class="w-full h-full object-cover" alt="Culture">
                    </div>
                </div>
                <div class="grid grid-cols-12 gap-4 md:gap-6 mt-5">
                    <!-- Large Feature Image -->
                    <div class="col-span-12 md:col-span-8 group relative overflow-hidden rounded-3xl" data-aos="zoom-in"
                        oncontextmenu="return false;">
                        <div
                            class="absolute inset-0 bg-slate-900/20 group-hover:bg-slate-900/10 transition-colors duration-500 z-10">
                        </div>
                        <img src="{{ asset('assets/images/others/image345.jpeg') }}"
                            class="w-full h-[500px] object-cover transform group-hover:scale-105 transition-transform duration-1000"
                            alt="Office Life">

                    </div>

                    <!-- Vertical Image -->
                    <div class="col-span-12 md:col-span-4 space-y-6">
                        <div class="group relative overflow-hidden rounded-3xl h-[240px]" data-aos="fade-left"
                            data-aos-delay="100" oncontextmenu="return false;">
                            <img src="{{ asset('assets/images/others/images5673.jpeg') }}"
                                class="w-full h-full object-cover" alt="Team">
                            <div
                                class="absolute inset-0 bg-[#0086f6]/0 group-hover:bg-[#0086f6]/20 transition-all duration-300">
                            </div>
                        </div>
                        <div class="group relative overflow-hidden rounded-3xl h-[240px]" data-aos="fade-left"
                            data-aos-delay="200" oncontextmenu="return false;">
                            <img src="{{ asset('assets/images/others/images8374.jpeg') }}"
                                class="w-full h-full object-cover" alt="Event">
                            <div
                                class="absolute inset-0 bg-slate-900/0 group-hover:bg-slate-900/40 transition-all duration-300">
                            </div>
                        </div>
                    </div>

                    <!-- Small Square Grid -->
                    <div class="col-span-12 md:col-span-4 group relative overflow-hidden rounded-3xl h-[300px]"
                        data-aos="fade-up" data-aos-delay="100" oncontextmenu="return false;">
                        <img src="{{ asset('assets/images/others/image837248.jpeg') }}" class="w-full h-full object-cover"
                            alt="Focus">
                    </div>
                    <div class="col-span-12 md:col-span-4 group relative overflow-hidden rounded-3xl h-[300px]"
                        data-aos="fade-up" data-aos-delay="200" oncontextmenu="return false;">
                        <img src="{{ asset('assets/images/others/image73257.jpeg') }}" class="w-full h-full object-cover"
                            alt="Success">
                    </div>
                    <div class="col-span-12 md:col-span-4 group relative overflow-hidden rounded-3xl h-[300px]"
                        data-aos="fade-up" data-aos-delay="300" oncontextmenu="return false;">
                        <img src="{{ asset('assets/images/others/image732657.jpeg') }}" class="w-full h-full object-cover"
                            alt="Culture">
                    </div>
                </div>

            </div>
        </section>

        <!-- 2. VIDEO SHOWCASE: THE CINEMATIC EXPERIENCE -->
        <section class="py-24 px-6 bg-slate-950 relative overflow-hidden">
            <!-- Decorative Glows -->
            <div class="absolute -top-24 -right-24 w-96 h-96 bg-[#0086f6]/20 blur-[120px] rounded-full pointer-events-none">
            </div>
            <div
                class="absolute -bottom-24 -left-24 w-96 h-96 bg-blue-600/10 blur-[120px] rounded-full pointer-events-none">
            </div>

            <div class="max-w-7xl mx-auto relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
                    <!-- MAIN FEATURED VIDEO -->
                    <div class="lg:col-span-7 relative group overflow-hidden rounded-2xl border border-white/10 bg-slate-900 shadow-2xl"
                        data-aos="fade-right" oncontextmenu="return false;">
                        <div class="aspect-[16/10] relative video-container">

                            <!-- 1. THE VIDEO: Added oncontextmenu and pointer-events-none -->
                            <video id="mainVideo" loop playsinline
                                class="absolute inset-0 w-full h-full object-cover opacity-80">
                                <source src="{{ asset('assets/images/others/mangopartyvideo.mp4') }}" type="video/mp4">
                            </video>

                            <!-- 3. THE BUTTON: Higher Z-Index (20) so it still works -->
                            <button onclick="toggleVideo('mainVideo', this)"
                                class="absolute inset-0 flex items-center justify-center z-20 group/btn">
                                <div
                                    class="w-20 h-20 bg-amber-500/90 backdrop-blur-xl rounded-full flex items-center justify-center border border-amber-400 shadow-[0_0_30px_rgba(245,158,11,0.5)] transition-all duration-300 group-hover/btn:scale-110">
                                    <svg class="w-8 h-8 text-white fill-current ml-1 play-icon" viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z" />
                                    </svg>
                                    <svg class="w-8 h-8 text-white fill-current hidden pause-icon" viewBox="0 0 24 24">
                                        <path d="M6 19h4V5H6v14zm8-14v14h4V5h-4z" />
                                    </svg>
                                </div>
                            </button>
                        </div>
                    </div>

                    <!-- SIDE VIDEO LIST -->
                    <div class="lg:col-span-5 flex flex-col gap-6">

                        <!-- Video Item 1 -->
                        <div
                            class="group relative flex items-center gap-5 p-3 rounded-3xl hover:bg-white/5 border border-transparent hover:border-white/10 transition-all duration-300">
                            <div class="relative w-44 h-28 flex-shrink-0 rounded-2xl overflow-hidden bg-black video-container"
                                oncontextmenu="return false;">
                                <video id="sideVideo1" loop playsinline class="w-full h-full object-cover opacity-60">
                                    <source src="{{ asset('assets/images/others/mangopartyvideo.mp4') }}" type="video/mp4">
                                </video>
                                <button onclick="toggleVideo('sideVideo1', this)"
                                    class="absolute inset-0 flex items-center justify-center z-20">
                                    <div
                                        class="w-10 h-10 bg-white/20 backdrop-blur-md rounded-full flex items-center justify-center border border-white/30 group-hover:bg-[#002f7d] transition-all duration-300">
                                        <svg class="w-4 h-4 text-white fill-current ml-0.5 play-icon" viewBox="0 0 24 24">
                                            <path d="M8 5v14l11-7z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-white fill-current hidden pause-icon" viewBox="0 0 24 24">
                                            <path d="M6 19h4V5H6v14zm8-14v14h4V5h-4z" />
                                        </svg>
                                    </div>
                                </button>
                            </div>
                            <div>
                                <span class="text-amber-500 text-[9px] font-black uppercase tracking-widest">Seasonal
                                    Spirit</span>
                                <h4 class="text-white font-bold text-lg leading-tight mt-1">Savoring Success: The Annual
                                    Mango Gala</h4>
                            </div>
                        </div>

                        <!-- Video Item 2 -->
                        <div
                            class="group relative flex items-center gap-5 p-3 rounded-3xl hover:bg-white/5 border border-transparent hover:border-white/10 transition-all duration-300">
                            <div class="relative w-44 h-28 flex-shrink-0 rounded-2xl overflow-hidden bg-black video-container"
                                oncontextmenu="return false;">
                                <video id="sideVideo2" loop playsinline class="w-full h-full object-cover opacity-60">
                                    <source src="{{ asset('assets/images/others/happybirthday.mp4') }}" type="video/mp4">
                                </video>
                                <button onclick="toggleVideo('sideVideo2', this)"
                                    class="absolute inset-0 flex items-center justify-center z-20">
                                    <div
                                        class="w-10 h-10 bg-white/20 backdrop-blur-md rounded-full flex items-center justify-center border border-white/30 group-hover:bg-[#002f7d] transition-all duration-300">
                                        <svg class="w-4 h-4 text-white fill-current ml-0.5 play-icon" viewBox="0 0 24 24">
                                            <path d="M8 5v14l11-7z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-white fill-current hidden pause-icon" viewBox="0 0 24 24">
                                            <path d="M6 19h4V5H6v14zm8-14v14h4V5h-4z" />
                                        </svg>
                                    </div>
                                </button>
                            </div>
                            <div>
                                <span class="text-[#0086f6] text-[9px] font-black uppercase tracking-widest">Team
                                    Spirit</span>
                                <h4 class="text-white font-bold text-lg leading-tight mt-1">Birthday Chronicles: Moments of
                                    Joy</h4>
                            </div>
                        </div>

                        <!-- Video Item 3 -->
                        <div
                            class="group relative flex items-center gap-5 p-3 rounded-3xl hover:bg-white/5 border border-transparent hover:border-white/10 transition-all duration-300">
                            <div class="relative w-44 h-28 flex-shrink-0 rounded-2xl overflow-hidden bg-black video-container"
                                oncontextmenu="return false;">
                                <video id="sideVideo3" loop playsinline class="w-full h-full object-cover opacity-60">
                                    <source src="{{ asset('assets/images/others/video368.mp4') }}" type="video/mp4">
                                </video>
                                <button onclick="toggleVideo('sideVideo3', this)"
                                    class="absolute inset-0 flex items-center justify-center z-20">
                                    <div
                                        class="w-10 h-10 bg-white/20 backdrop-blur-md rounded-full flex items-center justify-center border border-white/30 group-hover:bg-[#002f7d] transition-all duration-300">
                                        <svg class="w-4 h-4 text-white fill-current ml-0.5 play-icon" viewBox="0 0 24 24">
                                            <path d="M8 5v14l11-7z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-white fill-current hidden pause-icon" viewBox="0 0 24 24">
                                            <path d="M6 19h4V5H6v14zm8-14v14h4V5h-4z" />
                                        </svg>
                                    </div>
                                </button>
                            </div>
                            <div
                                class="group relative flex items-center gap-5 p-3 rounded-3xl hover:bg-white/5 border border-transparent hover:border-white/10 transition-all duration-300">
                                <!-- Video container code here... -->
                                <div>
                                    <span class="text-[#0086f6] text-[9px] font-black uppercase tracking-widest">Team
                                        Synergy</span>
                                    <h4 class="text-white font-bold text-lg leading-tight mt-1">Beyond the Boardroom: Annual
                                        Sports Meet</h4>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <script>
            function toggleVideo(videoId, button) {
                const video = document.getElementById(videoId);
                const playIcon = button.querySelector('.play-icon');
                const pauseIcon = button.querySelector('.pause-icon');
                const container = video.parentElement;

                if (video.paused) {
                    // Play video
                    video.play();
                    // Hide Play Icon, Show Pause Icon
                    playIcon.classList.add('hidden');
                    pauseIcon.classList.remove('hidden');
                    // Make button background transparent so we can see the video clearly
                    button.firstElementChild.style.opacity = "0";
                    video.style.opacity = "1";
                } else {
                    // Pause video
                    video.pause();
                    // Show Play Icon, Hide Pause Icon
                    playIcon.classList.remove('hidden');
                    pauseIcon.classList.add('hidden');
                    // Show button again
                    button.firstElementChild.style.opacity = "1";
                    video.style.opacity = "0.6";
                }

                // Show button icon on hover even if playing
                button.addEventListener('mouseenter', () => {
                    button.firstElementChild.style.opacity = "1";
                });
                button.addEventListener('mouseleave', () => {
                    if (!video.paused) button.firstElementChild.style.opacity = "0";
                });
            }
        </script>
    </div>

    <!-- Include AOS for smooth scrolling animations -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script>
        AOS.init({
            duration: 1000,
            once: true,
            easing: 'ease-in-out'
        });
    </script>

@endsection
