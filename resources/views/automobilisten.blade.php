@extends('layouts.app')

@section('title', 'PechPlan voor automobilisten - Laat pech snel achter u')
@section('meta_description', 'PechPlan voor automobilisten: pechhulp via uw eigen garage. Altijd geholpen met ANWB als achtervang. Dekking in Nederland of Europa.')

@section('og_image', url('/images/Road-at-golden-hour.webp'))

@section('preload')
    <link rel="preload" as="image" href="/images/Road-at-golden-hour.webp">
@endsection

@section('breadcrumbs_schema')
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "BreadcrumbList",
        "itemListElement": [
            { "@@type": "ListItem", "position": 1, "name": "Home", "item": "https://pechplan.nl" },
            { "@@type": "ListItem", "position": 2, "name": "Voor automobilisten", "item": "https://pechplan.nl/automobilisten" }
        ]
    }
    </script>
@endsection

@section('structured_data')
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "Service",
        "name": "PechPlan voor automobilisten",
        "serviceType": "Pechhulp / Roadside Assistance",
        "provider": {
            "@@type": "Organization",
            "name": "PechPlan",
            "url": "https://pechplan.nl"
        },
        "description": "Pechhulp via uw eigen garage. Bij pech wordt eerst uw garage benaderd. Kan die niet helpen? Dan regelt PechPlan direct professionele hulp, zoals de ANWB. 24/7 bereikbaar, dekking in Nederland of Europa.",
        "audience": {
            "@@type": "Audience",
            "audienceType": "Automobilisten"
        },
        "hasOfferCatalog": {
            "@@type": "OfferCatalog",
            "name": "PechPlan abonnementen",
            "itemListElement": [
                {
                    "@@type": "Offer",
                    "name": "PechPlan Nederland",
                    "description": "Pechhulp met dekking in heel Nederland via uw eigen garage",
                    "price": "64.95",
                    "priceCurrency": "EUR"
                },
                {
                    "@@type": "Offer",
                    "name": "PechPlan Europa",
                    "description": "Pechhulp met dekking in heel Europa via uw eigen garage",
                    "price": "79.95",
                    "priceCurrency": "EUR"
                }
            ]
        }
    }
    </script>
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "FAQPage",
        "mainEntity": [
            {
                "@@type": "Question",
                "name": "Hoe werkt PechPlan?",
                "acceptedAnswer": {
                    "@@type": "Answer",
                    "text": "U ontvangt een PechPlan pas via uw garage. Bij pech scant u de QR-code, belt u 088 247 47 47 of gaat u online. Uw eigen garage wordt als eerste benaderd. Kan die niet helpen? Dan schakelt PechPlan automatisch de ANWB of een bergingsdienst in."
                }
            },
            {
                "@@type": "Question",
                "name": "Wat kost PechPlan?",
                "acceptedAnswer": {
                    "@@type": "Answer",
                    "text": "PechPlan Nederland kost vanaf 64,95 euro per jaar. PechPlan Europa kost vanaf 79,95 euro per jaar. De uiteindelijke prijs wordt bepaald door uw garage."
                }
            },
            {
                "@@type": "Question",
                "name": "Wat is het verschil tussen PechPlan en de ANWB?",
                "acceptedAnswer": {
                    "@@type": "Answer",
                    "text": "Bij PechPlan wordt bij pech eerst uw eigen garage ingeschakeld, die uw auto kent. Kan uw garage niet helpen? Dan schakelt PechPlan de ANWB in als professionele achtervang. Zo combineert u de persoonlijke service van uw garage met de betrouwbaarheid van de ANWB."
                }
            },
            {
                "@@type": "Question",
                "name": "Hoe sluit ik PechPlan af?",
                "acceptedAnswer": {
                    "@@type": "Answer",
                    "text": "PechPlan is beschikbaar via aangesloten garages. Vraag uw garage naar de mogelijkheden van PechPlan. Biedt uw garage PechPlan nog niet aan? Tip uw garage via pechplan.nl/automobilisten."
                }
            },
            {
                "@@type": "Question",
                "name": "Is PechPlan 24/7 bereikbaar?",
                "acceptedAnswer": {
                    "@@type": "Answer",
                    "text": "Ja, PechPlan is 24 uur per dag, 7 dagen per week bereikbaar. Bij pech kunt u altijd bellen naar 088 247 47 47 of online hulp aanvragen."
                }
            }
        ]
    }
    </script>
@endsection

@section('navbar_class', '')
@section('logo_white_class', '')
@section('logo_dark_class', 'hidden')
@section('nav_link_class', 'text-white/80 hover:text-white')
@section('mobile_btn_class', 'text-white')
@section('contact_href', '#pech-contact')

@section('styles')
    .auto-subnav {
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
    }
    .auto-subnav-link {
        position: relative;
        border-bottom: 3px solid transparent;
        padding-bottom: 10px;
    }
    .auto-subnav-link.active {
        border-bottom-color: #eb8a00;
    }
    .auto-subnav-link:hover {
        border-bottom-color: rgba(235, 138, 0, 0.4);
    }
    .auto-subnav-link.active:hover {
        border-bottom-color: #eb8a00;
    }
    #auto-subnav-scroll::-webkit-scrollbar { display: none; }
    @keyframes nudge-right {
        0%, 100% { transform: translateX(0); }
        50% { transform: translateX(4px); }
    }
    .subnav-arrow-icon {
        animation: nudge-right 1.5s ease-in-out infinite;
    }
    .auto-hero {
        position: relative;
        overflow: hidden;
        background: #1d1d1b;
    }
    .auto-hero::before {
        content: '';
        position: absolute;
        inset: 0;
        background: url('/images/Road-at-golden-hour.webp') center center / cover no-repeat;
        opacity: 0.3;
    }
    .auto-hero::after {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(to bottom, rgba(29,29,27,0.3) 0%, rgba(29,29,27,0.95) 100%);
    }


    @keyframes scroll-benefits {
        0% { transform: translateX(0); }
        100% { transform: translateX(-50%); }
    }
    .benefits-track {
        animation: scroll-benefits 30s linear infinite;
    }
    .benefits-carousel:hover .benefits-track {
        animation-play-state: paused;
    }
    @media (prefers-reduced-motion: reduce) {
        .benefits-track { animation: none; }
        .benefits-carousel { overflow-x: auto; -webkit-overflow-scrolling: touch; }
    }
@endsection

@section('content')
    <!-- Page hero -->
    <section class="auto-hero pt-36 pb-20 sm:pt-44 sm:pb-28">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="max-w-3xl fade-in">
                <div class="inline-flex items-center gap-2 bg-pech-orange/20 text-pech-orange px-4 py-1.5 rounded-full text-sm font-semibold mb-8">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/></svg>
                    Voor automobilisten
                </div>
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white leading-tight mb-8">Laat pech <br>snel achter u</h1>
                <p class="text-white/70 text-lg sm:text-xl leading-relaxed mb-10 max-w-2xl">Pechhulp via uw eigen garage. Bij pech wordt eerst uw garage benaderd. Kan die niet helpen? Dan regelt PechPlan direct professionele hulp, zoals de ANWB.</p>
                <p class="text-pech-orange font-semibold text-lg sm:text-xl">Al vanaf &euro;64,95 per jaar verzekerd van pechhulp.</p>
            </div>
        </div>
    </section>

    <!-- Sticky sub-navigation -->
    <div class="sticky top-20 z-40 bg-white/90 auto-subnav border-b border-gray-200/60">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <nav id="auto-subnav-scroll" class="flex overflow-x-auto gap-1 scrollbar-hide" style="-ms-overflow-style:none;scrollbar-width:none;" aria-label="Automobilisten informatie">
                <a href="#hoe-werkt-het" class="auto-subnav-link active whitespace-nowrap px-4 py-3 text-sm font-medium text-pech-dark cursor-pointer">Hoe werkt het?</a>
                <a href="#voordelen" class="auto-subnav-link whitespace-nowrap px-4 py-3 text-sm font-medium text-gray-400 cursor-pointer">Voordelen</a>
                <a href="#tarieven" class="auto-subnav-link whitespace-nowrap px-4 py-3 text-sm font-medium text-gray-400 cursor-pointer">Tarieven</a>
                <a href="#pech-contact" class="auto-subnav-link whitespace-nowrap px-4 py-3 text-sm font-medium text-gray-400 cursor-pointer">Pech melden</a>
                <a href="#tip-garage" class="auto-subnav-link whitespace-nowrap px-4 py-3 text-sm font-medium text-gray-400 cursor-pointer">Tip uw garage</a>
            </nav>
            <button id="subnav-arrow" class="absolute right-0 top-0 bottom-0 flex items-center pl-4 pr-1 bg-gradient-to-l from-white/90 via-white/90 to-transparent md:hidden" aria-label="Meer items" onclick="scrollSubnavNext()">
                <svg class="w-5 h-5 text-pech-orange subnav-arrow-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
            </button>
        </div>
    </div>

    <!-- Coverage cards & Hoe werkt het -->
    <section id="hoe-werkt-het" class="py-16 sm:py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid sm:grid-cols-3 gap-6 max-w-3xl mx-auto mb-16">
                <div class="bg-pech-light rounded-2xl p-8 text-center fade-in">
                    <div class="text-4xl font-bold text-pech-orange mb-2">NL</div>
                    <div class="text-gray-500">Dekking heel Nederland</div>
                </div>
                <div class="bg-pech-light rounded-2xl p-8 text-center fade-in">
                    <div class="text-4xl font-bold text-pech-orange mb-2">EU</div>
                    <div class="text-gray-500">Optioneel Europadekking</div>
                </div>
                <div class="bg-pech-light rounded-2xl p-8 text-center fade-in">
                    <div class="text-4xl font-bold text-pech-orange mb-2">24/7</div>
                    <div class="text-gray-500">Altijd bereikbaar</div>
                </div>
            </div>

            <div class="max-w-3xl mx-auto">
                <h2 class="text-2xl sm:text-3xl font-bold text-pech-dark mb-8 fade-in">Hoe werkt het?</h2>
                <div class="space-y-6">
                    <div class="flex items-start gap-5 fade-in" style="transition-delay: 0ms;">
                        <div class="w-10 h-10 rounded-full bg-pech-orange flex items-center justify-center flex-shrink-0 mt-1"><span class="text-white font-bold">1</span></div>
                        <div><h3 class="font-bold text-pech-dark text-lg mb-1">U krijgt een PechPlan pas via uw garage</h3><p class="text-gray-500 leading-relaxed">Uw garage biedt PechPlan aan als onderdeel van hun service. U ontvangt een pas met QR-code en contactgegevens.</p></div>
                    </div>
                    <div class="flex items-start gap-5 fade-in" style="transition-delay: 150ms;">
                        <div class="w-10 h-10 rounded-full bg-pech-orange flex items-center justify-center flex-shrink-0 mt-1"><span class="text-white font-bold">2</span></div>
                        <div><h3 class="font-bold text-pech-dark text-lg mb-1">Bij pech: scan, bel of ga online</h3><p class="text-gray-500 leading-relaxed">Scan de QR-code op uw pas, bel <a href="tel:0882474747" class="text-pech-orange font-semibold hover:underline">088 247 47 47</a> of ga naar <a href="/help" class="text-pech-orange font-semibold hover:underline">pechplan.nl/help</a>.</p></div>
                    </div>
                    <div class="flex items-start gap-5 fade-in" style="transition-delay: 300ms;">
                        <div class="w-10 h-10 rounded-full bg-pech-orange flex items-center justify-center flex-shrink-0 mt-1"><span class="text-white font-bold">3</span></div>
                        <div><h3 class="font-bold text-pech-dark text-lg mb-1">Uw garage wordt als eerste benaderd</h3><p class="text-gray-500 leading-relaxed">Bevindt u zich binnen het werkgebied van uw garage en is het binnen werktijden? Dan wordt uw garage als eerste ingeschakeld.</p></div>
                    </div>
                    <div class="flex items-start gap-5 fade-in" style="transition-delay: 450ms;">
                        <div class="w-10 h-10 rounded-full bg-pech-orange flex items-center justify-center flex-shrink-0 mt-1"><span class="text-white font-bold">4</span></div>
                        <div><h3 class="font-bold text-pech-dark text-lg mb-1">Altijd professionele hulp</h3><p class="text-gray-500 leading-relaxed">Kan uw garage niet komen? Dan schakelt PechPlan automatisch de ANWB of een bergingsdienst in. U bent altijd geholpen.</p></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Voordelen -->
    <section id="voordelen" class="py-16 sm:py-20 silver-gradient overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl sm:text-3xl font-bold text-pech-dark mb-10 text-center fade-in">Waarom PechPlan?</h2>
        </div>
        <div class="benefits-carousel relative">
            <div class="benefits-track flex gap-6 px-4 sm:px-6 lg:px-8" style="width: max-content;">
                <div class="benefit-card bg-white rounded-2xl p-6 shadow-sm border border-gray-100 flex-shrink-0 w-72 text-center">
                    <svg class="w-14 h-14 text-pech-orange mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/></svg>
                    <h3 class="font-bold text-pech-dark mb-2">Hulp van uw eigen garage</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">Uw garage kent uw auto en u. Bij pech wordt die kennis ingezet.</p>
                </div>
                <div class="benefit-card bg-white rounded-2xl p-6 shadow-sm border border-gray-100 flex-shrink-0 w-72 text-center">
                    <svg class="w-14 h-14 text-pech-orange mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    <h3 class="font-bold text-pech-dark mb-2">24/7 bereikbaar</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">Dag en nacht, het hele jaar door. U kunt altijd terecht.</p>
                </div>
                <div class="benefit-card bg-white rounded-2xl p-6 shadow-sm border border-gray-100 flex-shrink-0 w-72 text-center">
                    <svg class="w-14 h-14 text-pech-orange mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418"/></svg>
                    <h3 class="font-bold text-pech-dark mb-2">Nederland &amp; Europa</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">Kies voor dekking in heel Nederland of heel Europa.</p>
                </div>
                <div class="benefit-card bg-white rounded-2xl p-6 shadow-sm border border-gray-100 flex-shrink-0 w-72 text-center">
                    <svg class="w-14 h-14 text-pech-orange mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75"/></svg>
                    <h3 class="font-bold text-pech-dark mb-2">Voordelig geprijsd</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">Een aantrekkelijk alternatief voor bestaande pechhulpdiensten.</p>
                </div>
                <div class="benefit-card bg-white rounded-2xl p-6 shadow-sm border border-gray-100 flex-shrink-0 w-72 text-center">
                    <svg class="w-14 h-14 text-pech-orange mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3"/></svg>
                    <h3 class="font-bold text-pech-dark mb-2">Makkelijk te gebruiken</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">Scan de QR-code, bel of ga online. Hulp is binnen handbereik.</p>
                </div>
                <div class="benefit-card bg-white rounded-2xl p-6 shadow-sm border border-gray-100 flex-shrink-0 w-72 text-center">
                    <svg class="w-14 h-14 text-pech-orange mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0H6.375"/></svg>
                    <h3 class="font-bold text-pech-dark mb-2">ANWB als achtervang</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">Kan uw garage niet helpen? De ANWB of bergingsdienst staat klaar.</p>
                </div>
                <!-- Duplicated cards for seamless loop -->
                <div class="benefit-card bg-white rounded-2xl p-6 shadow-sm border border-gray-100 flex-shrink-0 w-72 text-center" aria-hidden="true">
                    <svg class="w-14 h-14 text-pech-orange mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/></svg>
                    <h3 class="font-bold text-pech-dark mb-2">Hulp van uw eigen garage</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">Uw garage kent uw auto en u. Bij pech wordt die kennis ingezet.</p>
                </div>
                <div class="benefit-card bg-white rounded-2xl p-6 shadow-sm border border-gray-100 flex-shrink-0 w-72 text-center" aria-hidden="true">
                    <svg class="w-14 h-14 text-pech-orange mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    <h3 class="font-bold text-pech-dark mb-2">24/7 bereikbaar</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">Dag en nacht, het hele jaar door. U kunt altijd terecht.</p>
                </div>
                <div class="benefit-card bg-white rounded-2xl p-6 shadow-sm border border-gray-100 flex-shrink-0 w-72 text-center" aria-hidden="true">
                    <svg class="w-14 h-14 text-pech-orange mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418"/></svg>
                    <h3 class="font-bold text-pech-dark mb-2">Nederland &amp; Europa</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">Kies voor dekking in heel Nederland of heel Europa.</p>
                </div>
                <div class="benefit-card bg-white rounded-2xl p-6 shadow-sm border border-gray-100 flex-shrink-0 w-72 text-center" aria-hidden="true">
                    <svg class="w-14 h-14 text-pech-orange mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75"/></svg>
                    <h3 class="font-bold text-pech-dark mb-2">Voordelig geprijsd</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">Een aantrekkelijk alternatief voor bestaande pechhulpdiensten.</p>
                </div>
                <div class="benefit-card bg-white rounded-2xl p-6 shadow-sm border border-gray-100 flex-shrink-0 w-72 text-center" aria-hidden="true">
                    <svg class="w-14 h-14 text-pech-orange mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3"/></svg>
                    <h3 class="font-bold text-pech-dark mb-2">Makkelijk te gebruiken</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">Scan de QR-code, bel of ga online. Hulp is binnen handbereik.</p>
                </div>
                <div class="benefit-card bg-white rounded-2xl p-6 shadow-sm border border-gray-100 flex-shrink-0 w-72 text-center" aria-hidden="true">
                    <svg class="w-14 h-14 text-pech-orange mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0H6.375"/></svg>
                    <h3 class="font-bold text-pech-dark mb-2">ANWB als achtervang</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">Kan uw garage niet helpen? De ANWB of bergingsdienst staat klaar.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Tarieven -->
    <section id="tarieven" class="py-16 sm:py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-12 fade-in">
                <h2 class="text-2xl sm:text-3xl font-bold text-pech-dark mb-4">Tarieven</h2>
                <p class="text-gray-500 text-lg">Kies de dekking die bij u past. Pechhulp via uw eigen garage, met de ANWB als achtervang.</p>
            </div>
            <div class="grid sm:grid-cols-2 gap-6 max-w-2xl mx-auto">
                <div class="bg-pech-light rounded-2xl p-8 border border-gray-200 fade-in">
                    <div class="text-sm font-semibold text-pech-orange mb-2">Nederland</div>
                    <div class="flex items-baseline gap-1 mb-1">
                        <span class="text-4xl font-bold text-pech-dark">&euro;64,95</span>
                        <span class="text-gray-400 text-sm">/ jaar *</span>
                    </div>
                    <p class="text-gray-500 text-sm mb-6">Dekking in heel Nederland</p>
                    <ul class="space-y-3">
                        <li class="flex items-center gap-2 text-sm text-gray-600"><svg class="w-4 h-4 text-pech-orange flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Uw eigen garage als eerste aanspreekpunt</li>
                        <li class="flex items-center gap-2 text-sm text-gray-600"><svg class="w-4 h-4 text-pech-orange flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>ANWB als professionele achtervang</li>
                        <li class="flex items-center gap-2 text-sm text-gray-600"><svg class="w-4 h-4 text-pech-orange flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>24/7 bereikbaar</li>
                    </ul>
                </div>
                <div class="bg-pech-light rounded-2xl p-8 border border-gray-200 relative fade-in">
                    <div class="absolute -top-3 right-6 bg-pech-orange text-white text-xs font-bold px-3 py-1 rounded-full">Populair</div>
                    <div class="text-sm font-semibold text-pech-orange mb-2">Europa</div>
                    <div class="flex items-baseline gap-1 mb-1">
                        <span class="text-4xl font-bold text-pech-dark">&euro;79,95</span>
                        <span class="text-gray-400 text-sm">/ jaar *</span>
                    </div>
                    <p class="text-gray-500 text-sm mb-6">Dekking in heel Europa</p>
                    <ul class="space-y-3">
                        <li class="flex items-center gap-2 text-sm text-gray-600"><svg class="w-4 h-4 text-pech-orange flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Alles van Nederland-dekking</li>
                        <li class="flex items-center gap-2 text-sm text-gray-600"><svg class="w-4 h-4 text-pech-orange flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Pechhulp in heel Europa</li>
                        <li class="flex items-center gap-2 text-sm text-gray-600"><svg class="w-4 h-4 text-pech-orange flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Ideaal voor vakanties en zakenreizen</li>
                    </ul>
                </div>
            </div>
            <p class="text-center text-gray-400 text-sm mt-6 fade-in">* Adviesprijs. Uw garage bepaalt de uiteindelijke prijs van uw PechPlan pas.</p>
        </div>
    </section>

    <!-- Pech CTA -->
    <section id="pech-contact" class="py-20 sm:py-28 bg-pech-orange relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <div class="max-w-2xl mx-auto fade-in">
                <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4">Heeft u pech?</h2>
                <p class="text-white/80 text-lg mb-10">Neem direct contact op. Wij regelen de hulp.</p>
                <a href="tel:0882474747" class="text-4xl sm:text-5xl font-bold text-white hover:text-white/80 transition-colors duration-200">088 247 47 47</a>
                <p class="text-white/60 text-sm mt-4">Of ga naar <a href="/help" class="text-white font-medium hover:underline">pechplan.nl/help</a></p>
            </div>
        </div>
    </section>

    <!-- Nog geen PechPlan -->
    <section class="py-16 sm:py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="max-w-2xl mx-auto fade-in">
                <h2 class="text-2xl sm:text-3xl font-bold text-pech-dark mb-4">Nog geen PechPlan?</h2>
                <p class="text-gray-500 text-lg mb-8">Vraag uw garage naar de mogelijkheden van PechPlan. Biedt uw garage PechPlan nog niet aan? Tip uw garage en wij helpen hen op weg.</p>
                <a href="#tip-garage" class="inline-flex items-center gap-2 bg-pech-orange hover:bg-pech-orange-dark text-white px-6 py-3 rounded-lg font-semibold transition-colors duration-200 cursor-pointer">
                    Tip uw garage
                    <svg class="w-5 h-5 btn-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Tip uw garage -->
    <section id="tip-garage" class="py-20 sm:py-28 relative overflow-hidden">
        <div class="absolute inset-0 bg-pech-dark"></div>
        <div class="absolute inset-0 opacity-15" style="background: url('/images/Dark-pattern-bg.webp') center center / cover no-repeat;"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-20">
                <div class="fade-in">
                    <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4">Tip uw garage</h2>
                    <p class="text-white/60 text-lg mb-8">Biedt uw garage PechPlan nog niet aan? Laat het hen weten! Wij sturen uw garage een bericht met informatie over PechPlan en hoe eenvoudig de aansluiting is.</p>
                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-full bg-pech-orange flex items-center justify-center flex-shrink-0 mt-0.5"><span class="text-white font-bold text-sm">1</span></div>
                            <div><h3 class="text-white font-semibold mb-1">U vult het formulier in</h3><p class="text-white/50 text-sm">Uw naam, e-mail en de gegevens van uw garage.</p></div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-full bg-pech-orange flex items-center justify-center flex-shrink-0 mt-0.5"><span class="text-white font-bold text-sm">2</span></div>
                            <div><h3 class="text-white font-semibold mb-1">Uw garage ontvangt een e-mail</h3><p class="text-white/50 text-sm">Met uw bericht en informatie over hoe zij PechPlan kunnen aanbieden.</p></div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-full bg-pech-orange flex items-center justify-center flex-shrink-0 mt-0.5"><span class="text-white font-bold text-sm">3</span></div>
                            <div><h3 class="text-white font-semibold mb-1">U ontvangt een kopie</h3><p class="text-white/50 text-sm">Zodat u weet wat er naar uw garage is verstuurd.</p></div>
                        </div>
                    </div>
                </div>
                <div class="fade-in">
                    @if($errors->any())
                    <div class="bg-red-500/20 border border-red-500/30 rounded-lg p-4 mb-4 text-red-300">
                        <ul class="list-disc list-inside space-y-1">@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
                    </div>
                    @endif
                    <form action="{{ route('garage-tip.submit') }}" method="POST" class="bg-white/5 backdrop-blur rounded-2xl p-6 sm:p-8 border border-white/10 space-y-5">
                        @csrf
                        <div class="grid sm:grid-cols-2 gap-5">
                            <div><label for="user_name" class="block text-white/60 text-sm mb-1.5">Uw naam</label><input type="text" id="user_name" name="user_name" value="{{ old('user_name') }}" class="w-full bg-white/5 border border-white/10 rounded-lg px-4 py-3 text-white placeholder-white/30 focus:outline-none focus:ring-2 focus:ring-pech-orange/50 focus:border-pech-orange/50 transition-colors" placeholder="Uw naam" required></div>
                            <div><label for="user_email" class="block text-white/60 text-sm mb-1.5">Uw e-mailadres</label><input type="email" id="user_email" name="user_email" value="{{ old('user_email') }}" class="w-full bg-white/5 border border-white/10 rounded-lg px-4 py-3 text-white placeholder-white/30 focus:outline-none focus:ring-2 focus:ring-pech-orange/50 focus:border-pech-orange/50 transition-colors" placeholder="uw@email.nl" required></div>
                        </div>
                        <div class="grid sm:grid-cols-2 gap-5">
                            <div><label for="garage_name" class="block text-white/60 text-sm mb-1.5">Naam garage / autobedrijf</label><input type="text" id="garage_name" name="garage_name" value="{{ old('garage_name') }}" class="w-full bg-white/5 border border-white/10 rounded-lg px-4 py-3 text-white placeholder-white/30 focus:outline-none focus:ring-2 focus:ring-pech-orange/50 focus:border-pech-orange/50 transition-colors" placeholder="Naam van uw garage" required></div>
                            <div><label for="garage_email" class="block text-white/60 text-sm mb-1.5">E-mailadres garage</label><input type="email" id="garage_email" name="garage_email" value="{{ old('garage_email') }}" class="w-full bg-white/5 border border-white/10 rounded-lg px-4 py-3 text-white placeholder-white/30 focus:outline-none focus:ring-2 focus:ring-pech-orange/50 focus:border-pech-orange/50 transition-colors" placeholder="garage@email.nl" required></div>
                        </div>
                        <div><label for="tip_message" class="block text-white/60 text-sm mb-1.5">Bericht aan uw garage</label><textarea id="tip_message" name="message" rows="5" class="w-full bg-white/5 border border-white/10 rounded-lg px-4 py-3 text-white placeholder-white/30 focus:outline-none focus:ring-2 focus:ring-pech-orange/50 focus:border-pech-orange/50 transition-colors resize-none" required>{{ old('message', "Beste,\n\nIk ben klant bij uw garage en heb onlangs PechPlan ontdekt. PechPlan biedt pechhulp aan waarbij uw garage als eerste wordt ingeschakeld bij pech. Ik zou graag willen weten of ik een PechPlan pas via uw garage kan afsluiten.\n\nIk hoor graag wat de mogelijkheden zijn.\n\nMet vriendelijke groet") }}</textarea></div>
                        <button type="submit" class="w-full bg-pech-orange hover:bg-pech-orange-dark text-white py-3.5 rounded-lg font-semibold transition-colors duration-200 cursor-pointer inline-flex items-center justify-center gap-2">Verstuur tip <svg class="w-5 h-5 btn-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        const navbar = document.getElementById('navbar');
        const logoWhite = document.querySelector('.logo-white');
        const logoDark = document.querySelector('.logo-dark');
        const navLinks = document.querySelectorAll('.nav-link');
        const mobileBtn = document.getElementById('mobile-menu-btn');
        const subnavLinks = document.querySelectorAll('.auto-subnav-link');
        const sections = ['hoe-werkt-het', 'voordelen', 'tarieven', 'pech-contact', 'tip-garage'];

        const subnavScroll = document.getElementById('auto-subnav-scroll');
        const subnavArrow = document.getElementById('subnav-arrow');

        // Center a subnav link in the scrollable nav
        function centerSubnavLink(link) {
            const nav = subnavScroll;
            const linkCenter = link.offsetLeft + link.offsetWidth / 2;
            const navCenter = nav.offsetWidth / 2;
            nav.scrollTo({ left: linkCenter - navCenter, behavior: 'smooth' });
        }

        // Scroll to next off-screen subnav item
        function scrollSubnavNext() {
            const nav = subnavScroll;
            const scrollRight = nav.scrollLeft + nav.offsetWidth;
            for (const link of subnavLinks) {
                if (link.offsetLeft + link.offsetWidth > scrollRight) {
                    centerSubnavLink(link);
                    break;
                }
            }
        }

        // Hide/show arrow based on scroll position
        function updateSubnavArrow() {
            if (!subnavArrow) return;
            const nav = subnavScroll;
            const atEnd = nav.scrollLeft + nav.offsetWidth >= nav.scrollWidth - 5;
            subnavArrow.style.opacity = atEnd ? '0' : '1';
            subnavArrow.style.pointerEvents = atEnd ? 'none' : 'auto';
        }
        subnavScroll.addEventListener('scroll', updateSubnavArrow);
        window.addEventListener('resize', updateSubnavArrow);
        updateSubnavArrow();

        // Smooth scroll for subnav links
        subnavLinks.forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                centerSubnavLink(link);
                const id = link.getAttribute('href').substring(1);
                const target = document.getElementById(id);
                if (target) {
                    const offset = navbar.offsetHeight + document.querySelector('.auto-subnav').offsetHeight + 24;
                    const top = target.getBoundingClientRect().top + window.pageYOffset - offset;
                    window.scrollTo({ top, behavior: 'smooth' });
                }
            });
        });

        // Highlight active subnav on scroll
        function updateActiveSubnav() {
            const offset = navbar.offsetHeight + document.querySelector('.auto-subnav').offsetHeight + 40;
            let current = sections[0];
            for (const id of sections) {
                const el = document.getElementById(id);
                if (el && el.getBoundingClientRect().top <= offset) current = id;
            }
            subnavLinks.forEach(link => {
                const isActive = link.getAttribute('href') === '#' + current;
                if (isActive && !link.classList.contains('active')) centerSubnavLink(link);
                link.classList.toggle('active', isActive);
                link.classList.toggle('text-pech-dark', isActive);
                link.classList.toggle('text-gray-400', !isActive);
            });
        }

        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset > 80;
            navbar.classList.toggle('bg-white', scrolled);
            navbar.classList.toggle('shadow-lg', scrolled);
            navbar.classList.toggle('shadow-black/5', scrolled);
            logoWhite.classList.toggle('hidden', scrolled);
            logoDark.classList.toggle('hidden', !scrolled);
            navLinks.forEach(link => {
                link.classList.toggle('text-white/80', !scrolled);
                link.classList.toggle('hover:text-white', !scrolled);
                link.classList.toggle('text-pech-dark/70', scrolled);
                link.classList.toggle('hover:text-pech-dark', scrolled);
            });
            mobileBtn.classList.toggle('text-white', !scrolled);
            mobileBtn.classList.toggle('text-pech-dark', scrolled);
            updateActiveSubnav();
        });
    </script>
@endsection
