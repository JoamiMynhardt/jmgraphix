<!doctype html>
<html class="no-js" lang="en" dir="ltr">
    
@include('templates._head')

<body>
<div class="page"> 
   
    
  
    @include('templates._menu')

    @include('templates._header')


    @yield('mainContent')    

</div>

@include('templates._footer')

@include('templates._javascript')

{{-- <script data-cfasync="false" src="../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="../../../../../ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="4f76a0229b714ef9f2395586-|49" defer=""></script> --}}
</body>
</html>

