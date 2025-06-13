  @include('layouts.partials.header')

  <body>

      @include('layouts.partials.preloader')
      <!-- Main Content -->
      <div class="content hidden">
          <!-- Navigation -->
          @include('layouts.partials.nav')



          <!-- Footer -->
          @include('layouts.partials.footer')
          @stack('scripts')
      </div>


  </body>

  </html>
