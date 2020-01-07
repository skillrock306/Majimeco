<!doctype html>
<html lang="en">
  <head>
    <base href="{{asset('public/wordify')}}/">
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700|Inconsolata:400,700" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    

    <div class="wrap">

      <header role="banner">
        <div class="top-bar" style="background:#262626;color: #ffffff">
          <div class="container">
            <div class="row">
              <div class="col-7 social" style="color: #ffffff;">
                <a  style="color: white" href="https://www.facebook.com/rinkitori.rinkitori.5" ><strong><span class="fa fa-facebook"></strong></span></a>
                <span style="color: white"><strong>TEL: +84 93 1415 187</strong></span>
              </div>
              <div class="col-5 search-top">
                <p>Cty TNHH TM-DV Phát triển Nguồn nhân lực MAJIMECO</p>
              </div>
            </div>
          </div>
        </div>

        <div class="container logo-wrap">
          <div class="row pt-5">
            <div class="col-12 text-center">
              <a class="absolute-toggle d-block d-md-none" data-toggle="collapse" href="#navbarMenu" role="button" aria-expanded="false" aria-controls="navbarMenu"><span class="burger-lines"></span></a>
              <h1 class="site-logo"><a href="{{asset('/')}}">Wordify</a></h1>
            </div>
          </div>
        </div>
        
        <nav class="navbar navbar-expand-md  navbar-light bg-light">
          <div class="container">
            
           
            <div class="collapse navbar-collapse" id="navbarMenu">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                  <a class="nav-link active" href="{{asset('/')}}">Trang chủ</a>
                </li>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="category.html" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Xuất khẩu lao động</a>
                  <div class="dropdown-menu" aria-labelledby="dropdown05">
                    @foreach($category as $cate)
                    <a class="dropdown-item" href="{{asset('category/'.$cate->cate_id.'/'.$cate->cate_slug.'.html')}}">{{$cate->cate_name}}</a>
                    @endforeach
                  </div>

                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{asset('/about')}}">Về chúng tôi</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{asset('/contact')}}">Liên hệ</a>
                </li>
              </ul>
              
            </div>
          </div>
        </nav>
      </header>
      <!-- END header -->

      <section class="site-section pt-5 pb-5">
        <div class="container">
          <div class="row">
            <div class="col-md-12">

              <div class="owl-carousel owl-theme home-slider">
                @foreach($slideheader as $item)
                <div>
                  <a class="a-block d-flex align-items-center height-lg" style="background-image: url('{{asset('lib/storage/app/avatar/'.$item->image)}}'); ">
                    <div class="text half-to-full">
                      <div class="post-meta"><br><br><br><br><br><br><br><br><br>
                      <h3>{{$item->name}}</h3>
                      <p></p>
                      </div>
                    </div>
                  </a>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--  main -->
 @yield('main')
  <section class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="mb-3 ">Related Post</h2>
          </div>
        </div>
        <div class="row">
@foreach($navhightlight as $item)
          <div class="col-md-6 col-lg-4">
            <a href="{{asset('detail/'.$item->new_id.'/'.$item->new_slug.'.html')}}" class="a-block sm d-flex align-items-center height-md" style="background-image: url('{{asset('lib/storage/app/avatar/'.$item->new_img)}}'); ">
              <div class="text">
                <div class="post-meta">
                  <span class="mr-2">{{$item->updated_at}}</span> &bullet;
                </div>
                <h3>{{$item->new_title}}</h3>
              </div>
            </a>
          </div>
@endforeach

        </div>
      </div>
    </section>
      <footer class="site-footer">
        <div class="container">
          <div class="row mb-5">
            <div class="col-md-4">
              <h3>About Us</h3>
              <p class="mb-4">
                <img src="images/img_1.jpg" alt="Image placeholder" class="img-fluid">
              </p>

              <p>Lorem ipsum dolor sit amet sa ksal sk sa, consectetur adipisicing elit. Ipsa harum inventore reiciendis. <a href="#">Read More</a></p>
            </div>
            <div class="col-md-6 ml-auto">
              <div class="row">
                <div class="col-md-7">
                  <h3>Latest Post</h3>
                  <div class="post-entry-sidebar">
                    <ul>
                      @foreach($footereven as $itemslide)
                      <li>
                        <a href="">
                          <img src="{{asset('lib/storage/app/avatar/'.$itemslide->new_img)}}" alt="Image placeholder" class="mr-4">
                          <div class="text">
                            <h4>{{$itemslide->new_title}}</h4>
                            <div class="post-meta">
                              <span class="mr-2">{{$itemslide->updated_at}} </span> &bullet;
                              <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                            </div>
                          </div>
                        </a>
                      </li>
                      @endforeach
                    </ul>
                  </div>
                </div>
                <div class="col-md-1"></div>
                
                <div class="col-md-4">

                  <div class="mb-5">
                    <h3>Quick Links</h3>
                    <ul class="list-unstyled">
                      @foreach($category as $cate)
                      <li><a href="#">{{$cate->cate_name}}</a></li>
                      @endforeach
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 text-center">
              <p class="small">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> Công ty TNHH TM-DV Phát triển Nguồn nhân lực  <i class="fa fa-heart text-danger" aria-hidden="true"></i> by <a href="https://www.facebook.com/rinkitori.rinkitori.5" target="_blank" >MAJIMECO</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
          </div>
        </div>
      </footer>
      <!-- END footer -->

    </div>
    
    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>

    
    <script src="js/main.js"></script>
  </body>
</html>