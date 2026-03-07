@extends('layouts.app')

@section('title', 'PechPlan - Laat pech snel achter u | Pechhulp via uw eigen garage')
@section('meta_description', 'PechPlan biedt pechhulp via uw eigen garage. Bij pech wordt eerst uw garage benaderd. ANWB als achtervang. 24/7 bereikbaar. Dekking in Nederland en Europa.')
@section('og_image', url('/images/Workshop-at-golden-hour.webp'))

@section('preload')
    <link rel="preload" as="image" href="/images/Workshop-at-golden-hour.webp">
    <link rel="preload" as="image" href="/images/Road-at-golden-hour.webp">
@endsection

@section('breadcrumbs_schema')
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "BreadcrumbList",
        "itemListElement": [
            { "@@type": "ListItem", "position": 1, "name": "Home", "item": "https://pechplan.nl" }
        ]
    }
    </script>
@endsection

@section('structured_data')
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "WebSite",
        "name": "PechPlan",
        "url": "https://pechplan.nl",
        "description": "PechPlan biedt pechhulp via uw eigen garage. Bij pech wordt eerst uw garage benaderd. ANWB als achtervang.",
        "publisher": {
            "@@type": "Organization",
            "name": "Next Fleetservice BV"
        }
    }
    </script>
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "Service",
        "name": "PechPlan Pechhulp",
        "serviceType": "Pechhulp / Roadside Assistance",
        "provider": {
            "@@type": "Organization",
            "name": "PechPlan",
            "url": "https://pechplan.nl"
        },
        "description": "Pechhulpservice waarbij uw eigen garage als eerste wordt ingeschakeld bij pech. Met ANWB als professionele achtervang. 24/7 bereikbaar.",
        "areaServed": [
            { "@@type": "Country", "name": "Nederland" },
            { "@@type": "Continent", "name": "Europa" }
        ],
        "hasOfferCatalog": {
            "@@type": "OfferCatalog",
            "name": "PechPlan abonnementen",
            "itemListElement": [
                {
                    "@@type": "Offer",
                    "name": "PechPlan Nederland",
                    "description": "Pechhulp met dekking in heel Nederland",
                    "price": "64.95",
                    "priceCurrency": "EUR",
                    "priceSpecification": {
                        "@@type": "UnitPriceSpecification",
                        "price": "64.95",
                        "priceCurrency": "EUR",
                        "billingDuration": { "@@type": "QuantitativeValue", "value": 1, "unitCode": "ANN" }
                    }
                },
                {
                    "@@type": "Offer",
                    "name": "PechPlan Europa",
                    "description": "Pechhulp met dekking in heel Europa",
                    "price": "79.95",
                    "priceCurrency": "EUR",
                    "priceSpecification": {
                        "@@type": "UnitPriceSpecification",
                        "price": "79.95",
                        "priceCurrency": "EUR",
                        "billingDuration": { "@@type": "QuantitativeValue", "value": 1, "unitCode": "ANN" }
                    }
                }
            ]
        }
    }
    </script>
@endsection

@section('styles')
    .hero-wrap {
        position: relative;
        overflow: hidden;
        background: #1d1d1b;
        min-height: 100vh;
    }

    /* Two background images that crossfade */
    .hero-bg {
        position: absolute;
        inset: 0;
        z-index: 1;
        transform: scale(1);
        transition: transform 8s cubic-bezier(0.25, 0.46, 0.45, 0.94), opacity 1.2s ease;
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
    }
    .hero-bg-garages {
        background-image: url('/images/Workshop-at-golden-hour.webp');
        opacity: 1;
    }
    .hero-bg-auto {
        background-image: url('/images/Road-at-golden-hour.webp');
        opacity: 0;
    }
    .hero-bg.active {
        opacity: 1;
    }
    .hero-bg:not(.active) {
        opacity: 0;
    }
    .hero-bg.zoomed {
        transform: scale(1.08);
    }

    /* Dark overlay */
    .hero-overlay {
        position: absolute;
        inset: 0;
        z-index: 2;
        background: linear-gradient(135deg, rgba(29,29,27,0.82) 0%, rgba(29,29,27,0.55) 40%, rgba(29,29,27,0.35) 100%);
        transition: background 1.2s ease;
    }
    .hero-overlay.lighter {
        background: linear-gradient(135deg, rgba(29,29,27,0.7) 0%, rgba(29,29,27,0.4) 40%, rgba(29,29,27,0.25) 100%);
    }

    /* Slide content */
    .hero-slide {
        position: absolute;
        inset: 0;
        display: flex;
        align-items: center;
        opacity: 0;
        transform: translateY(30px);
        transition: opacity 0.8s ease, transform 0.8s ease;
        pointer-events: none;
    }
    .hero-slide.active {
        opacity: 1;
        transform: translateY(0);
        pointer-events: auto;
    }

    /* Progress bar */
    .hero-progress {
        height: 3px;
        background: #eb8a00;
        width: 0%;
        transition: width linear;
    }
    .hero-progress.running {
        width: 100%;
    }

    /* Dot indicators */
    .hero-dot {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background: rgba(255,255,255,0.3);
        cursor: pointer;
        transition: background 0.3s ease, transform 0.3s ease;
    }
    .hero-dot.active {
        background: #eb8a00;
        transform: scale(1.3);
    }
@endsection

@section('content')
    <!-- Hero with animated slides -->
    <section class="hero-wrap">
        <div class="hero-bg hero-bg-garages active" id="heroBgGarages"></div>
        <div class="hero-bg hero-bg-auto" id="heroBgAuto"></div>
        <div class="hero-overlay" id="heroOverlay"></div>

        <!-- Slide 1: Garages -->
        <div class="hero-slide active" id="slide-garages" style="z-index:3">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
                <div class="max-w-3xl">
                    <p class="text-pech-orange font-semibold text-sm sm:text-base tracking-wide uppercase mb-4">Voor garages</p>
                    <h2 class="text-4xl sm:text-5xl lg:text-7xl font-bold text-white leading-tight mb-6">
                        Pechhulp die werkt<br>
                        <span class="text-pech-orange">voor uw garage</span>
                    </h2>
                    <p class="text-white/70 text-lg sm:text-xl max-w-xl mb-10 leading-relaxed">
                        Wanneer uw klant pech krijgt, wordt eerst uw garage benaderd. Kunt u niet helpen? Dan schakelt PechPlan de achtervang in.
                    </p>
                    <a href="/garages" class="inline-flex items-center gap-2 bg-pech-orange hover:bg-pech-orange-dark text-white px-8 py-4 rounded-lg font-semibold transition-colors duration-200 cursor-pointer text-lg">
                        Ontdek de voordelen
                        <svg class="w-5 h-5 btn-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Slide 2: Automobilisten -->
        <div class="hero-slide" id="slide-auto" style="z-index:3">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
                <div class="max-w-3xl">
                    <p class="text-pech-orange font-semibold text-sm sm:text-base tracking-wide uppercase mb-4">Voor automobilisten</p>
                    <h2 class="text-4xl sm:text-5xl lg:text-7xl font-bold text-white leading-tight mb-6">
                        Laat pech<br>
                        <span class="text-pech-orange">snel achter u</span>
                    </h2>
                    <p class="text-white/70 text-lg sm:text-xl max-w-xl mb-10 leading-relaxed">
                        Pechhulp via uw eigen garage. Altijd geholpen, met de ANWB als achtervang. Dekking in heel Nederland of Europa.
                    </p>
                    <a href="/automobilisten" class="inline-flex items-center gap-2 bg-pech-orange hover:bg-pech-orange-dark text-white px-8 py-4 rounded-lg font-semibold transition-colors duration-200 cursor-pointer text-lg">
                        Bekijk de mogelijkheden
                        <svg class="w-5 h-5 btn-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Floating trust badges -->
        <div class="hidden lg:flex absolute right-8 top-1/2 -translate-y-1/2 flex-col gap-6" style="z-index:4">
            <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl p-5 text-center">
                <div class="text-3xl font-bold text-white">24/7</div>
                <div class="text-white/60 text-sm mt-1">Bereikbaar</div>
            </div>
            <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl p-5 text-center">
                <div class="text-3xl font-bold text-white">ANWB</div>
                <div class="text-white/60 text-sm mt-1">Achtervang</div>
            </div>
            <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl p-5 text-center">
                <div class="text-3xl font-bold text-white">NL + EU</div>
                <div class="text-white/60 text-sm mt-1">Dekking</div>
            </div>
        </div>

        <!-- Slide indicators + progress -->
        <div class="absolute bottom-10 left-1/2 -translate-x-1/2 flex flex-col items-center gap-4" style="z-index:4">
            <div class="flex gap-3">
                <button class="hero-dot active" data-slide="0" aria-label="Garages"></button>
                <button class="hero-dot" data-slide="1" aria-label="Automobilisten"></button>
            </div>
            <div class="w-24 bg-white/10 rounded-full overflow-hidden">
                <div class="hero-progress" id="heroProgress"></div>
            </div>
        </div>
    </section>

    <!-- Teaser: Hoe werkt het -->
    <section class="py-20 sm:py-28 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-16 fade-in">
                <h2 class="text-3xl sm:text-4xl font-bold text-pech-dark mb-4">Hoe werkt PechPlan?</h2>
                <p class="text-gray-500 text-lg">In drie stappen van pech naar hulp</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8 lg:gap-12">
                <div class="text-center fade-in">
                    <svg class="w-14 h-14 text-pech-orange mx-auto mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3"/></svg>
                    <div class="text-pech-orange font-bold text-sm mb-2">STAP 1</div>
                    <h3 class="text-xl font-bold mb-3">Klant meldt pech</h3>
                    <p class="text-gray-500 leading-relaxed">Via de PechPlan pas, app of telefoon meldt de klant eenvoudig een pechgeval.</p>
                </div>
                <div class="text-center fade-in">
                    <svg class="w-14 h-14 text-pech-orange mx-auto mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/></svg>
                    <div class="text-pech-orange font-bold text-sm mb-2">STAP 2</div>
                    <h3 class="text-xl font-bold mb-3">Garage wordt benaderd</h3>
                    <p class="text-gray-500 leading-relaxed">PechPlan controleert locatie en werktijden. De garage wordt als eerste benaderd.</p>
                </div>
                <div class="text-center fade-in">
                    <svg class="w-14 h-14 text-pech-orange mx-auto mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z"/></svg>
                    <div class="text-pech-orange font-bold text-sm mb-2">STAP 3</div>
                    <h3 class="text-xl font-bold mb-3">Altijd geholpen</h3>
                    <p class="text-gray-500 leading-relaxed">Kunt u niet helpen? Dan schakelt PechPlan direct de ANWB of een bergingsdienst in.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Two audience teaser cards -->
    <section class="py-20 sm:py-28 silver-gradient">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-16 fade-in">
                <h2 class="text-3xl sm:text-4xl font-bold text-pech-dark mb-4">Voor wie is PechPlan?</h2>
                <p class="text-gray-500 text-lg">Ontdek wat PechPlan voor u kan betekenen</p>
            </div>
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Garages card -->
                <a href="/garages" class="group bg-white rounded-3xl p-8 sm:p-10 shadow-sm border border-gray-100 hover:shadow-xl hover:border-pech-orange/20 transition-all duration-300 cursor-pointer fade-in">
                    <svg class="w-14 h-14 text-pech-orange mx-auto mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0H6.375c-.621 0-1.125-.504-1.125-1.125V14.25m17.25 4.5h.375a1.125 1.125 0 001.125-1.125v-3.375a3 3 0 00-.879-2.121L16.5 7.5h-4.5V4.875c0-.621-.504-1.125-1.125-1.125H4.875C4.254 3.75 3.75 4.254 3.75 4.875V14.25"/></svg>
                    <h3 class="text-2xl font-bold text-pech-dark mb-3">Voor garages</h3>
                    <p class="text-gray-500 leading-relaxed mb-6">Bied uw klanten pechhulp aan via uw eigen garage. Bouw een garagefonds op, bepaal uw eigen prijs en versterk de klantbinding.</p>
                    <ul class="space-y-2 mb-8">
                        <li class="flex items-center gap-2 text-sm text-gray-600"><svg class="w-4 h-4 text-pech-orange flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Uw garage als eerste aanspreekpunt</li>
                        <li class="flex items-center gap-2 text-sm text-gray-600"><svg class="w-4 h-4 text-pech-orange flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Eigen garagefonds met inzicht</li>
                        <li class="flex items-center gap-2 text-sm text-gray-600"><svg class="w-4 h-4 text-pech-orange flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>ANWB als professionele achtervang</li>
                    </ul>
                    <span class="inline-flex items-center gap-2 text-pech-orange font-semibold group-hover:gap-3 transition-all duration-200">
                        Meer informatie
                        <svg class="w-5 h-5 btn-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </span>
                </a>

                <!-- Automobilisten card -->
                <a href="/automobilisten" class="group bg-white rounded-3xl p-8 sm:p-10 shadow-sm border border-gray-100 hover:shadow-xl hover:border-pech-orange/20 transition-all duration-300 cursor-pointer fade-in">
                    <svg class="w-14 h-14 text-pech-orange mx-auto mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/></svg>
                    <h3 class="text-2xl font-bold text-pech-dark mb-3">Voor automobilisten</h3>
                    <p class="text-gray-500 leading-relaxed mb-6">Pechhulp via uw eigen garage. Altijd geholpen, met de ANWB als achtervang. Dekking in heel Nederland of heel Europa.</p>
                    <ul class="space-y-2 mb-8">
                        <li class="flex items-center gap-2 text-sm text-gray-600"><svg class="w-4 h-4 text-pech-orange flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Hulp via uw vertrouwde garage</li>
                        <li class="flex items-center gap-2 text-sm text-gray-600"><svg class="w-4 h-4 text-pech-orange flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>24/7 bereikbaar</li>
                        <li class="flex items-center gap-2 text-sm text-gray-600"><svg class="w-4 h-4 text-pech-orange flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Nederland of Europadekking</li>
                    </ul>
                    <span class="inline-flex items-center gap-2 text-pech-orange font-semibold group-hover:gap-3 transition-all duration-200">
                        Meer informatie
                        <svg class="w-5 h-5 btn-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </span>
                </a>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="py-20 sm:py-28 relative overflow-hidden">
        <div class="absolute inset-0 bg-pech-dark"></div>
        <div class="absolute inset-0 opacity-15" style="background: url('/images/Dark-pattern-bg.webp') center center / cover no-repeat;"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-20">
                <div class="fade-in">
                    <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4">Neem contact op</h2>
                    <p class="text-white/60 text-lg mb-8">Wilt u PechPlan aanbieden aan uw klanten? Neem contact op en we vertellen u graag meer.</p>
                    <div class="space-y-6">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-xl bg-white/5 flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-pech-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/></svg>
                            </div>
                            <div><div class="text-white/40 text-sm">Telefoon</div><a href="tel:0882474747" class="text-white font-semibold hover:text-pech-orange transition-colors">088 247 47 47</a></div>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-xl bg-white/5 flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-pech-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/></svg>
                            </div>
                            <div><div class="text-white/40 text-sm">E-mail</div><a href="mailto:info@pechplan.nl" class="text-white font-semibold hover:text-pech-orange transition-colors">info@pechplan.nl</a></div>
                        </div>
                    </div>
                </div>
                <div class="fade-in">
                    @if($errors->any())
                    <div class="bg-red-500/20 border border-red-500/30 rounded-lg p-4 mb-4 text-red-300">
                        <ul class="list-disc list-inside space-y-1">@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
                    </div>
                    @endif
                    <form action="{{ route('contact.submit') }}" method="POST" class="bg-white/5 backdrop-blur rounded-2xl p-6 sm:p-8 border border-white/10 space-y-5">
                        @csrf
                        <input type="hidden" name="source" value="Homepage">
                        <div><label for="name" class="block text-white/60 text-sm mb-1.5">Naam</label><input type="text" id="name" name="name" value="{{ old('name') }}" class="w-full bg-white/5 border border-white/10 rounded-lg px-4 py-3 text-white placeholder-white/30 focus:outline-none focus:ring-2 focus:ring-pech-orange/50 focus:border-pech-orange/50 transition-colors" placeholder="Uw naam" required></div>
                        <div><label for="company" class="block text-white/60 text-sm mb-1.5">Bedrijfsnaam</label><input type="text" id="company" name="company" value="{{ old('company') }}" class="w-full bg-white/5 border border-white/10 rounded-lg px-4 py-3 text-white placeholder-white/30 focus:outline-none focus:ring-2 focus:ring-pech-orange/50 focus:border-pech-orange/50 transition-colors" placeholder="Uw garage of bedrijf"></div>
                        <div><label for="email" class="block text-white/60 text-sm mb-1.5">E-mailadres</label><input type="email" id="email" name="email" value="{{ old('email') }}" class="w-full bg-white/5 border border-white/10 rounded-lg px-4 py-3 text-white placeholder-white/30 focus:outline-none focus:ring-2 focus:ring-pech-orange/50 focus:border-pech-orange/50 transition-colors" placeholder="uw@email.nl" required></div>
                        <div><label for="phone" class="block text-white/60 text-sm mb-1.5">Telefoonnummer</label><input type="tel" id="phone" name="phone" value="{{ old('phone') }}" class="w-full bg-white/5 border border-white/10 rounded-lg px-4 py-3 text-white placeholder-white/30 focus:outline-none focus:ring-2 focus:ring-pech-orange/50 focus:border-pech-orange/50 transition-colors" placeholder="06 - ..."></div>
                        <div><label for="message" class="block text-white/60 text-sm mb-1.5">Bericht</label><textarea id="message" name="message" rows="4" class="w-full bg-white/5 border border-white/10 rounded-lg px-4 py-3 text-white placeholder-white/30 focus:outline-none focus:ring-2 focus:ring-pech-orange/50 focus:border-pech-orange/50 transition-colors resize-none" placeholder="Uw bericht..." required>{{ old('message') }}</textarea></div>
                        <button type="submit" class="w-full bg-pech-orange hover:bg-pech-orange-dark text-white py-3.5 rounded-lg font-semibold transition-colors duration-200 cursor-pointer">Verstuur bericht</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        // Navbar scroll behavior
        const navbar = document.getElementById('navbar');
        const logoWhite = document.querySelector('.logo-white');
        const logoDark = document.querySelector('.logo-dark');
        const navLinks = document.querySelectorAll('.nav-link');
        const mobileBtn = document.getElementById('mobile-menu-btn');

        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset > 80;
            navbar.classList.toggle('bg-white', scrolled);
            navbar.classList.toggle('shadow-lg', scrolled);
            navbar.classList.toggle('shadow-black/5', scrolled);
            logoWhite.classList.toggle('hidden', scrolled);
            logoDark.classList.toggle('hidden', !scrolled);
            mobileBtn.classList.toggle('text-white', !scrolled);
            mobileBtn.classList.toggle('text-pech-dark', scrolled);
            navLinks.forEach(link => {
                link.classList.toggle('text-white/80', !scrolled);
                link.classList.toggle('hover:text-white', !scrolled);
                link.classList.toggle('text-pech-dark/70', scrolled);
                link.classList.toggle('hover:text-pech-dark', scrolled);
            });
        });

        // Hero slideshow
        const slides = [document.getElementById('slide-garages'), document.getElementById('slide-auto')];
        const dots = document.querySelectorAll('.hero-dot');
        const heroBgGarages = document.getElementById('heroBgGarages');
        const heroBgAuto = document.getElementById('heroBgAuto');
        const heroOverlay = document.getElementById('heroOverlay');
        const heroProgress = document.getElementById('heroProgress');
        const backgrounds = [heroBgGarages, heroBgAuto];
        const SLIDE_DURATION = 6000;
        let currentSlide = 0;
        let slideTimer;

        function goToSlide(index) {
            slides[currentSlide].classList.remove('active');
            dots[currentSlide].classList.remove('active');

            currentSlide = index;

            slides[currentSlide].classList.add('active');
            dots[currentSlide].classList.add('active');

            // Crossfade backgrounds + Ken Burns
            backgrounds.forEach((bg, i) => {
                bg.classList.toggle('active', i === currentSlide);
                bg.classList.toggle('zoomed', i === currentSlide);
            });
            heroOverlay.classList.toggle('lighter', currentSlide === 1);

            // Reset progress bar
            heroProgress.classList.remove('running');
            heroProgress.style.transitionDuration = '0ms';
            heroProgress.style.width = '0%';

            requestAnimationFrame(() => {
                requestAnimationFrame(() => {
                    heroProgress.style.transitionDuration = SLIDE_DURATION + 'ms';
                    heroProgress.classList.add('running');
                    heroProgress.style.width = '100%';
                });
            });

            // Schedule next slide
            clearTimeout(slideTimer);
            slideTimer = setTimeout(() => goToSlide((currentSlide + 1) % slides.length), SLIDE_DURATION);
        }

        // Dot click handlers
        dots.forEach(dot => {
            dot.addEventListener('click', () => goToSlide(parseInt(dot.dataset.slide)));
        });

        // Start slideshow
        goToSlide(0);

        // Respect reduced motion
        if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
            clearTimeout(slideTimer);
            heroProgress.style.display = 'none';
        }

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) window.scrollTo({ top: target.getBoundingClientRect().top + window.pageYOffset - navbar.offsetHeight, behavior: 'smooth' });
            });
        });
    </script>
@endsection
