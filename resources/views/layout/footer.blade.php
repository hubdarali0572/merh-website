<style>
    .footer-tech {
        background: #ffffff !important;
        border-top: 1px solid #e2e8f0 !important;
        color: #64748b !important; 
        font-family: 'Inter', sans-serif;
        font-size: 12px;
        font-weight: 500;
    }

    .footer-brand-link {
        color: #020817 !important; 
        transition: all 0.3s ease;
        text-decoration: none;
        margin-left: 4px;
        font-weight: 700;
    }

    .footer-brand-link:hover {
        color: #2563eb !important; 
    }

    .footer-status-dot {
        width: 6px;
        height: 6px;
        background-color: #10b981;
        border-radius: 50%;
        display: inline-block;
        margin-right: 8px;
    }
</style>

<footer class="footer footer-tech d-flex flex-column flex-md-row align-items-center justify-content-center px-6 py-4 shadow-sm">
    <div class="d-flex align-items-center mb-2 mb-md-0">
        <p class="mb-0">
            &copy; {{ date('Y') }} 
            <a href="{{ url('/') }}" target="_blank" class="footer-brand-link">
                SmartAI Soft
            </a>. All rights reserved.
        </p>
    </div>
</footer>