@include('inc._header')
<body class="sidebar-dark">
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
      <div class="row">
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth-pages">
          <div class="card col-lg-4 mx-auto">
            <div class="card-body px-5 py-5">
              <h3 class="card-title text-left mb-3">Register</h3>
                 <form method="POST" action="{{ route('register') }}">
                        @csrf

                <div class="form-group">
                  <label>Username</label>
                  <input type="text" name="name" class="form-control p_input">
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" name="email" class="form-control p_input">
                </div>
                  <div class="form-group row">
                            <label for="password" >Password</label>

                            
                                <input id="password" type="password" class="form-control p_input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" >Confirm Password</label>

                           
                                <input id="password-confirm" type="password" class="form-control p_input"name="password_confirmation" required autocomplete="new-password">
                           
                        </div>
                <div class="form-group d-flex align-items-center justify-content-between">
                  <div class="icheck-square">
                    <input tabindex="1" type="checkbox" id="remember">
                    <label for="remember">Remember me</label>
                  </div>
                  <br>
                    <div class="form-group row mb-0">
                            <div >
                                <button type="submit" class="btn btn-primary btn-block enter-btn">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
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
  <!-- container-scroller -->

  @include('inc._script')
</body>


<!-- Mirrored from www.urbanui.com/salt/jquery/pages/samples/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Dec 2017 12:33:56 GMT -->
</html>