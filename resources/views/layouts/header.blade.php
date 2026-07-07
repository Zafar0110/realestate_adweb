<!-- Modern Header -->
<header id="header-main" class="modern-header">
    <div class="header-container">
        <!-- Logo Section -->
        <div class="header-logo-section">
            <a href="/" class="logo-link">
                <img class="logo_header" alt="RealFun Logo" src="{{ asset('assets/images/logo/logo%402x.png')}}"
                    data-light="{{ asset('assets/images/logo/logo@2x.png') }}"
                    data-dark="{{ asset('assets/images/logo/logo-2@2x.png') }}">
            </a>
        </div>

        <!-- Navigation Menu (Hidden on mobile, shown on desktop) -->
        <nav class="header-nav d-none d-lg-block">
            <ul class="nav-list">
                <li class="nav-item">
                    <a href="/" class="nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
                </li>
                <li class="nav-item">
                    <a href="/about" class="nav-link {{ request()->is('about') ? 'active' : '' }}">About</a>
                </li>
                <li class="nav-item">
                    <a href="/properties" class="nav-link {{ request()->is('properties') ? 'active' : '' }}">Properties</a>
                </li>
                <li class="nav-item">
                    <a href="/agents" class="nav-link {{ request()->is('agents') ? 'active' : '' }}">Agents</a>
                </li>
                <li class="nav-item">
                    <a href="/blog" class="nav-link {{ request()->is('blog') ? 'active' : '' }}">Blog</a>
                </li>
                <li class="nav-item">
                    <a href="/contact" class="nav-link {{ request()->is('contact') ? 'active' : '' }}">Contact</a>
                </li>
            </ul>
        </nav>

        <!-- Header Right Section -->
        <div class="header-right-section">
            <!-- Phone Number (Desktop Only) -->
            <div class="contact-info d-none d-lg-flex">
                <svg class="contact-icon" width="18" height="18" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.875 5.625C1.875 12.5283 7.47167 18.125 14.375 18.125H16.25C16.7473 18.125 17.2242 17.9275 17.5758 17.5758C17.9275 17.2242 18.125 16.7473 18.125 16.25V15.1067C18.125 14.6767 17.8325 14.3017 17.415 14.1975L13.7292 13.2758C13.3625 13.1842 12.9775 13.3217 12.7517 13.6233L11.9433 14.7008C11.7083 15.0142 11.3025 15.1525 10.935 15.0175C9.57073 14.5159 8.33179 13.7238 7.30398 12.696C6.27618 11.6682 5.48406 10.4293 4.9825 9.065C4.8475 8.6975 4.98583 8.29167 5.29917 8.05667L6.37667 7.24833C6.67917 7.0225 6.81583 6.63667 6.72417 6.27083L5.8025 2.585C5.75178 2.38225 5.63477 2.20225 5.47004 2.07361C5.30532 1.94498 5.10234 1.87507 4.89333 1.875H3.75C3.25272 1.875 2.77581 2.07254 2.42417 2.42417C2.07254 2.77581 1.875 3.25272 1.875 3.75V5.625Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <span class="phone-text">(603) 555-0123</span>
            </div>

            <!-- CTA Buttons -->
            <div class="header-buttons">
                <a href="#modalLogin" class="btn-login d-none d-lg-inline-block" data-bs-toggle="modal">
                    Login
                </a>
                <a href="#modalRegister" class="btn-register" data-bs-toggle="modal">
                    Register
                </a>
            </div>

            <!-- Mobile Menu Toggle (Hidden on desktop) -->
            <div class="mobile-menu-toggle d-lg-none" data-bs-toggle="offcanvas" data-bs-target="#menu-mobile" aria-controls="menu-mobile">
                <span class="hamburger"></span>
                <span class="hamburger"></span>
                <span class="hamburger"></span>
            </div>
        </div>
    </div>
</header><!-- /.modern-header -->