@extends('layouts.app')

@section('title', 'PechPlan voor garages - Pechhulp die uw klant terugbrengt bij u')
@section('meta_description', 'PechPlan voor garages: bied uw klanten pechhulp aan, bouw een garagefonds op en versterk uw klantrelatie. Uw garage als eerste aanspreekpunt bij pech.')

@section('og_image', url('/images/Workshop-at-golden-hour.png'))

@section('structured_data')
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "FAQPage",
        "mainEntity": [
            {
                "@@type": "Question",
                "name": "Wat gebeurt er als de pechkosten hoger zijn dan het saldo?",
                "acceptedAnswer": {
                    "@@type": "Answer",
                    "text": "Wanneer de kosten van een pechgeval hoger zijn dan het beschikbare saldo in het garagefonds, ontstaat er tijdelijk een negatief saldo. Als dit saldo niet wordt aangevuld, ontvangt de garagehouder aan het einde van het kalenderjaar een factuur om het saldo minimaal tot \u20ac0 aan te vullen."
                }
            },
            {
                "@@type": "Question",
                "name": "Hoe kan een garage een negatief saldo voorkomen?",
                "acceptedAnswer": {
                    "@@type": "Answer",
                    "text": "Dit kan op verschillende manieren: proactief nieuwe klanten aansluiten bij PechPlan, zorgen voor een hoge verlengingsgraad, PechPlan koppelen aan periodiek onderhoud, en voertuigen goed onderhouden om pech te voorkomen. Hierdoor groeit het garagefonds mee met uw klantenbestand."
                }
            },
            {
                "@@type": "Question",
                "name": "Kan ik zelf pechhulp factureren vanuit mijn garagefonds?",
                "acceptedAnswer": {
                    "@@type": "Answer",
                    "text": "Ja. Wanneer u zelf pechhulp verleent, kunt u via het portaal een factuur indienen. De betaling wordt dan voldaan vanuit uw garagefonds, mits het saldo toereikend is."
                }
            },
            {
                "@@type": "Question",
                "name": "Wat als een klant buiten mijn regio pech krijgt?",
                "acceptedAnswer": {
                    "@@type": "Answer",
                    "text": "Wanneer de klant zich buiten uw ingestelde werkgebied bevindt, regelt PechPlan de hulp via de achtervang (bijvoorbeeld ANWB of een bergingsdienst)."
                }
            },
            {
                "@@type": "Question",
                "name": "Wat als de klant buiten mijn werktijden pech krijgt?",
                "acceptedAnswer": {
                    "@@type": "Answer",
                    "text": "Wanneer het buiten uw werktijden gebeurt, wordt de hulp direct geregeld via de achtervang."
                }
            },
            {
                "@@type": "Question",
                "name": "Moet de klant de auto bij mijn garage gekocht hebben?",
                "acceptedAnswer": {
                    "@@type": "Answer",
                    "text": "Nee. PechPlan is bedoeld voor uw klantenbestand, ongeacht waar de auto gekocht is. Veel garages bieden PechPlan aan bij onderhoudsklanten, APK-klanten en verkoopklanten."
                }
            },
            {
                "@@type": "Question",
                "name": "Wat kost PechPlan voor garages?",
                "acceptedAnswer": {
                    "@@type": "Answer",
                    "text": "De minimale tarieven zijn \u20ac64,95 per jaar per kenteken voor dekking in Nederland en \u20ac79,95 per jaar per kenteken voor Europadekking. Het grootste deel van de bijdrage wordt gereserveerd in een garagefonds. U bepaalt zelf de verkoopprijs; het bedrag boven het minimum wordt extra aan uw garagefonds toegevoegd."
                }
            }
        ]
    }
    </script>
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "Service",
        "name": "PechPlan voor garages",
        "serviceType": "Pechhulp voor garagehouders",
        "provider": {
            "@@type": "Organization",
            "name": "PechPlan",
            "url": "https://pechplan.nl"
        },
        "description": "PechPlan voor garages: bied uw klanten pechhulp aan, bouw een garagefonds op en versterk uw klantrelatie. Uw garage wordt als eerste benaderd bij pech.",
        "audience": {
            "@@type": "Audience",
            "audienceType": "Garagehouders"
        }
    }
    </script>
@endsection

@section('navbar_class', '')
@section('logo_white_class', '')
@section('logo_dark_class', 'hidden')
@section('nav_link_class', 'text-white/80 hover:text-white')
@section('mobile_btn_class', 'text-white')
@section('contact_href', '#contact')

@section('styles')
    .subnav-sticky {
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
    }
    .subnav-link {
        position: relative;
        border-bottom: 3px solid transparent;
        padding-bottom: 10px;
    }
    .subnav-link:hover {
        border-bottom-color: rgba(235, 138, 0, 0.4);
    }
    .subnav-link.active,
    .subnav-link.active:hover {
        border-bottom-color: #eb8a00;
    }
    .subnav-scroll::-webkit-scrollbar { display: none; }
    .subnav-scroll { -ms-overflow-style: none; scrollbar-width: none; }
    @keyframes nudge-right {
        0%, 100% { transform: translateX(0); }
        50% { transform: translateX(4px); }
    }
    .subnav-arrow-icon {
        animation: nudge-right 1.5s ease-in-out infinite;
    }
    .garage-hero {
        position: relative;
        overflow: hidden;
        background: #1d1d1b;
    }
    .garage-hero::before {
        content: '';
        position: absolute;
        inset: 0;
        background: url('/images/Workshop-at-golden-hour.png') center center / cover no-repeat;
        opacity: 0.25;
    }
    .garage-hero::after {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(to bottom, rgba(29,29,27,0.3) 0%, rgba(29,29,27,0.95) 100%);
    }
@endsection

@section('content')
    <!-- Page hero -->
    <section class="garage-hero pt-36 pb-20 sm:pt-44 sm:pb-28">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="max-w-3xl fade-in">
                <div class="inline-flex items-center gap-2 bg-pech-orange/20 text-pech-orange px-4 py-1.5 rounded-full text-sm font-semibold mb-8">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0H6.375c-.621 0-1.125-.504-1.125-1.125V14.25m17.25 4.5h.375a1.125 1.125 0 001.125-1.125v-3.375a3 3 0 00-.879-2.121L16.5 7.5h-4.5V4.875c0-.621-.504-1.125-1.125-1.125H4.875C4.254 3.75 3.75 4.254 3.75 4.875V14.25"/></svg>
                    Voor garages
                </div>
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white leading-tight mb-8">Pechhulp die werkt<br> voor uw garage</h1>
                <p class="text-white/70 text-lg sm:text-xl leading-relaxed mb-10 max-w-2xl">Veel automobilisten regelen pechhulp extern. In dat geval komt de hulpverlening bij pech vrijwel altijd van een partij buiten uw garage, terwijl u de auto kent en de relatie met de klant heeft opgebouwd.</p>
                <p class="text-pech-orange font-semibold text-lg sm:text-xl">PechPlan draait dat principe om.</p>
            </div>
        </div>
    </section>

    <!-- Sticky sub-navigation -->
    <div class="sticky top-20 z-40 bg-white/90 subnav-sticky border-b border-gray-200/60">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <nav id="garage-subnav-scroll" class="flex overflow-x-auto subnav-scroll gap-1" aria-label="Garage informatie">
                <button data-section="wat-is-pechplan" class="subnav-link active whitespace-nowrap px-4 py-3 text-sm font-medium text-pech-dark cursor-pointer">Wat is PechPlan?</button>
                <button data-section="hoe-werkt-het" class="subnav-link whitespace-nowrap px-4 py-3 text-sm font-medium text-gray-400 cursor-pointer">Hoe werkt het?</button>
                <button data-section="tarieven" class="subnav-link whitespace-nowrap px-4 py-3 text-sm font-medium text-gray-400 cursor-pointer">Tarieven</button>
                <button data-section="garagefonds" class="subnav-link whitespace-nowrap px-4 py-3 text-sm font-medium text-gray-400 cursor-pointer">Het garagefonds</button>
                <button data-section="voordelen" class="subnav-link whitespace-nowrap px-4 py-3 text-sm font-medium text-gray-400 cursor-pointer">Voordelen</button>
                <button data-section="faq" class="subnav-link whitespace-nowrap px-4 py-3 text-sm font-medium text-gray-400 cursor-pointer">Veelgestelde vragen</button>
            </nav>
            <button id="garage-subnav-arrow" class="absolute right-0 top-0 bottom-0 flex items-center pl-4 pr-1 bg-gradient-to-l from-white/90 via-white/90 to-transparent md:hidden" aria-label="Meer items" onclick="scrollGarageSubnavNext()">
                <svg class="w-5 h-5 text-pech-orange subnav-arrow-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
            </button>
        </div>
    </div>

    <!-- Content panels -->
    <div class="silver-gradient">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-16">

            <!-- Wat is PechPlan? -->
            <div id="panel-wat-is-pechplan" class="garage-panel">
                <div class="max-w-3xl fade-in">
                    <h2 class="text-2xl sm:text-3xl font-bold text-pech-dark mb-6">Wat is PechPlan?</h2>
                    <p class="text-gray-600 text-lg leading-relaxed mb-8">PechPlan is een pechhulpservice die u als garagehouder aan uw eigen klanten kunt aanbieden. Bij een pechmelding werkt het als volgt:</p>
                    <div class="space-y-4 mb-10">
                        <div class="flex items-start gap-4 bg-white rounded-xl p-5 shadow-sm"><div class="w-8 h-8 rounded-full bg-pech-orange flex items-center justify-center flex-shrink-0 mt-0.5"><span class="text-white font-bold text-sm">1</span></div><p class="text-gray-700">De klant meldt pech bij PechPlan</p></div>
                        <div class="flex items-start gap-4 bg-white rounded-xl p-5 shadow-sm"><div class="w-8 h-8 rounded-full bg-pech-orange flex items-center justify-center flex-shrink-0 mt-0.5"><span class="text-white font-bold text-sm">2</span></div><p class="text-gray-700">PechPlan controleert of de klant zich binnen uw werkgebied bevindt en of het pechgeval binnen uw werktijden valt</p></div>
                        <div class="flex items-start gap-4 bg-white rounded-xl p-5 shadow-sm"><div class="w-8 h-8 rounded-full bg-pech-orange flex items-center justify-center flex-shrink-0 mt-0.5"><span class="text-white font-bold text-sm">3</span></div><p class="text-gray-700">Uw garage wordt als eerste benaderd om te helpen</p></div>
                        <div class="flex items-start gap-4 bg-white rounded-xl p-5 shadow-sm"><div class="w-8 h-8 rounded-full bg-pech-orange flex items-center justify-center flex-shrink-0 mt-0.5"><span class="text-white font-bold text-sm">4</span></div><p class="text-gray-700">Kunt u niet helpen, dan regelt PechPlan hulp via de achtervang (bijvoorbeeld ANWB of een bergingsdienst)</p></div>
                    </div>
                    <div class="bg-white rounded-2xl p-6 sm:p-8 shadow-sm border border-gray-100">
                        <h3 class="font-bold text-pech-dark text-lg mb-4">U bepaalt zelf:</h3>
                        <div class="grid sm:grid-cols-2 gap-4">
                            <div class="flex items-center gap-3"><div class="w-10 h-10 rounded-xl bg-pech-orange/10 flex items-center justify-center flex-shrink-0"><svg class="w-5 h-5 text-pech-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/></svg></div><span class="text-gray-700">De straal van uw werkgebied</span></div>
                            <div class="flex items-center gap-3"><div class="w-10 h-10 rounded-xl bg-pech-orange/10 flex items-center justify-center flex-shrink-0"><svg class="w-5 h-5 text-pech-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><span class="text-gray-700">Uw beschikbare tijden</span></div>
                        </div>
                        <p class="text-gray-500 mt-6 text-sm">PechPlan verzorgt de meldingen, de administratie en de financiële afhandeling.</p>
                    </div>
                </div>
            </div>

            <!-- Hoe werkt het? -->
            <div id="panel-hoe-werkt-het" class="garage-panel hidden">
                <div class="max-w-3xl fade-in">
                    <h2 class="text-2xl sm:text-3xl font-bold text-pech-dark mb-6">Hoe werkt PechPlan voor u als garage?</h2>
                    <p class="text-gray-600 text-lg leading-relaxed mb-8">Als garagehouder kunt u PechPlan passen aanbieden aan uw klanten. De klant betaalt een jaarlijkse bijdrage voor de pechhulp. Het grootste deel van deze bijdrage wordt gereserveerd in een fonds dat gekoppeld is aan uw garage.</p>
                    <div class="bg-white rounded-2xl p-6 sm:p-8 shadow-sm border border-gray-100 mb-8">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-xl bg-pech-orange/10 flex items-center justify-center flex-shrink-0"><svg class="w-6 h-6 text-pech-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z"/></svg></div>
                            <div><h3 class="font-bold text-pech-dark text-lg mb-2">Uw garagefonds</h3><p class="text-gray-600 leading-relaxed">Dit fonds wordt gebruikt om eventuele pechhulp te betalen. U kunt het saldo van dit fonds altijd zien in uw online garageaccount.</p></div>
                        </div>
                    </div>
                    <div class="bg-gradient-to-br from-pech-dark to-pech-gray rounded-2xl p-6 sm:p-8 text-white">
                        <h3 class="font-bold text-lg mb-4">Samengevat</h3>
                        <ul class="space-y-3">
                            <li class="flex items-start gap-3"><svg class="w-5 h-5 text-pech-orange flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg><span class="text-white/90">U biedt PechPlan passen aan uw klanten aan</span></li>
                            <li class="flex items-start gap-3"><svg class="w-5 h-5 text-pech-orange flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg><span class="text-white/90">De klant betaalt een jaarlijkse bijdrage</span></li>
                            <li class="flex items-start gap-3"><svg class="w-5 h-5 text-pech-orange flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg><span class="text-white/90">Het grootste deel gaat naar uw garagefonds</span></li>
                            <li class="flex items-start gap-3"><svg class="w-5 h-5 text-pech-orange flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg><span class="text-white/90">PechPlan regelt de administratie en afhandeling</span></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Tarieven -->
            <div id="panel-tarieven" class="garage-panel hidden">
                <div class="max-w-4xl fade-in">
                    <h2 class="text-2xl sm:text-3xl font-bold text-pech-dark mb-6">Abonnementstarieven en prijsstelling</h2>
                    <p class="text-gray-600 text-lg leading-relaxed mb-10">De minimale tarieven voor PechPlan zijn:</p>
                    <div class="grid sm:grid-cols-2 gap-6 mb-12">
                        <div class="bg-white rounded-2xl p-6 sm:p-8 shadow-sm border-2 border-gray-100 hover:border-pech-orange/30 transition-colors duration-200">
                            <div class="inline-flex items-center gap-2 bg-pech-orange/10 text-pech-orange px-3 py-1 rounded-full text-xs font-semibold mb-4">Nederland</div>
                            <div class="flex items-baseline gap-1 mb-1"><span class="text-4xl font-bold text-pech-dark">&euro;64,95</span><span class="text-gray-400 text-sm">/jaar</span></div>
                            <p class="text-gray-400 text-sm mb-6">per kenteken</p>
                            <div class="space-y-3 text-sm">
                                <div class="flex justify-between py-2 border-b border-gray-100"><span class="text-gray-500">Reservering garagefonds</span><span class="font-semibold text-pech-dark">&euro;50,00</span></div>
                                <div class="flex justify-between py-2"><span class="text-gray-500">PechPlan servicekosten</span><span class="font-semibold text-pech-dark">&euro;14,95</span></div>
                            </div>
                        </div>
                        <div class="bg-white rounded-2xl p-6 sm:p-8 shadow-sm border-2 border-pech-orange relative">
                            <div class="absolute -top-3 right-6 bg-pech-orange text-white px-3 py-0.5 rounded-full text-xs font-semibold">Populair</div>
                            <div class="inline-flex items-center gap-2 bg-pech-orange/10 text-pech-orange px-3 py-1 rounded-full text-xs font-semibold mb-4">Europa</div>
                            <div class="flex items-baseline gap-1 mb-1"><span class="text-4xl font-bold text-pech-dark">&euro;79,95</span><span class="text-gray-400 text-sm">/jaar</span></div>
                            <p class="text-gray-400 text-sm mb-6">per kenteken</p>
                            <div class="space-y-3 text-sm">
                                <div class="flex justify-between py-2 border-b border-gray-100"><span class="text-gray-500">Reservering garagefonds</span><span class="font-semibold text-pech-dark">&euro;65,00</span></div>
                                <div class="flex justify-between py-2"><span class="text-gray-500">PechPlan servicekosten</span><span class="font-semibold text-pech-dark">&euro;14,95</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gradient-to-br from-pech-orange to-pech-orange-dark rounded-2xl p-6 sm:p-8 text-white">
                        <h3 class="font-bold text-xl mb-3">U bepaalt zelf de verkoopprijs</h3>
                        <p class="text-white/90 leading-relaxed mb-6">De genoemde bedragen zijn minimumprijzen. Wanneer u een hogere prijs rekent, wordt het volledige bedrag boven het minimum toegevoegd aan uw garagefonds.</p>
                        <div class="bg-white/10 backdrop-blur rounded-xl p-5">
                            <h4 class="font-semibold text-sm uppercase tracking-wide mb-4 text-white/80">Voorbeeld: Nederland dekking</h4>
                            <div class="flex items-center justify-between mb-3"><span class="text-white/80">Minimumprijs</span><span class="font-bold">&euro;64,95</span></div>
                            <div class="flex items-center justify-between mb-3"><span class="text-white/80">U verkoopt voor</span><span class="font-bold">&euro;74,95</span></div>
                            <div class="border-t border-white/20 my-3"></div>
                            <div class="space-y-2 text-sm">
                                <div class="flex justify-between"><span class="text-white/70">Standaard reservering garagefonds</span><span>&euro;50,00</span></div>
                                <div class="flex justify-between"><span class="text-white/70">Extra reservering garagefonds</span><span class="text-white font-semibold">&euro;10,00</span></div>
                                <div class="flex justify-between"><span class="text-white/70">PechPlan servicekosten</span><span>&euro;14,95</span></div>
                            </div>
                            <p class="text-white/80 text-sm mt-4">Uw garagefonds groeit sneller, waardoor u meer buffer opbouwt voor toekomstige pechgevallen.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Het garagefonds -->
            <div id="panel-garagefonds" class="garage-panel hidden">
                <div class="max-w-3xl fade-in">
                    <h2 class="text-2xl sm:text-3xl font-bold text-pech-dark mb-6">Het garagefonds</h2>
                    <p class="text-gray-600 text-lg leading-relaxed mb-8">Het gereserveerde bedrag wordt opgebouwd in een fonds dat gekoppeld is aan uw garage. Dit fonds wordt beheerd binnen het PechPlan platform en is zichtbaar in uw online dashboard.</p>
                    <div class="bg-white rounded-2xl p-6 sm:p-8 shadow-sm border border-gray-100 mb-8">
                        <h3 class="font-bold text-pech-dark text-lg mb-4">Het fonds wordt gebruikt voor:</h3>
                        <div class="grid sm:grid-cols-2 gap-3">
                            <div class="flex items-center gap-3 py-2"><svg class="w-5 h-5 text-pech-orange flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg><span class="text-gray-700">Pechhulpverlening</span></div>
                            <div class="flex items-center gap-3 py-2"><svg class="w-5 h-5 text-pech-orange flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg><span class="text-gray-700">Inzet van wegenwacht</span></div>
                            <div class="flex items-center gap-3 py-2"><svg class="w-5 h-5 text-pech-orange flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg><span class="text-gray-700">Berging</span></div>
                            <div class="flex items-center gap-3 py-2"><svg class="w-5 h-5 text-pech-orange flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg><span class="text-gray-700">Transport van voertuigen</span></div>
                        </div>
                        <p class="text-gray-500 text-sm mt-5">Hoe groter het aantal aangesloten klanten, hoe groter de buffer in uw fonds.</p>
                    </div>
                    <div class="bg-white rounded-2xl p-6 sm:p-8 border border-gray-200 shadow-sm">
                        <h3 class="font-bold text-lg mb-2 flex items-center gap-2 text-pech-dark"><svg class="w-5 h-5 text-pech-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"/></svg>Praktijkvoorbeeld</h3>
                        <!-- Tabs -->
                        <div class="flex gap-2 mb-6">
                            <button onclick="showExample(1)" id="example-tab-1" class="example-tab px-4 py-1.5 rounded-full text-sm font-medium bg-pech-orange text-white cursor-pointer transition-colors duration-200">ANWB inschakeling</button>
                            <button onclick="showExample(2)" id="example-tab-2" class="example-tab px-4 py-1.5 rounded-full text-sm font-medium bg-gray-100 text-gray-500 hover:bg-gray-200 cursor-pointer transition-colors duration-200">Garage factureert zelf</button>
                        </div>
                        <!-- Voorbeeld 1: ANWB -->
                        <div id="example-1" class="example-panel">
                            <p class="text-gray-500 text-sm mb-4">Garage Visser uit Groningen</p>
                            <div class="space-y-4">
                                <div class="bg-gray-50 rounded-xl p-4"><div class="text-gray-500 text-sm mb-1">Aantal PechPlan passen (NL dekking)</div><div class="text-2xl font-bold text-pech-dark">25 passen</div></div>
                                <div class="bg-gray-50 rounded-xl p-4"><div class="text-gray-500 text-sm mb-1">Totale reservering (25 &times; &euro;50)</div><div class="text-2xl font-bold text-pech-orange">&euro;1.250</div></div>
                                <div class="border-t border-gray-200 pt-4">
                                    <p class="text-gray-600 text-sm mb-3">Er ontstaat een pechgeval. De garage kan niet helpen. PechPlan schakelt de ANWB in.</p>
                                    <div class="flex items-center justify-between bg-gray-50 rounded-xl p-4">
                                        <div><div class="text-gray-500 text-sm">Kosten hulpverlening</div><div class="text-xl font-bold text-red-500">&minus;&euro;700</div></div>
                                        <div class="text-right"><div class="text-gray-500 text-sm">Nieuw saldo</div><div class="text-xl font-bold text-pech-orange">&euro;550</div></div>
                                    </div>
                                </div>
                                <p class="text-gray-400 text-sm">Het fonds werkt als collectieve buffer voor de pechhulp van uw klanten.</p>
                            </div>
                        </div>
                        <!-- Voorbeeld 2: Garage factureert zelf -->
                        <div id="example-2" class="example-panel hidden">
                            <p class="text-gray-500 text-sm mb-4">Autoservice De Jong uit Utrecht</p>
                            <div class="space-y-4">
                                <div class="bg-gray-50 rounded-xl p-4"><div class="text-gray-500 text-sm mb-1">Aantal PechPlan passen (NL dekking)</div><div class="text-2xl font-bold text-pech-dark">40 passen</div></div>
                                <div class="bg-gray-50 rounded-xl p-4"><div class="text-gray-500 text-sm mb-1">Totale reservering (40 &times; &euro;50)</div><div class="text-2xl font-bold text-pech-orange">&euro;2.000</div></div>
                                <div class="border-t border-gray-200 pt-4">
                                    <p class="text-gray-600 text-sm mb-3">Een klant staat met pech langs de weg. De garage helpt zelf en factureert de reparatie aan PechPlan.</p>
                                    <div class="flex items-center justify-between bg-gray-50 rounded-xl p-4">
                                        <div><div class="text-gray-500 text-sm">Factuurbedrag garage</div><div class="text-xl font-bold text-red-500">&minus;&euro;350</div></div>
                                        <div class="text-right"><div class="text-gray-500 text-sm">Nieuw saldo</div><div class="text-xl font-bold text-pech-orange">&euro;1.650</div></div>
                                    </div>
                                </div>
                                <p class="text-gray-400 text-sm">De garage helpt de eigen klant en ontvangt direct vergoeding uit het fonds.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Voordelen -->
            <div id="panel-voordelen" class="garage-panel hidden">
                <div class="max-w-4xl fade-in">
                    <h2 class="text-2xl sm:text-3xl font-bold text-pech-dark mb-10">Waarom PechPlan interessant is voor garages</h2>
                    <div class="grid sm:grid-cols-2 gap-6">
                        <div class="benefit-card bg-white rounded-2xl p-6 shadow-sm border border-gray-100 text-center"><svg class="w-14 h-14 text-pech-orange mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182"/></svg><h3 class="font-bold text-pech-dark mb-2">U krijgt het pechmoment terug</h3><p class="text-gray-500 text-sm leading-relaxed">Pech is een belangrijk contactmoment. Dit vergroot de kans op vervolgonderhoud, reparatieopdrachten en sterkere klantrelaties.</p></div>
                        <div class="benefit-card bg-white rounded-2xl p-6 shadow-sm border border-gray-100 text-center"><svg class="w-14 h-14 text-pech-orange mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg><h3 class="font-bold text-pech-dark mb-2">Voordelige pechhulp voor klanten</h3><p class="text-gray-500 text-sm leading-relaxed">PechPlan biedt een aantrekkelijk alternatief voor bestaande pechhulpdiensten. Tegelijk blijft professionele hulp altijd beschikbaar.</p></div>
                        <div class="benefit-card bg-white rounded-2xl p-6 shadow-sm border border-gray-100 text-center"><svg class="w-14 h-14 text-pech-orange mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/></svg><h3 class="font-bold text-pech-dark mb-2">ANWB blijft achtervang</h3><p class="text-gray-500 text-sm leading-relaxed">Wanneer u niet beschikbaar bent, worden ANWB, bergingsdienst of andere hulpdiensten automatisch ingeschakeld.</p></div>
                        <div class="benefit-card bg-white rounded-2xl p-6 shadow-sm border border-gray-100 text-center"><svg class="w-14 h-14 text-pech-orange mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z"/></svg><h3 class="font-bold text-pech-dark mb-2">Sterkere klantenbinding</h3><p class="text-gray-500 text-sm leading-relaxed">Veel garages koppelen PechPlan aan periodiek onderhoud, APK en onderhoudscontracten voor sterkere binding.</p></div>
                        <div class="benefit-card bg-white rounded-2xl p-6 shadow-sm border border-gray-100 text-center"><svg class="w-14 h-14 text-pech-orange mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z"/></svg><h3 class="font-bold text-pech-dark mb-2">Extra inkomsten mogelijk</h3><p class="text-gray-500 text-sm leading-relaxed">Wanneer u zelf pechhulp verleent, kunt u deze factureren vanuit uw garagefonds via het PechPlan portaal.</p></div>
                        <div class="benefit-card bg-white rounded-2xl p-6 shadow-sm border border-gray-100 text-center"><svg class="w-14 h-14 text-pech-orange mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9.53 16.122a3 3 0 00-5.78 1.128 2.25 2.25 0 01-2.4 2.245 4.5 4.5 0 008.4-2.245c0-.399-.078-.78-.22-1.128zm0 0a15.998 15.998 0 003.388-1.62m-5.043-.025a15.994 15.994 0 011.622-3.395m3.42 3.42a15.995 15.995 0 004.764-4.648l3.876-5.814a1.151 1.151 0 00-1.597-1.597L14.146 6.32a15.996 15.996 0 00-4.649 4.763m3.42 3.42a6.776 6.776 0 00-3.42-3.42"/></svg><h3 class="font-bold text-pech-dark mb-2">Eigen branding mogelijk</h3><p class="text-gray-500 text-sm leading-relaxed">Bij meer dan 100 pashouders kan de PechPlan pas worden uitgevoerd met uw eigen logo. Dit versterkt de professionele uitstraling.</p></div>
                    </div>
                </div>
            </div>

            <!-- FAQ -->
            <div id="panel-faq" class="garage-panel hidden">
                <div class="max-w-3xl fade-in">
                    <h2 class="text-2xl sm:text-3xl font-bold text-pech-dark mb-10">Veelgestelde vragen</h2>
                    <div class="space-y-4">
                        @foreach([
                            ['Wat gebeurt er als de pechkosten hoger zijn dan het saldo?', 'Wanneer de kosten van een pechgeval hoger zijn dan het beschikbare saldo in het garagefonds, ontstaat er tijdelijk een negatief saldo. Als dit saldo niet wordt aangevuld, ontvangt de garagehouder aan het einde van het kalenderjaar een factuur om het saldo minimaal tot €0 aan te vullen.'],
                            ['Hoe kan een garage een negatief saldo voorkomen?', '<p class="mb-3">Dit kan op verschillende manieren:</p><ul class="list-disc list-inside space-y-1 text-gray-500"><li>Proactief nieuwe klanten aansluiten bij PechPlan</li><li>Zorgen voor een hoge verlengingsgraad</li><li>PechPlan koppelen aan periodiek onderhoud</li><li>Voertuigen goed onderhouden om pech te voorkomen</li></ul><p class="mt-3">Hierdoor groeit het garagefonds mee met uw klantenbestand.</p>'],
                            ['Kan ik zelf pechhulp factureren vanuit mijn garagefonds?', 'Ja. Wanneer u zelf pechhulp verleent, kunt u via het portaal een factuur indienen. De betaling wordt dan voldaan vanuit uw garagefonds, mits het saldo toereikend is.'],
                            ['Wat als een klant buiten mijn regio pech krijgt?', 'Wanneer de klant zich buiten uw ingestelde werkgebied bevindt, regelt PechPlan de hulp via de achtervang.'],
                            ['Wat als de klant buiten mijn werktijden pech krijgt?', 'Wanneer het buiten uw werktijden gebeurt, wordt de hulp direct geregeld via de achtervang.'],
                            ['Moet de klant de auto bij mijn garage gekocht hebben?', '<p class="mb-3">Nee. PechPlan is bedoeld voor uw klantenbestand, ongeacht waar de auto gekocht is. Veel garages bieden PechPlan aan bij:</p><ul class="list-disc list-inside space-y-1 text-gray-500"><li>Onderhoudsklanten</li><li>APK-klanten</li><li>Verkoopklanten</li></ul>'],
                        ] as $faq)
                        <div class="faq-item bg-white rounded-xl border border-gray-100 overflow-hidden">
                            <button class="faq-toggle w-full text-left px-6 py-5 flex items-center justify-between cursor-pointer">
                                <span class="font-semibold text-pech-dark pr-4">{{ $faq[0] }}</span>
                                <svg class="w-5 h-5 text-gray-400 flex-shrink-0 faq-icon transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                            </button>
                            <div class="faq-answer px-6"><div class="text-gray-600 leading-relaxed pb-5">{!! $faq[1] !!}</div></div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <!-- Summary CTA -->
        <div class="pb-20 sm:pb-28">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="bg-gradient-to-br from-pech-dark to-pech-gray rounded-3xl p-8 sm:p-12 text-white fade-in">
                    <div class="max-w-2xl">
                        <h2 class="text-2xl sm:text-3xl font-bold mb-6">PechPlan brengt het contactmoment terug naar uw garage</h2>
                        <div class="grid sm:grid-cols-2 gap-4 mb-8">
                            @foreach(['Voordelige pechhulp voor uw klanten','Uw garage blijft eerste aanspreekpunt','Eigen garagefonds met inzicht','Zelf verkoopprijs bepalen','Professionele achtervang gegarandeerd','Fonds groeit sneller bij hogere prijs'] as $item)
                            <div class="flex items-start gap-3"><svg class="w-5 h-5 text-pech-orange flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg><span class="text-white/80 text-sm">{{ $item }}</span></div>
                            @endforeach
                        </div>
                        <a href="#contact" class="inline-flex items-center gap-2 bg-pech-orange hover:bg-pech-orange-dark text-white px-8 py-4 rounded-lg font-semibold transition-colors duration-200 cursor-pointer">Sluit uw garage aan <svg class="w-5 h-5 btn-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact -->
    <section id="contact" class="py-20 sm:py-28 relative overflow-hidden">
        <div class="absolute inset-0 bg-pech-dark"></div>
        <div class="absolute inset-0 opacity-15" style="background: url('/images/Dark-pattern-bg.png') center center / cover no-repeat;"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-20">
                <div class="fade-in">
                    <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4">Neem contact op</h2>
                    <p class="text-white/60 text-lg mb-8">Wilt u PechPlan aanbieden aan uw klanten? Neem contact op en we vertellen u graag meer.</p>
                    <div class="space-y-6">
                        <div class="flex items-center gap-4"><div class="w-12 h-12 rounded-xl bg-white/5 flex items-center justify-center flex-shrink-0"><svg class="w-5 h-5 text-pech-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/></svg></div><div><div class="text-white/40 text-sm">Telefoon</div><a href="tel:0882474747" class="text-white font-semibold hover:text-pech-orange transition-colors">088 247 47 47</a></div></div>
                        <div class="flex items-center gap-4"><div class="w-12 h-12 rounded-xl bg-white/5 flex items-center justify-center flex-shrink-0"><svg class="w-5 h-5 text-pech-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/></svg></div><div><div class="text-white/40 text-sm">E-mail</div><a href="mailto:info@pechplan.nl" class="text-white font-semibold hover:text-pech-orange transition-colors">info@pechplan.nl</a></div></div>
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
                        <input type="hidden" name="source" value="Garages">
                        <div><label for="name" class="block text-white/60 text-sm mb-1.5">Naam</label><input type="text" id="name" name="name" value="{{ old('name') }}" class="w-full bg-white/5 border border-white/10 rounded-lg px-4 py-3 text-white placeholder-white/30 focus:outline-none focus:ring-2 focus:ring-pech-orange/50 focus:border-pech-orange/50 transition-colors" placeholder="Uw naam" required></div>
                        <div><label for="company" class="block text-white/60 text-sm mb-1.5">Bedrijfsnaam</label><input type="text" id="company" name="company" value="{{ old('company') }}" class="w-full bg-white/5 border border-white/10 rounded-lg px-4 py-3 text-white placeholder-white/30 focus:outline-none focus:ring-2 focus:ring-pech-orange/50 focus:border-pech-orange/50 transition-colors" placeholder="Uw garage of bedrijf"></div>
                        <div><label for="email" class="block text-white/60 text-sm mb-1.5">E-mailadres</label><input type="email" id="email" name="email" value="{{ old('email') }}" class="w-full bg-white/5 border border-white/10 rounded-lg px-4 py-3 text-white placeholder-white/30 focus:outline-none focus:ring-2 focus:ring-pech-orange/50 focus:border-pech-orange/50 transition-colors" placeholder="uw@email.nl" required></div>
                        <div><label for="message" class="block text-white/60 text-sm mb-1.5">Bericht</label><textarea id="message" name="message" rows="4" class="w-full bg-white/5 border border-white/10 rounded-lg px-4 py-3 text-white placeholder-white/30 focus:outline-none focus:ring-2 focus:ring-pech-orange/50 focus:border-pech-orange/50 transition-colors resize-none" placeholder="Uw bericht..." required>{{ old('message') }}</textarea></div>
                        <button type="submit" class="w-full bg-pech-orange hover:bg-pech-orange-dark text-white py-3.5 rounded-lg font-semibold transition-colors duration-200 cursor-pointer inline-flex items-center justify-center gap-2">Verstuur bericht <svg class="w-5 h-5 btn-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></button>
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

        // Praktijkvoorbeeld tabs
        function showExample(n) {
            document.querySelectorAll('.example-panel').forEach(p => p.classList.add('hidden'));
            document.querySelectorAll('.example-tab').forEach(t => { t.classList.remove('bg-pech-orange', 'text-white'); t.classList.add('bg-gray-100', 'text-gray-500'); });
            document.getElementById('example-' + n).classList.remove('hidden');
            const tab = document.getElementById('example-tab-' + n);
            tab.classList.remove('bg-gray-100', 'text-gray-500');
            tab.classList.add('bg-pech-orange', 'text-white');
        }

        // Garage sub-navigation
        const subnav = document.querySelector('.subnav-sticky');
        const garageSubnavScroll = document.getElementById('garage-subnav-scroll');
        const garageSubnavArrow = document.getElementById('garage-subnav-arrow');
        const garageSubnavLinks = document.querySelectorAll('.subnav-link');

        function centerGarageSubnavLink(link) {
            const nav = garageSubnavScroll;
            const linkCenter = link.offsetLeft + link.offsetWidth / 2;
            const navCenter = nav.offsetWidth / 2;
            nav.scrollTo({ left: linkCenter - navCenter, behavior: 'smooth' });
        }

        function scrollGarageSubnavNext() {
            const nav = garageSubnavScroll;
            const scrollRight = nav.scrollLeft + nav.offsetWidth;
            for (const link of garageSubnavLinks) {
                if (link.offsetLeft + link.offsetWidth > scrollRight) {
                    centerGarageSubnavLink(link);
                    break;
                }
            }
        }

        function updateGarageSubnavArrow() {
            if (!garageSubnavArrow) return;
            const nav = garageSubnavScroll;
            const atEnd = nav.scrollLeft + nav.offsetWidth >= nav.scrollWidth - 5;
            garageSubnavArrow.style.opacity = atEnd ? '0' : '1';
            garageSubnavArrow.style.pointerEvents = atEnd ? 'none' : 'auto';
        }
        garageSubnavScroll.addEventListener('scroll', updateGarageSubnavArrow);
        window.addEventListener('resize', updateGarageSubnavArrow);
        updateGarageSubnavArrow();

        document.querySelectorAll('.subnav-link').forEach(link => {
            link.addEventListener('click', () => {
                document.querySelectorAll('.subnav-link').forEach(l => { l.classList.remove('active', 'text-pech-dark'); l.classList.add('text-gray-400'); });
                link.classList.add('active', 'text-pech-dark'); link.classList.remove('text-gray-400');
                centerGarageSubnavLink(link);
                document.querySelectorAll('.garage-panel').forEach(p => p.classList.add('hidden'));
                const panel = document.getElementById('panel-' + link.dataset.section);
                if (panel) {
                    panel.classList.remove('hidden');
                    panel.querySelectorAll('.fade-in').forEach(el => { el.classList.remove('visible'); requestAnimationFrame(() => requestAnimationFrame(() => el.classList.add('visible'))); });
                    const offset = navbar.offsetHeight + subnav.offsetHeight + 24;
                    const panelTop = panel.getBoundingClientRect().top + window.pageYOffset - offset;
                    window.scrollTo({ top: panelTop, behavior: 'smooth' });
                }
            });
        });

        // FAQ accordion
        document.querySelectorAll('.faq-toggle').forEach(toggle => {
            toggle.addEventListener('click', () => {
                const answer = toggle.nextElementSibling;
                const icon = toggle.querySelector('.faq-icon');
                const isOpen = answer.classList.contains('open');
                document.querySelectorAll('.faq-answer').forEach(a => a.classList.remove('open'));
                document.querySelectorAll('.faq-icon').forEach(i => i.style.transform = 'rotate(0deg)');
                if (!isOpen) { answer.classList.add('open'); icon.style.transform = 'rotate(180deg)'; }
            });
        });

        // Smooth scroll
        document.querySelectorAll('a[href^="#"]').forEach(a => {
            a.addEventListener('click', function(e) { e.preventDefault(); const t = document.querySelector(this.getAttribute('href')); if (t) window.scrollTo({ top: t.getBoundingClientRect().top + window.pageYOffset - 80, behavior: 'smooth' }); });
        });
    </script>
@endsection
