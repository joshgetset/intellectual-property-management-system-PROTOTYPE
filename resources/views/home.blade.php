<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>IPMS | Intellectual Property Management System</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap"
        rel="stylesheet"
    >

    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hero_carousel.css') }}">
</head>

<body>

    <header class="navbar">
        <div class="container navbar-inner">

            <a href="{{ route('home') }}" class="brand">
                <div class="brand-mark">IP</div>

                <div class="brand-text">
                    <span class="brand-name">IPMS</span>
                    <span class="brand-subtitle">
                        Intellectual Property Management System
                    </span>
                </div>
            </a>
            <nav class="nav-links">

                <a href="#about">About</a>

                <a href="#features">Features</a>

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

                <a href="{{ route('login') }}" class="nav-login">
                    Login
                </a>

            </nav>

        </div>
    </header>

    <button
        type="button"
        class="nav-top"
        aria-label="Return to top"
        title="Return to top"
    >
        ↑
    </button>


    <main>

        <section class="hero">

            <div class="container">

                <div class="hero-carousel">

                    <!-- SLIDE 1 -->
                    <div class="hero-slide active">

                        <div class="hero-slide-content">

                            <div class="hero-badge">
                                Intellectual Property Management
                            </div>

                            <h1>
                                Manage your intellectual property
                                <span>with clarity.</span>
                            </h1>

                            <p class="hero-description">
                                IPMS provides a centralized platform for organizing,
                                monitoring, and managing intellectual property records
                                and related activities.
                            </p>

                            <div class="hero-actions">

                                <a href="#" class="btn btn-primary">
                                    Get Started
                                </a>

                                <a href="#about" class="btn btn-secondary">
                                    Learn More
                                </a>

                            </div>

                        </div>

                    </div>


                    <!-- SLIDE 2 -->
                    <div class="hero-slide">

                        <div class="hero-slide-content">

                            <div class="hero-badge">
                                Centralized Records
                            </div>

                            <h1>
                                Keep every IP record
                                <span>organized.</span>
                            </h1>

                            <p class="hero-description">
                                Maintain structured records for intellectual property
                                assets, applications, registrations, inventors,
                                and related information in one platform.
                            </p>

                            <div class="hero-actions">

                                <a href="#features" class="btn btn-primary">
                                    Explore Features
                                </a>

                                <a href="#about" class="btn btn-secondary">
                                    Learn More
                                </a>

                            </div>

                        </div>

                    </div>


                    <!-- SLIDE 3 -->
                    <div class="hero-slide">

                        <div class="hero-slide-content">

                            <div class="hero-badge">
                                Patent Search
                            </div>

                            <h1>
                                Discover relevant
                                <span>patent information.</span>
                            </h1>

                            <p class="hero-description">
                                Search patent information directly from the landing
                                page and review available patent details through
                                the integrated search interface.
                            </p>

                            <div class="hero-actions">

                                <a href="#" class="btn btn-primary"
                                onclick="document.getElementById('patentQuery').focus(); return false;">
                                    Search Patent
                                </a>

                                <a href="#features" class="btn btn-secondary">
                                    View Capabilities
                                </a>

                            </div>

                        </div>

                    </div>


                    <!-- CAROUSEL CONTROLS -->
                    <div class="hero-carousel-controls">

                        <button
                            type="button"
                            class="carousel-dot active"
                            data-slide="0"
                            aria-label="Go to slide 1"
                        ></button>

                        <button
                            type="button"
                            class="carousel-dot"
                            data-slide="1"
                            aria-label="Go to slide 2"
                        ></button>

                        <button
                            type="button"
                            class="carousel-dot"
                            data-slide="2"
                            aria-label="Go to slide 3"
                        ></button>

                        <button
                            type="button"
                            class="carousel-arrow"
                            id="carouselNext"
                            aria-label="Next slide"
                        >
                            →
                        </button>

                    </div>

                </div>

            </div>

        </section>


        <section class="about" id="about">

            <div class="container about-content">

                <div class="section-label">
                    ABOUT IPMS
                </div>

                <h2>
                    One place for your intellectual property records.
                </h2>

                <p>
                    Keep important intellectual property information
                    organized and accessible through a structured,
                    centralized management system.
                </p>

            </div>

        </section>


        <section class="features" id="features">

            <div class="container">

                <div class="section-heading">
                    <div class="section-label">
                        CORE CAPABILITIES
                    </div>

                    <h2>
                        Everything organized in one system.
                    </h2>
                </div>


                <div class="feature-grid">

                    <div class="feature-item">
                        <div class="feature-number">01</div>

                        <h3>IP Records</h3>

                        <p>
                            Maintain organized records of intellectual
                            property assets and their details.
                        </p>
                    </div>


                    <div class="feature-item">
                        <div class="feature-number">02</div>

                        <h3>Monitoring</h3>

                        <p>
                            Track applications, registrations, statuses,
                            and important IP activities.
                        </p>
                    </div>


                    <div class="feature-item">
                        <div class="feature-number">03</div>

                        <h3>Centralized Access</h3>

                        <p>
                            Access relevant intellectual property
                            information through one centralized platform.
                        </p>
                    </div>

                </div>

            </div>

        </section>

    </main>

        <!-- Patent Search Modal -->

    <div
        id="patentSearchModal"
        class="patent-modal hidden"
    >

        <div
            class="patent-modal-overlay"
            id="patentModalOverlay"
        ></div>


        <div class="patent-modal-dialog">

            <button
                type="button"
                class="patent-modal-close"
                id="patentModalClose"
                aria-label="Close"
            >
                &times;
            </button>


            <div class="modal-header">

                <div class="modal-label">
                    PATENT SEARCH
                </div>

                <h2 id="patentModalTitle">
                    Search Results
                </h2>

                <p id="patentModalDescription">
                    Results from the Lens patent database.
                </p>

            </div>


            <div
                id="patentResults"
                class="patent-results"
            ></div>

        </div>

    </div>


    <!-- Patent Details Modal -->

    <div
        id="patentDetailsModal"
        class="patent-modal hidden"
    >

        <div
            class="patent-modal-overlay"
            id="patentDetailsOverlay"
        ></div>


        <div class="patent-modal-dialog details-dialog">

            <button
                type="button"
                class="patent-modal-close"
                id="patentDetailsClose"
                aria-label="Close"
            >
                &times;
            </button>


            <div id="patentDetailsContent"></div>

        </div>

    </div>

    <footer class="footer">

        <div class="container footer-inner">

            <p>
                © {{ date('Y') }} IPMS. All rights reserved.
            </p>

            <p>
                Intellectual Property Management System
            </p>

        </div>

    </footer>

    <script src="{{ asset('js/home.js') }}" defer></script>
</body>
</html>