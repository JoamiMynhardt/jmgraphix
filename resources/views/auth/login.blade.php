@extends('layouts.app')

@section('content')

<div class="height-100v d-flex align-items-center justify-content-center">
    <div class="card-authentication2">
     <div class="card-group">
         <div class="card mb-0">
            <div class="bg-signin2"></div>
             <div class="card-img-overlay rounded-left my-5">
              <h2 class="text-white">JM Graphix</h2>
              <h1 class="text-white">Backend</h1>
              <p class="card-text text-white pt-3">Passion for filmaking, Video Editing and Animation</p>
          </div>
         </div>

         <div class="card mb-0 ">
             <div class="card-body">
                 <div class="card-content p-3">
                     <div class="text-center">
                          <img src="assets/images/logo-icon.png" alt="logo icon">
                      </div>
                  <div class="card-title text-uppercase text-center py-3">Sign In</div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                       <div class="form-group">
                        <div class="position-relative has-icon-left">
                            <label for="exampleInputUsername" class="sr-only">email</label>
                            <input id="exampleInputUsername" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                              {{-- <input type="text" id="exampleInputUsername" class="form-control" placeholder="email"> --}}
                              @error('email')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                             @enderror
                              
                              <div class="form-control-position">
                                 <i class="icon-user"></i>
                             </div>
                        </div>
                       </div>
                       <div class="form-group">
                        <div class="position-relative has-icon-left">
                           <label for="exampleInputPassword" class="sr-only">Password</label>
                           <input id="exampleInputPassword" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                           {{-- <input type="password" id="exampleInputPassword" class="form-control" placeholder="Password"> --}}
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                           <div class="form-control-position">
                               <i class="icon-lock"></i>
                           </div>
                        </div>
                       </div>
                       <div class="form-row mr-0 ml-0">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                         
                     </div>
                     <button type="submit" class="btn btn-light btn-block waves-effect waves-light">{{ __('Login') }}</button>
                      
                 </form>
              </div>
             </div>
         </div>
      </div>
     </div>
     </div>
 
  <!--Start Back To Top Button-->
 <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
 <!--End Back To Top Button-->
 
 <!--start color switcher-->
<div class="right-sidebar">
 <div class="switcher-icon">
   <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
 </div>
 <div class="right-sidebar-content">

   <p class="mb-0">Gaussion Texture</p>
   <hr>
   
   <ul class="switcher">
     <li id="theme1"></li>
     <li id="theme2"></li>
     <li id="theme3"></li>
     <li id="theme4"></li>
     <li id="theme5"></li>
     <li id="theme6"></li>
   </ul>

   <p class="mb-0">Gradient Background</p>
   <hr>
   
   <ul class="switcher">
     <li id="theme7"></li>
     <li id="theme8"></li>
     <li id="theme9"></li>
     <li id="theme10"></li>
     <li id="theme11"></li>
     <li id="theme12"></li>
     <li id="theme13"></li>
     <li id="theme14"></li>
     <li id="theme15"></li>
   </ul>
   
  </div>
</div>
<!--end color switcher-->

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
