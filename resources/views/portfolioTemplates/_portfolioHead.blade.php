<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content="Joami Mynhradt"/>
  <meta name="_token" content="{{csrf_token()}}" />
  <title>JM Graphix | @yield('portfolioTitle')</title>

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'Laravel') }}</title>
  
  <!-- loader-->
  <link href="{{ url('css/pace.min.css') }}" rel="stylesheet">
  <script src="{{ url('js/pace.min.js') }}" type="text/javascript"></script>
  <!--favicon-->
  <link href="{{ url('images/favicon.ico') }}" rel="stylesheet">
  <!--text editor-->
  <link href="{{ url('plugins/summernote/dist/summernote-bs4.css') }}" rel="stylesheet">
  <!--Select Plugins-->
  <link href="{{ url('plugins/select2/css/select2.min.css') }}" rel="stylesheet">
  <!--inputtags-->
  <link href="{{ url('plugins/inputtags/css/bootstrap-tagsinput.css') }}" rel="stylesheet">
  <!--multi select-->
  <link href="{{ url('plugins/jquery-multi-select/multi-select.css') }}" rel="stylesheet">
  <!--Bootstrap Datepicker-->
  <link href="{{ url('plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
  <!--Touchspin-->
  <link href="{{ url('plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.css') }}" rel="stylesheet">  
  <!-- simplebar CSS-->
  <link href="{{ url('plugins/simplebar/css/simplebar.css') }}" rel="stylesheet">
  <!-- Bootstrap core CSS-->
  <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- animate CSS-->
  <link href="{{ url('css/animate.css') }}" rel="stylesheet">
  <!-- Icons CSS-->
  <link href="{{ url('css/icons.css') }}" rel="stylesheet">
  <!-- Sidebar CSS-->
  <link href="{{ url('css/sidebar-menu.css') }}" rel="stylesheet">
  {{-- Validation CSS --}}
  <link href="{{ url('css/parsley.css') }}" rel="stylesheet">
  <!-- Dropzone css -->
  <link href="{{ url('plugins/dropzone/css/dropzone.css') }}" rel="stylesheet"> 
  <!-- Custom Style-->  
  <link href="{{ url('css/app-style.css') }}" rel="stylesheet">
  
  <style type="text/css">
  .main-section {
    margin: 0 auto;
    padding: 20px;
    margin-top: 100px;
    box-shadow: 0px 0px 20px #c1c1c1;
  }
  </style>
  
</head>