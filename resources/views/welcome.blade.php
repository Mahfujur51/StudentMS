@include('inc._header')
<body class="sidebar-dark">
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
      <div class="row">
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth-pages">
          <div class="card col-lg-4 mx-auto">
            <div class="card-body px-5 py-5">
              @if (Session::has('success'))
              <div class="alert alert-danger">
                <p>{{Session::get('success')}}</p>
              </div>
              @endif
              <h3 class="card-title text-left mb-3">Login</h3>
              <form method="POST" action="{{route('student.login')}}">
                @csrf
                <div class="form-group">
                  <label>Username or email *</label>
                  <input type="text" name="email" class="form-control p_input">
                </div>
                <div class="form-group">
                  <label>Password *</label>
                  <input type="password" name="password" class="form-control p_input">
                </div>
                <div class="form-group d-flex align-items-center justify-content-between">
                  <div class="icheck-square">
                    <input tabindex="1" type="checkbox" id="remember">
                    <label for="remember">Remember me</label>
                  </div>
                  <a href="#" class="forgot-pass">Forgot password</a>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
                </div>
                <div class="d-flex justify-content-center mb-4">
                  <a href="#" class="facebook-login btn btn-facebook mr-2">Facebook</a>
                  <a href="#" class="google-login btn btn-google">Google+</a>
                </div>
                
              </form>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- row ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  @include('inc._script')
</body>
</html>