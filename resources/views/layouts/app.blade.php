<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Portfolio</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700,0..1&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#1152d4",
                        "background-light": "#f6f6f8",
                        "background-dark": "#101622",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-slate-100 antialiased">
<div class="relative flex min-h-screen flex-col">

    {{-- Top Navbar --}}
    <header class="sticky top-0 z-50 w-full border-b border-slate-200 dark:border-slate-800 bg-background-light/80 dark:bg-background-dark/80 backdrop-blur-md">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4">

            {{-- Brand --}}
            <div class="flex items-center gap-2 text-primary">
                <a href="{{ route('home') }}">
                    <h2 class="text-2xl font-black tracking-tighter text-primary">RDF</h2>
                </a>
            </div>

            {{-- Desktop Nav --}}
            <nav class="hidden md:flex flex-1 justify-center gap-8">
                <a class="text-sm font-medium hover:text-primary transition-colors {{ request()->routeIs('home') ? 'text-primary' : '' }}"
                   href="{{ route('home') }}">Home</a>
                <a class="text-sm font-medium hover:text-primary transition-colors {{ request()->routeIs('skills') ? 'text-primary' : '' }}"
                   href="{{ route('skills') }}">Skills</a>
                <a class="text-sm font-medium hover:text-primary transition-colors {{ request()->routeIs('projects') ? 'text-primary' : '' }}"
                   href="{{ route('projects') }}">Projects</a>
                <a class="text-sm font-medium hover:text-primary transition-colors {{ request()->routeIs('experience') ? 'text-primary' : '' }}"
                   href="{{ route('experience') }}">Experience</a>
                <a class="text-sm font-medium hover:text-primary transition-colors {{ request()->routeIs('contact') ? 'text-primary' : '' }}"
                   href="{{ route('contact') }}">Contact</a>
            </nav>

            {{-- Actions --}}
            <div class="flex items-center gap-4">
                {{-- Dark Mode Toggle --}}
                <button id="theme-toggle"
                        class="flex h-10 w-10 items-center justify-center rounded-lg border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors shadow-sm">
                    <span class="material-symbols-outlined" id="theme-icon">light_mode</span>
                </button>

                {{-- Mobile Menu Toggle --}}
                <button id="mobile-menu-toggle" class="md:hidden text-slate-900 dark:text-slate-100">
                    <span class="material-symbols-outlined">menu</span>
                </button>
            </div>
        </div>

        {{-- Mobile Nav --}}
        <div id="mobile-menu" class="hidden md:hidden border-t border-slate-200 dark:border-slate-800 bg-background-light dark:bg-background-dark px-6 py-4 flex flex-col gap-4">
            <a class="text-sm font-medium hover:text-primary transition-colors {{ request()->routeIs('home') ? 'text-primary' : '' }}"
               href="{{ route('home') }}">Home</a>
            <a class="text-sm font-medium hover:text-primary transition-colors {{ request()->routeIs('skills') ? 'text-primary' : '' }}"
               href="{{ route('skills') }}">Skills</a>
            <a class="text-sm font-medium hover:text-primary transition-colors {{ request()->routeIs('projects') ? 'text-primary' : '' }}"
               href="{{ route('projects') }}">Projects</a>
            <a class="text-sm font-medium hover:text-primary transition-colors {{ request()->routeIs('experience') ? 'text-primary' : '' }}"
               href="{{ route('experience') }}">Experience</a>
            <a class="text-sm font-medium hover:text-primary transition-colors {{ request()->routeIs('contact') ? 'text-primary' : '' }}"
               href="{{ route('contact') }}">Contact</a>
        </div>
    </header>

    {{-- Page Content --}}
    <main class="flex-grow">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="border-t border-slate-200 dark:border-slate-800 py-10">
        <div class="mx-auto max-w-7xl px-6 flex flex-col md:flex-row justify-between items-center gap-6">
            <div class="flex items-center gap-2 text-slate-500">
                <span class="material-symbols-outlined">copyright</span>
                <p class="text-sm">{{ date('Y') }} E-Portfolio. All rights reserved.</p>
            </div>
            <div class="flex gap-6">
                <a class="text-slate-500 hover:text-primary transition-colors" href="{{ route('home') }}">
                    <span class="material-symbols-outlined">language</span>
                </a>
                <a class="text-slate-500 hover:text-primary transition-colors" href="{{ route('contact') }}">
                    <span class="material-symbols-outlined">mail</span>
                </a>
                <a class="text-slate-500 hover:text-primary transition-colors" href="{{ route('contact') }}">
                    <span class="material-symbols-outlined">call</span>
                </a>
            </div>
        </div>
    </footer>

</div>

<script>
    // Dark mode toggle
    const toggle = document.getElementById('theme-toggle');
    const icon = document.getElementById('theme-icon');
    const html = document.documentElement;

    // Load saved preference
    if (localStorage.getItem('theme') === 'dark') {
        html.classList.add('dark');
        icon.textContent = 'dark_mode';
    }

    toggle.addEventListener('click', () => {
        html.classList.toggle('dark');
        const isDark = html.classList.contains('dark');
        icon.textContent = isDark ? 'dark_mode' : 'light_mode';
        localStorage.setItem('theme', isDark ? 'dark' : 'light');
    });

    // Mobile menu toggle
    const mobileToggle = document.getElementById('mobile-menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    mobileToggle.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>
</body>
</html>