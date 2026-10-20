<style>
    /* Top Navbar: Clean Tech White */
    .navbar-tech {
        background: #ffffff !important;
        border-bottom: 1px solid #e2e8f0 !important;
        height: 70px;
        box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.03);
    }

    /* Toggler Color */
    .sidebar-toggler i {
        color: #020817 !important; /* Deep Navy */
        width: 20px;
    }

    /* Profile Dropdown: Modern SaaS Style */
    .profile-dropdown-tech {
        background: #ffffff !important;
        border: 1px solid #e2e8f0 !important;
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.1) !important;
        border-radius: 7px !important;
        min-width: 250px;
        margin-top: 2px !important;
        padding: 0 !important;
        overflow: hidden;
    }

    .user-info-section {
        border-bottom: 1px solid #f1f5f9;
        background: #f8fafc; /* Very light slate */
    }

    .dropdown-link-tech {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 12px 20px;
        color: #475569 !important; /* Slate 600 */
        font-size: 14px;
        font-weight: 600;
        transition: all 200ms ease;
        text-decoration: none;
    }

    .dropdown-link-tech:hover {
        background: #f1f5f9 !important; 
        color: #0086f6 !important; 
    }

    .dropdown-link-tech i {
        font-size: 14px;
        opacity: 0.7;
    }

    /* Nav Avatar Styling */
    .nav-profile-img {
        border: 2px solid #0086f6;
        padding: 2px;
        transition: all 0.3s ease;
        object-fit: cover;
    }
    
 
</style>

<nav class="navbar navbar-tech">
  <a href="#" class="sidebar-toggler">
    <i data-feather="menu"></i>
  </a>
  
  <div class="navbar-content px-4">
    <ul class="navbar-nav ml-auto">
      
      <!-- USER PROFILE DROPDOWN -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <div class="w-[40px] h-[40px] rounded-full bg-slate-200 flex items-center justify-center border-2 border-slate-50 nav-profile-img">
              <i class="fas fa-user-tie text-[#002f7d] text-sm"></i>
          </div>
        </a>

        <div class="dropdown-menu profile-dropdown-tech shadow-lg" aria-labelledby="profileDropdown">
          
          <!-- USER INFO HEADER -->
          <div class="user-info-section d-flex flex-column align-items-center px-4 py-1">
            <div class="mb-3">
              <div class="w-[100px] h-[100px]  flex items-center justify-center">
                   <img class="w-[100px] h-auto object-contain" src="{{ asset('assets/images/Asset_1@2x_1771949694638.png') }}" alt="MEHR logo">
              </div>
            </div>
            <div class="text-center">
              <p class="text-[#020817] font-bold text-lg mb-0 tracking-tight">{{ auth()->user()->name }}</p>
            </div>
          </div>

          <!-- DROPDOWN ACTIONS -->
          <div class="py-2">
            <a href="{{ route('users.edit', auth()->user()->id) }}" class="dropdown-link-tech">
                <i class="fas fa-user-gear"></i>
                <span>Account Settings</span>
            </a>

            <!-- LOGOUT ACTION -->
            <form method="POST" action="{{ route('logout') }}" id="logout-form-top">
              @csrf
              <button type="submit" class="dropdown-link-tech w-full border-0 bg-transparent text-left border-t border-slate-100 mt-1">
                <i class="fas fa-sign-out-alt text-[#007fcf]"></i>
                <span class="text-[#002f7d] font-bold">Sign Out</span>
              </button>
            </form>

          </div>
        </div>
      </li>

    </ul>
  </div>
</nav>

<script>
    // Ensure Feather icons are initialized
    feather.replace();
</script>
