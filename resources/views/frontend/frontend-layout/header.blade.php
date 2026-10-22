<!-- Custom Styles -->
<style>
    :root {
        /* Exact Shadcn/UI HSL Variables */
        --background: 0 0% 100%;
        --foreground: 222.2 84% 4.9%;
        --muted: 210 40% 96.1%;
        --muted-foreground: 215.4 16.3% 46.9%;
        --popover: 0 0% 100%;
        --popover-foreground: 222.2 84% 4.9%;
        --card: 0 0% 100%;
        --card-foreground: 222.2 84% 4.9%;
        --border: 214.3 31.8% 91.4%;
        --input: 214.3 31.8% 91.4%;
        --primary: 222.2 47.4% 11.2%;
        --primary-foreground: 210 40% 98%;
        --secondary: 210 40% 96.1%;
        --secondary-foreground: 222.2 47.4% 11.2%;
        --accent: 210 40% 96.1%;
        --accent-foreground: 222.2 47.4% 11.2%;
        --ring: 215 20.2% 65.1%;
        --radius: 0.5rem;
    }

    /* Glass Effect from React Code */
    .glass-nav {
        background-color: rgba(255, 255, 255, 0.8);
        backdrop-filter: blur(8px);
        -webkit-backdrop-filter: blur(8px);
        border-bottom: 1px solid hsl(var(--border));
    }

    /* Color Utility Classes to match React Logic */
    .text-slate-500 {
        color: hsl(var(--muted-foreground));
    }

    .text-foreground {
        color: hsl(var(--foreground));
    }

    .text-background {
        color: hsl(var(--background));
    }

    .bg-background {
        background-color: hsl(var(--background));
    }

    .bg-foreground {
        background-color: hsl(var(--foreground));
    }

    .bg-primary {
        background-color: hsl(var(--primary));
    }

    .text-primary-foreground {
        color: hsl(var(--primary-foreground));
    }

    .border-border {
        border-color: hsl(var(--border));
    }

    /* Smooth transition for the nav bar expansion/shrink */
    .nav-transition {
        transition: all 300ms cubic-bezier(0.4, 0, 0.2, 1);
    }
</style>

<nav id="navbar" class="fixed top-0 left-0 right-0 z-50 nav-transition bg-transparent py-5">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center">
            <div class="flex-shrink-0">
                <a href="{{ url('/') }}" class="flex items-center gap-2 cursor-pointer">
                    <img src="{{ asset('assets/images/others/logo-header.png') }}" alt="MEHR logo"
                        class="brand-logo h-[100px] w-auto object-contain" width="512" height="512" loading="eager" decoding="async" fetchpriority="high" />
                </a>
            </div>

            <div class="hidden lg:flex items-center gap-8">
                <a href="{{ route('services') }}"
                    class="text-sm font-medium footer-transition hover:text-[#0086f6] {{ request()->routeIs('services') ? 'text-[#0086f6]' : 'text-slate-600' }}">
                    SERVICES
                </a>
                <a href="{{ route('solutions') }}" target="_blank" rel="noopener noreferrer"
                    class="text-sm font-medium footer-transition hover:text-[#0086f6] {{ request()->routeIs('solutions') ? 'text-[#0086f6]' : 'text-slate-600' }}">
                    SOLUTIONS
                </a>
                <a href="{{ route('about-us') }}"
                    class="text-sm font-medium footer-transition hover:text-[#0086f6] {{ request()->routeIs('about-us') ? 'text-[#0086f6]' : 'text-slate-600' }}">
                    ABOUT US
                </a>

                {{-- <a href="{{ route('gallery') }}"
                    class="text-sm font-medium footer-transition hover:text-[#0086f6] {{ request()->routeIs('gallery') ? 'text-[#0086f6]' : 'text-slate-600' }}">
                    Showcase
                </a> --}}
                <a href="{{ route('blogs') }}"
                    class="text-sm font-medium footer-transition hover:text-[#0086f6]
                     {{ request()->routeIs('blogs') || request()->routeIs('frontend.show') ? 'text-[#0086f6]' : 'text-slate-600' }}">
                    BLOGS
                </a>
                <a href="{{ route('contact-us') }}"
                    class="text-sm font-medium footer-transition hover:text-[#0086f6] {{ request()->routeIs('contact-us') ? 'text-[#0086f6]' : 'text-slate-600' }}">
                    CONTACT US
                </a>


                {{-- <div class="flex items-center gap-4 border-l border-border pl-6">
                    <a href="https://uk.linkedin.com/company/smartai-soft" target="_blank" rel="noopener noreferrer"
                        aria-label="Visit our LinkedIn profile"
                        class="text-slate-500 hover:text-[#0086f6] footer-transition">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z">
                            </path>
                            <rect width="4" height="12" x="2" y="9"></rect>
                            <circle cx="4" cy="4" r="2"></circle>
                        </svg>
                    </a>
                    <a href="https://www.upwork.com/agencies/1550198843122221056/" target="_blank" rel="noopener noreferrer"
                        aria-label="Visit our Upwork agency profile"
                        class="text-slate-500 hover:text-[#0086f6] footer-transition">
                        <i class="fa-brands fa-upwork text-[22px]"></i>
                    </a>
                </div> --}}

                {{-- <a href="https://calendly.com/smartaisoft-info/30min" target="_blank" rel="noopener noreferrer"
                    class="px-5 py-2.5 rounded-full text-sm font-semibold bg-foreground text-white hover:bg-[#020817]/90 nav-transition hover:-translate-y-0.5 hover:shadow-md inline-block text-center">
                    Book a Call
                </a> --}}
            </div>

            <div class="lg:hidden flex items-center">
                <button id="mobile-menu-toggle" type="button" aria-label="Open main menu" aria-expanded="false"
                    class="p-2 text-foreground focus:outline-none">
                    <!-- This span is the key fix for "discernible text" -->
                    <span class="sr-only">Open main menu</span>

                    <!-- Menu Icon -->
                    <svg id="icon-menu" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <line x1="3" x2="21" y1="6" y2="6"></line>
                        <line x1="3" x2="21" y1="12" y2="12"></line>
                        <line x1="3" x2="21" y1="18" y2="18"></line>
                    </svg>

                    <!-- Close Icon -->
                    <svg id="icon-close" aria-hidden="true" focusable="false" class="hidden"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 6 6 18"></path>
                        <path d="m6 6 12 12"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div id="mobile-menu"
        class="hidden lg:hidden absolute top-full left-0 w-full bg-background border-b border-border shadow-lg">
        <div class="px-4 pt-2 pb-6 space-y-4 flex flex-col">
            <a href="{{ route('services') }}" onclick="closeMobileMenu()"
                class="block px-3 py-2 text-base font-medium text-foreground hover:text-[#0086f6] {{ request()->routeIs('services') ? 'text-[#0086f6]' : 'text-slate-600' }}">SERVICES</a>

            <a href="{{ route('solutions') }}" onclick="closeMobileMenu()"
                class="block px-3 py-2 text-base font-medium text-foreground hover:text-[#0086f6] {{ request()->routeIs('solutions') ? 'text-[#0086f6]' : 'text-slate-600' }}">SOLUTIONS</a>
            {{-- <a href="{{ route('gallery') }}" onclick="closeMobileMenu()"
                class="block px-3 py-2 text-base font-medium text-foreground hover:text-[#0086f6] {{ request()->routeIs('gallery') ? 'text-[#0086f6]' : 'text-slate-600' }}">Showcase</a> --}}
            <a href="{{ route('about-us') }}" onclick="closeMobileMenu()"
                class="block px-3 py-2 text-base font-medium text-foreground hover:text-[#0086f6] {{ request()->routeIs('about-us') ? 'text-[#0086f6]' : 'text-slate-600' }}">ABOUT US</a>

            <a href="{{ route('blogs') }}" onclick="closeMobileMenu()"
                class="block px-3 py-2 text-base font-medium text-foreground hover:text-[#0086f6] {{ request()->routeIs('blogs') ? 'text-[#0086f6]' : 'text-slate-600' }}">BLOGS</a>

            <a href="{{ route('contact-us') }}" onclick="closeMobileMenu()"
                class="block px-3 py-2 text-base font-medium text-foreground hover:text-[#0086f6] {{ request()->routeIs('contact-us') ? 'text-[#0086f6]' : 'text-slate-600' }}">CONTACT US</a>
            {{-- <a href="https://calendly.com/app/routing/forms/user/me" target="_blank" class="px-5 py-2.5 rounded-full text-sm font-semibold
                    bg-foreground text-white hover:bg-[#020817]/90 nav-transition hover:-translate-y-0.5 hover:shadow-md inline-block
                    text-center"> Book a Call </a> --}}
        </div>
    </div>
</nav>

<script>
    const navbar = document.getElementById('navbar');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileToggle = document.getElementById('mobile-menu-toggle');
    const iconMenu = document.getElementById('icon-menu');
    const iconClose = document.getElementById('icon-close');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 20) {
            navbar.classList.add('glass-nav', 'shadow-sm', 'py-3');
            navbar.classList.remove('bg-transparent', 'py-5');
        } else {
            navbar.classList.remove('glass-nav', 'shadow-sm', 'py-3');
            navbar.classList.add('bg-transparent', 'py-5');
        }
    });

    mobileToggle.addEventListener('click', () => {
        const isHidden = mobileMenu.classList.contains('hidden');
        if (isHidden) {
            openMobileMenu();
        } else {
            closeMobileMenu();
        }
    });

    function openMobileMenu() {
        mobileMenu.classList.remove('hidden');
        iconMenu.classList.add('hidden');
        iconClose.classList.remove('hidden');
    }

    function closeMobileMenu() {
        mobileMenu.classList.add('hidden');
        iconMenu.classList.remove('hidden');
        iconClose.classList.add('hidden');
    }

    function scrollToContact() {
        const el = document.getElementById('contact');
        if (el) {
            el.scrollIntoView({ behavior: 'smooth' });
        }
        closeMobileMenu();
    }
</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const sections = document.querySelectorAll('section[id]');
        const navLinks = document.querySelectorAll('.nav-link');

        const options = {
            root: null,
            threshold: 0.6,
            rootMargin: "0px"
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const id = entry.target.getAttribute('id');

                    navLinks.forEach(link => {
                        link.classList.remove('text-[#0086f6]');
                        link.classList.add('text-slate-500');

                        if (link.getAttribute('data-section') === id) {
                            link.classList.add('text-[#0086f6]');
                            link.classList.remove('text-slate-500');
                        }
                    });
                }
            });
        }, options);

        sections.forEach(section => {
            observer.observe(section);
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const isHomePage = window.location.pathname === '/' ||
            ['/challenge', '/solution', '/technology'].includes(window.location.pathname);

        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', function (e) {
                const sectionId = this.getAttribute('data-section');
                const targetElement = document.getElementById(sectionId);

                if (targetElement) {
                    e.preventDefault();

                    targetElement.scrollIntoView({ behavior: 'smooth' });

                    window.history.pushState(null, null, `/${sectionId}`);
                }
            });
        });
        if (isHomePage) {
            const currentPath = window.location.pathname.replace('/', '');
            if (currentPath) {
                const target = document.getElementById(currentPath);
                if (target) {
                    setTimeout(() => {
                        target.scrollIntoView({ behavior: 'smooth' });
                    }, 100);
                }
            }
        }
    });
</script>
