  <header
      class="fixed left-0 z-50 w-full
               top-[env(safe-area-inset-top)]
               lg:top-4 lg:left-1/2 lg:-translate-x-1/2 lg:max-w-5xl">

      <nav
          class="glassmorphic-nav shadow-glass
                   flex items-center justify-between
                   px-4 py-3 lg:py-2
                   rounded-none lg:rounded-full">

          <!-- LOGO + TITLE -->
          <a href="{{ route('view.beranda') }}" class="flex items-center gap-2 shrink-0 min-w-0">
              <img src="{{ asset('assets/img/logo.png') }}" class="w-14 h-14 shrink-0" alt="Logo">

              <!-- TAMPIL DI MOBILE & DESKTOP -->
              <span class="truncate text-lg sm:text-xl font-bold text-brand-dark">
                  SMK Krian 1 Sidoarjo
              </span>
          </a>

          <!-- MENU DESKTOP -->
          <div class="hidden lg:flex items-center gap-6">
              @foreach (['tentang', 'fasilitas', 'prestasi', 'ppdb', 'berita', 'galeri'] as $m)
                  <a href="{{ request()->routeIs('view.beranda') ? "#$m" : route('view.beranda') . "#$m" }}"
                      class="relative text-brand-gray hover:text-brand-dark transition
                              after:absolute after:left-0 after:-bottom-1 after:h-[2px]
                              after:w-0 after:bg-brand-accent after:transition-all
                              hover:after:w-full">
                      {{ ucfirst($m) }}
                  </a>
              @endforeach
          </div>

          <!-- ACTION -->
          <div class="flex items-center gap-2">
              @guest
                  <a href="{{ route('login') }}"
                      class="hidden lg:inline-block
                              bg-blue-500 text-white
                              px-4 py-2 rounded-full
                              text-sm font-semibold">
                      Login
                  </a>
              @endguest

              @auth
                  <a href="{{ route('beranda.admin') }}"
                      class="hidden lg:inline-block
                              bg-brand-accent text-white
                              px-4 py-2 rounded-full
                              text-sm font-semibold">
                      Dashboard
                  </a>
              @endauth

              <!-- MOBILE MENU BUTTON -->
              <button id="menuBtn" class="lg:hidden p-2 rounded-lg hover:bg-black/10 transition">
                  <svg id="menuIcon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h16" />
                  </svg>
              </button>
          </div>
      </nav>
  </header>

  <!-- BACKDROP -->
  <div id="backdrop" class="fixed inset-0 z-40 bg-black/40 backdrop-blur-sm hidden"></div>

  <!-- MOBILE SIDEBAR FULL SCREEN -->
  <aside id="mobileSidebar"
      class="fixed inset-0 z-50
               h-[100dvh] w-full
               translate-x-full transition-transform duration-300
               glassmorphic-nav flex flex-col">

      <!-- SIDEBAR HEADER -->
      <div class="flex items-center justify-between
                    px-4 py-4 border-b border-white/10">
          <div class="flex items-center gap-2 min-w-0">
              <img src="{{ asset('assets/img/logo.png') }}" class="w-9 h-9 shrink-0">
              <span class="truncate font-semibold text-brand-dark">
                  SMK Krian 1 Sidoarjo
              </span>
          </div>
          <button id="closeSidebar" class="p-2 rounded-lg hover:bg-black/10 transition">
              ✕
          </button>
      </div>

      <!-- SIDEBAR MENU -->
      <nav class="flex-1 px-4 py-6 space-y-2 overflow-y-auto">
          @foreach (['tentang', 'fasilitas', 'prestasi', 'ppdb', 'berita', 'galeri'] as $m)
              <a href="{{ request()->routeIs('view.beranda') ? "#$m" : route('view.beranda') . "#$m" }}"
                  class="group relative block rounded-xl
                          px-4 py-3 text-lg font-medium text-brand-gray
                          transition-all duration-200
                          hover:text-brand-dark hover:bg-white/10 hover:translate-x-1
                          active:scale-[0.98]">
                  <span class="relative z-10">
                      {{ ucfirst($m) }}
                  </span>
                  <span
                      class="absolute inset-y-2 left-0 w-1 rounded-full
                               bg-brand-accent opacity-0
                               group-hover:opacity-100 transition"></span>
              </a>
          @endforeach
      </nav>

      <!-- SIDEBAR ACTION -->
      <div class="px-6 pb-6 space-y-3">
          @guest
              <a href="{{ route('login') }}"
                  class="block w-full text-center
                          bg-blue-500 text-white
                          py-3 rounded-xl font-semibold">
                  Login
              </a>
          @endguest

          @auth
              <a href="{{ route('beranda.admin') }}"
                  class="block w-full text-center
                          bg-brand-accent text-white
                          py-3 rounded-xl font-semibold">
                  Dashboard
              </a>
          @endauth
      </div>

      <!-- FOOTER -->
      <div class="px-6 pb-4 text-xs text-center text-brand-gray/70">
          © {{ date('Y') }} SMK Krian 1 Sidoarjo
      </div>
  </aside>

  <!-- SCRIPT -->
  <script>
      const menuBtn = document.getElementById('menuBtn');
      const closeBtn = document.getElementById('closeSidebar');
      const sidebar = document.getElementById('mobileSidebar');
      const backdrop = document.getElementById('backdrop');
      const icon = document.getElementById('menuIcon');
      let open = false;

      function toggleMenu() {
          open = !open;
          sidebar.classList.toggle('translate-x-full');
          backdrop.classList.toggle('hidden');
          document.body.classList.toggle('overflow-hidden');

          icon.innerHTML = open ?
              `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                         d="M6 18L18 6M6 6l12 12" />` :
              `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                         d="M4 6h16M4 12h16M4 18h16" />`;
      }

      menuBtn.addEventListener('click', toggleMenu);
      closeBtn.addEventListener('click', toggleMenu);
      backdrop.addEventListener('click', toggleMenu);
  </script>
