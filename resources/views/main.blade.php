@include('partials._head')
@include('partials._nav')

{{-- <div class="container" style="padding-top: 75px;">
   @include('partials._messages')
   </div> --}}
   @yield('content')

@include('partials._footer')