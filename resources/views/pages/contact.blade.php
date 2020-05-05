@extends('main')

@section('title', 'CONTACT')

@section('mainContent')

<!-- RESUME SECTION -->
  
  <div id="resume"> 
    <!-- TITLE / HEADER -->
    <div class="grid-container content">
      <div class="grid-x">
        <div class="small-6 medium-6 large-8 columns text-light">
          <h2 class="title">CONTACT</h2>
        </div>
        <div class="small-6 medium-6 large-4 columns text-light">
          <div class="link back"><a href="index.html">back</a></div>
        </div>
      </div>

      @if (session('success'))

    <div class="callout success" role="alert">
        <strong>Success:</strong>{{ Session::get('success') }}    
    </div>
    
    @endif
    
    @if (count($errors) > 0)
    
        <div class="callout alert" role="alert">
            <strong>Errors:</strong>
            <ul>
                @foreach ($errors->all() as $error )
            <li>{{ $error }}</li>                
                @endforeach
            </ul>
        </div>
    
    @endif
      
      <!-- CONTACT OVERVIEW -->
      <div class="grid-x grid-padding-x main-content">
        <div class="small-12 columns">
          <div class="content-row">
            {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d59526.98676590333!2d72.83788185995166!3d21.174805314311943!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1580461381586!5m2!1sen!2sin" height="450" allowfullscreen=""></iframe> --}}
          </div>
          <div class="content-row">
            <div class="grid-x ">
              <div class="small-12 medium-6 large-6 column">
                <div class="content-row">
                  <h3 class="title wow flipInX" data-wow-duration="1s">CONTACT DETAILS</h3>
                </div>
                <p><i class="address-pin-icon"></i>Queensburgh | Durban | South Africa</p>
                <ul class="listing">
                  <li><i class="call-icon"></i>+27 72 773 7049</li>
                  <li><i class="email-icon"></i><a href="mailto:joami@jmgraphix.com">joami@jmgraphix.com</a></li>
                  <li><i class="website-icon"></i><a href="http://jmgraphix.com" target="_blank">www.jmgraphix.com</a></li>
                </ul>
              </div>
              <div class="small-12 medium-6 large-6 column">
                <div class="content-row">
                  <h3 class="title wow flipInX" data-wow-duration="1s">DROP A MESSAGE</h3>
                </div>
                <div class="content-row">
                   <form action="{{ url('contact') }}" method="POST">
                    <div class="container">
                      <div class="grid-x grid-padding-x">                  

                          @csrf

                          <div class="medium-12 cell">
                            <input type="text" placeholder="Subject" name="subject" type="text" required minlength="5" maxlength="255">
                          </div>
                          <div class="medium-6 cell">
                            <input type="text" placeholder="Your Name" name="name" type="text" required minlength="5" maxlength="255">
                          </div>
                          <div class="medium-6 cell">
                            <input type="text" placeholder="Phone Number" name="phone" type="phone" minlength="5" maxlength="255">
                          </div>
                          <div class="medium-12 cell">
                            <input type="text" placeholder="Email Address" name="email" type="email" required minlength="5" maxlength="255">
                          </div>
                          <div class="medium-12 cell">
                            <textarea placeholder="Enter Your Message Here" name="message" required minlength="5" maxlength="255"></textarea>
                          </div>
                          <div class="medium-12 cell">                            
                            <div class="link-1 submit float-right">
                              <button type="submit" style="cursor: pointer;">SEND MESSAGE</button>
                            </div>
                          </div>                     

                      </div>
                    </div>
                  </form>
                  {{-- //form end --}}
                </div>
                {{-- // row --}}

              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="grid-x grid-padding-x main-content">
        <div class="small-12 columns">

          <div class="content-row">
            <h3 class="title wow flipInX" data-wow-duration="1s">CV DOWNLOAD AND WATCH MY VIDEO CV ON YOUTUBE</h3>
          </div>

          <div class="row">
            <div class="cv-small-12 medium-6 cv-large-4 columns">
              <div class="button"><a href="assets/cv/Joami website CV.pdf" download>Developer CV Dwonload</a></div>
            </div>
            <div class="cv-small-12 medium-6 cv-large-4 columns">
              <div class="button"><a href="assets/cv/Joami Mynhardt Film CV.pdf" download>Video Editor CV Download</a></div>
            </div>
            <div class="cv-small-12 medium-6 cv-large-4 columns">
              <div class="button"><a href="http://youtube.com" target="blank">Watch CV on YouTube</a></div>
            </div>
          </div>
        </div>
      </div>


    </div>
    
  </div>

@endsection

