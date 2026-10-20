<style>
    .bg-muted-50 {
        background-color: rgba(241, 245, 249, 0.5);
    }

    .bg-background {
        background-color: #ffffff;
    }

    .border-border {
        border-color: #e2e8f0;
    }

    .border-border-50 {
        border-color: rgba(226, 232, 240, 0.5);
    }

    .footer-transition {
        transition: all 200ms cubic-bezier(0.4, 0, 0.2, 1);
    }

    .font-display {
        font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Arial, sans-serif;
    }

    .site-footer-container {
        width: min(100% - 2rem, 80rem);
        margin-inline: auto;
    }

    .site-footer-columns {
        display: grid;
        grid-template-columns: 6fr 2fr 4fr;
        align-items: start;
        gap: 3rem 4rem;
        margin-bottom: 3rem;
    }

    .site-footer-column {
        min-width: 0;
    }

    .site-footer-heading {
        margin-bottom: 1.25rem;
        color: #020817;
        font-size: 1.125rem;
        font-weight: 600;
        line-height: 1.5;
    }

    .site-footer-certifications {
        display: grid;
        grid-template-columns: repeat(3, 5.75rem);
        gap: 0.5rem;
    }

    .site-footer-certification {
        display: flex;
        width: 5.75rem;
        height: 5.75rem;
        min-width: 0;
        align-items: center;
        justify-content: center;
        border-radius: 0.5rem;
    }

    .site-footer-certification img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: contain;
    }

    .site-footer-bottom {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-between;
        gap: 1rem;
        padding-top: 2rem;
        border-top: 1px solid rgba(226, 232, 240, 0.5);
        text-align: center;
    }

    @media (max-width: 1023px) {
        .site-footer-columns {
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 2.5rem 2rem;
        }
    }

    @media (max-width: 639px) {
        .site-footer-columns {
            grid-template-columns: minmax(0, 1fr);
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .site-footer-bottom {
            align-items: flex-start;
            text-align: left;
        }
    }

    @media (min-width: 768px) {
        .site-footer-bottom {
            flex-direction: row;
            text-align: left;
        }
    }
</style>

<footer class="bg-muted-50 border-t border-border pt-16 pb-8 font-display">

    <div class="site-footer-container">

        <div class="site-footer-columns">

            {{-- Column 1: Logo + description + social --}}
            <div class="site-footer-column">
                <div class="site-footer-brand mb-4">
                    <a href="/" class="inline-block">
                        <img fetchpriority="high" src="{{ asset('assets/images/others/logo-header.png') }}"
                            alt="MEHR logo" class="brand-logo h-[100px] sm:h-24 w-auto object-contain" width="540"
                            height="540" loading="lazy" decoding="async" />
                    </a>
                </div>

                <p class="text-slate-600 font-medium mb-6 leading-relaxed">
                    Professional Web Design and Website Development for Businesses across the USA.
                    Modern, responsive, and scalable websites designed to drive growth.
                </p>


                {{-- <div class="flex flex-wrap gap-3">
                    <a href="https://uk.linkedin.com/company/smartai-soft" aria-label="LinkedIn"
                        class="w-10 h-10 rounded-full bg-white border group border-[#e2e8f0] flex items-center justify-center text-[#64748b] hover:text-[#0086f6] hover:border-[#0086f6] transition-all duration-300 shadow-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                            class="transition-transform duration-300 ease-in-out group-hover:scale-110" width="18"
                            height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z" />
                            <rect width="4" height="12" x="2" y="9" />
                            <circle cx="4" cy="4" r="2" />
                        </svg>
                    </a>

                    <a href="https://www.upwork.com/agencies/1550198843122221056/" target="_blank"
                        rel="noopener noreferrer" aria-label="Upwork"
                        class="w-10 h-10 rounded-full bg-white border group border-[#e2e8f0] flex items-center justify-center text-[#64748b] hover:text-[#0086f6] hover:border-[#0086f6] transition-all duration-300 shadow-sm">
                        <i aria-hidden="true"
                            class="fa-brands fa-upwork text-[18px] transition-transform duration-300 ease-in-out group-hover:scale-110"></i>
                    </a>

                    <a href="https://m.facebook.com/people/Smartai-Soft/61565559385042/" aria-label="Facebook"
                        class="w-10 h-10 rounded-full bg-white group border border-[#e2e8f0] flex items-center justify-center text-[#64748b] hover:text-[#0086f6] hover:border-[#0086f6] transition-all duration-300 shadow-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                            class="transition-transform duration-300 ease-in-out group-hover:scale-110" width="18"
                            height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                        </svg>
                    </a>

                    <a href="https://www.instagram.com/smartaisoft/" aria-label="Instagram"
                        class="w-10 h-10 rounded-full bg-white group border border-[#e2e8f0] flex items-center justify-center text-[#64748b] hover:text-[#0086f6] hover:border-[#0086f6] transition-all duration-300 shadow-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                            class="transition-transform duration-300 ease-in-out group-hover:scale-110" width="18"
                            height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <rect width="20" height="20" x="2" y="2" rx="5" ry="5" />
                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                            <line x1="17.5" x2="17.51" y1="6.5" y2="6.5" />
                        </svg>
                    </a>

                    <a href="https://www.youtube.com/@SmartAISoft" target="_blank" rel="noopener noreferrer"
                        aria-label="YouTube"
                        class="w-10 h-10 rounded-full bg-white group border border-[#e2e8f0] flex items-center justify-center text-[#64748b] hover:text-[#0086f6] hover:border-[#0086f6] transition-all duration-300 shadow-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                            class="transition-transform duration-300 ease-in-out group-hover:scale-110" width="18"
                            height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 2-2 69.44 69.44 0 0 1 15 0 2 2 0 0 1 2 2 24.12 24.12 0 0 1 0 10 2 2 0 0 1-2 2 69.44 69.44 0 0 1-15 0 2 2 0 0 1-2-2Z" />
                            <path d="m10 15 5-3-5-3z" />
                        </svg>
                    </a>
                </div> --}}
            </div>

            {{-- Column 2: Navigation --}}
            <div class="site-footer-column">
                <h4 class="site-footer-heading">Navigation</h4>
                <ul class="space-y-3">
                    <li><a href="{{ route('services') }}"
                            class="text-slate-600 font-medium hover:text-[#0086f6] footer-transition">SERVICES</a></li>
                    <li><a href="{{ route('blogs') }}"
                            class="text-slate-600 font-medium hover:text-[#0086f6] footer-transition">BLOGS</a></li>
                    <li><a href="{{ route('project') }}"
                            class="text-slate-600 font-medium hover:text-[#0086f6] footer-transition">PROJECTS</a></li>
                    <li><a href="{{ route('about') }}"
                            class="text-slate-600 font-medium hover:text-[#0086f6] footer-transition">ABOUT US</a></li>
                    {{-- <li><a href="{{ route('contact') }}"
                            class="text-slate-600 font-medium hover:text-[#0086f6] footer-transition">CONTACT US</a>
                    </li> --}}
                </ul>
            </div>

            {{-- Column 3: Contact Us --}}
            <div class="site-footer-column">
                <h4 class="site-footer-heading">Contact Us</h4>
                <ul class="space-y-3 text-[14px]">
                    <li class="text-slate-600 font-medium">2681 Winterfell St Corpus Christi, TX 78415 USA</li>
                    <li>
                        <a href="tel:+18326775343"
                            class="text-slate-600 font-medium hover:text-[#0086f6] footer-transition">+1 (832)
                            677-5343</a>
                    </li>
                    <li>
                        <a href="mailto:Malikmisbah@mtzproducts.com"
                            class="text-slate-600 font-medium hover:text-[#0086f6] footer-transition">Malikmisbah@mtzproducts.com</a>
                    </li>
                    {{-- <li class="pt-2">
                        <a href="https://calendly.com/smartaisoft-info/30min"
                            class="text-[#007fcf] hover:underline font-bold text-[15px] footer-transition">
                            Book a Discovery Call
                        </a>
                    </li> --}}
                </ul>
            </div>

        </div>
        <div class="site-footer-bottom">
            <p class="text-sm text-slate-600">
                &copy;
                <script>document.write(new Date().getFullYear())</script> MEHR Website Design and Software Services. All
                rights reserved.
            </p>
            <div class="flex gap-6">
                <a href="{{ route('privacy.policy') }}"
                    class="text-sm text-slate-600 hover:text-[#0086f6] footer-transition">Privacy Policy</a>
                <a href="{{ route('terms.of.service') }}"
                    class="text-sm text-slate-600 hover:text-[#0086f6] footer-transition">Terms of Service</a>
            </div>
        </div>

        <div class="fixed lg:bottom-16 bottom-5 lg:right-8 right-5 z-50 flex items-center group">

            <span
                class="mr-3 px-3 py-1 bg-gray-800 text-white text-sm rounded opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap">
                Chat with us
            </span>

            <a href="https://wa.me/923704343002" target="_blank" aria-label="Contact us on WhatsApp"
                class="relative w-14 h-14 bg-[#25D366] text-white rounded-full flex items-center justify-center shadow-lg hover:scale-110 transition-transform duration-300">

                <!-- Hidden from screen readers because it's purely decorative animation -->
                <span aria-hidden="true"
                    class="absolute inline-flex h-full w-full rounded-full bg-[#25D366] opacity-75 animate-ping"></span>

                <span class="relative z-10">
                    <!-- Hidden from screen readers to avoid reading SVG path data -->
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-7 h-7"
                        aria-hidden="true">
                        <path
                            d="M20.52 3.48A11.88 11.88 0 0012 0C5.37 0 0 5.37 0 12c0 2.11.55 4.08 1.52 5.77L0 24l6.42-1.68A11.94 11.94 0 0012 24c6.63 0 12-5.37 12-12 0-3.19-1.24-6.17-3.48-8.52zM12 21.82a9.79 9.79 0 01-5.02-1.44l-.36-.21-3.81 1 1-3.72-.23-.38A9.79 9.79 0 012.18 12c0-5.43 4.39-9.82 9.82-9.82 2.62 0 5.09 1.02 6.95 2.87a9.72 9.72 0 012.87 6.95c0 5.43-4.39 9.82-9.82 9.82zM17.55 14.22c-.29-.15-1.73-.85-2-.95s-.46-.14-.65.14-.75.95-.92 1.15-.34.21-.63.07c-.29-.14-1.22-.45-2.33-1.43-.86-.77-1.44-1.72-1.61-2.01-.17-.29-.02-.45.13-.59.13-.13.29-.34.44-.51.14-.17.19-.29.29-.48.1-.19.05-.36-.03-.51-.08-.15-.65-1.57-.89-2.15-.23-.56-.47-.49-.65-.5-.17-.01-.36-.01-.55-.01s-.51.07-.78.36c-.27.29-1.03 1.01-1.03 2.47s1.06 2.87 1.21 3.07c.15.2 2.1 3.21 5.09 4.5.71.31 1.26.49 1.69.63.71.23 1.36.2 1.87.12.57-.1 1.73-.7 1.98-1.37.25-.66.25-1.22.17-1.36-.08-.14-.28-.21-.57-.36z" />
                    </svg>
                </span>
            </a>
        </div>
    </div>

</footer>