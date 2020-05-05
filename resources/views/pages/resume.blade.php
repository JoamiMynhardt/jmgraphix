@extends('main')

@section('title', 'RESUME')

@section('mainContent')

<!-- TITLE -->
  <div class="page-header">
    <div class="grid-container content">
      <div class="grid-x">
        <div class="small-6 medium-6 large-8 columns text-light">
          <h2 class="title">RESUME</h2>
        </div>
        <div class="small-6 medium-6 large-4 columns text-light">
          <div class="link-2 back"><a href="{{ url('portfolio') }}">PORTFOLIO</a></div>
        </div>
      </div>
    </div>
  </div>
  <div class="content-area main-content">
    <div class="grid-container"> 
      
      <!-- INTRODUCTION / ABOUT ME  -->
      <div class="grid-x grid-padding-x main-content">
        <div class="small-12  medium-6 large-9 columns left-side">
          <div class="content-row">
            <h3 class="wow flipInX" data-wow-duration="1s">JOAMI MYNHARDT</h3>
            <p>Video Editor, Animater and Website Developer</p>
          </div>
          <div class="row">
            <h4>Passionate about filmmaking, editing, production, animating and website developing.</h4>
            <p>I am a highly competent IT professional with a proven track record
              in designing, video editing, animation, web designing and
              developing. I have strong technical skills as well as excellent
              interpersonal skills enabling me to interact with a wide range of
              clients. I am eager to be challenged in order to grow and further
              improve my IT skills. My greatest passion in life is creating
              something from nothing and watching it all come together. </p>
            <p>I have to perosnal logos. 1 for filmmaking and another for website developing. The
              reasons for that are as follow: for my YouTube channel, Facebook Page and Instagram account,
              I mainly upload my edits and videos, therefor it's better to use my filmmaking logo. As
              mentioned before I'm also a website developer, therefor my website logo fits this category
              better.</p>
          </div>
          <div class="content-row">
            <ul>
              <li><i class="call-icon"></i>+27 72 773 7049</li>
              <li><i class="email-icon"></i><a href="mailto:joami@jmgraphix.co.za">joami@jmgraphix.co.za</a></li>
              <li><i class="website-icon"></i><a href="http://jmgraphix.co.za" target="_blank">www.jmgraphix.co.za</a></li>
            </ul>
          </div>
        </div>
        <div class="small-12 medium-6 large-3 columns right-side">
          <div class="content-row">
            <div class="button"><a href="{{ url('contact') }}">HIRE ME!</a></div>
          </div>
          <div class="content-row"> <img src="{{ url('images/about-pic.jpg') }}" alt="" class="img" /> </div>
        </div>
      </div>

      <!-- SKILLS -->
      <div class="grid-x grid-padding-x main-content">
        <div class="small-12 columns">
          <div class="content-row">
            <h3 class="title wow flipInX" data-wow-duration="1s">SKILLS</h3>
          </div>
          <div class="row">
            <div class="single-progressbar">
              <h4 class="title">GRAPHIC DESIGN</h4>
              <div class="skillbar-first"></div>
            </div>
            <div class="single-progressbar">
              <h4 class="title">VIDEO’S / AFTER AFFECTS / MOTION GRAPHICS</h4>
              <div class="skillbar-second"></div>
            </div>
            <div class="single-progressbar">
              <h4 class="title">HTML / CSS</h4>
              <div class="skillbar-third"></div>
            </div>
            <div class="single-progressbar">
              <h4 class="title">PHP</h4>
              <div class="skillbar-four"></div>
            </div>
            <div class="single-progressbar">
              <h4 class="title">JS</h4>
              <div class="skillbar-fifth"></div>
            </div>
            <div class="single-progressbar">
              <h4 class="title">VIDEOGRAPHY AND PHOTOGRAPHY</h4>
              <div class="skillbar-sixth"></div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- EDUCATION -->
      <div class="grid-x grid-padding-x main-content">
        <div class="small-12 columns">
          <div class="content-row">
            <h3 class="title wow flipInX" data-wow-duration="1s">EDUCATION</h3>
          </div>
          <div class="row education">
            <ul>
              <li class="wow fadeInLeft" data-wow-delay="1s" data-wow-duration=".5s">
                <div class="content-area">
                  <h2><span>Port Natal School</span></h2>
                  <p>I finished high school in 2010 and I passed with a bachelors degree.</p>
                </div>
                <div class="content-area">
                  <h4 class="position">1999-2010</h4>
                  <h4>Durban | Kwa-Zulu Natal</h4>
                </div>
              </li>
              <li class="wow fadeInRight" data-wow-delay="1s" data-wow-duration=".5s">
                <div class="content-area">
                  <h2><span>Keyline Graphics</span></h2>
                  <p>I did a course in graphic and web design and graphic design.</p>
                </div>
                <div class="content-area">
                  <h4 class="position">2011-2011</h4>
                  <h4>Durban | Kwa-Zulu Natal</h4>
                </div>
              </li>
              <li class="wow fadeInLeft" data-wow-delay="1s" data-wow-duration=".5s">
                <div class="content-area">
                  <h2><span>Keyline Graphics</span></h2>
                  <p>Went back to keyline to continue studying web development, video production, motion graphics and animation.</p>
                </div>
                <div class="content-area">
                  <h4 class="position">2014-2014</h4>
                  <h4>Durban | Kwa-Zulu Natal</h4>
                </div>
              </li>              
            </ul>
          </div>
        </div>
      </div>
      
      <!-- WORK EXPERIENCE -->
      <div class="grid-x grid-padding-x main-content">
        <div class="small-12 columns">
          <div class="content-row">
            <h3 class="title wow flipInX" data-wow-duration="1s">WORK EXPERIENCE</h3>
          </div>
          <div class="row education">
            <ul>
              <li class="wow fadeInLeft" data-wow-delay="1s" data-wow-duration=".5s">
                <div class="content-area">
                  <h2><span>Junior Graphic Designer</span></h2>
                  <p>At <span style="color: #24a599">Bega Signs</span>. I designed business stationery.</p>
                </div>
                <div class="content-area">
                  <h4 class="position">2012-2013</h4>
                  <h4>Durban | Kwa-Zulu Natal</h4>
                </div>
              </li>
              <li class="wow fadeInRight" data-wow-delay="1s" data-wow-duration=".5s">
                <div class="content-area">
                  <h2><span>Senior Graphic Designer</span></h2>
                  <p>At <span style="color: #24a599">Kevro Barron</span> as their senior designier. I designed catalogue covers, logos and the branding for companies.</p>
                </div>
                <div class="content-area">
                  <h4 class="position">2013-2014</h4>
                  <h4>Durban | Kwa-Zulu Natal</h4>
                </div>
              </li>
              <li class="wow fadeInLeft" data-wow-delay="1s" data-wow-duration=".5s">
                <div class="content-area">
                  <h2><span>Junior Web and Video Designer</span></h2>
                  <p>At <span style="color: #24a599">Blue Zone Mobile Media</span>. I edited an animate all their clients videos.</p>
                </div>
                <div class="content-area">
                  <h4 class="position">2015 - 2016</h4>
                  <h4>Durban | Kwa-Zulu Natal</h4>
                </div>
              </li>
              <li class="wow fadeInRight" data-wow-delay="1s" data-wow-duration=".5s">
                <div class="content-area">
                  <h2><span>Video Editor and Web Developer</span></h2>
                  <p>At <span style="color: #24a599">Dotcom Holdings</span>. I develop websites and edit videos for the company. Accationally I go out filming for companies when needed. I was also I.T. Manager for 18 months.</p>
                </div>
                <div class="content-area">
                  <h4 class="position">2016 - Present</h4>
                  <h4>Durban | Kwa-Zulu Natal</h4>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      
      <!-- HOBBIES -->
      <div class="grid-x grid-padding-x main-content">
        <div class="small-12 columns">
          <div class="content-row">
            <h3 class="title wow flipInX" data-wow-duration="1s">SOFTWARE</h3>
          </div>
          <div class="row"> 
            <!--Timeline carousel-->
            <div class="software">
              <ul>
                <li>
                  <div> <span class="icon after-effects-icon"></span> <span class="title">After Effects</span> </div>
                </li>
                <li>
                  <div> <span class="icon premier-pro-icon"></span> <span class="title">Premier Pro</span> </div>
                </li>
                <li>
                  <div> <span class="icon photoshop-icon"></span> <span class="title">Photoshop</span> </div>
                </li>
                <li>
                  <div> <span class="icon illustrator-icon"></span> <span class="title">Illustrator</span> </div>
                </li>
                <li>
                  <div> <span class="icon vs-code-icon"></span> <span class="title">VS Code</span> </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    
      <!-- HOBBIES -->
      <div class="grid-x grid-padding-x main-content">
        <div class="small-12 columns">
          <div class="content-row">
            <h3 class="title wow flipInX" data-wow-duration="1s">HOBBIES</h3>
          </div>
          <div class="row"> 
            <!--Timeline carousel-->
            <div class="hobbies">
              <ul>
                <li>
                  <div> <span class="icon dancing-icon"></span> <span class="title">Dancing</span> </div>
                </li>
                <li>
                  <div> <span class="icon music-icon"></span> <span class="title">Music</span> </div>
                </li>
                <li>
                  <div> <span class="icon movies-icon"></span> <span class="title">Movies</span> </div>
                </li>
                <li>
                  <div> <span class="icon running-icon"></span> <span class="title">Running</span> </div>
                </li>
                <li>
                  <div> <span class="icon reading-icon"></span> <span class="title">Reading</span> </div>
                </li>
              </ul>
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
  <div class="grid-container">
    <div class="main-content-last">
      <div class="link back"><a href="#">LOAD MORE</a></div>
    </div>
  </div>
@endSection 