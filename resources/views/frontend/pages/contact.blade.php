@extends('Frontend.frontend-layout.app')

@section('title', 'Contact MEHR Website Design and Software Services | Book a Discovery Call')
@section('description', 'Contact MEHR Website Design and Software Services in Texas, USA to discuss custom web development, mobile apps, e-commerce, and software solutions.')
@section('content')

  <style>
    .ct { font-family: 'Inter', system-ui, sans-serif; color: #475569; line-height: 1.65; background: #fff;
      --navy: #002f7d; --blue: #0086f6; --sky: #007fcf; --ink: #0f172a; --line: #e2e8f0; --soft: #f8fafc; }
    .ct *, .ct *::before, .ct *::after { box-sizing: border-box; }
    .ct h1, .ct h2, .ct h3, .ct p, .ct ul, .ct ol { margin: 0; padding: 0; }
    .ct a { text-decoration: none; }
    .ct-wrap { max-width: 1200px; margin: 0 auto; padding: 0 24px; }
    .ct-label { font-size: 14px; font-weight: 600; color: var(--sky); margin-bottom: 12px; }
    .ct-h2 { font-size: clamp(26px, 3.6vw, 36px); line-height: 1.2; font-weight: 700; letter-spacing: -0.02em; color: var(--ink); }

    /* Hero */
    .ct-hero { padding: 150px 0 80px; background: linear-gradient(180deg, #eff6ff 0%, #ffffff 100%); }
    .ct-hero-grid { display: grid; grid-template-columns: 1.3fr 1fr; gap: 56px; align-items: center; }
    .ct-pill { display: inline-flex; align-items: center; gap: 8px; padding: 6px 14px; margin-bottom: 20px; font-size: 14px; font-weight: 600;
      color: var(--navy); background: #fff; border: 1px solid #bfdbfe; border-radius: 999px; }
    .ct-pill i { width: 8px; height: 8px; border-radius: 50%; background: var(--blue); display: block; }
    .ct-hero h1 { font-size: clamp(34px, 5vw, 56px); line-height: 1.1; font-weight: 800; letter-spacing: -0.03em; color: var(--ink); }
    .ct-hero h1 span { color: var(--navy); }
    .ct-intro { margin-top: 22px; max-width: 540px; font-size: 18px; color: #475569; }
    .ct-btns { display: flex; flex-wrap: wrap; gap: 12px; margin-top: 32px; }
    .ct-btn { display: inline-flex; align-items: center; justify-content: center; gap: 8px; padding: 14px 26px; font-size: 15px; font-weight: 600;
      border-radius: 10px; border: 1px solid transparent; cursor: pointer; font-family: inherit; transition: background .2s, color .2s, border-color .2s; }
    .ct-btn:focus-visible, .ct-input:focus-visible { outline: 3px solid var(--blue); outline-offset: 2px; }
    .ct-btn-primary { background: var(--navy); color: #fff; }
    .ct-btn-primary:hover { background: var(--blue); }
    .ct-btn-ghost { background: #fff; color: #334155; border-color: #cbd5e1; }
    .ct-btn-ghost:hover { border-color: var(--blue); color: var(--navy); }
    .ct-btn svg { width: 18px; height: 18px; }

    .ct-quick { display: grid; gap: 12px; padding: 12px; background: #fff; border: 1px solid var(--line); border-radius: 5px; box-shadow: 0 20px 40px -20px rgba(0, 47, 125, .18); }
    .ct-item { display: flex; align-items: center; gap: 16px; padding: 16px; border-radius: 12px; color: inherit; border: 1px solid transparent; transition: background .2s, border-color .2s; }
    a.ct-item:hover { background: #eff6ff; border-color: #bfdbfe; }
    .ct-ico { width: 44px; height: 44px; flex-shrink: 0; border-radius: 12px; background: #eff6ff; color: var(--sky); display: flex; align-items: center; justify-content: center; }
    .ct-ico svg { width: 20px; height: 20px; }
    .ct-item small { display: block; font-size: 12px; font-weight: 600; letter-spacing: .04em; text-transform: uppercase; color: #94a3b8; }
    .ct-item strong { display: block; margin-top: 2px; font-size: 15px; font-weight: 600; color: var(--ink); overflow-wrap: anywhere; }

    /* Main */
    .ct-main { padding: 80px 0 96px; }
    .ct-grid { display: grid; grid-template-columns: 5fr 7fr; gap: 64px; align-items: start; }
    .ct-fit li { list-style: none; display: flex; gap: 14px; align-items: flex-start; padding: 18px 20px; margin-top: 12px; background: var(--soft); border: 1px solid #f1f5f9; border-radius: 14px; font-weight: 600; color: #1e293b; }
    .ct-fit li:first-child { margin-top: 24px; }
    .ct-check { width: 24px; height: 24px; flex-shrink: 0; margin-top: 1px; border-radius: 50%; background: var(--navy); color: #fff; display: flex; align-items: center; justify-content: center; }
    .ct-check svg { width: 14px; height: 14px; }
    .ct-steps { margin-top: 40px; }
    .ct-steps ol { list-style: none; margin-top: 20px; counter-reset: s; }
    .ct-steps li { counter-increment: s; position: relative; padding: 0 0 20px 48px; }
    .ct-steps li::before { content: counter(s); position: absolute; left: 0; top: 0; width: 32px; height: 32px; border-radius: 50%; background: #eff6ff; color: var(--navy); font-weight: 700; font-size: 14px; display: flex; align-items: center; justify-content: center; }
    .ct-steps strong { display: block; color: var(--ink); }
    .ct-steps span { font-size: 15px; }

    /* Form */
    .ct-card { padding: 40px; background: #fff; border: 1px solid var(--line); border-radius: 20px; box-shadow: 0 24px 48px -24px rgba(15, 23, 42, .18); }
    .ct-card > p { margin-top: 8px; margin-bottom: 28px; }
    .ct-row { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; }
    .ct-field { margin-bottom: 20px; min-width: 0; }
    .ct-field label { display: block; margin-bottom: 8px; font-size: 14px; font-weight: 600; color: #334155; }
    .ct-field label b { color: var(--blue); }
    .ct-input { display: block; width: 100%; padding: 14px 16px; font: inherit; font-size: 16px; color: var(--ink); background: var(--soft); border: 1px solid var(--line); border-radius: 12px; transition: border-color .2s, box-shadow .2s, background .2s; }
    .ct-input:focus { outline: none; background: #fff; border-color: var(--blue); box-shadow: 0 0 0 3px rgba(0, 134, 246, .15); }
    textarea.ct-input { resize: none; }
    .ct-err { display: block; margin-top: 6px; font-size: 13px; color: #dc2626; }
    .ct-ok { margin-bottom: 20px; padding: 14px 16px; border-radius: 12px; background: #ecfdf5; border: 1px solid #a7f3d0; color: #065f46; font-weight: 600; font-size: 15px; }
    .ct-errors { margin-bottom: 20px; padding: 14px 16px; border-radius: 12px; background: #fef2f2; border: 1px solid #fecaca; color: #991b1b; font-size: 14px; }
    .ct-errors ul { margin: 8px 0 0 20px; list-style: disc; }
    .ct-recaptcha { margin-bottom: 20px; max-width: 100%; overflow-x: auto; }
    .ct-submit { width: 100%; padding: 16px; font-size: 16px; }
    .ct-note { margin-top: 14px; text-align: center; font-size: 13px; color: #94a3b8; }

    @media (max-width: 960px) {
      .ct-hero { padding: 130px 0 64px; }
      .ct-hero-grid, .ct-grid { grid-template-columns: 1fr; gap: 40px; }
      .ct-main { padding: 56px 0 72px; }
    }
    @media (max-width: 640px) {
      .ct-wrap { padding: 0 16px; }
      .ct-hero { padding: 112px 0 48px; }
      .ct-intro { font-size: 16px; }
      .ct-btns .ct-btn { width: 100%; }
      .ct-card { padding: 24px 18px; border-radius: 16px; }
      .ct-row { grid-template-columns: 1fr; gap: 0; }
      .ct-item { padding: 12px; gap: 12px; }
    }
  </style>

  <div class="ct">

    {{-- HERO --}}
    <section class="ct-hero">
      <div class="ct-wrap ct-hero-grid">

        <div>
          <span class="ct-pill"><i></i>Connect with us</span>
          <h1>Let’s discuss your <span>next digital project.</span></h1>
          <p class="ct-intro">
            Ready to bring your ideas to life? Contact MEHR Website Design and Software Services to
            discuss your goals and explore custom web development, mobile apps, e-commerce, and
            software solutions designed to move your business forward.
          </p>
          <div class="ct-btns">
            <a class="ct-btn ct-btn-primary" href="#contact">
              Send a message
              <svg fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><path d="M12 5v14m7-7-7 7-7-7"/></svg>
            </a>
            <a class="ct-btn ct-btn-ghost" href="https://mtzproducts.com/" target="_blank" rel="noopener">
              Explore our solutions
              <svg fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
            </a>
          </div>
        </div>

        <div class="ct-quick">
          <a class="ct-item" href="https://wa.me/18326775343" target="_blank" rel="noopener">
            <span class="ct-ico"><svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><path d="M3 5a2 2 0 012-2h3.3a1 1 0 01.9.7l1.5 4.5a1 1 0 01-.5 1.2l-2.3 1.1a11 11 0 005.5 5.5l1.1-2.3a1 1 0 011.2-.5l4.5 1.5a1 1 0 01.7.9V19a2 2 0 01-2 2h-1C9.7 21 3 14.3 3 6V5z"/></svg></span>
            <span><small>Call or WhatsApp</small><strong>+1 (832) 677-5343</strong></span>
          </a>
          <a class="ct-item" href="mailto:Malikmisbah@mtzproducts.com">
            <span class="ct-ico"><svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><path d="M3 8l7.9 5.3a2 2 0 002.2 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg></span>
            <span><small>Email us</small><strong>Malikmisbah@mtzproducts.com</strong></span>
          </a>
          <div class="ct-item">
            <span class="ct-ico"><svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><path d="M17.7 16.7l-4.3 4.2a2 2 0 01-2.8 0l-4.3-4.2a8 8 0 1111.4 0z"/><path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg></span>
            <span><small>Business address</small><strong>2681 Winterfell St, Corpus Christi, TX 78415, USA</strong></span>
          </div>
        </div>

      </div>
    </section>

    {{-- MAIN --}}
    <section class="ct-main" id="contact">
      <div class="ct-wrap ct-grid">

        <div>
          <p class="ct-label">Who we work with</p>
          <h2 class="ct-h2">Who we work best with</h2>

          <ul class="ct-fit">
            @foreach ([
              'Small and medium-sized businesses building their online presence',
              'Growing companies seeking custom website development',
              'Startups and digital agencies needing reliable web solutions',
            ] as $work)
              <li>
                <span class="ct-check"><svg fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><path d="M5 13l4 4L19 7"/></svg></span>
                <span>{{ $work }}</span>
              </li>
            @endforeach
          </ul>

          <div class="ct-steps">
            <h3 class="ct-h2" style="font-size:22px">What happens next</h3>
            <ol>
              <li><strong>Send us your details</strong><span>Tell us about your project and goals.</span></li>
              <li><strong>We review your request</strong><span>Our team looks at what you need and gets back to you.</span></li>
              <li><strong>Discovery call</strong><span>We talk through options and plan the right solution.</span></li>
            </ol>
          </div>
        </div>

        <div class="ct-card">
          <h2 class="ct-h2">Let’s Build Your Digital Future</h2>
          <p>
            Discover tailored web design and development solutions to strengthen your online presence
            and grow your business.
          </p>
          <form action="{{ route('studentContact.store') }}" method="POST">
            @csrf

            @if (session('success'))
              <p role="status" class="ct-ok">{{ session('success') }}</p>
            @endif
            @if ($errors->any())
              <div role="alert" class="ct-errors">
                <p>Please correct the following before submitting:</p>
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif

            <div class="ct-row">
              <div class="ct-field">
                <label for="ct-name">Full Name <b>*</b></label>
                <input id="ct-name" class="ct-input" type="text" name="name" value="{{ old('name') }}" placeholder="Jane Doe" required>
              </div>
              <div class="ct-field">
                <label for="ct-email">Work Email <b>*</b></label>
                <input id="ct-email" class="ct-input" type="email" name="email" value="{{ old('email') }}" placeholder="jane@company.ca" required>
              </div>
            </div>

            <div class="ct-field">
              <label for="ct-company">Company Name <b>*</b></label>
              <input id="ct-company" class="ct-input" type="text" name="company_name" value="{{ old('company_name') }}" placeholder="Acme Tech Inc." required>
            </div>

            <div class="ct-field">
              <label for="ct-message">How can we help?</label>
              <textarea id="ct-message" class="ct-input" rows="4" name="message" placeholder="Tell us about your current engineering needs...">{{ old('message') }}</textarea>
            </div>

            {{-- Recaptcha --}}
            <div class="row ct-recaptcha">
              <div class="col-md-12">
                <div class="form-group">
                  <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}"></div>

                  @if ($errors->has('g-recaptcha-response'))
                    <span class="text-[#0086f6] text-sm" style="color:#0086f6;font-size:14px">
                      {{ $errors->first('g-recaptcha-response') }}
                    </span>
                  @endif
                </div>
              </div>
            </div>

            <button type="submit" class="ct-btn ct-btn-primary ct-submit">Submit</button>
            <p class="ct-note">No commitment required. We respect your inbox.</p>
          </form>
        </div>

      </div>
    </section>

  </div>

@endsection