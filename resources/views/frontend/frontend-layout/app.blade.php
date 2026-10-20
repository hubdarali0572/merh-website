<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="index,follow,max-image-preview:large,max-snippet:-1,max-video-preview:-1">
    <meta name="author" content="SmartAI Soft">
    <meta name="theme-color" content="#ffffff">
    <meta name="format-detection" content="telephone=no, date=no, address=no, email=no">
    <meta name="color-scheme" content="light only">

    <title>@yield('title', 'Dedicated Offshore AI & Software Development | SmartAI Soft')</title>
    <meta name="description"
        content="@yield('description', 'Scale your engineering team with SmartAI Soft. We provide dedicated offshore AI, web, and mobile developers for startups and agencies in Malaysia, MEA, USA, and Canada.')">
    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="alternate" hreflang="en" href="{{ url('/') }}">

    <meta property="og:title" content="@yield('title', 'Dedicated Offshore AI & Software Development | SmartAI Soft')">
    <meta property="og:description"
        content="@yield('description', 'Scale your engineering team with SmartAI Soft. We provide dedicated offshore AI, web, and mobile developers for startups and agencies in Malaysia, MEA, USA, and Canada.')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="SmartAI Soft">
    <meta property="og:image" content="{{ asset('assets/images/others/logo-header.png') }}">
    <meta property="og:image:alt" content="SmartAI Soft logo">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:locale" content="en_US">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', 'Dedicated Offshore AI & Software Development | SmartAI Soft')">
    <meta name="twitter:description"
        content="@yield('description', 'Scale your engineering team with SmartAI Soft. We provide dedicated offshore AI, web, and mobile developers for startups and agencies in Malaysia, MEA, USA, and Canada.')">
    <meta name="twitter:image" content="{{ asset('assets/images/others/logo-header.png') }}">
    <meta name="twitter:image:alt" content="SmartAI Soft logo">

    @verbatim
    <script type="application/ld+json">
        {"@context":"https://schema.org","@type":"Organization","name":"SmartAI Soft","url":"{{ url('/') }}","logo":"{{ asset('assets/images/others/logo-header.png') }}","description":"Dedicated offshore AI, web, and mobile development partner for startups and agencies.","sameAs":["https://uk.linkedin.com/company/smartai-soft","https://www.upwork.com/agencies/1550198843122221056/","https://www.instagram.com/smartaisoft/"]}
    </script>
    @endverbatim

    <!-- 1. PRECONNECT (Connections fast karne ke liye) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>

    <!-- 2. LCP IMAGE PRELOAD (Sabse pehle logo load ho) -->
    <link rel="preload" fetchpriority="high" as="image" href="{{ asset('assets/images/others/logo-header.png') }}"
        type="image/png">

    <!-- 3. FONTS & CSS (Non-blocking loading trick) -->
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" as="style" onload="this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap">
    </noscript>

    <noscript>
        <link rel="stylesheet" href="{{ asset('vendor/fontawesome/css/all.min.css') }}">
    </noscript>

    <!-- 4. CRITICAL INLINE CSS (Render blocking khatam karne ke liye) -->
    <style>
        /* style.css ka code maine yahan inline kar diya hai kyunki woh bahut chhota (2.4kb) hai */
        html {
            overflow-x: hidden;
            overflow-y: auto;
            scrollbar-width: none;
            -ms-overflow-style: none;
            font-family: 'Inter', sans-serif;
        }

        html::-webkit-scrollbar {
            width: 0;
            height: 0;
        }

        body {
            overflow-x: hidden;
            scroll-behavior: smooth;
        }

        /* Font Awesome Display Fix */
        @@font-face {
            font-family: 'Font Awesome 6 Free';
            font-display: swap !important;
        }

        @@font-face {
            font-family: 'Font Awesome 6 Brands';
            font-display: swap !important;
        }

        .text-balance {
            text-wrap: balance;
        }

        .bg-grid-pattern {
            background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M0 0.5H30' stroke='%23e2e8f0' stroke-opacity='0.5'/%3E%3Cpath d='M0.5 0V30' stroke='%23e2e8f0' stroke-opacity='0.5'/%3E%3C/svg%3E");
        }

        #pointer-canvas {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 9999;
        }

        .typing-container {
            min-height: 1.2em;
            display: inline-block;
            font-size: 24px;
            font-weight: bold;
        }

        .typing-cursor,
        .cursor,
        .cursor1 {
            color: #f43f5e;
            margin-left: 2px;
            animation: blink 0.8s infinite;
        }

        @@keyframes blink {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0;
            }
        }

        #typing-text-business:empty::before,
        #typing-text:empty::before {
            content: "\200b";
        }

        @media (prefers-reduced-motion: reduce) {
            html {
                scroll-behavior: auto;
            }

            *, *::before, *::after {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
            }
        }
    </style>

    <!-- 5. TAILWIND (Isme DEFER add kiya hai taaki page block na ho) -->
    <link rel="stylesheet" href="{{ asset('css/tailwind-prod.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/images/others/logo-header.png') }}">
</head>

<body class="bg-gray-100 text-gray-800">
    <canvas id="pointer-canvas"></canvas>

    @include('frontend.frontend-layout.header')

    <main>
        @yield('content')
    </main>

    @include('frontend.frontend-layout.footer')

    {{-- calendly script --}}

    <script>
        window.addEventListener('load', function () {
            const fa = document.createElement('link');
            fa.rel = 'stylesheet';
            fa.href = '{{ asset('vendor/fontawesome/css/all.min.css') }}';
            document.head.appendChild(fa);
        });

        window.addEventListener('load', function () {
            const isLowEnd = navigator.hardwareConcurrency && navigator.hardwareConcurrency <= 2;
            const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
            const isTouchDevice = window.matchMedia('(pointer: coarse)').matches;
            const shouldLoadMotion = !isLowEnd && !prefersReducedMotion && !isTouchDevice && window.innerWidth >= 1024;

            if (shouldLoadMotion) {
                window.setTimeout(function () {
                    const aos = document.createElement('script');
                    aos.src = 'https://unpkg.com/aos@2.3.1/dist/aos.js';
                    aos.defer = true;
                    aos.onload = function () {
                        if (typeof AOS !== 'undefined') {
                            AOS.init({ duration: 800, once: true });
                        }
                    };
                    document.head.appendChild(aos);

                    const lenis = document.createElement('script');
                    lenis.src = 'https://unpkg.com/lenis@1.1.13/dist/lenis.min.js';
                    lenis.defer = true;
                    lenis.onload = function () {
                        if (typeof Lenis !== 'undefined') {
                            const lenisInstance = new Lenis();
                            function raf(time) {
                                lenisInstance.raf(time);
                                requestAnimationFrame(raf);
                            }
                            requestAnimationFrame(raf);
                        }
                    };
                    document.head.appendChild(lenis);
                }, 1800);
            }
        });
    </script>

    <script>
        const loadLateThirdParty = () => {
            if (window.__lateThirdPartyLoaded) return;
            window.__lateThirdPartyLoaded = true;

            const recaptcha = document.createElement('script');
            recaptcha.src = 'https://www.google.com/recaptcha/api.js';
            recaptcha.async = true;
            recaptcha.defer = true;
            document.head.appendChild(recaptcha);
        };

        window.addEventListener('load', function () {
            window.setTimeout(loadLateThirdParty, 2500);
        });
        document.addEventListener('pointerdown', loadLateThirdParty, { once: true, passive: true });
    </script>

    <!-- COUNTER SCRIPT -->

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const counters = document.querySelectorAll(".counter");
            const options = { threshold: 0.5 };
            const startCounter = (counter) => {
                const target = +counter.getAttribute("data-target");
                let count = 0;
                const increment = target / 100;
                const updateCounter = () => {
                    count += increment;
                    if (count < target) {
                        counter.innerText = Math.ceil(count) + "+";
                        requestAnimationFrame(updateCounter);
                    } else {
                        counter.innerText = target + "+";
                    }
                };
                updateCounter();
            };
            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        startCounter(entry.target);
                        observer.unobserve(entry.target);
                    }
                });
            }, options);
            counters.forEach(counter => observer.observe(counter));
        });
    </script>

    <!-- MENU SCRIPT -->

    <script>
        const btn = document.getElementById('menu-btn');
        const menu = document.getElementById('mobile-menu');
        const menuIcon = document.getElementById('menu-icon');
        const closeIcon = document.getElementById('close-icon');
        const menuLinks = menu ? menu.querySelectorAll('a') : [];

        if (btn) {
            btn.addEventListener('click', () => {
                const isOpen = menu.classList.contains('max-h-[400px]');
                if (isOpen) {
                    menu.classList.remove('max-h-[400px]');
                    menu.classList.add('max-h-0');
                    closeIcon.classList.add('hidden');
                    menuIcon.classList.remove('hidden');
                } else {
                    menu.classList.remove('max-h-0');
                    menu.classList.add('max-h-[400px]');
                    menuIcon.classList.add('hidden');
                    closeIcon.classList.remove('hidden');
                }
            });
        }
    </script>

    <!-- POINTER ANIMATION SCRIPT -->

    <script>
        const canvas = document.getElementById('pointer-canvas');
        const isLowEnd = navigator.hardwareConcurrency && navigator.hardwareConcurrency <= 2;
        const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
        const isTouchDevice = window.matchMedia('(pointer: coarse)').matches;
        const shouldRenderPointer = !isLowEnd && !prefersReducedMotion && !isTouchDevice && window.innerWidth >= 1024;

        if (canvas && shouldRenderPointer) {
            const ctx = canvas.getContext('2d');
            let particlesArray = [];
            let mouse = { x: -1000, y: -1000, radius: 150 };

            let isMoving = false;
            let movementTimeout;
            let globalAlpha = 0;

            window.addEventListener('mousemove', function (event) {
                mouse.x = event.x;
                mouse.y = event.y;
                isMoving = true;

                clearTimeout(movementTimeout);
                movementTimeout = setTimeout(() => {
                    isMoving = false;
                }, 100);
            });

            window.addEventListener('mouseout', function () {
                isMoving = false;
            });

            function resize() {
                canvas.width = window.innerWidth;
                canvas.height = window.innerHeight;
                init();
            }

            class Particle {
                constructor(x, y) {
                    this.x = x;
                    this.y = y;
                    this.size = 2;
                    this.baseX = this.x;
                    this.baseY = this.y;
                    this.density = (Math.random() * 30) + 10;
                }

                draw(opacity) {
                    ctx.fillStyle = `rgba(244, 63, 94, ${opacity * globalAlpha})`;
                    ctx.beginPath();
                    ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
                    ctx.closePath();
                    ctx.fill();
                }

                update() {
                    let dx = mouse.x - this.x;
                    let dy = mouse.y - this.y;
                    let distance = Math.sqrt(dx * dx + dy * dy);
                    let opacity = 0;

                    if (distance < mouse.radius) {
                        opacity = 1 - (distance / mouse.radius);

                        if (isMoving) {
                            let forceDirectionX = dx / distance;
                            let forceDirectionY = dy / distance;
                            let force = (mouse.radius - distance) / mouse.radius;
                            let directionX = forceDirectionX * force * this.density;
                            let directionY = forceDirectionY * force * this.density;
                            this.x += directionX;
                            this.y += directionY;
                        }
                    }

                    if (!isMoving || distance >= mouse.radius) {
                        if (this.x !== this.baseX) {
                            let dxBase = this.x - this.baseX;
                            this.x -= dxBase / 10;
                        }
                        if (this.y !== this.baseY) {
                            let dyBase = this.y - this.baseY;
                            this.y -= dyBase / 10;
                        }
                    }

                    if (opacity > 0 && globalAlpha > 0.01) {
                        this.draw(opacity);
                    }
                }
            }

            function init() {
                particlesArray = [];
                let spacing = 45;
                for (let y = 0; y < canvas.height; y += spacing) {
                    for (let x = 0; x < canvas.width; x += spacing) {
                        particlesArray.push(new Particle(x, y));
                    }
                }
            }

            function animate() {
                ctx.clearRect(0, 0, canvas.width, canvas.height);

                if (isMoving) {
                    if (globalAlpha < 1) globalAlpha += 0.1;
                } else {
                    if (globalAlpha > 0) globalAlpha -= 0.05;
                }

                for (let i = 0; i < particlesArray.length; i++) {
                    particlesArray[i].update();
                }
                requestAnimationFrame(animate);
            }

            window.addEventListener('resize', resize);
            resize();
            animate();
        }
    </script>

    {{--typing-text Home Section--}}

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const textElement = document.getElementById('typing-text-inner');

            // FIX: Check if the element exists before doing anything else
            if (textElement) {
                const phrases = ["Malaysia", "MEA", "USA", "Canada"];
                let phraseIndex = 0;
                let charIndex = 0;
                let isDeleting = false;
                const typingSpeed = 150;
                const deletingSpeed = 100;
                const delayBetweenPhrases = 1500;

                function type() {
                    const currentPhrase = phrases[phraseIndex];

                    if (isDeleting) {
                        charIndex--;
                        textElement.textContent = currentPhrase.substring(0, charIndex);
                        if (charIndex === 0) {
                            isDeleting = false;
                            phraseIndex = (phraseIndex + 1) % phrases.length;
                            setTimeout(type, 200);
                        } else {
                            setTimeout(type, deletingSpeed);
                        }
                    } else {
                        charIndex++;
                        textElement.textContent = currentPhrase.substring(0, charIndex);
                        if (charIndex === currentPhrase.length) {
                            isDeleting = true;
                            setTimeout(type, delayBetweenPhrases);
                        } else {
                            setTimeout(type, typingSpeed);
                        }
                    }
                }

                type(); // Start the function
            }
        });
    </script>

    {{--typing-text Second Challenge Section--}}

    <script>
        const text = document.getElementById('typing-text');

        // FIX: Only proceed if the element 'text' actually exists
        if (text) {
            const phrases = ["The Challenge", "Opportunity", "Innovation", "Mission"];
            let i = 0, j = 0, isDeleting = false;

            function type() {
                let currentPhrase = phrases[i];
                if (isDeleting) {
                    text.textContent = currentPhrase.substring(0, j--);
                    if (j < 0) { isDeleting = false; i = (i + 1) % phrases.length; }
                } else {
                    text.textContent = currentPhrase.substring(0, j++);
                    if (j > currentPhrase.length) isDeleting = true;
                }
                setTimeout(type, isDeleting ? 400 : 500);
            }
            type();
        }
    </script>


    {{-- Cost Efficiency Without Compromise 4th Section --}}

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const textElement = document.getElementById('typing-text-cost');

            // FIX: Check if the element exists before running the animation
            if (textElement) {
                const fullText = "Cost Efficiency Without Compromise";
                let charIndex = 0;
                let isDeleting = false;
                const typingSpeed = 200;
                const deletingSpeed = 150;
                const delayAfterFull = 1500;

                function type() {
                    if (!isDeleting) {
                        // typing forward
                        charIndex++;
                        textElement.textContent = fullText.substring(0, charIndex);
                        if (charIndex === fullText.length) {
                            isDeleting = true;
                            setTimeout(type, delayAfterFull);
                        } else {
                            setTimeout(type, typingSpeed);
                        }
                    } else {
                        // deleting backward
                        charIndex--;
                        textElement.textContent = fullText.substring(0, charIndex);
                        if (charIndex === 0) {
                            isDeleting = false;
                            setTimeout(type, 200);
                        } else {
                            setTimeout(type, deletingSpeed);
                        }
                    }
                }

                type(); // start typing effect
            }
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
            if (prefersReducedMotion || window.innerWidth < 768) {
                return;
            }

            window.setTimeout(function () {
                const swiperScript = document.createElement('script');
                swiperScript.src = 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js';
                swiperScript.defer = true;
                swiperScript.onload = function () {
                    if (typeof Swiper !== 'undefined') {
                        new Swiper('.projectSwiper', {
                            slidesPerView: 1,
                            spaceBetween: 24,
                            loop: true,
                            grabCursor: true,
                            autoplay: { delay: 3000, disableOnInteraction: false, pauseOnMouseEnter: true },
                            speed: 800,
                            breakpoints: { 768: { slidesPerView: 2 }, 1024: { slidesPerView: 3 } },
                            pagination: { el: '.swiper-pagination', clickable: true }
                        });
                    }
                };
                document.head.appendChild(swiperScript);
            }, 2000);
        });
    </script>

    <!-- SERVICE SCHEMA -->
    @verbatim
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "SoftwareCompany",
      "name": "SmartAI Soft",
      "url": "https://smartaisoft.com",
      "logo": "{{ asset('assets/images/others/Asset_1@2x_1771949694638.png') }}",
      "address": {
        "@type": "PostalAddress",
        "addressCountry": "PK",
        "addressLocality": "Lahore"
      },
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Software Development Services",
        "itemListElement": [
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "AI Agent & LLM Development Services",
              "description": "Build autonomous AI agents and custom LLM solutions. Our AI experts integrate intelligent workflows and RAG into your business apps."
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Custom Mobile App Development (iOS & Android)",
              "description": "High-performance native and cross-platform mobile apps. We specialize in Flutter, React Native, and Swift."
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Scalable Web App Development & SaaS Solutions",
              "description": "Full-stack web development using MERN, MEAN, and Python. We build secure, enterprise-grade web architectures."
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Hire Dedicated Offshore Developers in Pakistan",
              "description": "Hire vetted full-time developers as an extension of your team. Structured, agile delivery for U.S. & global agencies."
            }
          }
        ]
      }
    }
    </script>
    @endverbatim

    <!-- Optional CSS to color the active pagination dot with your Rose-600 color -->
    <style>
        .swiper-pagination-bullet-active {
            background-color: #e11d48 !important;
            /* Tailwind rose-600 */
            width: 24px;
            border-radius: 8px;
            transition: all 0.3s;
        }
    </style>

</body>

</html>