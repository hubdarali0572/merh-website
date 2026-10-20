<nav class="sidebar bg-[#0F1B31]">

  <div class="sidebar-header bg-white border-b border-[#DAD4C9]/5">
    <a href="{{url('dashboard')}}" class="sidebar-brand flex items-center justify-center w-full">

      <img src="{{asset('assets/images/Asset_1@2x_1771949694638.png')}}"
        class="h-[55px] w-auto object-contain" alt="MEHR logo">
    </a>
    <div class="sidebar-toggler not-active">
      <span class="bg-[#DAD4C9]"></span>
      <span class="bg-[#DAD4C9]"></span>
      <span class="bg-[#DAD4C9]"></span>
    </div>
  </div>

  <div class="sidebar-body bg-[#0F1B31] flex flex-col h-[calc(100vh-70px)]">

    <ul class="nav">
      <li class="nav-category text-[#DAD4C9]/60 text-[10px] uppercase tracking-[0.3em] font-bold mb-4 px-4 pt-4">
        Main Menu
      </li>

      <li class="mb-3 nav-item {{ request()->is('dashboard') ? 'active' : '' }}">
        <a href="{{ url('dashboard') }}"
          class="nav-link flex items-center gap-3 py-3 px-4 transition-all duration-500 group hover:bg-[#DAD4C9]/5 {{ request()->is('dashboard') ? 'bg-[#DAD4C9]/10 border-l-2 border-[#DAD4C9]' : '' }}">
          <i
            class="fas fa-columns text-sm {{ request()->is('dashboard') ? 'text-[#DAD4C9]' : 'text-[#E1E2E9]/40 group-hover:text-[#DAD4C9]' }}"></i>
          <span
            class="link-title text-[13px] tracking-wide {{ request()->is('dashboard') ? 'text-white font-semibold' : 'text-[#E1E2E9]/70 group-hover:text-white' }}">DASHBOARD</span>
        </a>
      </li>

      @can('view user')
      <li class="mb-3 nav-item {{ request()->routeIs('users.*') ? 'active' : '' }}">
        <a href="{{ route('users.index') }}"
          class="nav-link flex items-center gap-3 py-3 px-4 transition-all duration-500 group hover:bg-[#DAD4C9]/5 {{ request()->routeIs('users.*') ? 'bg-[#DAD4C9]/10 border-l-2 border-[#DAD4C9]' : '' }}">
          <i
            class="fas fa-user-shield text-sm {{ request()->routeIs('users.*') ? 'text-[#DAD4C9]' : 'text-[#E1E2E9]/40 group-hover:text-[#DAD4C9]' }}"></i>
          <span
            class="link-title text-[13px] tracking-wide {{ request()->routeIs('users.*') ? 'text-white font-semibold' : 'text-[#E1E2E9]/70 group-hover:text-white' }}">USERS</span>
        </a>
      </li>
      @endif

      @can('view blog')
      <li class="mb-3 nav-item {{ request()->routeIs('smartai-blog.*') ? 'active' : '' }}">
        <a href="{{ route('smartai-blog.index') }}"
          class="nav-link flex items-center gap-3 py-3 px-4 transition-all duration-500 group hover:bg-[#DAD4C9]/5 {{ request()->routeIs('smartai-blog.*') ? 'bg-[#DAD4C9]/10 border-l-2 border-[#DAD4C9]' : '' }}">
          <i
            class="fas fa-user-shield text-sm {{ request()->routeIs('smartai-blog.*') ? 'text-[#DAD4C9]' : 'text-[#E1E2E9]/40 group-hover:text-[#DAD4C9]' }}"></i>
          <span
            class="link-title text-[13px] tracking-wide {{ request()->routeIs('smartai-blog.*') ? 'text-white font-semibold' : 'text-[#E1E2E9]/70 group-hover:text-white' }}">Blog</span>
        </a>
      </li>
      @endif

      @can('view contact')
      <li class="mb-3 nav-item {{ request()->routeIs('studentContact.*') ? 'active' : '' }}">
        <a href="{{ route('studentContact.index') }}"
          class="nav-link flex items-center gap-3 py-3 px-4 transition-all duration-500 group hover:bg-[#DAD4C9]/5 {{ request()->routeIs('studentContact.*') ? 'bg-[#DAD4C9]/10 border-l-2 border-[#DAD4C9]' : '' }}">
          <i
            class="fa-solid fa-headset text-sm {{ request()->routeIs('studentContact.*') ? 'text-[#DAD4C9]' : 'text-[#E1E2E9]/40 group-hover:text-[#DAD4C9]' }}"></i>
          <span
            class="link-title text-[13px] tracking-wide {{ request()->routeIs('studentContact.*') ? 'text-white font-semibold' : 'text-[#E1E2E9]/70 group-hover:text-white' }}">Inquiry</span>
        </a>
      </li>
      @endif

    </ul>

    <!-- Sidebar Footer (User Profile) -->
    <div class="mt-auto border-t border-[#DAD4C9]/10 p-1 bg-[#2B3847]/10" x-data="{ open: false }">
      <div class="relative">
        <!-- Profile Dropup -->
        <div x-show="open" x-transition:enter="transition ease-out duration-200"
          x-transition:enter-start="opacity-0 translate-y-4 scale-95"
          x-transition:enter-end="opacity-100 translate-y-0 scale-100"
          x-transition:leave="transition ease-in duration-150"
          x-transition:leave-start="opacity-100 translate-y-0 scale-100"
          x-transition:leave-end="opacity-0 translate-y-4 scale-95" @click.outside="open = false"
          class="absolute bottom-full left-0 right-0 mb-4 overflow-hidden rounded-2xl border border-white/10 bg-[#1A242F]/95 backdrop-blur-md shadow-[0_20px_50px_rgba(0,0,0,0.5)] z-50 ring-1 ring-white/5"
          style="display: none;">

          <!-- Menu Header (Optional but adds premium feel) -->
          <div class="px-5 py-3 border-b border-white/5 bg-white/5">
            <p class="text-[10px] text-[#DAD4C9]/40 uppercase tracking-widest font-bold">Account Settings</p>
          </div>

          <div class="p-1.5">
            <!-- Terminate Session -->
            <form method="POST" action="{{ route('logout') }}" class="mt-0.5">
              @csrf
              <button type="submit"
                class="group w-full flex items-center gap-3 px-4 py-2 text-xs text-red-400/80 hover:text-red-400 hover:bg-red-500/10 rounded-xl transition-all duration-200 text-left">
                <div
                  class="w-7 h-7 flex items-center justify-center rounded-lg bg-red-500/5 group-hover:bg-red-500/20 transition-colors">
                  <i class="fas fa-power-off text-[8px]"></i>
                </div>
                <span class="font-medium">Log Out</span>
              </button>
            </form>
          </div>
        </div>

        <!-- Main User Button -->
        <button @click="open = !open"
          class="w-full flex items-center gap-3 focus:outline-none group p-2 rounded-xl transition-all hover:bg-white/5">
          <div class="relative">
            <div
              class="w-10 h-10 rounded-full bg-gradient-to-br from-[#DAD4C9]/20 to-[#DAD4C9]/5 border border-[#DAD4C9]/20 flex items-center justify-center transition-all group-hover:border-[#DAD4C9]/50 shadow-inner">
              <i class="fas fa-user-tie text-[#DAD4C9] text-sm"></i>
            </div>
            <!-- Status Indicator (Example) -->
            <div
              class="absolute -bottom-0.5 -right-0.5 w-2.5 h-2.5 bg-emerald-500 border-2 border-[#1A242F] rounded-full">
            </div>
          </div>

          <div class="flex-1 text-left">
            <p class="text-[13px] font-bold text-white group-hover:text-[#DAD4C9] transition-colors truncate">
              {{ auth()->user()->name }}
            </p>
            <p class="text-[11px] text-[#DAD4C9]/40 tracking-[0.15em] font-semibold mt-0.5">
              {{ auth()->user()->email }}
            </p>
          </div>

        </button>
      </div>
    </div>

  </div>
</nav>