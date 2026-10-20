<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/images/others/busybeesfvicon.png') }}">
    <title>Register | Trusted by families who want the best for their children.</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #0B0F1A;
        }

        .auth-card {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(12px);
        }

        .input-field {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.2s ease-in-out;
        }

        .input-field:focus {
            background: rgba(255, 255, 255, 0.08);
            border-color: #00A3FF;
            box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.1);
            outline: none;
        }
    </style>
</head>

<body class="min-h-screen flex items-center justify-center p-6 selection:bg-[#00A3FF]/30">
    <div class="absolute inset-0 z-0 pointer-events-none overflow-hidden">
        <div class="absolute inset-0 opacity-[0.25]" style="background-image: 
                    linear-gradient(rgba(57, 255, 20, 0.3) 1.5px, transparent 1.5px), 
                    linear-gradient(90deg, rgba(57, 255, 20, 0.3) 1.5px, transparent 1.5px); 
                    background-size: 60px 60px; 
                    mask-image: radial-gradient(ellipse at center, black 40%, transparent 90%);">
        </div>
        <div
            class="absolute top-[-10%] left-[-10%] w-[600px] h-[600px] bg-[#00A3FF]/40 blur-[120px] rounded-full mix-blend-screen animate-pulse">
        </div>
        <div class="absolute bottom-[-10%] right-[-10%] w-[600px] h-[600px] bg-[#39FF14]/25 blur-[120px] rounded-full mix-blend-screen animate-pulse"
            style="animation-delay: 2s;"></div>
        <div
            class="absolute top-0 left-0 w-full h-[2px] bg-gradient-to-r from-transparent via-[#39FF14]/50 to-transparent animate-scan">
        </div>
    </div>

    <div class="w-full max-w-[450px] relative z-10">

        <div class="text-center mb-8">
            <h1 class="text-3xl font-semibold text-white tracking-tight mb-2">Create Your Account</h1>
        </div>
        <div class="auth-card rounded-2xl p-8 md:p-10 shadow-2xl">
            <form method="POST" action="{{ route('register') }}" class="space-y-5">
                @csrf
                <div>
                    <label class="block text-xs font-medium text-gray-400 uppercase tracking-wider mb-2 ml-1">Full
                        Name</label>
                    <div class="relative">
                        <span class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-500 text-sm">
                            <i class="far fa-user"></i>
                        </span>
                        <input type="text" name="name" value="{{ old('name') }}" required autofocus
                            placeholder="Enter your full name"
                            class="input-field w-full rounded-xl pl-11 pr-4 py-3.5 text-sm text-white placeholder-gray-600">
                    </div>
                    @error('name') <p class="text-red-400 text-xs mt-2 ml-1">{{ $message }}</p> @enderror
                </div>
                <div>
                    <label class="block text-xs font-medium text-gray-400 uppercase tracking-wider mb-2 ml-1">Email
                        Address</label>
                    <div class="relative">
                        <span class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-500 text-sm">
                            <i class="far fa-envelope"></i>
                        </span>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" required
                            placeholder="name@company.com"
                            class="input-field w-full rounded-xl pl-11 pr-4 py-3.5 text-sm text-white placeholder-gray-600">
                    </div>
                    @error('email') <p class="text-red-400 text-xs mt-2 ml-1">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label
                        class="block text-xs font-medium text-gray-400 uppercase tracking-wider mb-2 ml-1">Password</label>
                    <div class="relative">
                        <span class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-500 text-sm">
                            <i class="fas fa-lock"></i>
                        </span>
                        <input type="password" id="password" name="password" required placeholder="Create a password"
                            class="input-field w-full rounded-xl pl-11 pr-12 py-3.5 text-sm text-white placeholder-gray-600">
                        <button type="button" onclick="togglePassword('password', 'toggleIcon1')"
                            class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-500 hover:text-gray-300 transition">
                            <i id="toggleIcon1" class="far fa-eye text-sm"></i>
                        </button>
                    </div>
                    @error('password') <p class="text-red-400 text-xs mt-2 ml-1">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block text-xs font-medium text-gray-400 uppercase tracking-wider mb-2 ml-1">Confirm
                        Password</label>
                    <div class="relative">
                        <span class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-500 text-sm">
                            <i class="fas fa-shield-halved"></i>
                        </span>
                        <input type="password" id="password_confirmation" name="password_confirmation" required
                            placeholder="Confirm your password"
                            class="input-field w-full rounded-xl pl-11 pr-12 py-3.5 text-sm text-white placeholder-gray-600">
                        <button type="button" onclick="togglePassword('password_confirmation', 'toggleIcon2')"
                            class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-500 hover:text-gray-300 transition">
                            <i id="toggleIcon2" class="far fa-eye text-sm"></i>
                        </button>
                    </div>
                    @error('password_confirmation') <p class="text-red-400 text-xs mt-2 ml-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-start pt-1">
                    <label class="flex items-center cursor-pointer group">
                        <input type="checkbox" name="remember" class="hidden peer">
                        <div
                            class="min-w-[20px] h-5 border border-white/20 rounded-md bg-white/5 peer-checked:bg-blue-600 peer-checked:border-blue-600 transition-all flex items-center justify-center">
                            <i class="fas fa-check text-[10px] text-white opacity-0 peer-checked:opacity-100"></i>
                        </div>
                        <span class="ml-3 text-sm text-gray-400 group-hover:text-gray-300 transition">
                            I agree to the <a href="#" class="text-[#00A3FF] hover:underline">Privacy Policy</a>
                        </span>
                    </label>
                </div>

                <div class="grid grid-cols-2 gap-4 pt-2">
                    <button type="submit"
                        class="w-full py-3.5 rounded-xl bg-[#00A3FF] hover:bg-[#00A3FF] text-white font-semibold text-sm transition-all shadow-lg shadow-blue-600/20 active:scale-[0.98]">
                         Create Account
                    </button>
                    <a href="{{ route('login') }}"
                        class="w-full py-3.5 rounded-xl border border-white/10 text-white font-semibold text-sm text-center hover:bg-white/5 transition-all active:scale-[0.98]">
                        Sign In
                    </a>
                </div>
            </form>
        </div>
        <div class="mt-8 text-center">
            <a href="{{ url('/') }}"
                class="text-gray-400 hover:text-white transition-colors text-sm inline-flex items-center gap-2">
                <i class="fas fa-arrow-left-long text-xs"></i>
                Back to Website
            </a>
        </div>
    </div>
    <script>
        function togglePassword(inputId, iconId) {
            const passwordField = document.getElementById(inputId);
            const icon = document.getElementById(iconId);
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
</body>

</html>