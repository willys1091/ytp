<!DOCTYPE html>
<html class="no-js" lang="zxx">
    @include('layout.header')
    @yield('extension-css')
  <body class="" data-spy="scroll" data-target="#primary-menu">
    <!-- Google Tag Manager (noscript) -->
      <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MWGTRTV" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    @include('layout.navbar')
    @yield('content')
    @include('layout.footer')
    @include('layout.scripts')
    @yield('script')
	</body>
</html>