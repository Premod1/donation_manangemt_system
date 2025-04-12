<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Donation Managment</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <script src="{{ asset('frontend/js/custom.js') }}"></script>

    <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('frontend/js/plugin.js') }}"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- javascript -->
    <script src="js/owl.carousel.js"></script>
    <script src="{{ asset('frontend/js/owl.carousel.js') }}"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>


    {{-- <img src="{{ asset('frontend/images/logo.png') }}"> --}}

     <!-- bootstrap css -->
     <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.min.css') }}">
     <!-- style css -->
     <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css') }}">
     <!-- Responsive-->
     <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
     <!-- fevicon -->
     <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/gif" />
     <!-- Scrollbar Custom CSS -->
     <link rel="stylesheet" href="{{ asset('frontend/css/jquery.mCustomScrollbar.min.css') }}">
     <!-- Tweaks for older IEs-->
     <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
     <!-- fonts -->
     <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700&display=swap" rel="stylesheet">
     <!-- owl stylesheets -->

     <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
     <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.min.css') }}">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>

<style>
    .donate_btn {
    display: inline-block;
    padding: 10px 20px;
    background-color: #e91e63;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.donate_btn:hover {
    background-color: #c2185b;
}
html {
  scroll-behavior: smooth;
}
</style>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand"><a href="index.html"><img src="{{ asset('frontend/images/logo.png') }}"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#donate">Donate</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Our Mission</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    {{-- <div class="search_icon"><a href="#"><img src="{{ asset('frontend/images/search-icon.png') }}"></a></div> --}}
                    {{-- <button class="donate_btn" type="submit">Donate Now</button> --}}
                    <a href="{{ route('login') }}" class="donate_btn">Login</a>
                </form>
            </div>
    </nav>
       <!-- banner section start -->
       <div class="banner_section layout_padding">
        <div class="container">
           <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                 <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                 <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                 <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                 <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                 <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
              </ol>
              <div class="carousel-inner">
                 <div class="carousel-item active">
                    <div class="row">
                       <div class="col-sm-12">
                          <h1 class="banner_taital">Help Poor Child</h1>
                          <p class="banner_text">Suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going </p>
                          <div class="read_bt"><a href="#">Read More</a></div>
                       </div>
                    </div>
                 </div>
                 <div class="carousel-item">
                    <div class="col-sm-12">
                       <h1 class="banner_taital">Help Poor Child</h1>
                       <p class="banner_text">Suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going </p>
                       <div class="read_bt"><a href="#">Read More</a></div>
                    </div>
                 </div>
                 <div class="carousel-item">
                    <div class="col-sm-12">
                       <h1 class="banner_taital">Help Poor Child</h1>
                       <p class="banner_text">Suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going </p>
                       <div class="read_bt"><a href="#">Read More</a></div>
                    </div>
                 </div>
                 <div class="carousel-item">
                    <div class="col-sm-12">
                       <h1 class="banner_taital">Help Poor Child</h1>
                       <p class="banner_text">Suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going </p>
                       <div class="read_bt"><a href="#">Read More</a></div>
                    </div>
                 </div>
                 <div class="carousel-item">
                    <div class="col-sm-12">
                       <h1 class="banner_taital">Help Poor Child</h1>
                       <p class="banner_text">Suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going </p>
                       <div class="read_bt"><a href="#">Read More</a></div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
        <div class="donation_box">
           <h4 class="donation_taital">Contact For Donation</h4>
           <div class="mail_box">
              <input type="" class="mail_text" placeholder="Your Name" name="Your Name">
              <input type="" class="mail_text" placeholder="Email" name="Email">
              <input type="" class="mail_text" placeholder="Phone" name="Phone">
           </div>
           <div class="send_bt"><a href="#">Send</a></div>
        </div>
        <div class="fundraise_section">
           <div class="fundraise_section_main">
              <div class="row">
                 <div class="col-lg-4">
                    <div class="box_main">
                       <div class="icon_1"><img src="{{ asset('frontend/images/icon-1.png') }}"></div>
                       <h4 class="volunteer_text">VOLUNTEERS</h4>
                       <p class="lorem_text">Lorem Ipsum generators on the Internet tend to repeat predefined</p>
                       <div class="join_bt"><a href="#">Join Now</a></div>
                    </div>
                 </div>
                 <div class="col-lg-4">
                    <div class="box_main active">
                       <div class="icon_1"><img src="{{ asset('frontend/images/icon-2.png') }}"></div>
                       <h4 class="volunteer_text">FUNDRAISE</h4>
                       <p class="lorem_text">Lorem Ipsum generators on the Internet tend to repeat predefined</p>
                       <div class="join_bt"><a href="#">Join Now</a></div>
                    </div>
                 </div>
                 <div class="col-lg-4">
                    <div class="box_main">
                       <div class="icon_1"><img src="{{ asset('frontend/images/icon-3.png') }}"></div>
                       <h4 class="volunteer_text">DONATION</h4>
                       <p class="lorem_text">Lorem Ipsum generators on the Internet tend to repeat predefined</p>
                       <div class="join_bt"><a href="#">Join Now</a></div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
    <!-- banner section end -->
        <!-- about section start -->
        <section id="about">
        <div class="about_section layout_padding">
            <div class="container">
               <div class="row">
                  <div class="col-sm-8">
                     <h2 class="about_taital">About Donation</h2>
                     <p class="about_text">
                        Every act of giving makes a difference. Donations are a powerful way to support meaningful causes and help those in need. Whether it’s a small contribution or a generous gift, your donation can bring hope, provide essential resources, and create lasting change in someone’s life.
                     </p>
                     <div class="readmore_bt"><a href="#">Read more</a></div>
                  </div>
                  <div class="col-sm-4">
                     <div class="about_img"><img src="{{ asset('frontend/images/about-img.png') }}"></div>
                  </div>
               </div>
            </div>
         </div>
        </section>
        <!-- about section end -->

             <!-- news section start -->
      {{-- <div class="news_section layout_padding">
        <div class="container">
           <div class="row">
              <div class="col-sm-12">
                 <h1 class="news_taital">FEATURED CAUSE</h1>
                 <p class="news_text">going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>
              </div>
           </div>
           <div class="news_section_2">
              <div class="row">
                 <div class="col-md-6">
                    <div class="news_img"><img src="{{ asset('frontend/images/news-img.png') }}"></div>
                 </div>
                 <div class="col-md-6">
                    <h1 class="give_taital">GIVE EDUCATION</h1>
                    <p class="ipsum_text">variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by<br>
                       injected humour, or randomised v<br>
                       ariations of passages of Lorem Ipsum <br>
                       available, but the majority have suffered alteration in some form, by injected humour, or randomised
                    </p>
                    <h5 class="raised_text">Raised: $60,010     <span class="goal_text">Goal: $70,000</span></h5>
                    <div class="donate_btn_main">
                       <div class="readmore_btn"><a href="#">Read More</a></div>
                       <div class="readmore_btn_1"><a href="{{ url('donations') }}">Donate Now</a></div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div> --}}
     <!-- news section end -->
     <section id="donate">
     <div class="p-6 overflow-auto flex-1">
        @yield('content')
    </div>
        </section>
       <!-- events section start -->

     <!-- events section end -->
       <!-- donate section start -->
       <div class="donate_section layout_padding">
        <div class="container">
           <h1 class="donate_taital">Donat pepole Says </h1>
           <div class="donate_taital_main">
              <div id="main_slider" class="carousel slide" data-ride="carousel">
                 <div class="carousel-inner">
                    <div class="carousel-item active">
                       <div class="donate_left">
                          <div class="client_img"><img src="{{ asset('frontend/images/client-img.png') }}"></div>
                       </div>
                       <div class="donate_right">
                          <h3 class="client_name_text">Mardo Merk</h3>
                          <p class="dummy_text">If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefinedIf you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined</p>
                       </div>
                    </div>
                    <div class="carousel-item">
                       <div class="donate_left">
                          <div class="client_img"><img src="{{ asset('frontend/images/client-img.png') }}"></div>
                       </div>
                       <div class="donate_right">
                          <h3 class="client_name_text">Mardo Merk</h3>
                          <p class="dummy_text">If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefinedIf you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined</p>
                       </div>
                    </div>
                    <div class="carousel-item">
                       <div class="donate_left">
                          <div class="client_img"><img src="{{ asset('frontend/images/client-img.png') }}"></div>
                       </div>
                       <div class="donate_right">
                          <h3 class="client_name_text">Mardo Merk</h3>
                          <p class="dummy_text">If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefinedIf you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined</p>
                       </div>
                    </div>
                 </div>
                 <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                 <i class="fa fa-angle-right"></i>
                 </a>
                 <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                 <i class="fa fa-angle-left"></i>
                 </a>
              </div>
           </div>
        </div>
     </div>
     <!-- donate section end -->
         <!-- footer section start -->
         <div class="footer_section layout_padding">
            <div class="container">
               <div class="row">
                  <div class="col-sm-6 col-md-6 col-lg-3">
                     <div class="footer_logo"><img src="{{ asset('frontend/images/footer-logo.png') }}"></div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-3">
                     <h4 class="footer_taital">NAVIGATION</h4>
                     <div class="footer_menu_main">
                        <div class="footer_menu_left">
                           <div class="footer_menu">
                              <ul>
                                 <li><a href="#">Home</a></li>
                                 <li><a href="#">Donate</a></li>
                                 <li><a href="#">Contact us</a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="footer_menu_right">
                           <div class="footer_menu">
                              <ul>
                                 <li><a href="#">About</a></li>
                                 <li><a href="#">News</a></li>
                                 <li><a href="#">Our Mission</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-3">
                     <h4 class="footer_taital">NEWS</h4>
                     <p class="footer_text">Generators on the Internet</p>
                     <p class="footer_text">Tend to repeat predefined</p>
                     <p class="footer_text">Chunks as necessary, making</p>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-3">
                     <h4 class="footer_taital">address</h4>
                     <p class="footer_text">Ave NW, Washington</p>
                     <p class="footer_text">+01 1234567890</p>
                     <p class="footer_text">demo@gmail.com</p>
                  </div>
               </div>
               <div class="footer_section_2">
                  <div class="row">
                     <div class="col-sm-4 col-md-4 col-lg-3">
                        <div class="social_icon">
                           <ul>
                              <li><a href="#"><img src="{{ asset('frontend/images/fb-icon.png') }}"></a></li>
                              <li><a href="#"><img src="{{ asset('frontend/images/twitter-icon.png') }}"></a></li>
                              <li><a href="#"><img src="{{ asset('frontend/images/linkedin-icon.png') }}"></a></li>
                              <li><a href="#"><img src="{{ asset('frontend/images/instagram-icon.png') }}"></a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-sm-8 col-md-8 col-lg-9">
                        <input type="text" class="address_text" placeholder="Enter your Enail" name="text">
                        <button type="button" class="get_bt">SUBSCRIBE</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- footer section end -->
           <!-- copyright section start -->
      <div class="copyright_section">
        <div class="container">
           <p class="copyright_text">2025 All Rights Reserved.</p>
        </div>
     </div>

    <!-- Content Area -->

    </div>

</body>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const links = document.querySelectorAll("a.nav-link[href^='#'], a.nav-link[href*='#']");
        links.forEach(link => {
            link.addEventListener("click", function (e) {
                const target = document.querySelector(this.getAttribute("href"));
                if (target) {
                    e.preventDefault();
                    window.scrollTo({
                        top: target.offsetTop,
                        behavior: "smooth"
                    });
                }
            });
        });
    });
</script>

</html>
