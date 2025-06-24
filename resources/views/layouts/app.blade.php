  @include('layouts.partials.header')

  <body>

      @include('layouts.partials.preloader')
      <!-- Main Content -->
      <div class="content hidden">
          <!-- Navigation -->
          @include('layouts.partials.nav')

          <main>
              @yield('content') {{-- Ini tempat konten dari show.blade.php akan masuk --}}
          </main>

          <!-- Footer -->
          @include('layouts.partials.footer')
          @stack('scripts')
      </div>


  </body>

  </html>
