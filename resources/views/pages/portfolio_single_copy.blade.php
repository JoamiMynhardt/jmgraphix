@extends('main')

@section('title', 'PORTFOLIO')

@section('mainContent')

<!-- TITLE -->
  <div class="page-header">
    <div class="grid-container content">
      <div class="grid-x">
        <div class="small-6 medium-6 large-8 columns text-light">
          <h2 class="title">PORTFOLIO</h2>
        </div>
        <div class="small-6 medium-6 large-4 columns text-light">
          <div class="link-2 back"><a href="{{ url('portfolio') }}">back</a></div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- CONTENT -->
  <div class="content-area main-content">
    <div class="grid-container project-detail">
      <div class="content-row text-center">
        <div class="background-overlay-gradient"></div>
        <h3 class="project-title">WEDDING SHOOT</h3>
        <img src="assets/images/works/project-1/1.jpg" alt="" /> </div>
      
      <!-- DESCRIPTION -->
      <div class="grid-x grid-padding-x main-content">
        <div class="small-12  medium-6 large-8 columns left-side">
          <div class="content-row">
            <h3 class="title wow flipInX" data-wow-duration="1s">DESCRIPTION</h3>
          </div>
          <div class="row">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla tempor, risus dignissim egestas mollis, nibh neque semper orci, id sollicitudin massa augue ac nisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc accumsan commodo turpis at pulvinar. </p>
          </div>
          <div class="content-row">
            <ul class="project-list-content">
              <li>Interdum et malesuada</li>
              <li>Fames ac ante</li>
              <li>Primis in faucibus</li>
              <li>Accumsan commodo</li>
              <li>Egestas mollis</li>
            </ul>
            <ul class="project-list-content">
              <li>Interdum et malesuada</li>
              <li>Fames ac ante</li>
              <li>Primis in faucibus</li>
              <li>Accumsan commodo</li>
              <li>Egestas mollis</li>
            </ul>
          </div>
        </div>
        <div class="small-12 medium-6 large-4 columns right-side">
          <div class="content-row">
            <ul>
              <li><span>Date:</span>24 Oct, 2019</li>
              <li><span>Brand:</span>Premimum Outlet</li>
              <li><span>Total Time:</span>02 Months+91 99247 60627</li>
            </ul>
          </div>
        </div>
      </div>
      
      <!-- GALLERY -->
      <div class="grid-x grid-padding-x main-content">
        <div class="small-12 medium-12 large-12 columns">
          <div class="content-row">
            <h3 class="title wow flipInX" data-wow-duration="1s">GALLERY</h3>
          </div>
          <div class="row">
            <div class="work-gallery">
              <ul id="lightgallery">
                <li data-src="assets/images/works/1.jpg"
      data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>" data-pinterest-text="Pin it" data-tweet-text="share on twitter "> <a href="#"> <img class="img-responsive" src="assets/images/works/1.jpg" alt="Photo 1">
                  <div class="work-gallery-poster"> <img src="../../../../../sachinchoolur.github.io/lightGallery/static/img/zoom.png" alt="Photo 1"> </div>
                  </a> </li>
                <li data-src="assets/images/works/2.jpg"
      data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>" data-pinterest-text="Pin it" data-tweet-text="share on twitter "> <a href="#"> <img class="img-responsive" src="assets/images/works/2.jpg" alt="Photo 2">
                  <div class="work-gallery-poster"> <img src="../../../../../sachinchoolur.github.io/lightGallery/static/img/zoom.png" alt="Photo 2"> </div>
                  </a> </li>
                <li data-src="assets/images/works/3.jpg"
      data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>" data-pinterest-text="Pin it" data-tweet-text="share on twitter "> <a href="#"> <img class="img-responsive" src="assets/images/works/3.jpg" alt="Photo 3">
                  <div class="work-gallery-poster"> <img src="../../../../../sachinchoolur.github.io/lightGallery/static/img/zoom.png" alt="Photo 3"> </div>
                  </a> </li>
                <li data-src="assets/images/works/4.jpg"
      data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>" data-pinterest-text="Pin it" data-tweet-text="share on twitter "> <a href="#"> <img class="img-responsive" src="assets/images/works/4.jpg" alt="Photo 4">
                  <div class="work-gallery-poster"> <img src="../../../../../sachinchoolur.github.io/lightGallery/static/img/zoom.png" alt="Photo 4"> </div>
                  </a> </li>
                <li data-src="assets/images/works/5.jpg"
      data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>" data-pinterest-text="Pin it" data-tweet-text="share on twitter "> <a href="#"> <img class="img-responsive" src="assets/images/works/5.jpg" alt="Photo 5">
                  <div class="work-gallery-poster"> <img src="../../../../../sachinchoolur.github.io/lightGallery/static/img/zoom.png" alt="Photo 5"> </div>
                  </a> </li>
                <li data-src="assets/images/works/6.jpg"
      data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>" data-pinterest-text="Pin it" data-tweet-text="share on twitter "> <a href="#"> <img class="img-responsive" src="assets/images/works/6.jpg" alt="Photo 6">
                  <div class="work-gallery-poster"> <img src="../../../../../sachinchoolur.github.io/lightGallery/static/img/zoom.png" alt="Photo 6"> </div>
                  </a> </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection

