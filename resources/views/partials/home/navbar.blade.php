<header class="navbar" id="navbar">

    <!-- TOP MODE CONTENT -->
    <div class="navbar-inner">

        <a href="{{ route('home') }}" class="brand">
            <img
                src="{{ asset('slsu_logo.png') }}"
                alt="SLSU logo"
                class="brand-mark brand-mark-img"
            >

            <div class="brand-text">
                <span class="brand-name">
                    Intellectual Property<br>
                    Management System
                </span>
            </div>
        </a>

        <div class="nav-actions">
            <nav class="nav-links" aria-label="Primary navigation">

                <a href="{{ route('home') }}">Home</a>

                <a href="#about">About</a>

                <a href="#features">Features</a>

                <a href="#how-it-works">How It Works</a>

                <div class="patent-search">

                    <form
                        id="patentSearchForm"
                        data-search-url="{{ route('patents.search.api') }}"
                    >

                        <div class="search-input-wrapper">

                            <input
                                type="text"
                                id="patentQuery"
                                name="query"
                                placeholder="Search Patent"
                                autocomplete="off"
                            >

                            <button
                                type="submit"
                                class="search-submit"
                                aria-label="Search patents"
                            >
                                <svg
                                    width="17"
                                    height="17"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                >
                                    <circle cx="11" cy="11" r="7"></circle>
                                    <path d="m20 20-4-4"></path>
                                </svg>
                            </button>

                        </div>

                    </form>

                </div>

            </nav>

            <button
                type="button"
                class="mobile-nav-toggle"
                aria-label="Toggle navigation"
                aria-expanded="false"
                aria-controls="mobileNavPanel"
            >
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg>
            </button>

            <a href="{{ route('login') }}" class="nav-login">
                Login
            </a>
        </div>

    </div>

    <div class="mobile-nav-panel" id="mobileNavPanel" hidden>
        <nav class="mobile-nav-list" aria-label="Mobile navigation">
            <a href="{{ route('home') }}">Home</a>
            <a href="#about">About</a>
            <a href="#features">Features</a>
            <a href="#how-it-works">How It Works</a>
            <a href="#patentQuery" class="mobile-nav-search" data-mobile-search="true">Search Patent</a>
        </nav>
    </div>

    <!-- DOCK MODE CONTENT (icons; labels on hover) -->
    <nav class="navbar-dock" aria-label="Section navigation">

        <a href="#about" class="dock-link" data-side-link="about">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10"></circle>
                <line x1="12" y1="16" x2="12" y2="12"></line>
                <line x1="12" y1="8" x2="12.01" y2="8"></line>
            </svg>
            <span class="dock-label">About</span>
        </a>

        <a href="#features" class="dock-link" data-side-link="features">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <rect x="3" y="3" width="7" height="7"></rect>
                <rect x="14" y="3" width="7" height="7"></rect>
                <rect x="14" y="14" width="7" height="7"></rect>
                <rect x="3" y="14" width="7" height="7"></rect>
            </svg>
            <span class="dock-label">Features</span>
        </a>

        <a href="#how-it-works" class="dock-link" data-side-link="how-it-works">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10"></circle>
                <polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"></polygon>
            </svg>
            <span class="dock-label">How It Works</span>
        </a>

        <a href="#patentQuery" class="dock-link" data-side-action="search">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="11" cy="11" r="8"></circle>
                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
            </svg>
            <span class="dock-label">Patent Search</span>
        </a>

        <a href="{{ route('login') }}" class="dock-link">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path>
                <polyline points="10 17 15 12 10 7"></polyline>
                <line x1="15" y1="12" x2="3" y2="12"></line>
            </svg>
            <span class="dock-label">Sign In</span>
        </a>

        <div class="dock-divider"></div>

        <button type="button" class="dock-link" data-side-action="top">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="12" y1="19" x2="12" y2="5"></line>
                <polyline points="5 12 12 5 19 12"></polyline>
            </svg>
            <span class="dock-label">Back to top</span>
        </button>

    </nav>

</header>