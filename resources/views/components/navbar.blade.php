@props(['username'])

<nav class="navbar navbar-expand-lg custom-navbar">

    <div class="container">

        <a
            class="navbar-brand brand-logo"
            href="{{ route('dashboard', ['username' => $username]) }}"
        >
            AniTrack<span class="brand-dot">.</span>
        </a>

        <button
            class="navbar-toggler custom-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarMenu"
            aria-controls="navbarMenu"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarMenu">

            <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">

                <li class="nav-item">
                    <a
                        class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}"
                        href="{{ route('dashboard', ['username' => $username]) }}"
                    >
                        Dashboard
                    </a>
                </li>

                <li class="nav-item">
                    <a
                        class="nav-link {{ request()->routeIs('pengelolaan') ? 'active' : '' }}"
                        href="{{ route('pengelolaan', ['username' => $username]) }}"
                    >
                        Watchlist
                    </a>
                </li>

                <li class="nav-item">
                    <a
                        class="nav-link {{ request()->routeIs('profile') ? 'active' : '' }}"
                        href="{{ route('profile', ['username' => $username]) }}"
                    >
                        Profile
                    </a>
                </li>

                <li class="nav-item ms-lg-3">
                    <span class="nav-user">{{ $username }}</span>
                </li>

            </ul>

        </div>

    </div>

</nav>