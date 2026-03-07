<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-SJV3R09MXC"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-SJV3R09MXC');
    </script>
    {{-- Google Tag Manager --}}
    @if(config('services.gtm.id'))
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','{{ config('services.gtm.id') }}');</script>
    @endif
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta_description', 'PechPlan - Laat pech snel achter u. Pechhulp die uw klant terugbrengt bij uw garage.')">
    <title>@yield('title', 'PechPlan - Laat pech snel achter u')</title>
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph -->
    <meta property="og:type" content="@yield('og_type', 'website')">
    <meta property="og:title" content="@yield('title', 'PechPlan - Laat pech snel achter u')">
    <meta property="og:description" content="@yield('meta_description', 'PechPlan - Laat pech snel achter u. Pechhulp die uw klant terugbrengt bij uw garage.')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="PechPlan">
    <meta property="og:locale" content="nl_NL">
    <meta property="og:image" content="@yield('og_image', url('/images/PechPlan-logo-vector-BO.svg'))">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', 'PechPlan - Laat pech snel achter u')">
    <meta name="twitter:description" content="@yield('meta_description', 'PechPlan - Laat pech snel achter u. Pechhulp die uw klant terugbrengt bij uw garage.')">

    <!-- Extra SEO -->
    <meta name="robots" content="index, follow">
    <meta name="author" content="Next Fleetservice BV">
    <meta name="geo.region" content="NL">
    <meta name="geo.placename" content="Nederland">
    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/images/favicon.svg" type="image/svg+xml">
    <link rel="alternate" hreflang="nl-NL" href="{{ url()->current() }}">
    <link rel="alternate" hreflang="x-default" href="{{ url()->current() }}">

    <!-- Preconnect to external domains -->
    <link rel="preconnect" href="https://www.googletagmanager.com">
    <link rel="dns-prefetch" href="https://www.googletagmanager.com">

    <!-- Preload critical assets -->
    @hasSection('preload')
        @yield('preload')
    @endif

    <!-- BreadcrumbList Schema -->
    @hasSection('breadcrumbs_schema')
        @yield('breadcrumbs_schema')
    @endif

    <!-- Organization Schema (global) -->
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "Organization",
        "name": "PechPlan",
        "legalName": "Next Fleetservice BV",
        "url": "https://pechplan.nl",
        "logo": "https://pechplan.nl/images/PechPlan-logo-vector-BO.svg",
        "description": "PechPlan is een pechhulpservice waarbij uw eigen garage als eerste wordt ingeschakeld bij pech. Met ANWB als achtervang.",
        "telephone": "+31882474747",
        "email": "info@pechplan.nl",
        "address": {
            "@@type": "PostalAddress",
            "addressCountry": "NL"
        },
        "areaServed": [
            { "@@type": "Country", "name": "Nederland" },
            { "@@type": "Continent", "name": "Europa" }
        ],
        "sameAs": [],
        "contactPoint": {
            "@@type": "ContactPoint",
            "telephone": "+31882474747",
            "contactType": "customer service",
            "availableLanguage": "Dutch",
            "hoursAvailable": {
                "@@type": "OpeningHoursSpecification",
                "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
                "opens": "00:00",
                "closes": "23:59"
            }
        }
    }
    </script>
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "LocalBusiness",
        "name": "PechPlan",
        "@@id": "https://pechplan.nl/#localbusiness",
        "url": "https://pechplan.nl",
        "telephone": "+31882474747",
        "email": "info@pechplan.nl",
        "image": "https://pechplan.nl/images/PechPlan-logo-vector-BO.svg",
        "priceRange": "$$",
        "address": {
            "@@type": "PostalAddress",
            "addressCountry": "NL"
        },
        "geo": {
            "@@type": "GeoCoordinates",
            "latitude": "52.3676",
            "longitude": "4.9041"
        },
        "openingHoursSpecification": {
            "@@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
            "opens": "00:00",
            "closes": "23:59"
        }
    }
    </script>
    @yield('structured_data')

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'pech-orange': '#eb8a00',
                        'pech-orange-dark': '#c97600',
                        'pech-orange-light': '#f5a623',
                        'pech-dark': '#1d1d1b',
                        'pech-gray': '#2a2a28',
                        'pech-light': '#ebedf1',
                        'pech-silver': '#e2e5ea',
                    },
                    fontFamily: {
                        'outfit': ['Outfit', 'sans-serif'],
                    },
                },
            },
        }
    </script>
    <style>
        * { font-family: 'Outfit', sans-serif; }
        html { scroll-behavior: smooth; }

        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.5s ease, transform 0.5s ease;
        }
        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .btn-arrow { transition: transform 0.2s ease; }
        button:hover .btn-arrow, a:hover .btn-arrow { transform: translateX(4px); }

        .benefit-card {
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }
        .benefit-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 40px rgba(235, 138, 0, 0.12);
        }

        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
        }
        .faq-answer.open {
            max-height: 500px;
        }

        .silver-gradient {
            background:
                radial-gradient(ellipse 90% 70% at 10% 15%, rgba(255,255,255,0.9) 0%, transparent 45%),
                radial-gradient(ellipse 70% 90% at 90% 80%, rgba(255,255,255,0.8) 0%, transparent 40%),
                radial-gradient(ellipse 60% 50% at 55% 40%, rgba(195,200,215,0.5) 0%, transparent 50%),
                radial-gradient(ellipse 40% 60% at 30% 70%, rgba(210,215,230,0.4) 0%, transparent 45%),
                linear-gradient(160deg, #f2f3f6 0%, #dde0e6 30%, #eceef2 55%, #d8dbe3 80%, #e8eaef 100%);
        }

        .subnav-scroll { scrollbar-width: none; -ms-overflow-style: none; }
        .subnav-scroll::-webkit-scrollbar { display: none; }

        .subnav-link { position: relative; transition: color 0.2s ease; }
        .subnav-link::after { content: ''; position: absolute; bottom: -2px; left: 0; width: 0; height: 2px; background: #eb8a00; transition: width 0.25s ease; }
        .subnav-link.active::after, .subnav-link:hover::after { width: 100%; }

        @media (prefers-reduced-motion: reduce) {
            *, *::before, *::after { animation-duration: 0.01ms !important; transition-duration: 0.01ms !important; }
            html { scroll-behavior: auto; }
        }

        @yield('styles')
    </style>
</head>
<body class="bg-white text-pech-dark antialiased">
    {{-- Google Tag Manager (noscript) --}}
    @if(config('services.gtm.id'))
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id={{ config('services.gtm.id') }}" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    @endif

    <!-- Navigation -->
    <nav id="navbar" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 @yield('navbar_class')">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <a href="/" class="flex-shrink-0" aria-label="PechPlan home">
                    <img src="/images/PechPlan-logo-vector-WO.svg" alt="PechPlan - Pechhulp via uw eigen garage" class="h-8 sm:h-9 logo-white @yield('logo_white_class')">
                    <img src="/images/PechPlan-logo-vector-BO.svg" alt="PechPlan - Pechhulp via uw eigen garage" class="h-8 sm:h-9 logo-dark @yield('logo_dark_class', 'hidden')">
                </a>
                <div class="hidden md:flex items-center gap-8">
                    <a href="/garages" class="nav-link transition-colors duration-200 text-sm font-medium @yield('nav_link_class', 'text-white/80 hover:text-white')">Voor garages</a>
                    <a href="/automobilisten" class="nav-link transition-colors duration-200 text-sm font-medium @yield('nav_link_class', 'text-white/80 hover:text-white')">Voor automobilisten</a>
                    {{-- <a href="/help" class="bg-pech-orange hover:bg-pech-orange-dark text-white px-5 py-2.5 rounded-lg text-sm font-semibold transition-colors duration-200 cursor-pointer inline-flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z"/></svg>
                        Pech melden
                    </a> --}}
                </div>
                <button id="mobile-menu-btn" class="md:hidden p-2 cursor-pointer @yield('mobile_btn_class', 'text-white')" aria-label="Open menu">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                </button>
            </div>
        </div>
        <div id="mobile-menu" class="hidden md:hidden bg-pech-dark/95 backdrop-blur-lg border-t border-white/10">
            <div class="px-4 py-4 space-y-3">
                <a href="/garages" class="block text-white/80 hover:text-white transition-colors py-2 text-sm font-medium">Voor garages</a>
                <a href="/automobilisten" class="block text-white/80 hover:text-white transition-colors py-2 text-sm font-medium">Voor automobilisten</a>
                {{-- <a href="/help" class="flex items-center justify-center gap-2 bg-pech-orange hover:bg-pech-orange-dark text-white px-5 py-2.5 rounded-lg text-sm font-semibold text-center transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z"/></svg>
                    Pech melden
                </a> --}}
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="relative overflow-hidden py-8">
        <div class="absolute inset-0 bg-pech-dark"></div>
        <div class="absolute inset-0 opacity-15" style="background: url('/images/Dark-pattern-bg.webp') center center / cover no-repeat;"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col sm:flex-row items-center justify-between gap-4">
                <img src="/images/PechPlan-logo-vector-WO.svg" alt="PechPlan logo" class="h-6 opacity-40" loading="lazy">
                <p class="text-white/30 text-sm">&copy; {{ date('Y') }} Next Fleetservice BV. Alle rechten voorbehouden.</p>
            </div>
        </div>
    </footer>

    @if(session('success'))
    <div id="success-overlay" class="fixed inset-0 z-[100] flex items-center justify-center p-4" style="opacity:0; transition: opacity 0.3s ease;">
        <div class="absolute inset-0 bg-black/60 backdrop-blur-sm" onclick="closeSuccessOverlay()"></div>
        <div id="success-modal" class="relative bg-white rounded-2xl shadow-2xl max-w-md w-full p-8 text-center" style="transform: scale(0.9) translateY(20px); transition: transform 0.4s cubic-bezier(0.34,1.56,0.64,1);">
            <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-5">
                <svg class="w-8 h-8 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
            </div>
            <h3 class="text-xl font-bold text-pech-dark mb-2">Bericht verzonden!</h3>
            <p class="text-gray-600 mb-6">{{ session('success') }}</p>
            <button onclick="closeSuccessOverlay()" class="bg-pech-orange hover:bg-pech-orange-dark text-white px-8 py-3 rounded-lg font-semibold transition-colors duration-200 cursor-pointer">Sluiten</button>
        </div>
    </div>
    <script>
        requestAnimationFrame(() => {
            const overlay = document.getElementById('success-overlay');
            const modal = document.getElementById('success-modal');
            overlay.style.opacity = '1';
            modal.style.transform = 'scale(1) translateY(0)';
        });
        // GTM conversion tracking
        if (window.dataLayer) {
            window.dataLayer.push({ 'event': 'form_submission', 'form_type': '{{ request()->is("contact") ? "contact" : (request()->is("tip-garage") ? "garage_tip" : "form") }}' });
        }
        function closeSuccessOverlay() {
            const overlay = document.getElementById('success-overlay');
            const modal = document.getElementById('success-modal');
            modal.style.transform = 'scale(0.9) translateY(20px)';
            overlay.style.opacity = '0';
            setTimeout(() => overlay.remove(), 300);
        }
    </script>
    @endif

    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-btn').addEventListener('click', () => document.getElementById('mobile-menu').classList.toggle('hidden'));
        document.querySelectorAll('#mobile-menu a').forEach(l => l.addEventListener('click', () => document.getElementById('mobile-menu').classList.add('hidden')));

        // Intersection Observer for fade-in
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => { if (entry.isIntersecting) entry.target.classList.add('visible'); });
        }, { threshold: 0.1 });
        document.querySelectorAll('.fade-in').forEach(el => observer.observe(el));
    </script>
    @yield('scripts')
</body>
</html>
