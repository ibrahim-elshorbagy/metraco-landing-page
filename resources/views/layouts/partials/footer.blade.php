<footer class="bg-white border-t border-blue-100 mt-20">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-14">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
      <div>
        <a wire:navigate href="{{ route('home') }}" class="inline-flex items-center mb-4" aria-label="METRACO Home">
          <img src="{{ asset('assets/logo.webp') }}" alt="METRACO" class="h-12 xl:h-18 w-auto" width="190"
            height="40">
        </a>
        <p class="text-slate-600 text-sm leading-relaxed">A trusted partner for international companies and institutions
          entering Syria.</p>
      </div>

      <div>
        <h3 class="text-brand-blue font-semibold mb-4">Navigation</h3>
        <ul class="space-y-2 text-sm">
          <li><a wire:navigate href="{{ route('about') }}"
              class="text-slate-600 hover:text-brand-blue transition">About</a></li>
          <li><a wire:navigate href="{{ route('business-units') }}"
              class="text-slate-600 hover:text-brand-blue transition">Business Units</a></li>
          <li><a wire:navigate href="{{ route('government-relations') }}"
              class="text-slate-600 hover:text-brand-blue transition">Government Relations</a></li>
          <li><a wire:navigate href="{{ route('contact') }}"
              class="text-slate-600 hover:text-brand-blue transition">Contact</a></li>
          <li><a href="#" class="text-slate-600 hover:text-brand-blue transition">Legal</a></li>
        </ul>
      </div>

      <div>
        <h3 class="text-brand-blue font-semibold mb-4">Contact</h3>
        <p class="text-sm text-slate-600">Damascus, Syria</p>
        <p class="text-sm text-slate-600">Email: [insert]</p>
        <p class="text-sm text-slate-600">Phone: [insert]</p>
      </div>
    </div>
  </div>

  <div class="border-t border-blue-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-5 text-xs text-slate-500 flex items-center justify-between">

      <p class="text-gray-500 text-sm">
        © <span class="text-brand-blue">METRACO</span>. All rights reserved.
      </p>
    </div>
  </div>
</footer>
