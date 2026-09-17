<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>IPMS | Sign In</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap"
        rel="stylesheet"
    >

    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>

    <main class="login-page">

        <div class="login-container">

            <!-- =================================================
                 LEFT ANIMATED PANEL
                 ================================================= -->

            <section class="login-animation">

                <div class="animation-grid"></div>

                <div class="glow glow-one"></div>
                <div class="glow glow-two"></div>

                <!-- Connecting lines -->
                <div class="connection connection-one"></div>
                <div class="connection connection-two"></div>
                <div class="connection connection-three"></div>

                <!-- Main animated sphere -->
                <div class="ip-orbit">

                    <div class="orbit orbit-one"></div>
                    <div class="orbit orbit-two"></div>
                    <div class="orbit orbit-three"></div>

                    <div class="orbit-center">
                        <span>IP</span>
                    </div>

                    <div class="orbit-node node-one">
                        <span>©</span>
                    </div>

                    <div class="orbit-node node-two">
                        <span>™</span>
                    </div>

                    <div class="orbit-node node-three">
                        <span>®</span>
                    </div>

                </div>


                <!-- Floating cards -->

                <div class="floating-card card-patent">
                    <span class="card-icon">◇</span>

                    <div>
                        <strong>Patent</strong>
                        <small>Protected</small>
                    </div>
                </div>


                <div class="floating-card card-record">
                    <span class="card-icon">▤</span>

                    <div>
                        <strong>IP Record</strong>
                        <small>Organized</small>
                    </div>
                </div>


                <div class="floating-card card-search">
                    <span class="card-icon">⌕</span>

                    <div>
                        <strong>Search</strong>
                        <small>Discover</small>
                    </div>
                </div>


                <div class="animation-caption">
                    <span class="caption-line"></span>

                    <span>
                        INTELLECTUAL PROPERTY
                    </span>
                </div>

            </section>


            <!-- =================================================
                 RIGHT LOGIN PANEL
                 ================================================= -->

            <section class="login-form-panel">

                <div class="login-card">

                    <a
                        href="{{ route('home') }}"
                        class="login-brand"
                    >
                        <div class="brand-mark">
                            IP
                        </div>

                        <div class="brand-text">
                            <span class="brand-name">
                                IPMS
                            </span>

                            <span class="brand-subtitle">
                                Intellectual Property Management System
                            </span>
                        </div>
                    </a>


                    <div class="login-header">

                        <span class="login-kicker">
                            ACCOUNT ACCESS
                        </span>

                        <h1>
                            Welcome back.
                        </h1>

                        <p>
                            Sign in to continue to your IPMS workspace.
                        </p>

                    </div>


                    @if ($errors->any())
                        <div class="login-error">

                            <strong>
                                Unable to sign in
                            </strong>

                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>

                        </div>
                    @endif


                    <form
                        method="POST"
                        action="{{ route('login.submit') }}"
                        class="login-form"
                    >

                        @csrf


                        <!-- USERNAME -->

                        <div class="floating-field">

                            <input
                                type="text"
                                id="username"
                                name="username"
                                value="{{ old('username') }}"
                                autocomplete="username"
                                placeholder=" "
                                required
                            >

                            <label for="username">
                                Username
                            </label>

                        </div>


                        <!-- PASSWORD -->

                        <div class="floating-field">

                            <input
                                type="password"
                                id="password"
                                name="password"
                                autocomplete="current-password"
                                placeholder=" "
                                required
                            >

                            <label for="password">
                                Password
                            </label>

                        </div>


                        <div class="login-options">

                            <label class="remember-option">

                                <input
                                    type="checkbox"
                                    name="remember"
                                >

                                <span>
                                    Remember me
                                </span>

                            </label>

                            <a
                                href="#"
                                class="forgot-link"
                            >
                                Forgot password?
                            </a>

                        </div>


                        <button
                            type="submit"
                            class="login-button"
                        >
                            <span>
                                Sign In
                            </span>

                            <span class="login-arrow">
                                →
                            </span>
                        </button>

                    </form>


                    <div class="login-divider">
                        <span>IPMS</span>
                    </div>


                    <p class="login-bottom">
                        Don't have an account?

                        <a href="#">
                            Create an account
                        </a>
                    </p>


                    <a
                        href="{{ route('home') }}"
                        class="back-home"
                    >
                        <span>←</span>
                        Back to home
                    </a>

                </div>

            </section>

        </div>

    </main>

</body>
</html>