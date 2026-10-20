@extends('Frontend.frontend-layout.app')

@section('title', 'Projects & Case Studies | SmartAI Soft')
@section('description', 'See how SmartAI Soft has delivered digital products and engineering support for startups, brands, and organizations across multiple regions.')
@section('content')

  <div class="bg-slate-50 overflow-hidden" style="font-family: 'Inter', sans-serif;">

    <section class="bg-[#f8fafc] py-20 lg:py-32 font-['Inter'] border-b border-slate-100 relative overflow-hidden">
      <div
        class="top-0 right-0 absolute bg-pink-400/40 blur-[120px] rounded-full w-[300px] lg:w-[700px] h-[400px] lg:h-[750px] pointer-events-none">
      </div>

      <div
        class="-z-10 absolute inset-0 bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-pink-50 via-transparent to-transparent"
        data-aos="fade" data-aos-delay="500" data-aos-duration="3000"> </div>

      <div class="mx-auto max-w-7xl px-6 lg:px-8 text-center relative z-10 py-20 lg:py-0">
        <span
          class="inline-flex items-center rounded-full px-4 py-1 text-[11px] font-extrabold tracking-[0.2em] text-rose-600 bg-rose-50 border border-rose-100 uppercase mb-8"
          data-aos="fade-up">
          Strategic Portfolio
        </span>
        <h2
          class="text-[36px] md:text-5xl lg:text-[56px] font-[900] text-slate-900 tracking-tight leading-[1.1] mb-8 max-w-4xl mx-auto"
          data-aos="fade-up" data-aos-delay="100">
          Pioneering Digital Excellence for
          <span class="block lg:inline bg-gradient-to-r from-rose-500 to-rose-600 bg-clip-text text-transparent">
            Federal Enterprises.
          </span>
        </h2>

        <p class="text-base md:text-lg lg:text-[20px] text-slate-600 max-w-3xl mx-auto leading-relaxed font-medium opacity-90 mb-6"
          data-aos="fade-up" data-aos-delay="200">
          Explore our comprehensive suite of mission-critical solutions, ranging from high-security government
          infrastructure to user-centric mobile ecosystems, all driven by a culture of unwavering dedication.
        </p>

        <div class="flex justify-center gap-8 mt-10" data-aos="fade-up" data-aos-delay="300">
          <div class="text-center">
            <p class="text-2xl font-bold text-slate-900 group-hover:text-rose-600 transition-colors">50+</p>
            <p class="text-xs uppercase tracking-widest text-slate-400 font-bold">Gov Projects</p>
          </div>
          <div class="w-px h-10 bg-slate-200"></div>
          <div class="text-center">
            <p class="text-2xl font-bold text-slate-900">100%</p>
            <p class="text-xs uppercase tracking-widest text-slate-400 font-bold">Compliance</p>
          </div>
          <div class="w-px h-10 bg-slate-200"></div>
          <div class="text-center">
            <p class="text-2xl font-bold text-slate-900">24/7</p>
            <p class="text-xs uppercase tracking-widest text-slate-400 font-bold">Dedication</p>
          </div>
        </div>
      </div>
    </section>

    <section class="py-24 px-6 bg-slate-50 relative overflow-hidden">
      <div class="absolute top-0 left-0 w-full h-full pointer-events-none opacity-40">
        <div class="absolute top-[-10%] right-[-5%] w-[500px] h-[500px] bg-rose-200/30 blur-[120px] rounded-full"></div>
        <div class="absolute bottom-[-10%] left-[-5%] w-[400px] h-[400px] bg-slate-200/50 blur-[100px] rounded-full">
        </div>
      </div>

      <div class="max-w-7xl mx-auto relative z-10">
        <div class="text-center mb-20" data-aos="fade-up">
          <span
            class="inline-block py-1 px-4 rounded-full bg-rose-50 border border-rose-100 text-rose-600 font-bold text-[11px] tracking-[0.3em] uppercase mb-4">
            Our Projects
          </span>

          <h3 class="text-4xl md:text-5xl lg:text-6xl font-[900] text-slate-900 leading-tight">
            Transforming Visions into <br class="hidden md:block">
            <span class="text-rose-600">Digital Masterpieces.</span>
          </h3>

          <p class="mt-6 text-slate-500 max-w-3xl mx-auto text-lg md:text-xl leading-relaxed font-medium">
            Explore our curated selection of high-impact projects, ranging from mission-critical government infrastructure
            to sophisticated enterprise ecosystems, all crafted with precision and dedication.
          </p>

          <div class="flex justify-center items-center gap-3 mt-10">
            <div class="h-1.5 w-12 bg-rose-600 rounded-full"></div>
            <div class="h-1.5 w-1.5 bg-rose-400 rounded-full"></div>
            <div class="h-1.5 w-1.5 bg-rose-200 rounded-full"></div>
          </div>
        </div>

        <!-- Auto-scrolling marquee (continuous right -> left) -->
        <style>
            .project-marquee {
                position: relative;
                overflow: hidden;
                -webkit-mask-image: linear-gradient(90deg, transparent 0, #000 6%, #000 94%, transparent 100%);
                mask-image: linear-gradient(90deg, transparent 0, #000 6%, #000 94%, transparent 100%);
            }
            .project-marquee__track {
                display: flex;
                align-items: stretch;
                width: max-content;
            }
            .project-marquee__track.is-animating {
                animation: project-marquee-scroll 45s linear infinite;
                will-change: transform;
            }
            .project-marquee:hover .project-marquee__track.is-animating {
                animation-play-state: paused;
            }
            .project-slide {
                flex: 0 0 300px;
                width: 300px;
                margin-right: 24px;
                display: flex;
            }
            /* Show ~3 cards at once on large screens */
            @media (min-width: 1024px) {
                .project-slide {
                    flex-basis: 400px;
                    width: 400px;
                }
            }
            .project-slide > div {
                width: 100%;
            }
            @keyframes project-marquee-scroll {
                from { transform: translateX(0); }
                to { transform: translateX(-50%); }
            }
            @media (prefers-reduced-motion: reduce) {
                .project-marquee__track { animation: none !important; }
            }
        </style>
        <div class="project-marquee py-10">
          <div class="project-marquee__track" id="projectMarqueeTrack">

            <!-- Slide 1 -->
            <div class="project-slide">
              <div
                class="group bg-white border border-slate-100 p-5 rounded-xl hover:border-rose-500 hover:shadow-[0_30px_60px_-15px_rgba(244,63,94,0.15)] hover:-translate-y-2 transition-all duration-500 h-full flex flex-col justify-between">
                <div>
                  <div class="w-[120px] h-auto mb-2 p-4">
                    <img src="{{ asset('assets/website-images/instivio-logo.png') }}" alt="Instivio"
                      class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-500">
                  </div>
                  <h4 class="text-2xl font-black text-slate-900 mb-4 tracking-tighter">Instivio</h4>
                  <p class="text-slate-500 text-md leading-relaxed mb-8">A comprehensive Institute Management System (EMS)
                    featuring ERP-level integration for academic operations and administrative automation.</p>
                </div>
              </div>
            </div>

            <!-- Slide 2 -->
            <div class="project-slide">
              <div
                class="group bg-white border border-slate-100 p-5 rounded-xl hover:border-rose-500 hover:shadow-[0_30px_60px_-15px_rgba(244,63,94,0.15)] hover:-translate-y-2 transition-all duration-500 h-full flex flex-col justify-between">
                <div>
                  <div class="w-[120px] h-auto mb-2 p-4">
                    <img src="{{ asset('assets/website-images/WhatsApp Image 2026-03-11 at 11.06.52 AM.jpeg') }}"
                      alt="ZK Agency App"
                      class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-500">
                  </div>
                  <h4 class="text-2xl font-black text-slate-900 mb-4 tracking-tighter">ZK Agency App</h4>
                  <p class="text-slate-500 text-md leading-relaxed mb-8">A centralized agency management portal designed
                    for internal operations, focusing on workflow automation and client resource handling.</p>
                </div>
              </div>
            </div>

            <!-- Slide 3 -->
            <div class="project-slide">
              <div
                class="group bg-white border border-slate-100 p-5 rounded-xl hover:border-rose-500 hover:shadow-[0_30px_60px_-15px_rgba(244,63,94,0.15)] hover:-translate-y-2 transition-all duration-500 h-full flex flex-col justify-between">
                <div>
                  <div class="w-[250px] h-auto mb-2 p-4">
                    <img src="{{ asset('assets/website-images/logo-green-horizontal-e1764346506978.png') }}"
                      alt="Salamah Services"
                      class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-500">
                  </div>
                  <h4 class="text-2xl font-black text-slate-900 mb-4 tracking-tighter">Salamah Services</h4>
                  <p class="text-slate-500 text-md leading-relaxed mb-8">An integrated safety certification ecosystem
                    designed for regulatory compliance, streamlining inspection workflows for civil defense standards.</p>
                </div>
              </div>
            </div>

            <!-- Slide 4 -->
            <div class="project-slide">
              <div
                class="group bg-white border border-slate-100 p-5 rounded-xl hover:border-rose-500 hover:shadow-[0_30px_60px_-15px_rgba(244,63,94,0.15)] hover:-translate-y-2 transition-all duration-500 h-full flex flex-col justify-between">
                <div>
                  <div class="w-[100px] h-auto mb-2 p-4">
                    <img src="{{ asset('assets/website-images/anzway-logo.png') }}" alt="Anzway Academy"
                      class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-500">
                  </div>
                  <h4 class="text-2xl font-black text-slate-900 mb-4 tracking-tighter">Anzway Academy</h4>
                  <p class="text-slate-500 text-md leading-relaxed mb-8">A modern online learning platform dedicated to
                    professional development, skill enhancement, and career growth through industry-focused courses,
                    expert-led training programs, and interactive educational resources.</p>
                </div>
              </div>
            </div>

            <!-- Slide 5 -->
            <div class="project-slide">
              <div
                class="group bg-white border border-slate-100 p-5 rounded-xl hover:border-rose-500 hover:shadow-[0_30px_60px_-15px_rgba(244,63,94,0.15)] hover:-translate-y-2 transition-all duration-500 h-full flex flex-col justify-between">
                <div>
                  <div class="w-[120px] h-auto mb-2 p-4">
                    <img src="{{ asset('assets/website-images/logo-two-heads.png') }}" alt="Mary Guiney Brand"
                      class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-500">
                  </div>
                  <h4 class="text-2xl font-black text-slate-900 mb-4 tracking-tighter">Mary Guiney Brand</h4>
                  <p class="text-slate-500 text-md leading-relaxed mb-8">A premium personal brand ecosystem designed for
                    high-end professional positioning and bespoke portfolio presentation.</p>
                </div>
              </div>
            </div>

            <!-- Slide 6 -->
            <div class="project-slide">
              <div
                class="group bg-white border border-slate-100 p-5 rounded-xl hover:border-rose-500 hover:shadow-[0_30px_60px_-15px_rgba(244,63,94,0.15)] hover:-translate-y-2 transition-all duration-500 h-full flex flex-col justify-between">
                <div>
                  <div class="w-[250px] h-auto mb-2 p-4">
                    <img src="{{ asset('assets/website-images/sgbf.webp') }}" alt="Saudi Green Building Forum"
                      class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-500">
                  </div>
                  <h4 class="text-2xl font-black text-slate-900 mb-4 tracking-tighter">Saudi Green Building Forum</h4>
                  <p class="text-slate-500 text-md leading-relaxed mb-8">Developing a strategic digital standard for
                    sustainable construction in the Kingdom, facilitating green building initiatives and national
                    compliance.</p>
                </div>
              </div>
            </div>

            <!-- Slide 7 -->
            <div class="project-slide">
              <div
                class="group bg-white border border-slate-100 p-5 rounded-xl hover:border-rose-500 hover:shadow-[0_30px_60px_-15px_rgba(244,63,94,0.15)] hover:-translate-y-2 transition-all duration-500 h-full flex flex-col justify-between">
                <div>
                  <div class="w-[100px] h-auto mb-2 p-4">
                    <img src="{{ asset('assets/website-images/274468827_110368844913244_7837471241620231703_n.jpg') }}"
                      alt="SRACS Compliance UK"
                      class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-500">
                  </div>
                  <h4 class="text-2xl font-'black text-slate-900 mb-4 tracking-tighter">SRACS Compliance UK</h4>
                  <p class="text-slate-500 text-md leading-relaxed mb-8">A trusted car rental service providing reliable,
                    well-maintained vehicles for business trips, family travel, and daily transportation.</p>
                </div>
              </div>
            </div>

            <!-- Slide 8 -->
            <div class="project-slide">
              <div
                class="group bg-white border border-slate-100 p-5 rounded-xl hover:border-rose-500 hover:shadow-[0_30px_60px_-15px_rgba(244,63,94,0.15)] hover:-translate-y-2 transition-all duration-500 h-full flex flex-col justify-between">
                <div>
                  <div class="w-[100px] h-auto mb-2 p-4">
                    <img src="{{ asset('assets/website-images/pmd-logo.png') }}" alt="Pak Mahi Dost"
                      class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-500">
                  </div>
                  <h4 class="text-2xl font-black text-slate-900 mb-4 tracking-tighter">Pak Mahi Dost</h4>
                  <p class="text-slate-500 text-md leading-relaxed mb-8">An innovative AgriTech marketplace connecting
                    fisheries with modern commerce, driving digital transformation in Pakistan's primary sectors.</p>
                </div>
              </div>
            </div>

            <!-- Slide 9 -->
            <div class="project-slide">
              <div
                class="group bg-white border border-slate-100 p-5 rounded-xl hover:border-rose-500 hover:shadow-[0_30px_60px_-15px_rgba(244,63,94,0.15)] hover:-translate-y-2 transition-all duration-500 h-full flex flex-col justify-between">
                <div>
                  <div class="w-[140px] h-auto mb-2 p-4">
                    <img src="{{ asset('assets/website-images/logo.png') }}" alt="Orkans Management"
                      class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-500">
                  </div>
                  <h4 class="text-2xl font-black text-slate-900 mb-4 tracking-tighter">Orkans Management</h4>
                  <p class="text-slate-500 text-md leading-relaxed mb-8">Proprietary administration portal optimized for
                    high-volume data management and real-time operational oversight.</p>
                </div>
              </div>
            </div>

          </div>
        </div>

        <script>
            (function () {
                var track = document.getElementById('projectMarqueeTrack');
                if (!track) return;
                if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;
                // Duplicate the slides once so translateX(-50%) creates a seamless, infinite loop
                track.innerHTML += track.innerHTML;
                track.classList.add('is-animating');
            })();
        </script>
      </div>
    </section>

    <section class="bg-[#f43f5e] py-24 px-6 overflow-hidden relative">
      <div class="absolute inset-0 bg-black/5 pointer-events-none"></div>

      <div class="max-w-7xl mx-auto relative z-10">
        <div class="flex flex-col md:flex-row items-center gap-16">

          <div class="md:w-1/2" data-aos="fade-right">
            <h2 class="text-sm font-extrabold text-rose-100 uppercase tracking-[0.2em] mb-2">
              Next-Gen Mobility
            </h2>

            <h3 class="text-4xl md:text-5xl font-black text-white mb-6">
              Innovative Mobile Applications
            </h3>

            <p class="text-rose-50 text-lg mb-10 leading-relaxed opacity-90">
              We design and develop native and cross-platform mobile apps that provide citizens and employees with
              powerful tools on the go.
            </p>

            <div class="space-y-8">
              <div class="flex gap-5">
                <div
                  class="w-14 h-14 shrink-0 bg-white/10 border border-white/20 rounded-2xl flex items-center justify-center text-white shadow-lg">
                  <i class="fas fa-fingerprint text-2xl"></i>
                </div>
                <div>
                  <h5 class="text-white font-bold text-xl mb-1">Biometric Security</h5>

                  <p class="text-rose-100/80 leading-relaxed">Industry-standard face and thumbprint authentication for
                    sensitive data protection.</p>
                </div>
              </div>
              <div class="flex gap-5">
                <div
                  class="w-14 h-14 shrink-0 bg-white/10 border border-white/20 rounded-2xl flex items-center justify-center text-white shadow-lg">
                  <i class="fas fa-bolt text-2xl"></i>
                </div>
                <div>
                  <h5 class="text-white font-bold text-xl mb-1">Real-time Sync</h5>
                  <p class="text-rose-100/80 leading-relaxed">Offline-first architecture ensuring data is always
                    available, even without connectivity.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="md:w-1/2 relative" data-aos="fade-left">
            <div class="relative z-10 flex justify-center">
              <div
                class="relative w-72 h-[580px] bg-slate-900 rounded-[3rem] border-[10px] border-slate-800 shadow-2xl overflow-hidden ring-1 ring-white/10">
                <img src="https://images.unsplash.com/photo-1551650975-87deedd944c3?auto=format&fit=crop&q=80&w=600"
                  class="w-full h-full object-cover" alt="Mobile App 1">
              </div>
              <div
                class="absolute -right-8 top-20 w-48 h-96 bg-slate-900 rounded-[2rem] border-[6px] border-slate-800 shadow-2xl overflow-hidden hidden lg:block translate-x-12 scale-90 opacity-90 ring-1 ring-white/10">
                <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?auto=format&fit=crop&q=80&w=600"
                  class="w-full h-full object-cover" alt="Mobile App 2">
              </div>
            </div>
            <div
              class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[100%] h-[100%] bg-white/10 blur-[100px] rounded-full">
            </div>
          </div>

        </div>
      </div>
    </section>

  </div>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script>
    AOS.init({
      duration: 800,
      once: true,
      easing: 'ease-out-quad'
    });
  </script>

@endsection