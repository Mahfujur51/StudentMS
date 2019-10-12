@include('inc._header')
<body class="sidebar-dark">
  <!-- partial -->
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar navbar-light col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper">
        <a class="navbar-brand brand-logo" href="{{route('student.dashboard')}}">JUST</a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
          <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav ml-lg-auto">

        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <div class="user-info">
            <div class="profile">
              <img src="http://via.placeholder.com/47x47" alt="">
            </div>
            <div class="details">
              <p class="user-name">Mahfujur</p>
              <p class="designation">Developer</p>
            </div>
          </div>
          <ul class="nav">
            <!--main pages start-->
            
            <li class="nav-item">
              <a class="nav-link" href="{{route('student.dashboard')}}">
                <i class="mdi mdi-gauge menu-icon"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('student.update')}}">
                <i class="mdi mdi-gauge menu-icon"></i>
                <span class="menu-title">Settings</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('student.view')}}">
                <i class="mdi mdi-puzzle menu-icon"></i>
                <span class="menu-title">View Information</span>
               
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('slogout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
               <i class="mdi mdi-exit-to-app"></i>
                <span class="menu-title">   Logout</span>
              </a>
              <form id="logout-form" action="{{route('logout')}}" method="post" style="display: none;">
                @csrf
              </form>
            </li>


            <!--main pages end-->

            <!--data rep end-->

          </ul>
        </nav>
        <!-- partial -->
        <div class="content-wrapper">
             @yield('content')
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        @include('inc._footer')
        <!-- partial -->
      </div>
      <!-- row-offcanvas ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  @include('inc._script')
  <!-- End custom js for this page-->
</body>


<!-- Mirrored from www.urbanui.com/salt/jquery/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Dec 2017 12:32:50 GMT -->
</html>
