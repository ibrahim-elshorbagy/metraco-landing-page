<nav x-data="{ open: false }"
  class="fixed top-0 left-0 right-0 z-50 border-b border-slate-200/80 bg-white backdrop-blur-md">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="h-20 flex items-center justify-between gap-6">
      <a wire:navigate href="{{ route('home') }}" class="flex items-center" aria-label="METRACO Home">
        <img src="{{ asset('assets/logo.webp') }}" alt="METRACO" class="h-12 xl:h-18 w-auto" width="190"
          height="40">
      </a>
      <div class="hidden md:flex items-center gap-1">
        <a wire:navigate href="{{ route('home') }}"
          class="px-4 py-2 rounded-full text-sm font-semibold transition {{ request()->routeIs('home') ? 'bg-brand-blue text-white' : 'text-slate-600 hover:text-brand-blue hover:bg-blue-50' }}">Home</a>
        <a wire:navigate href="{{ route('about') }}"
          class="px-4 py-2 rounded-full text-sm font-semibold transition {{ request()->routeIs('about') ? 'bg-brand-blue text-white' : 'text-slate-600 hover:text-brand-blue hover:bg-blue-50' }}">About</a>
        <a wire:navigate href="{{ route('business-units') }}"
          class="px-4 py-2 rounded-full text-sm font-semibold transition {{ request()->routeIs('business-units') ? 'bg-brand-blue text-white' : 'text-slate-600 hover:text-brand-blue hover:bg-blue-50' }}">Business
          Units</a>
        <a wire:navigate href="{{ route('government-relations') }}"
          class="px-4 py-2 rounded-full text-sm font-semibold transition {{ request()->routeIs('government-relations') ? 'bg-brand-blue text-white' : 'text-slate-600 hover:text-brand-blue hover:bg-blue-50' }}">Government
          Relations</a>
      </div>
      <div class="hidden md:flex items-center">
        <a wire:navigate href="{{ route('contact') }}"
          class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full bg-brand-blue text-white text-sm font-semibold shadow-soft transition hover:bg-brand-blue-dark">
          Contact
          <x-heroicon-s-arrow-right class="w-4 h-4" />
        </a>
      </div>
      <button @click="open = !open" class="md:hidden p-2 rounded-lg text-slate-700 hover:bg-slate-100"
        aria-label="Toggle mobile menu">
        <x-heroicon-o-bars-3 x-show="!open" class="w-6 h-6" />
        <x-heroicon-o-x-mark x-show="open" x-cloak class="w-6 h-6" />
      </button>
    </div>
  </div>
  <div x-show="open" x-transition x-cloak class="md:hidden border-t border-slate-200 bg-white shadow-md">
    <div class="px-4 py-4 flex flex-col gap-2">
      <a wire:navigate href="{{ route('home') }}"
        class="px-4 py-3 rounded-xl text-slate-700 hover:bg-blue-50 hover:text-brand-blue">Home</a>
      <a wire:navigate href="{{ route('about') }}"
        class="px-4 py-3 rounded-xl text-slate-700 hover:bg-blue-50 hover:text-brand-blue">About</a>
      <a wire:navigate href="{{ route('business-units') }}"
        class="px-4 py-3 rounded-xl text-slate-700 hover:bg-blue-50 hover:text-brand-blue">Business Units</a>
      <a wire:navigate href="{{ route('government-relations') }}"
        class="px-4 py-3 rounded-xl text-slate-700 hover:bg-blue-50 hover:text-brand-blue">Government Relations</a>
      <a wire:navigate href="{{ route('contact') }}"
        class="px-4 py-3 rounded-xl bg-brand-blue text-white text-center font-semibold">Contact</a>
    </div>
  </div>
</nav>
<div class="h-20"></div>
