  @include('layouts.partials.header')

  <body>

      @include('layouts.partials.preloader')
      <!-- Main Content -->
      <div class="content hidden">
          <!-- Navigation -->
          @include('layouts.partials.nav')

          <!-- Hero Section -->
          <section class="gradient-bg text-white overflow-hidden">
              @include('components.homepage.hero')
          </section>

          <!-- Trusted By -->
          <section class="py-12 bg-white">
              @include('components.homepage.slider')
          </section>

          <!-- Features Section -->
          <section id="fitur" class="py-16 bg-gray-50">
              @include('components.homepage.fitur')
          </section>

          <!-- Services Section -->
          <section id="layanan" class="py-16 bg-white">
              @include('components.homepage.layanan')
          </section>

          <!-- SIESDE Focus Section -->
          <section id="siesde" class="py-16 bg-gray-50">
              @include('components.homepage.siesde')
          </section>


          <!-- Pricing Section -->
          {{-- <section id="harga" class="py-16 bg-white">
              @include('components.homepage.harga')

          </section> --}}

          <!-- Testimonials -->
          {{-- <section id="artikel" class="py-16 bg-gray-50">
              @include('components.homepage.berita')
          </section> --}}

          <!-- CTA Section -->
          <section id="demo" class="py-16 gradient-bg text-white">
              @include('components.homepage.cta')
          </section>

          <!-- Contact Section -->
          <section id="contact" class="py-16 bg-white">
              @include('components.homepage.kontak')

          </section>

          <!-- Footer -->
          @include('layouts.partials.footer')
          @stack('scripts')
      </div>


  </body>

  </html>
