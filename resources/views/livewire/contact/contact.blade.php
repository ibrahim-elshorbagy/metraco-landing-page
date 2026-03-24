@push('meta')
  <meta name="description" content="Partner With METRACO">
  <meta name="keywords" content="METRACO, Contact, Damascus, Syria">
  <meta name="robots" content="index, follow">
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="METRACO">
  <meta property="og:title" content="Contact | METRACO">
  <meta property="og:description" content="Partner With METRACO">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta name="theme-color" content="#0f4aa1">
  <link rel="canonical" href="{{ url()->current() }}">
@endpush

<div class="relative overflow-hidden py-14 sm:py-20">
  <div class="absolute -top-28 right-0 w-96 h-96 rounded-full bg-blue-200/40 blur-3xl"></div>
  <div class="absolute -bottom-20 -left-20 w-80 h-80 rounded-full bg-cyan-200/30 blur-3xl"></div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <section class="rounded-3xl panel-premium p-8 sm:p-12 mb-8 mesh-ice">
      <h1 class="font-display text-4xl sm:text-5xl text-slate-900 mb-6">Partner With METRACO</h1>
      <p class="text-brand-gray text-base sm:text-lg leading-relaxed mb-10">We welcome partnerships with international
        companies, investors, and institutions looking to engage in Syria’s next phase of development.</p>

      <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
        <div class="rounded-2xl bg-brand-blue-ice p-5 border border-blue-100">
          <h2 class="font-semibold text-brand-blue mb-2 flex items-center gap-2">
            <x-heroicon-o-map-pin class="w-5 h-5" />
            Location
          </h2>
          <p class="text-brand-gray">Damascus, Syria</p>
        </div>
        <div class="rounded-2xl bg-brand-blue-ice p-5 border border-blue-100">
          <h2 class="font-semibold text-brand-blue mb-2 flex items-center gap-2">
            <x-heroicon-o-envelope class="w-5 h-5" />
            Email
          </h2>
          <p class="text-brand-gray">[insert]</p>
        </div>
        <div class="rounded-2xl bg-brand-blue-ice p-5 border border-blue-100">
          <h2 class="font-semibold text-brand-blue mb-2 flex items-center gap-2">
            <x-heroicon-o-phone class="w-5 h-5" />
            Phone
          </h2>
          <p class="text-brand-gray">[insert]</p>
        </div>
      </div>
    </section>

    <section class="grid grid-cols-1 lg:grid-cols-5 gap-6">
      <div
        class="lg:col-span-2 rounded-3xl mesh-blue text-white p-8 sm:p-10 flex flex-col items-center justify-center gap-6 border border-white/10 shadow-premium">
        <div
          class="w-28 h-28 rounded-full bg-white/10 border border-white/20 flex items-center justify-center animate-float">
          <x-heroicon-o-chat-bubble-left-right class="w-14 h-14" />
        </div>
      </div>

      <div class="lg:col-span-3 rounded-3xl bg-white border border-blue-100 p-8 sm:p-10 shadow-soft">
        <form wire:submit="submit" class="space-y-5">
          <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
            <div>
              <label for="name" class="block text-sm font-semibold text-slate-700 mb-2">Name</label>
              <input id="name" type="text" wire:model="name"
                class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-brand-blue focus:ring-2 focus:ring-blue-100 transition"
                placeholder="Name">
              @error('name')
                <p class="text-sm text-red-500 mt-2">{{ $message }}</p>
              @enderror
            </div>
            <div>
              <label for="email" class="block text-sm font-semibold text-slate-700 mb-2">Email</label>
              <input id="email" type="email" wire:model="email"
                class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-brand-blue focus:ring-2 focus:ring-blue-100 transition"
                placeholder="Email">
              @error('email')
                <p class="text-sm text-red-500 mt-2">{{ $message }}</p>
              @enderror
            </div>
          </div>

          <div>
            <label for="company" class="block text-sm font-semibold text-slate-700 mb-2">Company</label>
            <input id="company" type="text" wire:model="company"
              class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-brand-blue focus:ring-2 focus:ring-blue-100 transition"
              placeholder="Company">
            @error('company')
              <p class="text-sm text-red-500 mt-2">{{ $message }}</p>
            @enderror
          </div>

          <div>
            <label for="message" class="block text-sm font-semibold text-slate-700 mb-2">Message</label>
            <textarea id="message" wire:model="message" rows="6"
              class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-brand-blue focus:ring-2 focus:ring-blue-100 resize-none transition"
              placeholder="Message"></textarea>
            @error('message')
              <p class="text-sm text-red-500 mt-2">{{ $message }}</p>
            @enderror
          </div>

          <button type="submit"
            class="cursor-pointer inline-flex items-center gap-2 px-7 py-3.5 rounded-full bg-brand-blue text-white font-semibold hover:bg-brand-blue-dark transition"
            wire:loading.attr="disabled">
            <x-heroicon-s-paper-airplane class="w-5 h-5" />
            Send Message
          </button>
        </form>

        @if ($successMessage)
          <div class="mt-6 p-4 rounded-xl bg-green-50 border border-green-200 text-green-700 text-sm">
            {{ $successMessage }}</div>
        @endif
      </div>
    </section>
  </div>
</div>
