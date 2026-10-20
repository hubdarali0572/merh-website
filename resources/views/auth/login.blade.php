<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/images/Asset_1@2x_1771949694638.png') }}">

    <!-- Page Title -->
    <title>Login | MEHR Website Design and Software Services</title>

    <!-- Tailwind CSS & Fonts -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Using Inter only, removed Playfair Display -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    
    {{-- Recaptcha --}}
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <style>
        :root {
            --background: #ffffff;
            --foreground: #020817;
            /* Deep Navy/Black */
            --muted-foreground: #007fcf;
            /* Slate Gray */
            --border: #e2e8f0;
            /* Light Gray */
            --primary: #0086f6;
            /* SmartAI Blue */
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--background);
            color: var(--foreground);
        }

        /* Clean Tech Card */
        .auth-card {
            background: #ffffff;
            border: 1px solid var(--border);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.05), 0 10px 10px -5px rgba(0, 0, 0, 0.02);
        }

        /* Tech Input Style */
        .input-tech {
            background: #ffffff;
            border: 1px solid var(--border);
            transition: all 0.2s ease;
            color: var(--foreground);
        }

        .input-tech:focus {
            border-color: var(--primary);
            outline: none;
            box-shadow: 0 0 0 4px rgba(0, 134, 246, 0.15);
        }

        /* Solid Primary Button */
        .btn-primary-ui {
            background: var(--foreground);
            color: white;
            font-weight: 700;
            transition: all 0.3s ease;
        }

        .btn-primary-ui:hover {
            background: #002f7d;
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(0, 47, 125, 0.25);
        }

        /* Subtle Background Decoration */
        .bg-grid {
            background-image: radial-gradient(var(--border) 1px, transparent 1px);
            background-size: 30px 30px;
        }

        /* POINTER ANIMATION STYLE */

        #pointer-canvas {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 9999;
        }
    </style>
</head>

<body class="min-h-screen flex items-center justify-center p-6 bg-grid selection:bg-blue-100">
    <div
        class="absolute top-0 right-0 w-[300px] h-[400px] lg:w-[700px] lg:h-[750px] bg-[#007fcf]/20 blur-[120px] rounded-full pointer-events-none">
    </div>
    <div
        class="absolute bottom-0 left-0 w-[300px] h-[400px] lg:w-[700px] lg:h-[750px] bg-[#0086f6]/20 blur-[120px] rounded-full pointer-events-none">
    </div>

    <!-- The Canvas element -->
    <canvas id="pointer-canvas"></canvas>

    <div class="w-full max-w-[440px] relative z-10">

        <!-- Logo & Branding -->
        <div class="text-center mb-10">
            <a href="/">
                <img src="{{ asset('assets/images/Asset_1@2x_1771949694638.png') }}"
                    class="h-[180px] w-auto object-contain mx-auto mb-6" alt="MEHR logo">
            </a>
            <h1 class="text-3xl font-extrabold tracking-tight text-[#020817]"> Login to Your Account</h1>
            <p class="text-[#64748b] mt-2 text-sm font-medium">Enter your credentials to access your dashboard</p>
        </div>

        <!-- Login Card -->
        <div class="auth-card rounded-xl p-8 md:p-10">
            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf

                <!-- Email Field -->
                <div>
                    <label class="block text-xs font-bold text-[#020817] uppercase tracking-wider mb-2 ml-1">
                        Email
                    </label>
                    <div class="relative">
                        <span class="absolute left-4 top-1/2 -translate-y-1/2 text-[#64748b] text-sm">
                            <i class="far fa-envelope"></i>
                        </span>
                        <input type="email" name="email" value="{{ old('email') }}" required autofocus
                            placeholder="name@company.com"
                            class="input-tech w-full rounded-xl pl-12 pr-4 py-4 text-sm placeholder-gray-400">
                    </div>
                    @error('email')
                        <p class="text-red-500 text-[11px] mt-2 ml-1 font-semibold">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password Field -->
                <div>
                    <label class="block text-xs font-bold text-[#020817] uppercase tracking-wider mb-2 ml-1">
                        Password
                    </label>
                    <div class="relative">
                        <span class="absolute left-4 top-1/2 -translate-y-1/2 text-[#64748b] text-sm">
                            <i class="fas fa-lock"></i>
                        </span>
                        <input type="password" id="password" name="password" required placeholder="••••••••"
                            class="input-tech w-full rounded-xl pl-12 pr-12 py-4 text-sm placeholder-gray-400">
                        <button type="button" onclick="togglePassword()"
                            class="absolute right-4 top-1/2 -translate-y-1/2 text-[#64748b]/50 hover:text-[#020817] transition">
                            <i id="toggleIcon" class="far fa-eye text-sm"></i>
                        </button>
                    </div>
                    @error('password')
                        <p class="text-red-500 text-[11px] mt-2 ml-1 font-semibold">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Remember Me & Forgot Password -->
                <div class="flex items-center justify-between">
                    <label class="flex items-center cursor-pointer group">
                        <input type="checkbox" name="remember" class="hidden peer">
                        <div
                            class="w-4 h-4 border border-[#e2e8f0] rounded bg-white peer-checked:bg-[#020817] peer-checked:border-[#020817] transition-all flex items-center justify-center">
                            <i class="fas fa-check text-[8px] text-white opacity-0 peer-checked:opacity-100"></i>
                        </div>
                        <span class="ml-2.5 text-xs font-medium text-[#64748b] group-hover:text-[#020817] transition">
                            Remember me
                        </span>
                    </label>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}"></div>

                            @if ($errors->has('g-recaptcha-response'))
                                <span class="text-red-500 text-sm">
                                    {{ $errors->first('g-recaptcha-response') }}
                                </span>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="pt-2">
                    <button type="submit" id="loginButton"
                        class="btn-primary-ui w-full py-4 rounded-xl text-sm shadow-lg flex items-center justify-center gap-2">
                        <span id="buttonText">Sign In</span>
                        <span id="buttonLoader" class="hidden">
                            <svg class="w-5 h-5 animate-spin text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                    stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8H4z"></path>
                            </svg>
                        </span>
                    </button>
                </div>
            </form>
        </div>

        <!-- Footer Link -->
        <div class="mt-8 text-center">
            <a href="{{ url('/') }}"
                class="text-[#64748b] hover:text-[#002f7d] transition-all text-sm font-semibold inline-flex items-center gap-2 group">
                <i class="fas fa-arrow-left text-[10px] transition-transform group-hover:-translate-x-1"></i>
                Back to Website
            </a>
        </div>
    </div>

    <script>
        const loginForm = document.querySelector('form');
        const loginButton = document.getElementById('loginButton');
        const buttonText = document.getElementById('buttonText');
        const buttonLoader = document.getElementById('buttonLoader');

        loginForm.addEventListener('submit', function () {
            // Disable button
            loginButton.disabled = true;

            // Hide text and show loader
            buttonText.classList.add('hidden');
            buttonLoader.classList.remove('hidden');
        });
    </script>

    <script>
        function togglePassword() {
            const passwordField = document.getElementById('password');
            const icon = document.getElementById('toggleIcon');
            if (passwordField.type === "password") {
                passwordField.type = "text";
                icon.classList.replace("far", "fas");
                icon.classList.replace("fa-eye", "fa-eye-slash");
            } else {
                passwordField.type = "password";
                icon.classList.replace("fas", "far");
                icon.classList.replace("fa-eye-slash", "fa-eye");
            }
        }
    </script>

    <!-- POINTER ANIMATION SCRIPT -->

    <script>
        const canvas = document.getElementById('pointer-canvas');
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
                // Color changed to #0086f6 (RGB: 0, 134, 246)
                ctx.fillStyle = `rgba(0, 134, 246, ${opacity * globalAlpha})`;
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
    </script>
</body>

</html>