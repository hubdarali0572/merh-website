@extends('layout.master')

@section('content')

  <!-- SmartAI Soft Tech Styles -->
  <style>
    .tech-card {
      background: #ffffff !important;
      border: 1px solid #e2e8f0 !important;
      /* var(--border) */
      border-radius: 10px !important;
      /* rounded-2xl */
      transition: all 300ms cubic-bezier(0.4, 0, 0.2, 1);
      box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.05);
      position: relative;
    }

    .tech-card:hover {
      transform: translateY(-4px);
      box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.08);
      border-color: #cbd5e1 !important;
    }

    .icon-container {
      width: 54px;
      height: 54px;
      border-radius: 100%;
      background: #f1f5f9;
      /* Slate 100 */
      display: flex;
      align-items: center;
      justify-content: center;
      transition: all 0.3s ease;
      color: #f43f5e;
    }

    .tech-card:hover .icon-container {
      background: #f43f5e;
      color: #ffffff;
    }

    .dashboard-title {
      font-family: 'Inter', sans-serif;
      font-weight: 800;
      letter-spacing: -0.025em;
      color: #020817;
    }

    .section-label {
      font-size: 11px;
      font-weight: 700;
      letter-spacing: 0.15em;
      text-transform: uppercase;
      color: #64748b;
      /* Slate 500 */
    }
  </style>

  <div class="mb-4">
    <h4 class="text-3xl dashboard-title">
      Admin Overview <span class="text-slate-300 mx-2 font-light">|</span>
      <span class="text-[#f43f5e]">{{ auth()->user()->name }}</span>
    </h4>
    <p class="section-label mt-1">Enterprise Management Portal</p>
  </div>

  <div class="row mt-3">
    <div class="col-12 stretch-card">
      <div class="row flex-grow-1">

        <!-- User Management Card -->
        <div class="col-md-4 grid-margin stretch-card">
          <div class="card tech-card cursor-pointer" onclick="window.location='{{ route('users.index') }}';">
            <div class="card-body d-flex justify-content-between align-items-center p-4">
              <div>
                <h6 class="section-label mb-2">User</h6>
                <h3 class="mb-0 font-bold text-[#f43f5e] display-6 tracking-tight">{{ $userTotal }}</h3>
              </div>
              <div class="icon-container border border-slate-200 shadow-sm text-[#f43f5e]">
                <i class="fas fa-users-cog fa-xl"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 grid-margin stretch-card">
          <div class="card tech-card cursor-pointer" onclick="window.location='{{ route('smartai-blog.index') }}';">
            <div class="card-body d-flex justify-content-between align-items-center p-4">
              <div>
                <h6 class="section-label mb-2">Blogs</h6>
                <h3 class="mb-0 font-bold text-[#f43f5e] display-6 tracking-tight">{{ $blogTotal }}</h3>
              </div>
              <div class="icon-container border border-slate-200 shadow-sm text-[#f43f5e]">
                <i class="fas fa-users-cog fa-xl"></i>
              </div>
            </div>
          </div>
        </div>

        <!-- Inquiries Card -->
        <div class="col-md-4 grid-margin stretch-card">
          <div class="card tech-card cursor-pointer" onclick="window.location='{{ route('studentContact.index') }}';">
            <div class="card-body d-flex justify-content-between align-items-center p-4">
              <div>
                <h6 class="section-label mb-2">Contact Request </h6>
                <h3 class="mb-0 font-bold text-[#f43f5e] display-6 tracking-tight">{{ $contactStudent }}</h3>
              </div>
              <div class="icon-container border border-slate-200 shadow-sm">
                <i class="fa-solid fa-headset fa-xl"></i>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

@endsection