<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | {{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- Scripts and css -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('css')
</head>

<body class="">
    @include('layouts.sidebar')

    <div class="flex p-5">
        <main class="w-full ml-0 md:ml-80 md:pl-5">
            @include('layouts.header')

            <div class="mt-5">
                @yield('breadcumb')

                <div class="mt-5">
                    @yield('content')
                </div>
            </div>
        </main>
    </div>

    <x-toast />
    <x-dark-mode-toggle />

    {{-- JAVASCRIPT --}}
    <script>
        async function handleLogout() {
            try {
                // Get the CSRF token from the meta tag
                const csrfToken = document.querySelector('meta[name="csrf-token"]').content;
                
                // Try API logout first
                const response = await fetch('/api/logout', {
                    method: 'POST',
                    headers: {
                        'Accept': 'application/json',
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    }
                });

                // Find the appropriate logout form
                const logoutForm = document.getElementById('logout-form') || 
                                 document.getElementById('sidebar-logout-form') || 
                                 document.getElementById('mobile-logout-form');

                if (!logoutForm) {
                    console.error('No logout form found');
                    return;
                }

                if (response.ok) {
                    // If API logout successful, submit the web form
                    logoutForm.submit();
                } else {
                    // If API logout fails, still try web logout
                    logoutForm.submit();
                }
            } catch (error) {
                // If any error occurs, fallback to web logout
                const logoutForm = document.getElementById('logout-form') || 
                                 document.getElementById('sidebar-logout-form') || 
                                 document.getElementById('mobile-logout-form');
                
                if (logoutForm) {
                    logoutForm.submit();
                } else {
                    console.error('No logout form found');
                }
            }
        }
    </script>
    @yield('js')
    @stack('script')
</body>

</html>
