@extends('layouts.app')

@section('title', 'PechPlan voor automobilisten - Laat pech snel achter u')
@section('meta_description', 'PechPlan voor automobilisten: pechhulp via uw eigen garage. Altijd geholpen met ANWB als achtervang. Dekking in Nederland of Europa.')

@section('og_image', url('/images/Road-at-golden-hour.png'))

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
@endsection

@section('navbar_class', '')
@section('logo_white_class', '')
@section('logo_dark_class', 'hidden')
@section('nav_link_class', 'text-white/80 hover:text-white')
@section('mobile_btn_class', 'text-white')
@section('contact_href', '#pech-contact')

@section('styles')
    .auto-hero {
        position: relative;
        overflow: hidden;
        background: #1d1d1b;
    }
    .auto-hero::before {
        content: '';
        position: absolute;
        inset: 0;
        background: url('/images/Road-at-golden-hour.png') center center / cover no-repeat;
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
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white leading-tight mb-8">Laat pech <br><span class="text-pech-orange">snel achter u</span></h1>
                <p class="text-white/70 text-lg sm:text-xl leading-relaxed mb-10 max-w-2xl">Pechhulp via uw eigen garage. Bij pech wordt eerst uw garage benaderd. Kan die niet helpen? Dan regelt PechPlan direct professionele hulp, zoals de ANWB.</p>
                <p class="text-pech-orange font-semibold text-lg sm:text-xl">U staat nooit alleen.</p>
            </div>
        </div>
    </section>

    <!-- Coverage cards -->
    <section class="py-16 sm:py-20 bg-white">
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
    <section class="py-16 sm:py-20 bg-pech-light overflow-hidden">
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

    <!-- Pech CTA -->
    <section id="pech-contact" class="py-20 sm:py-28 relative overflow-hidden">
        <div class="absolute inset-0 bg-pech-dark"></div>
        <div class="absolute inset-0 opacity-15" style="background: url('/images/Dark-pattern-bg.png') center center / cover no-repeat;"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <div class="max-w-2xl mx-auto fade-in">
                <img src="/images/PechPlan-logo-vector-WO.svg" alt="PechPlan" class="h-12 mx-auto mb-8 opacity-80">
                <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4">Heeft u pech?</h2>
                <p class="text-white/60 text-lg mb-10">Neem direct contact op. Wij regelen de hulp.</p>
                <a href="tel:0882474747" class="text-4xl sm:text-5xl font-bold text-pech-orange hover:text-pech-orange-light transition-colors duration-200">088 247 47 47</a>
                <p class="text-white/40 text-sm mt-4">Of ga naar <a href="/help" class="text-pech-orange hover:underline font-medium">pechplan.nl/help</a></p>
            </div>
        </div>
    </section>

    <!-- Vraag aan uw garage -->
    <section class="py-16 sm:py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="max-w-2xl mx-auto fade-in">
                <h2 class="text-2xl sm:text-3xl font-bold text-pech-dark mb-4">Nog geen PechPlan?</h2>
                <p class="text-gray-500 text-lg mb-8">Vraag uw garage naar de mogelijkheden van PechPlan. Zij kunnen u direct aansluiten.</p>
                <a href="/" class="inline-flex items-center gap-2 text-pech-orange font-semibold hover:gap-3 transition-all duration-200">
                    Terug naar pechplan.nl
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
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
        });
    </script>
@endsection
