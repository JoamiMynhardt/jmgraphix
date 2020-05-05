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
          <div class="link-2 back"><a href="{{ url('/') }}">back</a></div>
        </div>
      </div>
    </div>
  </div>
  <!-- CONTENT -->
  <div class="content-area"> 
    <!-- WORK FILTER TABS -->
    <div class="grid-container">
      <div class="content-row text-center">
        <div class="button-group filters-button-group work-tabs">
          <button class="button is-checked" data-filter="*">ALL</button>
          @foreach ($tags as $tag)
            <button class="button" data-filter=".{{ $tag->tag_filter }}">{{ $tag->name }}</button>
          @endforeach
        </div>
      </div>
      <div class="content-row text-center">
        <p class="text-color font24 mt30">Here are different projects that I've done. Some are videos for clients and some are "Fanart", simply because I love the artist's music or TV shows that I enjoy.</p>
      </div>
    </div>


    <!-- WORK PHOTOS -->
    <div class="work-content">
		<form>
      <div class="content-row">
        <div class="grid" id="work-gallery">
          {{-- {{ $portfolioEntries->tags->name }} --}}

          {{-- @foreach ($portfolioEntries->tags as $tag)
          {{ $tag->name }}
      @endforeach --}}
          @foreach ($portfolioEntries as $portfolioEntry)

          <div class="element-item transition @foreach($portfolioEntry->tags as $tag) {{ $tag->tag_filter }}@endforeach">
            <div class="work-item">
              <div class="hover-area">
                <div class="background-overlay"></div>
                <div class="content">
                  <h3>{{ $portfolioEntry->title }}</h3>
                  <div class="link-1">                   
                    <a href="{{ url('project/'.$portfolioEntry->slug) }}">VIEW PROJECT</a>
                  </div>
                </div>
              </div>
              {{-- <img src="{{ asset('public/images/' . $portfolioEntry->cover_image) }}" alt="" /> --}}
              <img src="{{ url('cover_images/' . $portfolioEntry->cover_image) }}" alt="{{ $portfolioEntry->title }}" />
            </div>
          </div>

          @endforeach

        </div>
      </div>
    </form>
      
    </div>
  </div>

@endsection

