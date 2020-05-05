
  <!--Start sidebar-wrapper-->
  <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
    <div class="brand-logo">
      <a href="index.html">
      <img src="{{ url('images/jmgraphix-logo.png') }}" class="logo-icon" alt="logo icon">
      <h5 class="logo-text">JM Graphix Admin</h5>
    </a>
  </div>
  
  <ul class="sidebar-menu">
      <li class="sidebar-header">MAIN NAVIGATION</li>
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-view-dashboard"></i> <span>Management</span><i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="{{ route('portfolio.index') }}"><i class="zmdi zmdi-dot-circle-alt"></i> All Projects</a></li> 
          <li><a href="{{ route('portfolio.create') }}"><i class="zmdi zmdi-dot-circle-alt"></i> Add Project</a></li>
          <li><a href="{{ route('categories.index') }}"><i class="zmdi zmdi-dot-circle-alt"></i> Categories</a></li>
          <li><a href="{{ route('tags.index') }}"><i class="zmdi zmdi-dot-circle-alt"></i> Tags</a></li>
        </ul>
      </li>

      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-lock"></i> <span>Authentication</span>
          <i class="fa fa-angle-left float-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="authentication-signin.html" target="_blank"><i class="zmdi zmdi-dot-circle-alt"></i> Profile</a></li>
          <li href="{{ route('logout') }}"
              onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <a>
                              <i class="icon-power mr-2"></i>{{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
            </li>
          
        </ul>
      </li>
      
      <li class="sidebar-header">LABELS</li>
      <li><a href="javaScript:void();" class="waves-effect"><i class="zmdi zmdi-coffee text-danger"></i> <span>Important</span></a></li>
      <li><a href="javaScript:void();" class="waves-effect"><i class="zmdi zmdi-chart-donut text-success"></i> <span>Warning</span></a></li>
      <li><a href="javaScript:void();" class="waves-effect"><i class="zmdi zmdi-share text-info"></i> <span>Information</span></a></li>
    </ul>
  
</div>
<!--End sidebar-wrapper-->