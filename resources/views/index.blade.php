@extends('layouts.main')

@section('content')

    {{-- Navigation --}}
    @include('snippets/_navigation')

    <!-- Masthead -->
    @include('snippets._masthead')

    <!-- Values Section -->
    @include('snippets._values_section')

    <!-- Call to Action -->
    @include('snippets._call_to_action')

    <!-- People Section -->
    @include('snippets._people_section')

    <!-- Press Section -->
    @include('snippets._press_section')

    <!-- Newsletter Signup Call to Action -->
    @include('snippets._newsletter_singup')

    <!-- Hours Section - Repurposed from Pricing Table -->
    @include('snippets._hours_section')

    <!-- Menu Gallery -->
    @include('snippets._menu_gallery')

    <!-- Block Button Call to Action -->
    {{-- <a class="btn btn-block btn-full-width" href="https://wrapbootstrap.com/theme/vitality-multipurpose-one-page-theme-WB02K3KK3">Buy Vitality Now!</a> --}}

    <!-- Footer -->
    @include('snippets._footer')

    <!-- build:remove:dist -->

@endsection

@push('_js_stack')
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="vendor/owl-carousel/owl.carousel.js"></script>
  <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
  <script src="vendor/vide/jquery.vide.min.js"></script>
  <script src="vendor/mixitup/mixitup.min.js"></script>
  <script src="vendor/wowjs/wow.min.js"></script>

  <!-- Contact form JavaScript -->
  <script src="js/contact_me.js"></script>
  <script src="js/jqBootstrapValidation.js"></script>

  <!-- Custom scripts for this theme -->
  <script src="js/vitality.js"></script>
@endpush
