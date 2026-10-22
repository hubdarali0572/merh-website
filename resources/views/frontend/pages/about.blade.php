@extends('Frontend.frontend-layout.app')

@section('title', 'About MEHR | Custom Web & Mobile App Development Services in Texas, USA')
@section('description', 'MEHR Website Design and Software Services delivers custom web and mobile app development in Texas, USA, using WordPress, Laravel, Shopify, Zoho, React Native, Flutter, MERN Stack, and Python.')
@section('content')

  <style>
    .ab {
      font-family: 'Inter', system-ui, sans-serif;
      color: #475569;
      line-height: 1.65;
      background: #fff;
      --navy: #002f7d;
      --blue: #0086f6;
      --sky: #007fcf;
      --ink: #0f172a;
      --line: #e2e8f0;
      --soft: #f8fafc;
    }

    .ab *,
    .ab *::before,
    .ab *::after {
      box-sizing: border-box;
    }

    .ab h1,
    .ab h2,
    .ab h3,
    .ab p,
    .ab ol,
    .ab dl,
    .ab dd,
    .ab figure,
    .ab blockquote {
      margin: 0;
      padding: 0;
    }

    .ab-wrap {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 24px;
    }

    .ab-section {
      padding: 50px 0;
    }

    .ab-label {
      font-size: 14px;
      font-weight: 600;
      color: var(--sky);
      margin-bottom: 12px;
    }

    .ab-h2 {
      font-size: clamp(28px, 4vw, 40px);
      line-height: 1.15;
      font-weight: 700;
      letter-spacing: -0.02em;
      color: var(--ink);
    }

    .ab-head {
      max-width: 680px;
      margin-bottom: 48px;
    }

    .ab-head p.ab-sub {
      margin-top: 18px;
      font-size: 18px;
    }

    /* Hero */
    .ab-hero {
      padding: 160px 0 96px;
      background: linear-gradient(180deg, #eff6ff 0%, #ffffff 100%);
    }

    .ab-hero-grid {
      display: grid;
      grid-template-columns: 1.35fr 1fr;
      gap: 64px;
      align-items: center;
    }

    .ab-pill {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 6px 14px;
      margin-bottom: 20px;
      font-size: 14px;
      font-weight: 600;
      color: var(--navy);
      background: #fff;
      border: 1px solid #bfdbfe;
      border-radius: 999px;
    }

    .ab-pill i {
      width: 8px;
      height: 8px;
      border-radius: 50%;
      background: var(--blue);
      display: block;
    }

    .ab-hero h1 {
      font-size: clamp(36px, 5.4vw, 60px);
      line-height: 1.08;
      font-weight: 800;
      letter-spacing: -0.03em;
      color: var(--ink);
    }

    .ab-hero .ab-intro {
      margin-top: 24px;
      max-width: 540px;
      font-size: 18px;
    }

    .ab-btns {
      display: flex;
      flex-wrap: wrap;
      gap: 12px;
      margin-top: 36px;
    }

    .ab-btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      padding: 14px 26px;
      font-size: 15px;
      font-weight: 600;
      border-radius: 10px;
      text-decoration: none;
      transition: background .2s, color .2s, border-color .2s;
    }

    .ab-btn:focus-visible {
      outline: 3px solid var(--blue);
      outline-offset: 2px;
    }

    .ab-btn-primary {
      background: var(--navy);
      color: #fff;
      border: 1px solid var(--navy);
    }

    .ab-btn-primary:hover {
      background: var(--blue);
      border-color: var(--blue);
      color: #fff;
    }

    .ab-btn-ghost {
      background: #fff;
      color: #334155;
      border: 1px solid #cbd5e1;
    }

    .ab-btn-ghost:hover {
      border-color: var(--blue);
      color: var(--navy);
    }

    .ab-btn-white {
      background: #fff;
      color: var(--navy);
      border: 1px solid #fff;
    }

    .ab-btn-white:hover {
      background: #eff6ff;
    }

    .ab-panel {
      background: #fff;
      border: 1px solid var(--line);
      border-radius: 5px;
      padding: 8px;
      box-shadow: 0 20px 40px -20px rgba(0, 47, 125, .18);
    }

    .ab-panel dl {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 1px;
      background: var(--line);
      border-radius: 5px;
      overflow: hidden;
    }

    .ab-panel div {
      background: #fff;
      padding: 26px 22px;
    }

    .ab-panel dt {
      font-size: 16px;
      font-weight: 700;
      color: var(--ink);
    }

    .ab-panel dd {
      margin-top: 6px;
      font-size: 14px;
      line-height: 1.45;
      color: #64748b;
    }

    /* Story */
    .ab-story {
      border-top: 1px solid #f1f5f9;
    }

    .ab-two {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 80px;
      align-items: start;
    }

    .ab-copy p {
      margin-top: 20px;
      font-size: 17px;
    }

    .ab-copy .ab-h2 {
      margin-bottom: 12px;
    }

    .ab-quote {
      margin-top: 36px;
      padding: 24px 28px;
      background: var(--soft);
      border-left: 4px solid var(--navy);
      border-radius: 0 12px 12px 0;
    }

    .ab-quote blockquote {
      font-style: italic;
      font-weight: 500;
      color: #1e293b;
    }

    .ab-quote figcaption {
      margin-top: 14px;
      font-size: 14px;
      font-weight: 600;
      color: var(--ink);
    }

    .ab-quote figcaption span {
      font-weight: 400;
      color: #64748b;
    }

    .ab-steps {
      list-style: none;
      position: relative;
      padding-top: 4px;
    }

    .ab-steps::before {
      content: "";
      position: absolute;
      left: 19px;
      top: 20px;
      bottom: 20px;
      width: 2px;
      background: var(--line);
    }

    .ab-steps li {
      position: relative;
      padding-left: 64px;
      margin-bottom: 24px;
    }

    .ab-steps li:last-child {
      margin-bottom: 0;
    }

    .ab-dot {
      position: absolute;
      left: 0;
      top: 0;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background: var(--navy);
      color: #fff;
      font-weight: 700;
      font-size: 15px;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 0 0 5px #fff;
    }

    .ab-step-card {
      background: #fff;
      border: 1px solid var(--line);
      border-radius: 14px;
      padding: 22px 24px;
    }

    .ab-step-card small {
      display: block;
      font-size: 13px;
      font-weight: 600;
      color: var(--sky);
    }

    .ab-step-card h3 {
      margin-top: 4px;
      font-size: 19px;
      font-weight: 700;
      color: var(--ink);
    }

    .ab-step-card p {
      margin-top: 8px;
      font-size: 15px;
    }

    /* Mission / Vision */
    .ab-alt {
      background: var(--soft);
    }

    .ab-cards2 {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 24px;
    }

    .ab-card {
      padding: 40px;
      border-radius: 20px;
      border: 1px solid var(--line);
      background: #fff;
    }

    .ab-card.dark {
      background: #0f172a;
      border-color: #0f172a;
    }

    .ab-icon {
      width: 48px;
      height: 48px;
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      background: var(--navy);
      color: #fff;
    }

    .ab-card.dark .ab-icon {
      background: #fff;
      color: #0f172a;
    }

    .ab-icon svg,
    .ab-vicon svg {
      width: 22px;
      height: 22px;
    }

    .ab-card h3 {
      margin-top: 24px;
      font-size: 24px;
      font-weight: 700;
      color: var(--ink);
    }

    .ab-card p {
      margin-top: 12px;
      font-size: 18px;
    }

    .ab-card.dark h3 {
      color: #fff;
    }

    .ab-card.dark p {
      color: #cbd5e1;
    }

    /* Values */
    .ab-grid3 {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 24px;
    }

    .ab-value {
      padding: 30px;
      background: #fff;
      border: 1px solid var(--line);
      border-radius: 18px;
      transition: border-color .2s, box-shadow .2s;
    }

    .ab-value:hover {
      border-color: #bfdbfe;
      box-shadow: 0 16px 32px -18px rgba(0, 47, 125, .25);
    }

    .ab-vicon {
      width: 44px;
      height: 44px;
      border-radius: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
      background: #eff6ff;
      color: var(--sky);
    }

    .ab-value h3 {
      margin-top: 20px;
      font-size: 18px;
      font-weight: 700;
      color: var(--ink);
    }

    .ab-value p {
      margin-top: 8px;
      font-size: 15px;
    }

    /* Technologies */
    .ab-tech {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 16px;
    }

    .ab-tech div {
      display: flex;
      align-items: center;
      gap: 14px;
      padding: 20px 22px;
      background: #fff;
      border: 1px solid var(--line);
      border-radius: 14px;
      font-weight: 600;
      color: var(--ink);
    }

    .ab-tech span {
      width: 40px;
      height: 40px;
      flex-shrink: 0;
      border-radius: 10px;
      background: #eff6ff;
      color: var(--navy);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 14px;
      font-weight: 700;
    }

    /* CTA */
    .ab-cta-wrap {
      padding: 0 0 96px;
    }

    .ab-cta {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 32px;
      padding: 56px 64px;
      border-radius: 24px;
      background: linear-gradient(135deg, #002f7d 0%, #0086f6 100%);
    }

    .ab-cta h2 {
      max-width: 640px;
      font-size: clamp(26px, 3.6vw, 38px);
      line-height: 1.15;
      font-weight: 700;
      letter-spacing: -0.02em;
      color: #fff;
    }

    .ab-cta p {
      margin-top: 12px;
      font-size: 18px;
      color: #dbeafe;
    }

    .ab-cta .ab-btn {
      flex-shrink: 0;
    }

    @media (max-width: 960px) {

      .ab-hero-grid,
      .ab-two {
        grid-template-columns: 1fr;
        gap: 48px;
      }

      .ab-grid3,
      .ab-tech {
        grid-template-columns: 1fr 1fr;
      }

      .ab-cta {
        flex-direction: column;
        align-items: flex-start;
        padding: 40px 32px;
      }
    }

    @media (max-width: 640px) {
      .ab-section {
        padding: 64px 0;
      }

      .ab-hero {
        padding: 120px 0 64px;
      }

      .ab-cards2,
      .ab-grid3 {
        grid-template-columns: 1fr;
      }

      .ab-tech {
        grid-template-columns: 1fr 1fr;
        gap: 12px;
      }

      .ab-tech div {
        padding: 16px;
      }

      .ab-card {
        padding: 28px;
      }

      .ab-cta-wrap {
        padding-bottom: 64px;
      }

      .ab-btns .ab-btn {
        width: 100%;
      }
    }
  </style>

  <div class="ab">

    {{-- HERO --}}
    <section class="ab-hero">
      <div class="ab-wrap ab-hero-grid">
        <div>
          <span class="ab-pill"><i></i>About MEHR</span>
          <h1>Custom Web &amp; Mobile App Development Services</h1>
          <p class="ab-intro">
            MEHR Website Design and Software Services helps businesses in Texas and across the USA grow
            with custom websites, mobile apps, and business software built on WordPress, Laravel, Shopify,
            Zoho, React Native, Flutter, MERN Stack, and Python.
          </p>
        </div>

        <div class="ab-panel">
          <dl>
            <div>
              <dt>Web development</dt>
              <dd>WordPress, Laravel, MERN Stack</dd>
            </div>
            <div>
              <dt>Mobile apps</dt>
              <dd>React Native and Flutter</dd>
            </div>
            <div>
              <dt>E-commerce &amp; CRM</dt>
              <dd>Shopify and Zoho solutions</dd>
            </div>
            <div>
              <dt>Custom software</dt>
              <dd>Python-powered solutions</dd>
            </div>
          </dl>
        </div>
      </div>
    </section>

    {{-- STORY --}}
    <section class="ab-section ab-story" id="our-story">
      <div class="ab-wrap ab-two">
        <div class="ab-copy">
          <p class="ab-label" style="margin-bottom:12px">Our Story</p>

          <h2 class="ab-h2">Delivering Custom Web and Mobile Solutions for Modern Businesses.</h2>

          <p>
            MEHR Website Design and Software Services provides professional web development, mobile app development, and
            custom software solutions tailored to business needs. We turn ideas into reliable digital products that align
            with your goals and strengthen your online presence.
          </p>

          <p>
            Our services include custom websites, e-commerce platforms, mobile applications, and business software. We
            combine modern technologies, intuitive design, and dependable development practices to deliver solutions that
            are responsive, scalable, and easy to use.
          </p>

          <p>
            Serving businesses across Texas and throughout the USA, we focus on understanding each client's requirements
            and delivering practical technology solutions that improve operational efficiency, enhance customer
            experiences, and support long-term business growth.
          </p>

          <figure class="ab-quote">
            <blockquote>
              “At MEHR, we turn your ideas into powerful digital experiences through innovative web development, mobile
              applications, and software solutions built around your business goals.”
            </blockquote>
            <figcaption>
              Our Commitment <span>· MEHR Website Design and Software Services</span>
            </figcaption>
          </figure>
        </div>

        @php
          $steps = [
            [
              'Our Foundation',
              'Understanding Your Business Goals',
              'We analyze your business objectives, target audience, and technical requirements to define a clear strategy for delivering the right digital solution.'
            ],
            [
              'Our Expertise',
              'Innovative Web & Mobile Development',
              'We build custom websites, mobile applications, e-commerce platforms, and business software using modern technologies tailored to your requirements.'
            ],
            [
              'Our Approach',
              'Quality, Performance & User Experience',
              'We prioritize intuitive design, responsive interfaces, optimized performance, and reliable functionality to deliver seamless digital experiences.'
            ],
            [
              'Our Commitment',
              'Scalable Solutions for Long-Term Growth',
              'We develop secure, maintainable, and scalable digital products that adapt to evolving business needs and support sustainable growth.'
            ],
          ];
        @endphp

        <ol class="ab-steps">
          @foreach ($steps as $i => $s)
            <li>
              <span class="ab-dot">{{ $i + 1 }}</span>
              <div class="ab-step-card">
                <small>{{ $s[0] }}</small>
                <h3>{{ $s[1] }}</h3>
                <p>{{ $s[2] }}</p>
              </div>
            </li>
          @endforeach
        </ol>
      </div>
    </section>

    {{-- MISSION & VISION --}}
    <section class="ab-section ab-alt">
      <div class="ab-wrap">
        <div class="ab-head">
          <p class="ab-label">Mission &amp; Vision</p>
          <h2 class="ab-h2">Building Digital Solutions That Move Businesses Forward.</h2>
        </div>

        <div class="ab-cards2">
          <article class="ab-card">
            <div class="ab-icon">
              <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                stroke-linejoin="round">
                <circle cx="12" cy="12" r="9" />
                <circle cx="12" cy="12" r="5" />
                <circle cx="12" cy="12" r="1" />
              </svg>
            </div>

            <h3>Our Mission</h3>
            <p>
              Our mission is to empower businesses with innovative web development,
              mobile applications, and custom software solutions. We combine modern
              technology, thoughtful design, and dependable development practices
              to create secure, scalable, and user-friendly digital products that
              improve efficiency, strengthen customer relationships, and support
              measurable business progress.
            </p>
          </article>

          <article class="ab-card dark">
            <div class="ab-icon">
              <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                stroke-linejoin="round">
                <path d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7S2 12 2 12Z" />
                <circle cx="12" cy="12" r="3" />
              </svg>
            </div>

            <h3>Our Vision</h3>
            <p>
              Our vision is to become a trusted technology partner for businesses
              across Texas and throughout the USA by delivering impactful digital
              experiences and forward-thinking software solutions. We strive to
              build lasting client relationships through technical excellence,
              transparent communication, continuous improvement, and a commitment
              to helping businesses adapt, innovate, and grow in a digital world.
            </p>
          </article>
        </div>
      </div>
    </section>


    {{-- VALUES --}}
    <section class="ab-section ab-alt">
      <div class="ab-wrap">
        <div class="ab-head">
          <p class="ab-label">Our Values</p>
          <h2 class="ab-h2">The Principles Behind Every Digital Solution We Build.</h2>
          <p class="ab-sub">
            At MEHR Website Design and Software Services, our values shape how we design,
            develop, and deliver digital solutions. We prioritize innovation, technical
            excellence, client collaboration, and integrity to build reliable technology
            that solves real business challenges and creates lasting value.
          </p>
        </div>

        @php
          $values = [
            [
              'Innovation',
              'We embrace modern technologies and forward-thinking ideas to develop creative web, mobile, and software solutions that help businesses stay competitive.',
              'M12 3l1.9 5.8a2 2 0 001.3 1.3L21 12l-5.8 1.9a2 2 0 00-1.3 1.3L12 21l-1.9-5.8a2 2 0 00-1.3-1.3L3 12l5.8-1.9a2 2 0 001.3-1.3L12 3z'
            ],
            [
              'Quality & Excellence',
              'We focus on clean development, thoughtful design, performance, and thorough testing to deliver dependable digital products built to high professional standards.',
              'M9 12l2 2 4-4M12 3l2.4 1.7 2.9-.2 1 2.7 2.4 1.7-.9 2.8.9 2.8-2.4 1.7-1 2.7-2.9-.2L12 21l-2.4-1.7-2.9.2-1-2.7L3.3 15.1l.9-2.8-.9-2.8 2.4-1.7 1-2.7 2.9.2L12 3z'
            ],
            [
              'Client-Centered Approach',
              'We listen carefully, understand business objectives, and maintain clear communication to deliver solutions aligned with each client’s requirements and priorities.',
              'M17 20h5v-2a3 3 0 00-5.2-2M17 20H7m10 0v-2c0-.8-.3-1.5-.8-2M7 20H2v-2a3 3 0 015.2-2M7 20v-2c0-.8.3-1.5.8-2m0 0a5 5 0 019.4 0M15 7a3 3 0 11-6 0 3 3 0 016 0z'
            ],
            [
              'Integrity & Transparency',
              'We build lasting relationships through honest communication, realistic expectations, responsible decisions, and accountability throughout every project.',
              'M12 3l8 3v6c0 5-3.5 8-8 9-4.5-1-8-4-8-9V6l8-3zM9 12l2 2 4-4'
            ],
            [
              'Technical Excellence',
              'We apply our expertise across web development, mobile applications, e-commerce, and business software to create secure, scalable, and maintainable solutions.',
              'M8 9l-4 3 4 3M16 9l4 3-4 3M13.5 6l-3 12'
            ],
            [
              'Collaboration & Partnership',
              'We work closely with our clients and stakeholders, encouraging shared ideas, constructive feedback, and teamwork to achieve meaningful project outcomes.',
              'M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2M9 11a4 4 0 100-8 4 4 0 000 8zM22 21v-2a4 4 0 00-3-3.9M16 3.1a4 4 0 010 7.8'
            ],
          ];
        @endphp

        <div class="ab-grid3">
          @foreach ($values as $v)
            <article class="ab-value">
              <div class="ab-vicon">
                <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path d="{{ $v[2] }}" />
                </svg>
              </div>
              <h3>{{ $v[0] }}</h3>
              <p>{{ $v[1] }}</p>
            </article>
          @endforeach
        </div>
      </div>
    </section>

    {{-- CTA --}}
    <section class="ab-cta-wrap">
      <div class="ab-wrap">
        <div class="ab-cta">
          <div>
            <h2>Ready to build a website your business can grow on?</h2>
            <p>Tell us about your goals and we’ll help you plan the right solution.</p>
          </div>
          <a class="ab-btn ab-btn-white" href="{{ route('contact-us') }}">Contact us</a>
        </div>
      </div>
    </section>

  </div>

@endsection