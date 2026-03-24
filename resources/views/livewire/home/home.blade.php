@push('meta')
  <meta name="description"
    content="METRACO is a Damascus-based trading and management consulting company positioned at the forefront of Syria’s reconstruction and economic development.">
  <meta name="keywords" content="METRACO, Syria, trade, investment, consulting, reconstruction">
  <meta name="robots" content="index, follow">
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="METRACO">
  <meta property="og:title" content="METRACO">
  <meta property="og:description" content="Rebuilding Through Partnership. Growing Through Vision.">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta name="theme-color" content="#0f4aa1">
  <link rel="canonical" href="{{ url()->current() }}">
@endpush

<div class="space-y-24 sm:space-y-28 pb-10">
  <section class="relative overflow-hidden mesh-blue text-white">
    <div class="absolute inset-0">
      <img src="{{ asset('assets/HomeHero.webp') }}" alt="Damascus skyline and infrastructure"
        class="w-full h-full object-cover opacity-35" loading="eager" fetchpriority="high">
      <div class="absolute inset-0 bg-black/40"></div>
    </div>
    <div class="absolute -top-20 -right-20 w-72 h-72 rounded-full bg-blue-400/20 blur-3xl"></div>
    <div class="absolute bottom-10 -left-16 w-80 h-80 rounded-full bg-cyan-300/20 blur-3xl"></div>
    <div
      class="absolute top-1/2 left-1/2 w-96 h-96 -translate-x-1/2 -translate-y-1/2 border border-white/10 rounded-full">
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 sm:py-32 lg:py-40">
      <div class="max-w-4xl">
        <h1 class="font-display text-4xl sm:text-5xl lg:text-7xl leading-tight mb-6">
          Rebuilding Through Partnership.<br>
          Growing Through Vision.
        </h1>
        <p class="text-slate-200 text-base sm:text-lg lg:text-xl max-w-3xl leading-relaxed mb-10">
          A trusted partner for international companies and institutions entering Syria—enabling trade, investment, and
          strategic growth across key sectors.
        </p>
        <div class="flex flex-col sm:flex-row gap-4">
          <a wire:navigate href="{{ route('contact') }}"
            class="inline-flex items-center justify-center gap-2 px-7 py-3.5 rounded-full bg-white text-brand-blue font-bold hover:bg-blue-100 transition shadow-premium">
            <x-heroicon-s-users class="w-5 h-5" />
            Partner With Us
          </a>
          <a wire:navigate href="{{ route('business-units') }}"
            class="inline-flex items-center justify-center gap-2 px-7 py-3.5 rounded-full bg-white/10 border border-white/30 text-white font-semibold hover:bg-white/20 transition">
            <x-heroicon-s-squares-2x2 class="w-5 h-5" />
            Explore Our Platform
          </a>
        </div>
      </div>
    </div>
  </section>

  <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-4 sm:gap-6">
      <article class="p-6 rounded-2xl bg-white border border-blue-100 shadow-soft">
        <div class="w-11 h-11 rounded-xl bg-brand-blue-soft text-brand-blue flex items-center justify-center mb-4">
          <x-heroicon-o-map class="w-5 h-5" />
        </div>
        <h2 class="font-display text-xl text-brand-blue mb-2">Gateway to Syria</h2>
        <p class="text-brand-gray">Bridging international partners with local execution</p>
      </article>
      <article class="p-6 rounded-2xl bg-white border border-blue-100 shadow-soft">
        <div class="w-11 h-11 rounded-xl bg-brand-blue-soft text-brand-blue flex items-center justify-center mb-4">
          <x-heroicon-o-rectangle-group class="w-5 h-5" />
        </div>
        <h2 class="font-display text-xl text-brand-blue mb-2">Multi-Sector Platform</h2>
        <p class="text-brand-gray">Trade, consulting, investment, and development</p>
      </article>
      <article class="p-6 rounded-2xl bg-white border border-blue-100 shadow-soft">
        <div class="w-11 h-11 rounded-xl bg-brand-blue-soft text-brand-blue flex items-center justify-center mb-4">
          <x-heroicon-o-building-library class="w-5 h-5" />
        </div>
        <h2 class="font-display text-xl text-brand-blue mb-2">Institutional Alignment</h2>
        <p class="text-brand-gray">Operating in line with national priorities</p>
      </article>
      <article class="p-6 rounded-2xl bg-white border border-blue-100 shadow-soft">
        <div class="w-11 h-11 rounded-xl bg-brand-blue-soft text-brand-blue flex items-center justify-center mb-4">
          <x-heroicon-o-cog-6-tooth class="w-5 h-5" />
        </div>
        <h2 class="font-display text-xl text-brand-blue mb-2">Execution Driven</h2>
        <p class="text-brand-gray">From strategy to on-the-ground delivery</p>
      </article>
    </div>
  </section>

  <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="bg-white border border-slate-200 rounded-3xl p-8 sm:p-12 shadow-sm">
      <h2 class="font-display text-3xl sm:text-4xl text-slate-900 mb-6">A Platform Built for Syria’s Next Phase</h2>
      <div class="space-y-5 text-brand-gray text-base sm:text-lg leading-relaxed">
        <p>METRACO is a Damascus-based trading and management consulting company positioned at the forefront of Syria’s
          reconstruction and economic development.</p>
        <p>We connect international expertise—particularly from Europe and Italy—with local execution, enabling trade,
          investment, and strategic growth across multiple industries.</p>
        <p>With strong infrastructure, cross-sector capabilities, and a clear growth roadmap, METRACO is building a
          resilient, future-ready business platform.</p>
      </div>
      <div class="mt-8">
        <a wire:navigate href="{{ route('about') }}"
          class="inline-flex items-center gap-2 font-semibold text-brand-blue hover:text-brand-blue-dark transition">
          Discover More
          <x-heroicon-s-arrow-right class="w-4 h-4" />
        </a>
      </div>
    </div>
  </section>

  <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <h2 class="font-display text-3xl sm:text-4xl text-slate-900 mb-8">Our Core Activities</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      <a wire:navigate href="{{ route('business-units') }}"
        class="group p-7 rounded-2xl bg-linear-to-br from-blue-100 via-blue-50 to-white border border-blue-200 hover:border-brand-blue transition shadow-soft hover:-translate-y-1">
        <x-heroicon-o-wrench-screwdriver class="w-10 h-10 text-brand-blue mb-4" />
        <h3 class="font-display text-2xl text-brand-blue mb-3">Trading & Construction</h3>
        <p class="text-brand-gray">Industrial supply, machinery, and materials for large-scale projects</p>
      </a>
      <a wire:navigate href="{{ route('business-units') }}"
        class="group p-7 rounded-2xl bg-linear-to-br from-blue-100 via-blue-50 to-white border border-blue-200 hover:border-brand-blue transition shadow-soft hover:-translate-y-1">
        <x-heroicon-o-chart-bar-square class="w-10 h-10 text-brand-blue mb-4" />
        <h3 class="font-display text-2xl text-brand-blue mb-3">Management Consulting</h3>
        <p class="text-brand-gray">Market entry, strategy, and business development</p>
      </a>
      <a wire:navigate href="{{ route('business-units') }}"
        class="group p-7 rounded-2xl bg-linear-to-br from-blue-100 via-blue-50 to-white border border-blue-200 hover:border-brand-blue transition shadow-soft hover:-translate-y-1">
        <x-heroicon-o-banknotes class="w-10 h-10 text-brand-blue mb-4" />
        <h3 class="font-display text-2xl text-brand-blue mb-3">Investment Platform</h3>
        <p class="text-brand-gray">Multi-sector development across key industries</p>
      </a>
      <a wire:navigate href="{{ route('business-units') }}"
        class="group p-7 rounded-2xl bg-linear-to-br from-blue-100 via-blue-50 to-white border border-blue-200 hover:border-brand-blue transition shadow-soft hover:-translate-y-1">
        <x-heroicon-o-rocket-launch class="w-10 h-10 text-brand-blue mb-4" />
        <h3 class="font-display text-2xl text-brand-blue mb-3">The Business Hub</h3>
        <p class="text-brand-gray">Startup ecosystem and innovation platform</p>
      </a>
    </div>
  </section>

  <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="rounded-3xl bg-slate-900 text-slate-100 p-8 sm:p-12">
      <h2 class="font-display text-3xl sm:text-4xl mb-6">Institutional Alignment & Government Relations</h2>
      <p class="text-slate-200 text-base sm:text-lg leading-relaxed mb-4">METRACO operates with a deep understanding of
        governmental frameworks and national development priorities, positioning itself as a reliable partner for both
        public and private sector initiatives.</p>
      <p class="text-slate-200 text-base sm:text-lg leading-relaxed">We facilitate access, compliance, and execution
        across strategic projects and public-private opportunities.</p>
    </div>
  </section>

  <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <h2 class="font-display text-3xl sm:text-4xl text-slate-900 mb-8">Why METRACO</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-6 lg:grid-cols-5 gap-4">

      {{-- First 3 items: span 2 of 6 cols at md → 3 per row --}}
      <div
        class="sm:col-span-1 md:col-span-2 lg:col-span-1 bg-white border border-blue-100 rounded-2xl p-5 text-brand-gray shadow-soft">
        <x-heroicon-o-link class="w-5 h-5 text-brand-blue mb-3" />
        Multi-Sector Synergy
      </div>

      <div
        class="sm:col-span-1 md:col-span-2 lg:col-span-1 bg-white border border-blue-100 rounded-2xl p-5 text-brand-gray shadow-soft">
        <x-heroicon-o-server-stack class="w-5 h-5 text-brand-blue mb-3" />
        Existing Infrastructure
      </div>

      <div
        class="sm:col-span-1 md:col-span-2 lg:col-span-1 bg-white border border-blue-100 rounded-2xl p-5 text-brand-gray shadow-soft">
        <x-heroicon-o-globe-alt class="w-5 h-5 text-brand-blue mb-3" />
        Local & International Network
      </div>

      {{-- Last 2 items: span 3 of 6 cols at md → 2 per row, fills full width --}}
      <div
        class="sm:col-span-1 md:col-span-3 lg:col-span-1 bg-white border border-blue-100 rounded-2xl p-5 text-brand-gray shadow-soft">
        <x-heroicon-o-bolt class="w-5 h-5 text-brand-blue mb-3" />
        Execution Capability
      </div>

      <div
        class="sm:col-span-1 md:col-span-3 lg:col-span-1 bg-white border border-blue-100 rounded-2xl p-5 text-brand-gray shadow-soft">
        <x-heroicon-o-chart-pie class="w-5 h-5 text-brand-blue mb-3" />
        Economic Impact
      </div>

    </div>
  </section>

  <section class="bg-brand-blue text-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-20 text-center">
      <p class="font-display text-2xl sm:text-4xl lg:text-5xl leading-tight">“To build a resilient, diversified
        platform that contributes to Syria’s economic recovery and long-term growth.”</p>
    </div>
  </section>

  <section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="rounded-3xl bg-white border border-blue-100 p-8 sm:p-12 text-center shadow-premium">
      <h2 class="font-display text-3xl sm:text-4xl text-slate-900 mb-5">Partner with METRACO</h2>
      <p class="text-brand-gray text-base sm:text-lg leading-relaxed mb-8">Whether you are an international company
        entering Syria or a local business seeking growth, we provide the platform, expertise, and network to support
        your ambitions.</p>
      <div class="flex flex-col sm:flex-row justify-center gap-4">
        <a wire:navigate href="{{ route('contact') }}"
          class="inline-flex items-center justify-center gap-2 px-7 py-3.5 rounded-full bg-brand-blue text-white font-semibold hover:bg-brand-blue-dark transition">
          <x-heroicon-s-chat-bubble-left-right class="w-5 h-5" />
          Start a Conversation
        </a>
        <a wire:navigate href="{{ route('contact') }}"
          class="inline-flex items-center justify-center gap-2 px-7 py-3.5 rounded-full border border-slate-300 text-slate-700 font-semibold hover:border-brand-blue hover:text-brand-blue transition">
          <x-heroicon-s-envelope class="w-5 h-5" />
          Contact Us
        </a>
      </div>
    </div>
  </section>
</div>
