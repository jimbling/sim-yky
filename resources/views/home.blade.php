  @include('layouts.partials.header')

  <body class="overflow-x-hidden">


      @include('layouts.partials.preloader')
      <!-- Main Content -->
      <div class="content hidden">
          <!-- Navigation -->
          @include('layouts.partials.nav')

          <!-- Hero Section -->
          <section class="gradient-bg text-white overflow-hidden">
              @include('components.homepage.hero')
          </section>




          <section id="fitur" class="py-16 bg-gray-50">
              @include('components.homepage.fitur')
          </section>


          <section id="layanan" class="py-16 bg-white">
              @include('components.homepage.layanan')
          </section>




          <section id="harga" class="py-16 bg-white">
              @include('components.homepage.harga')
          </section>

          <section id="artikel" class="py-16 bg-gray-50">
              @include('components.homepage.berita')
          </section>

          <section id="demo" class="py-16 gradient-bg text-white">
              @include('components.homepage.cta')
          </section>


          <section id="contact" class="py-16 bg-white">
              @include('components.homepage.kontak')
          </section>


          @include('layouts.partials.footer')
          @stack('scripts')
      </div>


  </body>

  </html>
