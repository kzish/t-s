<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: 'Nunito', sans-serif;
        }

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 240px;
            background-color: #0d1b4c;
            /* Dark Blue */
            padding-top: 60px;
            /* space for top navbar */
        }

        .sidebar .nav-link {
            color: #ffffff;
            padding: 12px 20px;
            display: block;
        }

        .sidebar .nav-link.active {
            background-color: #e0e0e0;
            /* Light Grey */
            color: #0d1b4c !important;
            /* Dark Blue text */
            font-weight: bold;
        }

        .content {
            margin-left: 240px;
            /* same as sidebar width */
            padding: 20px;
        }

        .navbar {
            margin-left: 240px;
            /* push navbar beside sidebar */
        }

        .profile-img {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            object-fit: cover;
        }
    </style>

    @stack('styles')
</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar d-flex flex-column">
        <a href="{{ route('admin.dash') }}" class="nav-link {{ request()->routeIs('admin.dash.*') ? 'active' : '' }}">
            Works Dashboard
        </a>
        <a href="{{ route('admin.dash') }}" class="nav-link {{ request()->routeIs('admin.dash') ? 'active' : '' }}">
            Home
        </a>
        <a href="{{ route('admin.dash') }}" class="nav-link {{ request()->routeIs('admin.dash.*') ? 'active' : '' }}">
            University Transport
        </a>
        <a href="{{ route('admin.dash') }}" class="nav-link {{ request()->routeIs('admin.dash.*') ? 'active' : '' }}">
            Personal Vehicle
        </a>
    </div>

    <!-- Top Navbar -->
    <nav class="navbar navbar-expand navbar-dark bg-dark fixed-top">
        <div class="container-fluid justify-content-end">
            <ul class="navbar-nav">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Sign In</a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            @if (Auth::user()->avatar)
                                <img src="{{ Auth::user()->avatar }}" alt="Profile" class="profile-img">
                            @else
                                <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}"
                                    alt="Profile" class="profile-img">
                            @endif
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">
                                Profile
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </nav>

    <br/>
    <br/>
    <br/>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-3">
        {{-- Breadcrumbs slot --}}
        @yield('breadcrumbs')
        {{-- Main content --}}
        @yield('content')
    </main>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>

</html>
