<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @include('partials.style')
    @yield('styles')

    <title>Ruang Dosen - @yield('title')</title>
  </head>
  <body>
    {{-- Navigation --}}
    @if(!Request::is('login/dosen'))
    	@include('partials.navbar')
    @endif
    @yield('content')  
    
    @include('partials.script')
    @yield('scripts')
  </body>
</html>