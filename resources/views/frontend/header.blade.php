<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BurnFinance</title>
  <link rel="shortcut icon" href="images/favicon.png" />
  <!-- GOOGLE WEB FONTS -->
  <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Lato:400,100,300,700,900&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
  <!-- END OF GOOGLE WEB FONTS -->

  <!-- BOOTSTRAP & STYLES -->
  <link href="{{asset('/')}}assets_frontend/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('/')}}assets_frontend/css/bootstrap-theme.min.css" rel="stylesheet">
  <link href="{{asset('/')}}assets_frontend/css/block_grid_bootstrap.css" rel="stylesheet">
  <link href="{{asset('/')}}assets_frontend/css/font-awesome.min.css" rel="stylesheet">
  <link href="{{asset('/')}}assets_frontend/css/typicons.min.css" rel="stylesheet">
  <link href="{{asset('/')}}assets_frontend/css/odometer-theme-default.css" rel="stylesheet">
  <link href="{{asset('/')}}assets_frontend/css/animate-custom.css" rel="stylesheet">
  <link href="{{asset('/')}}assets_frontend/css/owl.carousel.css" rel="stylesheet">
  <link href="{{asset('/')}}assets_frontend/css/owl.theme.default.min.css" rel="stylesheet">
  <link href="{{asset('/')}}assets_frontend/css/slicknav.min.css" rel="stylesheet">
  <link href="{{asset('/')}}assets_frontend/style.css" rel="stylesheet">
  <!-- END OF BOOTSTRAP & STYLES -->
</head>

<body>
  <!-- HEADER -->

  <div id="hw-hero">
    <div class="header header1">
      <!-- TOP BAR -->
      <div class="topbar">
        <div class="row">
          <div class="col-sm-6">
            <ul class="phone">
              <li><span class="typcn typcn-phone-outline"></span> +994508683623</li>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
          <div class="col-sm-6">
            <ul class="toplinks">
              <li>MON - FRI 09:00 - 20:00</li>
              {{-- <li><a href="#search"><i class="fa fa-search"></i></a></li>
              <li><a href="shop-cart.html"><i class="fa fa-shopping-bag" aria-hidden="true"></i><span class="badge">2</span></a></li> --}}

            </ul>
          </div>
        </div>
      </div>
      <!-- END OF TOP BAR -->

      <!-- SEARCH FORM -->
      <div id="search">
        <button type="button" class="close">×</button>
        <form>
          <span>Type and Press enter</span>
          <input type="search" value="" placeholder="" />
        </form>
      </div>
      <!-- END OF SEARCH FORM -->

      <!-- LOGO & NAVIGATION -->
      <div class="header-navigation">
      <div class="row">
        <div class="col-sm-12">
          <div class="logonav">
            <div class="row no-gutter">
              <div class="col-sm-3">
                <div class="logo">
                  <a href="/"><img src="{{asset('/')}}assets_frontend/images/logo.png" alt="" /></a>
                </div>
              </div>
              <div class="col-sm-9">
                <nav id="desktop-menu">
                <ul class="sf-menu" id="navigation">
                    <li class="current"><a href="#">Home</a>
                    </li>
                    <li><a href="/services">Services</a>
                    </li>
                    <li><a href="contact">Contact</a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      <!-- END OF LOGO & NAVIGATION -->
    </div>