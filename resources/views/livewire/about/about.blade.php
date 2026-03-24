@push('meta')
  <meta name="description"
    content="METRACO is a professionally managed trading and management consulting company based in Damascus, operating at the intersection of trade, strategy, and investment.">
  <meta name="keywords" content="METRACO, Who We Are, Vision, Mission, Values">
  <meta name="robots" content="index, follow">
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="METRACO">
  <meta property="og:title" content="About Us | METRACO">
  <meta property="og:description"
    content="METRACO is a professionally managed trading and management consulting company based in Damascus, operating at the intersection of trade, strategy, and investment.">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta name="theme-color" content="#0f4aa1">
  <link rel="canonical" href="{{ url()->current() }}">
@endpush

<div class="relative overflow-hidden py-12 sm:py-16">
  <div class="absolute -top-24 right-0 w-80 h-80 rounded-full bg-blue-200/40 blur-3xl"></div>
  <div class="absolute bottom-0 -left-24 w-96 h-96 rounded-full bg-cyan-200/40 blur-3xl"></div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-10 sm:space-y-12 relative z-10">
    <section class="panel-premium rounded-3xl p-8 sm:p-12 mesh-ice">
      <div
        class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white border border-blue-100 text-brand-blue text-sm font-semibold mb-6">
        <x-heroicon-o-building-office-2 class="w-4 h-4" />
        Who We Are
      </div>
      <h1 class="font-display text-4xl sm:text-5xl lg:text-6xl text-slate-900 mb-6">Who We Are</h1>
      <div class="space-y-5 text-brand-gray text-base sm:text-lg leading-relaxed max-w-4xl">
        <p>METRACO is a professionally managed trading and management consulting company based in Damascus, operating at
          the intersection of trade, strategy, and investment.</p>
        <p>With an international mindset and strong regional expertise, we support companies, investors, and
          institutions in accessing and developing opportunities across Syria.</p>
      </div>
    </section>

    <section class="grid grid-cols-1 lg:grid-cols-2 gap-6">
      <article class="rounded-3xl mesh-blue text-white p-8 sm:p-10 card-tilt border border-white/10">
        <div class="w-12 h-12 rounded-xl bg-white/10 border border-white/20 flex items-center justify-center mb-5">
          <x-heroicon-o-eye class="w-6 h-6" />
        </div>
        <h2 class="font-display text-3xl sm:text-4xl mb-5">Vision</h2>
        <p class="text-blue-100 text-base sm:text-lg leading-relaxed">To become Syria’s leading diversified business
          platform, fostering economic resilience, entrepreneurship, and sectoral excellence.</p>
      </article>

      <article class="rounded-3xl bg-slate-900 text-white p-8 sm:p-10 card-tilt border border-slate-700">
        <div class="w-12 h-12 rounded-xl bg-white/10 border border-white/20 flex items-center justify-center mb-5">
          <x-heroicon-o-flag class="w-6 h-6" />
        </div>
        <h2 class="font-display text-3xl sm:text-4xl mb-5">Mission</h2>
        <p class="text-slate-200 text-base sm:text-lg leading-relaxed">To develop and manage high-growth business
          activities while enabling reconstruction, facilitating foreign investment, and supporting local enterprises
          through infrastructure, expertise, and strategic partnerships.</p>
      </article>
    </section>

    <section class="panel-premium rounded-3xl p-8 sm:p-12">
      <h2 class="font-display text-3xl sm:text-4xl text-slate-900 mb-6">Values</h2>
      <ul class="grid grid-cols-1 sm:grid-cols-3 gap-4">
        <li class="rounded-2xl bg-brand-blue-ice p-5 text-brand-blue font-semibold border border-blue-100 card-tilt">
          <div class="flex items-center gap-2">
            <x-heroicon-o-check-badge class="w-5 h-5" />
            <span>Transparency</span>
          </div>
        </li>
        <li class="rounded-2xl bg-brand-blue-ice p-5 text-brand-blue font-semibold border border-blue-100 card-tilt">
          <div class="flex items-center gap-2">
            <x-heroicon-o-shield-check class="w-5 h-5" />
            <span>Integrity</span>
          </div>
        </li>
        <li class="rounded-2xl bg-brand-blue-ice p-5 text-brand-blue font-semibold border border-blue-100 card-tilt">
          <div class="flex items-center gap-2">
            <x-heroicon-o-academic-cap class="w-5 h-5" />
            <span>Professionalism</span>
          </div>
        </li>
      </ul>
    </section>
  </div>
</div>
