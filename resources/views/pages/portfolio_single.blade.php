@extends('main')

@section('title', " $portfolio->title ")

@section('mainContent')

<!-- TITLE -->
  <div class="page-header">
    <div class="grid-container content">
      <div class="grid-x">
        <div class="small-6 medium-6 large-8 columns text-light">
          <h2 class="title">PORTFOLIO</h2>
        </div>
        <div class="small-6 medium-6 large-4 columns text-light">
          <div class="link-2 back"><a href="{{ url('portfolioMain') }}">back</a></div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- CONTENT -->
  <div class="content-area main-content">
    <div class="grid-container project-detail">
      <div class="content-row text-center">
        <div class="background-overlay-gradient"></div>            
        
        <img src="assets/images/works/project-1/1.jpg" alt="" /> </div>
      
      <!-- DESCRIPTION -->
      <div class="grid-x grid-padding-x main-content">
        <div class="small-12  medium-6 large-8 columns left-side">
          <div class="content-row">
            <h3 class="title wow flipInX" data-wow-duration="1s">{{ $portfolio->title }}</h3>
          </div>
          <div class="row">
            <p>{!! $portfolio->description !!}</p>
          </div>          
        </div>

        <div class="small-12 medium-6 large-4 columns right-side">
          <div class="content-row">
            <ul>
              @isset($portfolio->runtime)
              {{-- <h3 class="project-title">VIDEO</h3> --}}
              <div class="video-responsive">
                <li><span>Video Runtime:</span>{{ $portfolio->runtime }}</li>
              </div>
              @endisset

              @empty($portfolio->runtime)
                  <p></p>
              @endempty

              <li><span>Software Used:</span>{{ $portfolio->software }}</li>

              @isset($portfolio->plugins)
              {{-- <h3 class="project-title">VIDEO</h3> --}}
              <div class="video-responsive">
                <li><span>Plugins Used:</span>{{ $portfolio->plugins }}</li>
              </div>
              @endisset

              @empty($portfolio->plugins)
                  <p></p>
              @endempty              
              
            </ul>
          </div>
        </div>
      </div> 

      {{-- Video Section --}}
      @isset($portfolio->video_link)
      {{-- <h3 class="project-title">VIDEO</h3> --}}
      <div class="video-responsive">
          <iframe class="video" width="560" height="475" src="https://www.youtube.com/embed/{{ $portfolio->video_link }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
      </div>
      @endisset

      @empty($portfolio->video_link)
          <p></p>
      @endempty
      
      <!-- GALLERY -->
      <div class="grid-x grid-padding-x main-content">
        <div class="small-12 medium-12 large-12 columns">
          <div class="content-row">
            <h3 class="title wow flipInX" data-wow-duration="1s">GALLERY</h3>
          </div>
          <div class="row">
            <div class="work-gallery">
              <ul id="lightgallery">
                @foreach ($portfolio->photo as $file)
                  @foreach (json_decode($file->filenames) as $name)
                    <li data-src="{{ url('album_images/' . $name) }}" data-sub-html="<h4>{{ $portfolio->title }}</h4>
                      {{-- <p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>" data-pinterest-text="Pin it" data-tweet-text="share on twitter --}}"> 
                      <a href="#"> <img class="img-responsive" src="{{ url('album_images/' . $name) }}" alt="{{ $portfolio->title }}">
                        <div class="work-gallery-poster">
                          <img width="150px" src="{{ url('album_images/' . $name) }}"  class="label label-default"  />
                        </div>
                      </a>
                    </li>                    
                  @endforeach  
                @endforeach               
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection

