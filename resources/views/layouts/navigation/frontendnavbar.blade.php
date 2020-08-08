<section class="navigation">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand font-weight-bold" href="{{ route('homepage') }}">SKYBLUR</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
              <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                  <a class="nav-text  mt-2 ml-2 mb-2" href="{{ route('homepage') }}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-text mt-2 ml-2 mb-2" href="#">Link</a>
                </li>
                <li class="nav-item">
                  <a class="nav-text  mt-2 ml-2 mb-2" href="{{ route('blog') }}">Blog</a>
                </li>
              </ul>
              <ul class="nav navbar-menu order-1 order-lg-2">
                <li class="nav-item dropdown">
                    <a class="nav-link"  href="{{ route('login') }}">
                        Sign in
                    </a>
                    <!-- dropdown -->
                    {{-- <div class="dropdown-menu dropdown-menu-right">
                        <div class="p-4">
                            <form class="dropdown-menu-right" role="form" action="dashboard.html">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" placeholder="Password">
                                    <div class="my-3 text-right">
                                        <a href="forgot-password.html" class="text-muted">Forgot password?</a>
                                    </div>
                                </div>
                                <div class="checkbox mb-3">
                                    <label class="ui-check">
                                        <input type="checkbox">
                                        <i></i> Remember me
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-primary mb-4">Sign in</button>
                                <div>Do not have an account?
                                    <a href="signup.html" class="text-primary">Sign up</a>
                                </div>
                            </form>
                        </div>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Forgot password?</a>
                    </div> --}}
                    <!-- / dropdown -->
                </li>
                <li class="d-flex align-items-center">
                    <a href="{{ route('register') }}" class="btn w-sm mb-1 btn-rounded btn-outline-success">
                        Register
                    </a>
                </li>
                <ul class="nav navbar-menu order-1 order-lg-2">
                    <li class="nav-item d-none d-sm-block">
                      <a class="nav-link px-2" data-toggle="fullscreen" data-plugin="fullscreen">
                        <i data-feather="maximize"></i>
                      </a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link px-2" data-toggle="dropdown">
                        <i data-feather="settings"></i>
                      </a>
                      <!-- Setting START-->
                      <div class="dropdown-menu dropdown-menu-center mt-3 w-md animate fadeIn">
                        <div class="setting px-3">
                          <div class="mb-2 text-muted">
                            <strong>Color:</strong>
                          </div>
                          <div class="mb-2">
                            <label class="radio radio-inline ui-check ui-check-md">
                              <input type="radio" name="bg" value="">
                              <i></i>
                            </label>
                            <label class="radio radio-inline ui-check ui-check-color ui-check-md">
                              <input type="radio" name="bg" value="bg-dark">
                              <i class="bg-dark"></i>
                            </label>
                          </div>
                        </div>
                      </div>
                      <!-- Setting END-->
                    </li>
                <!-- Navarbar toggle btn -->
                <li class="nav-item d-lg-none">
                    <a href="#" class="nav-link px-2" data-toggle="collapse" data-toggle-class data-target="#navbarToggler">
                        <i data-feather="search"></i>
                    </a>
                </li>
                <li class="nav-item d-lg-none">
                    <a class="nav-link px-1" data-toggle="modal" data-target="#aside">
                        <i data-feather="menu"></i>
                    </a>
                </li>
            </ul>
            </div>
          </nav>
    </div>
</section>
