<!DOCTYPE html>
<html lang="en">

@include('portfolioTemplates._portfolioHead')

@yield('stylesheets')

<body class="bg-theme bg-theme1">    
    
<!-- Start wrapper-->
<div id="wrapper">

    @include('portfolioTemplates._portfolioMenuSidebar')

    @include('portfolioTemplates._portfolioHeader')

    <div class="clearfix"></div>

    <div class="content-wrapper">
        <div class="container-fluid">
            
            @include('portfolioTemplates._messages')

            @yield('portfolioContent') 

            <!--start overlay-->
            <div class="overlay toggle-menu"></div>
            <!--end overlay-->
        </div>
        <!-- End container-fluid-->    
    </div>
    <!--End content-wrapper-->

    <div class="clearfix"></div>

</div>
<!--End wrapper-->

    <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->

@include('portfolioTemplates._portfolioFooter')

@include('portfolioTemplates._portfolioJS')

@yield('scripts')

</body>
</html>