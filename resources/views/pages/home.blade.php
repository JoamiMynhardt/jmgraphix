@include('templates._head')

@section('title', 'HOME')

<body>   

<!-- PRELOADER -->
<div id="overlayer">
  <div class="overlay"></div>
  <div class="loader">
  <h3>JM GRAPHIX</h3> 
  <ul class="loader-inner">
    <li>PLEASE WAIT</li>
    <li>.</li>
    <li>.</li>
    <li>.</li>
  </ul>
  </div> </div>
<div id="wrapper">
  <div class="page-background"> 
    
    <!-- VIDEO CODE -->
    <video class="video-bg" playsinline autoplay muted loop>
      <source src="{{ url('video/Video_Background1.mp4') }}" type="video/mp4">
    </video>
    <div class="line-animation line-pattern-1"></div>
    <div class="line-animation line-pattern-2"></div>
    <div class="line-animation line-pattern-3"></div>
    <div class="line-animation line-pattern-4"></div>
    <div class="line-animation line-pattern-5"></div>
    <div class="line-animation line-pattern-6"></div>
    <div class="background-overlay"></div>
  </div>
  
  @include('templates._menu')

  @include('templates._header')
  
    
  <!-- SLIDER CONTENT AREA -->
  <div class="grid-x grid-padding-x text-container"> 
    <!-- TEXT ROTATION (you can change text from "typing.js") -->
    <div class="text">
      <h3>I'M</h3>
      <h2 class="typing-text"> <span>AN EDITOR</span> <span>AN ANIMATER</span> <span>A WEB DEVELOPER</span> </h2>
      <div class="link"><a href="{{ url('portfolio') }}">MY PORTFOLIO</a></div>
    </div>
  </div>
  
  <!-- FOOTER -->
  <footer class="grid-x grid-padding-x footer"> 
    <!-- HIRE ME BUTTON -->
    <div class="hire-me"> <a href="{{ url('contact') }}" >HIRE ME!</a> </div>
    
    <!-- SOCIAL LINKS -->
    <div class="social-profile">
      <ul>
        <li><a href="#" class="icon soc-facebook"></a></li>
        <li><a href="#" class="icon soc-instagram"></a></li>
        <li><a href="#" class="icon soc-youtube"></a></li>
      </ul>
    </div>
  </footer>
  
</div>

@include('templates._javascript')
<script src="{{ url('js/typing.js') }}" type="text/javascript"></script>


{{-- <script data-cfasync="false" src="../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="../../../../../ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="4f76a0229b714ef9f2395586-|49" defer=""></script> --}}
</body>
</html>


