@extends('layouts.frontend.frontend_layout')
@section('content')

<section class="navigation">
  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">SKYBLUR</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-text " href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-text" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-text " href="#">Disabled</a>
          </li>
        </ul>
        <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
            @endif
            @else
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </div>
          </li>
          @endguest
        </ul>
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
  <section class="slider position-relative">
    <div class="page-content page-container" id="page-content">
      <div class="padding">
        <div class="block p-md-3 ">
          <div id="carouselCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselCaptions" data-slide-to="1"></li>
              <li data-target="#carouselCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="media media-16x9 gd-primary">
                  <div class="media-content" style="background-image:url({{ asset('img/talking.jpg') }})"></div>
                </div>
                <div class="carousel-caption text-align-auto">
                  <span class="badge badge-outline">FEATURED</span>
                  <h2 class="text-white display-5 font-weight-500 my-4">The world’s most popular framework </h2>
                  <p class="text-fade d-none d-md-block">For building responsive, mobile-first sites, with BootstrapCDN and a template starter page.</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="media media-16x9 gd-info">
                  <div class="media-content" style="background-image:url({{ asset('img/talking-2.jpg') }})"></div>
                </div>
                <div class="carousel-caption text-align-auto">
                  <span class="badge badge-outline">POPULAR</span>
                  <h2 class="text-white display-5 font-weight-500 my-4">Popular front-end library.</h2>
                  <p class="text-fade d-none d-md-block">Quickly prototype your ideas or build your entire app with prebuilt components.</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="media media-16x9 gd-dark">
                  <div class="media-content" style="background-image:url({{ asset('img/talking-3.jpg') }})"></div>
                </div>
                <div class="carousel-caption text-align-auto">
                  <span class="badge badge-outline">JQUERY</span>
                  <h2 class="text-white display-5 font-weight-500 my-4">Powerful plugins built on jQuery</h2>
                  <p class="text-fade d-none d-md-block">Quickly prototype your ideas or build your entire app with prebuilt components.</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselCaptions" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselCaptions" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row justify-content-center">
        <div class="search-box-div">
          <div class="form-group search-box">
            <span class="fa fa-search search-icon"></span>
            <input type="text" class="form-control" placeholder="Search Anything You Want....">
          </div>
          <p class="quickline">
            Popular destination:
            <img src="/img/bd.png" alt="Bangladesh">
            <span>Bangladesh</span>
            <img src="/img/in.png" alt="india">
            <span>India</span>
            <img src="/img/us.png" alt="USA">
            <span>USA</span>
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="card-boxs">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
              <p class="card-text">
                <small class="text-muted">Last updated 3 mins ago</small>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
              <p class="card-text">
                <small class="text-muted">Last updated 3 mins ago</small>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
              <p class="card-text">
                <small class="text-muted">Last updated 3 mins ago</small>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <Section class="offer">
    <div class="container">
      <div class="row">
      </div>
    </div>
  </Section>




  @endsection
