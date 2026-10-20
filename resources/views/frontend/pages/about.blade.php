@extends('Frontend.frontend-layout.app')

@section('title', 'About SmartAI Soft | Offshore Software & AI Development Team')
@section('description', 'Learn how SmartAI Soft builds dedicated offshore engineering teams for startups, SaaS, and agencies with reliable delivery and long-term partnership.')
@section('content')

  <div class="bg-white overflow-hidden text-slate-500" style="font-family: 'Inter', sans-serif;">
    {{-- hero section --}}
    <section class="relative bg-white pt-32 pb-20 lg:pt-48 lg:pb-32 font-['Inter'] overflow-hidden">

      <div
        class="absolute inset-0 opacity-[0.03] [mask-image:linear-gradient(to_bottom,white,transparent)] pointer-events-none">
        <svg class="h-full w-full" xmlns="http://www.w3.org/2000/svg">
          <defs>
            <pattern id="about-grid" width="40" height="40" patternUnits="userSpaceOnUse">
              <path d="M0 40V.5H40" fill="none" stroke="currentColor"></path>
            </pattern>
          </defs>
          <rect width="100%" height="100%" fill="url(#about-grid)"></rect>
        </svg>
      </div>

      <div
        class="top-0 right-0 absolute bg-pink-400/40 blur-[120px] rounded-full w-[300px] lg:w-[700px] h-[400px] lg:h-[750px] pointer-events-none">
      </div>

      <div
        class="-z-10 absolute inset-0 bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-pink-50 via-transparent to-transparent"
        data-aos="fade" data-aos-delay="500" data-aos-duration="3000"> </div>

      <div class="relative z-10 mx-auto max-w-7xl px-6 lg:px-8">
        <div class="text-center">

          <div class="flex justify-center mb-8" data-aos="fade-up">
            <span
              class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full text-[12px] font-bold tracking-[0.2em] text-rose-600 bg-rose-50 border border-rose-100 uppercase">
              <span class="w-2 h-2 rounded-full bg-rose-500 animate-pulse"></span>
              Our Identity & Mission
            </span>
          </div>

          <h1 class="text-[36px] sm:text-6xl lg:text-[72px] font-[900] text-slate-900 tracking-tight leading-[1.05] mb-8"
            data-aos="fade-up" data-aos-delay="100">
            Where Human Ingenuity <br class="hidden lg:block"> Meets
            <span class="bg-gradient-to-r from-rose-500 via-rose-600 to-indigo-600 bg-clip-text text-transparent">
              Machine Intelligence.
            </span>
          </h1>

          <p class="text-base sm:text-lg lg:text-[22px] text-slate-600 text-start max-w-3xl mx-auto leading-relaxed font-medium opacity-90 mb-12"
            data-aos="fade-up" data-aos-delay="200">
            SmartAI Soft (Pvt) Ltd is more than a software house. We are architects of digital transformation, dedicated
            to engineering scalable AI ecosystems that redefine how global enterprises operate, compete, and thrive.
          </p>

          <div class="grid grid-cols-2 md:grid-cols-4 gap-8 py-10 border-y border-slate-100 max-w-4xl mx-auto"
            data-aos="fade-up" data-aos-delay="300">
            <div class="text-center">
              <div class="text-3xl font-black text-slate-900">50+</div>
              <div class="text-xs font-bold text-slate-500 uppercase tracking-widest mt-1">Global Clients</div>
            </div>
            <div class="text-center">
              <div class="text-3xl font-black text-slate-900">120+</div>
              <div class="text-xs font-bold text-slate-500 uppercase tracking-widest mt-1">Projects Delivered</div>
            </div>
            <div class="text-center">
              <div class="text-3xl font-black text-slate-900">15+</div>
              <div class="text-xs font-bold text-slate-500 uppercase tracking-widest mt-1">Expert Engineers</div>
            </div>
            <div class="text-center">
              <div class="text-3xl font-black text-slate-900">99%</div>
              <div class="text-xs font-bold text-slate-500 uppercase tracking-widest mt-1">Client Retention</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    {{-- story section --}}
    <section class="py-24 bg-white font-['Inter'] relative overflow-hidden">

      <div class="absolute inset-0 opacity-[0.03] pointer-events-none"
        style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath d=\'M30 0l30 30-30 30L0 30z\' fill=\'%23000\' fill-opacity=\'1\' fill-rule=\'evenodd\'/%3E%3C/svg%3E');">
      </div>

      <div class="absolute top-1/2 left-0 -translate-y-1/2 w-64 h-64 bg-rose-500/5 blur-[100px] pointer-events-none">
      </div>

      <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-start">

          <div data-aos="fade-right">
            <h2 class="text-[13px] font-extrabold tracking-[0.25em] text-rose-600 uppercase mb-4">
              Our Story
            </h2>
            <h3 class="text-3xl md:text-5xl font-[900] text-slate-900 tracking-tight leading-tight mb-8">
              From a Visionary Spark to <br>
              <span class="text-rose-600">Enterprise Leadership.</span>
            </h3>

            <div class="space-y-6 text-lg text-slate-600 leading-relaxed font-medium">
              <p>
                SmartAI Soft (Pvt) Ltd was founded with a singular, ambitious goal: to bridge the gap between complex
                artificial intelligence and practical business growth. What started as a small team of passionate
                engineers has evolved into a premier software house serving global clients.
              </p>
              <p>
                We realized early on that technology shouldn't just be "smart"—it needs to be scalable, secure, and
                user-centric. This realization became the foundation of our engineering philosophy.
              </p>
              <p>
                Today, we stand as a trusted partner for enterprises looking to navigate the digital era. We don't just
                deliver code; we deliver the future infrastructure of your business, ensuring every solution we build is a
                step toward your long-term success.
              </p>
            </div>

            <div class="mt-10 p-8 bg-slate-50 rounded-3xl border-l-4 border-rose-600">
              <p class="text-slate-900 font-bold italic mb-4">
                "At SmartAI Soft, we measure our success not by the complexity of the code we write, but by the tangible
                business value we create for our partners."
              </p>
              <div class="flex items-center gap-4">
                <div class="w-10 h-10 rounded-full bg-slate-200"></div> 
                <div>
                  <div class="text-sm font-black text-slate-900 uppercase tracking-wider">Leadership Team</div>
                  <div class="text-xs font-bold text-rose-600 uppercase">SmartAI Soft (Pvt) Ltd</div>
                </div>
              </div>
            </div>
          </div>

          <div class="relative" data-aos="fade-left">
            <div
              class="space-y-12 relative before:absolute before:inset-0 before:ml-5 before:-translate-x-px md:before:mx-auto md:before:translate-x-0 before:h-full before:w-0.5 before:bg-gradient-to-b before:from-transparent before:via-slate-200 before:to-transparent">

              <div class="relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse group">
                <div
                  class="flex items-center justify-center w-10 h-10 rounded-full border border-white bg-slate-100 group-hover:bg-rose-600 group-hover:text-white text-slate-500 shadow shrink-0 md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2 transition-colors duration-300">
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 2a8 8 0 100 16 8 8 0 000-16zm0 14a6 6 0 110-12 6 6 0 010 12z" />
                  </svg>
                </div>
                <div
                  class="w-[calc(100%-4rem)] md:w-[calc(50%-2.5rem)] bg-white p-6 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md transition-shadow">
                  <time class="font-black text-rose-600 text-sm uppercase tracking-widest">The Beginning</time>
                  <h4 class="text-xl font-bold text-slate-900 mt-1">Founded with Purpose</h4>
                  <p class="text-slate-600 mt-2 text-sm">SmartAI Soft was established to provide high-end, AI-driven
                    engineering solutions to local startups.</p>
                </div>
              </div>

              <div class="relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse group">
                <div
                  class="flex items-center justify-center w-10 h-10 rounded-full border border-white bg-slate-100 group-hover:bg-rose-600 group-hover:text-white text-slate-500 shadow shrink-0 md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2 transition-colors duration-300">
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                      d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
                  </svg>
                </div>
                <div
                  class="w-[calc(100%-4rem)] md:w-[calc(50%-2.5rem)] bg-white p-6 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md transition-shadow">
                  <time class="font-black text-rose-600 text-sm uppercase tracking-widest">Expansion</time>
                  <h4 class="text-xl font-bold text-slate-900 mt-1">Going Global</h4>
                  <p class="text-slate-600 mt-2 text-sm">Scaled operations to serve the international market, delivering
                    enterprise software to the US and Europe.</p>
                </div>
              </div>

              <div class="relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse group">
                <div
                  class="flex items-center justify-center w-10 h-10 rounded-full border border-white bg-slate-100 group-hover:bg-rose-600 group-hover:text-white text-slate-500 shadow shrink-0 md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2 transition-colors duration-300">
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                      d="M2.166 4.9L10 1.154l7.834 3.746v7.2c0 4.27-2.556 8.225-6.5 9.5a.75.75 0 01-.466 0c-3.944-1.275-6.5-5.23-6.5-9.5V4.9zm13.334 1.258L10 3.535 4.5 6.158v5.942c0 3.328 1.91 6.425 5 7.49 3.09-1.065 5-4.162 5-7.49V6.158z"
                      clip-rule="evenodd" />
                  </svg>
                </div>
                <div
                  class="w-[calc(100%-4rem)] md:w-[calc(50%-2.5rem)] bg-white p-6 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md transition-shadow">
                  <time class="font-black text-rose-600 text-sm uppercase tracking-widest">Present Day</time>
                  <h4 class="text-xl font-bold text-slate-900 mt-1">SmartAI Soft (Pvt) Ltd</h4>
                  <p class="text-slate-600 mt-2 text-sm">Now a recognized Private Limited entity, leading the way in
                    modern engineering and ethical AI development.</p>
                </div>
              </div>

            </div>
          </div>

        </div>
      </div>
    </section>

    {{-- Mission & vision --}}
    <section class="py-24 bg-white font-['Inter'] relative overflow-hidden">

      <div class="absolute top-0 right-0 w-1/3 h-full bg-rose-500/5 blur-[120px] pointer-events-none"></div>
      <div class="absolute bottom-0 left-0 w-1/3 h-full bg-indigo-500/5 blur-[120px] pointer-events-none"></div>

      <div class="mx-auto max-w-7xl px-6 lg:px-8">

        <div class="text-center max-w-3xl mx-auto mb-20">
          <h2 class="text-[13px] font-extrabold tracking-[0.25em] text-rose-600 uppercase mb-4" data-aos="fade-up">
            Strategic Intent
          </h2>
          <h3 class="text-3xl md:text-5xl font-[900] text-slate-900 tracking-tight leading-tight" data-aos="fade-up"
            data-aos-delay="100">
            Defining the Future of <br>
            <span class="text-rose-600">Enterprise Intelligence.</span>
          </h3>
        </div>

        <div class="grid lg:grid-cols-2 gap-8 items-stretch">
          <div
            class="relative group p-10 lg:p-16 bg-white border border-slate-100 rounded-[40px] shadow-sm hover:shadow-2xl transition-all duration-500 overflow-hidden"
            data-aos="fade-right">
            <div class="absolute -top-10 -right-10 text-rose-500/5 group-hover:text-rose-500/10 transition-colors">
              <svg xmlns="http://www.w3.org/2000/svg" width="240" height="240" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 2v10" />
                <path d="M18.4 6.9c1.4 1.4 2.2 3.3 2.2 5.1 0 4.4-3.6 8-8 8s-8-3.6-8-8c0-1.8.8-3.7 2.2-5.1" />
              </svg>
            </div>

            <div class="relative z-10">
              <div
                class="w-14 h-14 bg-rose-600 text-white rounded-2xl flex items-center justify-center mb-8 shadow-lg shadow-rose-200">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M12 2v10" />
                  <path d="m4.93 4.93 4.24 4.24" />
                  <path d="M2 12h8" />
                  <path d="m4.93 19.07 4.24-4.24" />
                  <path d="M12 22v-8" />
                  <path d="m19.07 19.07-4.24-4.24" />
                  <path d="M22 12h-8" />
                  <path d="m19.07 4.93-4.24 4.24" />
                </svg>
              </div>
              <h4 class="text-2xl font-black text-slate-900 uppercase tracking-tight mb-6">Our Mission</h4>
              <p class="text-lg lg:text-xl text-slate-600 leading-relaxed font-medium">
                To engineer intelligent, scalable, and secure digital ecosystems that transform complex business
                challenges into decisive competitive advantages for our global partners.
              </p>
              <div class="mt-10 flex items-center gap-4">
                <div class="h-px w-12 bg-rose-600"></div>
                <span class="text-xs font-bold text-rose-600 uppercase tracking-widest">Purposeful Engineering</span>
              </div>
            </div>
          </div>

          <div class="relative group p-10 lg:p-16 bg-slate-900 rounded-[40px] shadow-xl overflow-hidden"
            data-aos="fade-left">
            <div class="absolute -top-10 -right-10 text-white/5 group-hover:text-white/10 transition-colors">
              <svg xmlns="http://www.w3.org/2000/svg" width="240" height="240" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10" />
                <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z" />
                <path d="M2 12h20" />
              </svg>
            </div>

            <div class="relative z-10">
              <div class="w-14 h-14 bg-white text-slate-900 rounded-2xl flex items-center justify-center mb-8 shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                  <circle cx="12" cy="12" r="10" />
                  <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20" />
                  <path d="M2 12h20" />
                </svg>
              </div>
              <h4 class="text-2xl font-black text-white uppercase tracking-tight mb-6">Our Vision</h4>
              <p class="text-lg lg:text-xl text-slate-300 leading-relaxed font-medium">
                To be the defining global benchmark for modern enterprise engineering, where every business is empowered
                by the seamless integration of human intuition and machine intelligence.
              </p>
              <div class="mt-10 flex items-center gap-4">
                <div class="h-px w-12 bg-white"></div>
                <span class="text-xs font-bold text-white uppercase tracking-widest">Global Influence</span>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
    
    {{-- services --}}
    <section class="py-24 bg-white font-['Inter'] relative overflow-hidden">

      <div class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-slate-200 to-transparent"></div>

      <div class="mx-auto max-w-7xl px-6 lg:px-8">

        <div class="text-center max-w-3xl mx-auto mb-20">
          <h2 class="text-[13px] font-extrabold tracking-[0.25em] text-rose-600 uppercase mb-4" data-aos="fade-up">
            Our Services
          </h2>
          <h3 class="text-3xl md:text-5xl font-[900] text-slate-900 tracking-tight leading-tight mb-6">
            The Foundation of <br class="hidden md:block">
            <span class="text-rose-600">Our Success.</span>
          </h3>
          <p class="text-lg text-slate-600 leading-relaxed font-medium opacity-80" data-aos="fade-up"
            data-aos-delay="200">
            Our company is built on the pillars of Innovation, Quality, Customer Success, Integrity, Technical Excellence,
            and Continuous Improvement.
          </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-x-8 gap-y-12">

          <div class="group relative" data-aos="fade-up" data-aos-delay="100">
            <div
              class="mb-6 inline-flex items-center justify-center w-12 h-12 rounded-xl bg-rose-50 text-rose-600 group-hover:bg-rose-600 group-hover:text-white transition-all duration-300">
              
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path
                  d="m12 3-1.912 5.813a2 2 0 0 1-1.275 1.275L3 12l5.813 1.912a2 2 0 0 1 1.275 1.275L12 21l1.912-5.813a2 2 0 0 1 1.275-1.275L21 12l-5.813-1.912a2 2 0 0 1-1.275-1.275L12 3Z" />
              </svg>
            </div>
            <h4 class="text-xl font-bold text-slate-900 mb-3">Innovation</h4>
            <p class="text-slate-600 leading-relaxed text-[15px]">
              We embrace emerging technologies and creative thinking to develop innovative solutions that drive growth and
              long-term success.
            </p>
          </div>

          <div class="group relative" data-aos="fade-up" data-aos-delay="200">
            <div
              class="mb-6 inline-flex items-center justify-center w-12 h-12 rounded-xl bg-rose-50 text-rose-600 group-hover:bg-rose-600 group-hover:text-white transition-all duration-300">
           
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="8" r="6" />
                <path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11" />
              </svg>
            </div>
            <h4 class="text-xl font-bold text-slate-900 mb-3">Quality Excellence</h4>
            <p class="text-slate-600 leading-relaxed text-[15px]">
              We maintain the highest standards of quality and reliability, ensuring every solution delivers exceptional
              performance and value.
            </p>
          </div>

          <div class="group relative" data-aos="fade-up" data-aos-delay="300">
            <div
              class="mb-6 inline-flex items-center justify-center w-12 h-12 rounded-xl bg-rose-50 text-rose-600 group-hover:bg-rose-600 group-hover:text-white transition-all duration-300">
            
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="m11 17 2 2 4-4" />
                <path d="m3 10 2.5 2.5L3 15" />
                <path d="m21 10-2.5 2.5L21 15" />
                <path d="M12 12H5.2" />
                <path d="M18.8 12H12" />
                <path d="M12 2v20" />
              </svg>
            </div>
            <h4 class="text-xl font-bold text-slate-900 mb-3">Clients Success</h4>
            <p class="text-slate-600 leading-relaxed text-[15px]">
              Our clients are at the center of everything we do. We focus on understanding their needs and creating
              measurable business value.
            </p>
          </div>

          <div class="group relative" data-aos="fade-up" data-aos-delay="400">
            <div
              class="mb-6 inline-flex items-center justify-center w-12 h-12 rounded-xl bg-rose-50 text-rose-600 group-hover:bg-rose-600 group-hover:text-white transition-all duration-300">
           
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z" />
                <circle cx="12" cy="12" r="3" />
              </svg>
            </div>
            <h4 class="text-xl font-bold text-slate-900 mb-3">Integrity & Transparency</h4>
            <p class="text-slate-600 leading-relaxed text-[15px]">
              We conduct business with honesty and transparency, fostering trust through accountability, ethical
              practices, and open communication.
            </p>
          </div>

          <div class="group relative" data-aos="fade-up" data-aos-delay="500">
            <div
              class="mb-6 inline-flex items-center justify-center w-12 h-12 rounded-xl bg-rose-50 text-rose-600 group-hover:bg-rose-600 group-hover:text-white transition-all duration-300">
      
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <rect x="4" y="4" width="16" height="16" rx="2" />
                <rect x="9" y="9" width="6" height="6" />
                <path d="M9 1v3" />
                <path d="M15 1v3" />
                <path d="M9 20v3" />
                <path d="M15 20v3" />
                <path d="M20 9h3" />
                <path d="M20 15h3" />
                <path d="M1 9h3" />
                <path d="M1 15h3" />
              </svg>
            </div>
            <h4 class="text-xl font-bold text-slate-900 mb-3">Technical Expertise</h4>
            <p class="text-slate-600 leading-relaxed text-[15px]">
              Our skilled professionals apply deep technical knowledge and industry experience to deliver effective and
              scalable solutions.
            </p>
          </div>

          <div class="group relative" data-aos="fade-up" data-aos-delay="600">
            <div
              class="mb-6 inline-flex items-center justify-center w-12 h-12 rounded-xl bg-rose-50 text-rose-600 group-hover:bg-rose-600 group-hover:text-white transition-all duration-300">
           
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                <circle cx="9" cy="7" r="4" />
                <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
              </svg>
            </div>
            <h4 class="text-xl font-bold text-slate-900 mb-3">Collaboration</h4>
            <p class="text-slate-600 leading-relaxed text-[15px]">
              We promote teamwork and strong partnerships, combining diverse perspectives to achieve shared goals and
              outstanding results.
            </p>
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