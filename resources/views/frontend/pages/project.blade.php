@extends('Frontend.frontend-layout.app')

@section('title', 'Custom Web & Mobile App Development Services | MEHR Website Design and Software Services')
@section('description', 'Custom web and mobile app development in Texas, USA. WordPress, Laravel, Shopify, Zoho, React Native, Flutter, MERN Stack, and Python solutions from MEHR Website Design and Software Services.')
@section('content')

  <style>
    .sl { font-family: 'Inter', system-ui, sans-serif; color: #475569; line-height: 1.65; background: #fff;
      --navy: #002f7d; --blue: #0086f6; --sky: #007fcf; --ink: #0f172a; --line: #e2e8f0; --soft: #f8fafc; }
    .sl *, .sl *::before, .sl *::after { box-sizing: border-box; }
    .sl h1, .sl h2, .sl h3, .sl p, .sl ul, .sl ol { margin: 0; padding: 0; }
    .sl a { text-decoration: none; }
    .sl-wrap { max-width: 1200px; margin: 0 auto; padding: 0 24px; }
    .sl-section { padding: 40px 0; }
    .sl-alt { background: var(--soft); }
    .sl-label { font-size: 14px; font-weight: 600; color: var(--sky); margin-bottom: 12px; }
    .sl-h2 { font-size: clamp(28px, 4vw, 40px); line-height: 1.15; font-weight: 700; letter-spacing: -0.02em; color: var(--ink); }
    .sl-head { max-width: 680px; margin-bottom: 48px; }
    .sl-sub { margin-top: 18px; font-size: 18px; }

    .sl-btn { display: inline-flex; align-items: center; justify-content: center; gap: 8px; padding: 14px 26px; font-size: 15px; font-weight: 600;
      border-radius: 10px; border: 1px solid transparent; transition: background .2s, color .2s, border-color .2s; }
    .sl-btn:focus-visible { outline: 3px solid var(--blue); outline-offset: 2px; }
    .sl-btn svg { width: 18px; height: 18px; }
    .sl-btn-primary { background: var(--navy); color: #fff; }
    .sl-btn-primary:hover { background: var(--blue); color: #fff; }
    .sl-btn-ghost { background: #fff; color: #334155; border-color: #cbd5e1; }
    .sl-btn-ghost:hover { border-color: var(--blue); color: var(--navy); }
    .sl-btn-white { background: #fff; color: var(--navy); }
    .sl-btn-white:hover { background: #eff6ff; }
    .sl-btns { display: flex; flex-wrap: wrap; gap: 12px; margin-top: 32px; }

    .sl-ico { width: 46px; height: 46px; flex-shrink: 0; border-radius: 12px; background: #eff6ff; color: var(--sky); display: flex; align-items: center; justify-content: center; }
    .sl-ico svg { width: 22px; height: 22px; }

    /* Hero */
    .sl-hero { padding: 160px 0 88px; background: linear-gradient(180deg, #eff6ff 0%, #fff 100%); }
    .sl-hero-grid { display: grid; grid-template-columns: 1.35fr 1fr; gap: 56px; align-items: center; }
    .sl-pill { display: inline-flex; align-items: center; gap: 8px; padding: 6px 14px; margin-bottom: 20px; font-size: 14px; font-weight: 600; color: var(--navy); background: #fff; border: 1px solid #bfdbfe; border-radius: 999px; }
    .sl-pill i { width: 8px; height: 8px; border-radius: 50%; background: var(--blue); display: block; }
    .sl-hero h1 { font-size: clamp(34px, 5.2vw, 58px); line-height: 1.08; font-weight: 800; letter-spacing: -0.03em; color: var(--ink); }
    .sl-hero h1 span { color: var(--navy); }
    .sl-intro { margin-top: 22px; max-width: 560px; font-size: 18px; }
    .sl-facts { display: grid; grid-template-columns: repeat(3, auto); justify-content: start; gap: 40px; margin-top: 40px; padding-top: 28px; border-top: 1px solid var(--line); }
    .sl-facts strong { display: block; font-size: 24px; font-weight: 800; color: var(--ink); }
    .sl-facts span { font-size: 13px; font-weight: 600; color: #64748b; }

    .sl-panel { padding: 10px; background: #fff; border: 1px solid var(--line); border-radius: 5px; box-shadow: 0 20px 40px -20px rgba(0, 47, 125, .18); }
    .sl-panel a { display: flex; align-items: center; gap: 14px; padding: 14px; border-radius: 12px; color: var(--ink); font-weight: 600; transition: background .2s; }
    .sl-panel a:hover { background: #eff6ff; }
    .sl-panel a small { display: block; font-size: 13px; font-weight: 400; color: #64748b; }
    .sl-panel .sl-arrow { margin-left: auto; width: 18px; height: 18px; color: #94a3b8; }

    /* Services */
    .sl-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; }
    .sl-card { display: flex; flex-direction: column; padding: 32px; background: #fff; border: 1px solid var(--line); border-radius: 18px; transition: border-color .2s, box-shadow .2s; }
    .sl-card:hover { border-color: #bfdbfe; box-shadow: 0 16px 32px -18px rgba(0, 47, 125, .25); }
    .sl-card h3 { margin-top: 20px; font-size: 20px; font-weight: 700; color: var(--ink); }
    .sl-card p { margin-top: 10px; font-size: 15px; flex: 1; }
    .sl-tags { display: flex; flex-wrap: wrap; gap: 8px; margin-top: 20px; }
    .sl-tags span { padding: 4px 12px; font-size: 13px; font-weight: 600; color: var(--navy); background: #eff6ff; border-radius: 999px; }

    /* Mobile */
    .sl-dark { background: var(--navy); }
    .sl-dark .sl-label { color: #bfdbfe; }
    .sl-dark .sl-h2 { color: #fff; }
    .sl-mob { display: grid; grid-template-columns: 1fr 1fr; gap: 72px; align-items: center; }
    .sl-dark .sl-sub { color: #dbeafe; }
    .sl-feats { margin-top: 36px; display: grid; gap: 24px; list-style: none; }
    .sl-feats li { display: flex; gap: 16px; }
    .sl-feats .sl-ico { background: rgba(255, 255, 255, .1); border: 1px solid rgba(255, 255, 255, .2); color: #fff; }
    .sl-feats h3 { font-size: 18px; font-weight: 700; color: #fff; }
    .sl-feats p { margin-top: 4px; font-size: 15px; color: #bfdbfe; }
    .sl-phones { position: relative; display: flex; justify-content: center; padding: 8px 0; }
    .sl-phones::before { content: ""; position: absolute; inset: 10% 15%; background: rgba(255, 255, 255, .12); filter: blur(80px); border-radius: 50%; }
    .sl-phone { position: relative; width: min(280px, 70vw); aspect-ratio: 9 / 18.5; background: #0f172a; border: 9px solid #1e293b; border-radius: 40px; overflow: hidden; box-shadow: 0 30px 60px -20px rgba(0, 0, 0, .5); }
    .sl-phone img { width: 100%; height: 100%; object-fit: cover; display: block; }
    .sl-phone.second { position: absolute; right: 2%; top: 14%; width: 170px; border-width: 6px; border-radius: 28px; opacity: .92; }

    /* Process */
    .sl-steps { display: grid; grid-template-columns: repeat(4, 1fr); gap: 24px; list-style: none; counter-reset: p; }
    .sl-steps li { counter-increment: p; padding: 28px; background: #fff; border: 1px solid var(--line); border-radius: 18px; }
    .sl-steps li::before { content: counter(p); display: flex; align-items: center; justify-content: center; width: 40px; height: 40px; border-radius: 50%; background: var(--navy); color: #fff; font-weight: 700; }
    .sl-steps h3 { margin-top: 18px; font-size: 18px; font-weight: 700; color: var(--ink); }
    .sl-steps p { margin-top: 8px; font-size: 15px; }

    /* CTA */
    .sl-cta { display: flex; align-items: center; justify-content: space-between; gap: 32px; padding: 56px 64px; border-radius: 24px; background: linear-gradient(135deg, #002f7d 0%, #0086f6 100%); }
    .sl-cta h2 { max-width: 640px; font-size: clamp(26px, 3.6vw, 38px); line-height: 1.15; font-weight: 700; letter-spacing: -0.02em; color: #fff; }
    .sl-cta p { margin-top: 12px; font-size: 18px; color: #dbeafe; }
    .sl-cta .sl-btn { flex-shrink: 0; }

    @media (max-width: 1024px) {
      .sl-grid { grid-template-columns: 1fr 1fr; }
      .sl-steps { grid-template-columns: 1fr 1fr; }
    }
    @media (max-width: 960px) {
      .sl-hero-grid, .sl-mob { grid-template-columns: 1fr; gap: 48px; }
      .sl-phone.second { display: none; }
      .sl-cta { flex-direction: column; align-items: flex-start; padding: 40px 32px; }
    }
    @media (max-width: 640px) {
      .sl-wrap { padding: 0 16px; }
      .sl-section { padding: 64px 0; }
      .sl-hero { padding: 120px 0 56px; }
      .sl-grid, .sl-steps { grid-template-columns: 1fr; }
      .sl-facts { grid-template-columns: repeat(3, 1fr); gap: 16px; }
      .sl-facts strong { font-size: 20px; }
      .sl-btns .sl-btn { width: 100%; }
      .sl-card { padding: 24px; }
    }
  </style>

  <div class="sl">

    {{-- HERO --}}
    <section class="sl-hero">
      <div class="sl-wrap sl-hero-grid">
        <div>
          <span class="sl-pill"><i></i>Our solutions</span>
          <h1>Custom Web &amp; Mobile App <span>Development Services</span></h1>
          <p class="sl-intro">
            From business websites and online stores to cross-platform mobile apps and custom software,
            MEHR builds reliable digital products for businesses in Texas and across the USA.
          </p>
          <div class="sl-btns">
            <a class="sl-btn sl-btn-primary" href="{{ route('contact-us') }}">Start your project</a>
            <a class="sl-btn sl-btn-ghost" href="#services">View services</a>
          </div>
        </div>

        <nav class="sl-panel" aria-label="Service areas">
          @php
            $quick = [
              ['Web development', 'WordPress, Laravel, MERN', '#services', 'M3 5h18v14H3zM3 9h18'],
              ['Mobile apps', 'React Native and Flutter', '#mobile', 'M8 2h8a1 1 0 011 1v18a1 1 0 01-1 1H8a1 1 0 01-1-1V3a1 1 0 011-1zM11 18h2'],
              ['E-commerce', 'Shopify stores', '#services', 'M3 4h2l2.4 10.2a1 1 0 001 .8h8.9a1 1 0 001-.8L20 7H6M9 20a1 1 0 100-2 1 1 0 000 2zM17 20a1 1 0 100-2 1 1 0 000 2z'],
              ['Business software', 'Zoho and Python', '#services', 'M8 9l-4 3 4 3M16 9l4 3-4 3M13.5 6l-3 12'],
            ];
          @endphp
          @foreach ($quick as $q)
            <a href="{{ $q[2] }}">
              <span class="sl-ico"><svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><path d="{{ $q[3] }}"/></svg></span>
              <span>{{ $q[0] }}<small>{{ $q[1] }}</small></span>
              <svg class="sl-arrow" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><path d="M9 6l6 6-6 6"/></svg>
            </a>
          @endforeach
        </nav>
      </div>
    </section>

    {{-- SERVICES --}}
    <section class="sl-section" id="services">
      <div class="sl-wrap">
        <div class="sl-head">
          <p class="sl-label">What we build</p>
          <h2 class="sl-h2">Solutions for every stage of your business.</h2>
          <p class="sl-sub">We pick the right technology for your goals and budget, then build it to be fast, secure, and easy to grow.</p>
        </div>

        @php
          $services = [
            ['Custom web development', 'Tailor-made websites and web applications built around your workflows, with clean code and room to scale.', ['Laravel', 'MERN Stack'], 'M3 5h18v14H3zM3 9h18M7 7h.01M10 7h.01'],
            ['Mobile app development', 'Cross-platform iOS and Android apps with a smooth, native-feeling experience from a single codebase.', ['React Native', 'Flutter'], 'M8 2h8a1 1 0 011 1v18a1 1 0 01-1 1H8a1 1 0 01-1-1V3a1 1 0 011-1zM11 18h2'],
            ['WordPress websites', 'Professional business sites and custom themes that are easy for your team to manage and update.', ['WordPress'], 'M12 21a9 9 0 100-18 9 9 0 000 18zM3.6 9h16.8M3.6 15h16.8M12 3a14 14 0 010 18M12 3a14 14 0 000 18'],
            ['E-commerce development', 'Online stores that look great, load quickly, and make it easy for customers to browse and buy.', ['Shopify'], 'M3 4h2l2.4 10.2a1 1 0 001 .8h8.9a1 1 0 001-.8L20 7H6M9 20a1 1 0 100-2 1 1 0 000 2zM17 20a1 1 0 100-2 1 1 0 000 2z'],
            ['CRM & business automation', 'Set up and customize Zoho to manage customers, sales, and daily operations in one place.', ['Zoho'], 'M17 20h5v-2a3 3 0 00-5.2-2M17 20H7m10 0v-2c0-.8-.3-1.5-.8-2M7 20H2v-2a3 3 0 015.2-2M7 20v-2c0-.8.3-1.5.8-2m0 0a5 5 0 019.4 0M15 7a3 3 0 11-6 0 3 3 0 016 0z'],
            ['Python & custom software', 'Backend services, integrations, and automation tools that remove manual work and connect your systems.', ['Python'], 'M8 9l-4 3 4 3M16 9l4 3-4 3M13.5 6l-3 12'],
          ];
        @endphp
        <div class="sl-grid">
          @foreach ($services as $s)
            <article class="sl-card">
              <span class="sl-ico"><svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><path d="{{ $s[3] }}"/></svg></span>
              <h3>{{ $s[0] }}</h3>
              <p>{{ $s[1] }}</p>
              <div class="sl-tags">
                @foreach ($s[2] as $tag)<span>{{ $tag }}</span>@endforeach
              </div>
            </article>
          @endforeach
        </div>
      </div>
    </section>

    {{-- MOBILE --}}
    <section class="sl-section sl-dark" id="mobile">
      <div class="sl-wrap sl-mob">
        <div>
          <p class="sl-label">Mobile app development</p>
          <h2 class="sl-h2">Mobile apps your customers and team will use every day.</h2>
          <p class="sl-sub">We design and develop cross-platform mobile apps with React Native and Flutter that give users powerful tools on the go.</p>

          <ul class="sl-feats">
            @foreach ([
              ['Cross-platform apps', 'One codebase for iOS and Android, so you launch faster and maintain less.', 'M8 2h8a1 1 0 011 1v18a1 1 0 01-1 1H8a1 1 0 01-1-1V3a1 1 0 011-1zM11 18h2'],
              ['Biometric security', 'Face and fingerprint authentication to help protect sensitive data.', 'M12 3l8 3v6c0 5-3.5 8-8 9-4.5-1-8-4-8-9V6l8-3zM9 12l2 2 4-4'],
              ['Real-time sync', 'Offline-first architecture so data stays available, even without connectivity.', 'M13 2L4 14h7l-1 8 9-12h-7l1-8z'],
            ] as $f)
              <li>
                <span class="sl-ico"><svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><path d="{{ $f[2] }}"/></svg></span>
                <div><h3>{{ $f[0] }}</h3><p>{{ $f[1] }}</p></div>
              </li>
            @endforeach
          </ul>
        </div>

        <div class="sl-phones">
          <div class="sl-phone">
            <img src="https://images.unsplash.com/photo-1551650975-87deedd944c3?auto=format&fit=crop&q=80&w=600" alt="Mobile app screen" loading="lazy">
          </div>
          <div class="sl-phone second">
            <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?auto=format&fit=crop&q=80&w=600" alt="Mobile app interface" loading="lazy">
          </div>
        </div>
      </div>
    </section>

    {{-- PROCESS --}}
    <section class="sl-section sl-alt">
      <div class="sl-wrap">
        <div class="sl-head">
          <p class="sl-label">How we work</p>
          <h2 class="sl-h2">A simple, transparent process.</h2>
          <p class="sl-sub">Clear communication at every step, from the first call to launch and beyond.</p>
        </div>
        <ol class="sl-steps">
          <li><h3>Discover</h3><p>We learn about your business, users, and goals to define the right scope.</p></li>
          <li><h3>Design</h3><p>We plan the structure and design the look and feel for your approval.</p></li>
          <li><h3>Develop</h3><p>We build, test, and refine your website or app with regular updates.</p></li>
          <li><h3>Launch &amp; support</h3><p>We deploy your product and stay available to maintain and improve it.</p></li>
        </ol>
      </div>
    </section>

    {{-- CTA --}}
    <section class="sl-section" style="padding-top:96px">
      <div class="sl-wrap">
        <div class="sl-cta">
          <div>
            <h2>Have a web or mobile app idea? Let’s build it.</h2>
            <p>Tell us about your project and we’ll help you plan the right solution.</p>
          </div>
          <a class="sl-btn sl-btn-white" href="{{ route('contact-us') }}">Contact us</a>
        </div>
      </div>
    </section>

  </div>

@endsection