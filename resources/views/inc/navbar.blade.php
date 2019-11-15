
<body>
    {{-- <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div> --}}
    <div class="main-wrapper">
        <!-- header start -->
        <div class="header-classic">
            <!-- navigation start -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">


<nav class="navbar navbar-expand-lg navbar-classic">
    <a class="navbar-brand" href="index.html"> <img src="assets/images/logo.png" alt="spacely realtor directory listing bootstrap template"></a>
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar-classic" aria-controls="navbar-classic" aria-expanded="false" aria-label="Toggle navigation">
        <span class="icon-bar top-bar mt-0"></span>
        <span class="icon-bar middle-bar"></span>
        <span class="icon-bar bottom-bar"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbar-classic">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0 mr-3">
            <li class="nav-item active">
              <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/about">About</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="/services">Services</a>
            </li>
      
             <li class="nav-item">
              <a class="nav-link" href="/posts">Blog</a>
            </li>
            
           
          </ul>
          @if (Auth::guest())
          
          <li><a href="{{ route('login') }}" class="btn btn-outline-primary">Login</a></li>
          <li><a href="{{ route('register') }}" class="btn btn-primary">Register</a></li>
      @else
          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                  {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <ul class="dropdown-menu" role="menu">
                  <li><a href="/dashboard">Dashboard</a> </li>
                  <li>
                      <a href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                          Logout
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                      </form>
                  </li>
              </ul>
          </li>
      @endif
        {{-- <div class="header-btn d-xl-block d-lg-none">
            <a href="login-page.html" class="btn btn-outline-primary" data-toggle="modal" data-target="#loginmodal">Login</a>
            <a href="inquiry-form.html" class="btn btn-primary"><i class="fas fa-plus"></i>List a space</a>
        </div> --}}
    </div>
</nav>
</div>
</div>
</div>
<!-- navigation close -->
</div>