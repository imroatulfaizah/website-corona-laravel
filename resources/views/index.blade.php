<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Parallax, Template, Registration, Landing">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <title>Indonesia lawan Covid-19</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/line-icons.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/nivo-lightbox.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/main.css">    
    <link rel="stylesheet" href="css/responsive.css">

  </head>
  <body>

    <!-- Header Section Start -->
    <header id="hero-area" data-stellar-background-ratio="0.5">    
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar indigo">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <a href="index.html" class="navbar-brand"><img class="img-fulid" src="img/logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
              <i class="lnr lnr-menu"></i>
            </button>
          </div>
          <div class="collapse navbar-collapse" id="main-navbar">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#hero-area">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#services">Provinsi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#features">Atasi Corona</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#portfolios">Video</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#contact">Contact</a>
              </li>
            </ul>
          </div>
        </div>

        <!-- Mobile Menu Start -->
        <ul class="mobile-menu">
           <li>
              <a class="page-scroll" href="#hero-area">Home</a>
            </li>
            <li>
              <a class="page-scroll" href="#services">Provinsi</a>
            </li>
            <li>
              <a class="page-scroll" href="#features">Atasi Corona</a>
            </li>
            <li>
              <a class="page-scroll" href="#portfolios">Video</a>
            </li>
            <li>
              <a class="page-scroll" href="#contact">Contact</a>
            </li>
        </ul>
        <!-- Mobile Menu End -->

      </nav>
      <!-- Navbar End -->   
      <div class="container">      
        <div class="row justify-content-md-center">
          <div class="col-md-10">
            <div class="contents text-center">
              <h1 class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s">Indonesia Lawan Covid-19</h1>
              <p class="lead  wow fadeIn" data-wow-duration="1000ms" data-wow-delay="400ms">Mari kita bersama melawan Covid-19 (Corona) </p>
              <a href="#" class="btn btn-common wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">Download</a>
            </div>
          </div>
        </div> 
      </div>           
    </header>
    <!-- Header Section End --> 

    <!-- Services Section Start -->
    <section id="services" class="section">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Covid-19 Provinsi</h2>
          <hr class="lines wow zoomIn" data-wow-delay="0.3s">
          <p class="section-subtitle wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Data ini realtime, jangan lupa untuk terus menjaga kesehatan <br> Mari kawal covid-19 untuk Indonesia sehat</p>
        </div>
        <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col"></th>
                        <th scope="col">Provinsi</th>
                        <th scope="col">Positif</th>
                        <th scope="col">Sembuh</th>
                        <th scope="col">Meninggal</th>
                      </tr>
                    </thead>
                    <tbody>
                   
                    @foreach ($data as $datas)   
                  
                      <tr>
                        <th scope="row"></th>
                        <td>{{ $datas['attributes']['Provinsi'] }}</td>
                        <td>{{ $datas['attributes']['Kasus_Posi'] }}</td>
                        <td>{{ $datas['attributes']['Kasus_Semb'] }}</td>
                        <td>{{ $datas['attributes']['Kasus_Meni'] }}</td>
                      </tr>
                    @endforeach 
                    </tbody>
                  </table>
      </div>
    </section>
    <!-- Services Section End -->

    <!-- Features Section Start -->
    <section id="features" class="section" data-stellar-background-ratio="0.2">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">Cara Mengatasi Covid-19</h2>
          <hr class="lines">
          <p class="section-subtitle">Jaga kesehatan dengan langkah-langkah berikut ini ya lur :)</p>
        </div>
        <div class="row">
          <div class="col-lg-8 col-md-12 col-xs-12">
            <div class="container">
              <div class="row">
                 <div class="col-lg-6 col-sm-6 col-xs-12 box-item">
                    <span class="icon">
                      <i class="lnr lnr-rocket"></i>
                    </span>
                    <div class="text">
                      <h4>Mencuci tangan dengan benar</h4>
                      <p>Mencuci tangan dengan benar adalah cara paling sederhana namun efektif untuk mencegah penyebaran virus 2019-nCoV</p>
                    </div>
                  </div>
                  <div class="col-lg-6 col-sm-6 col-xs-12 box-item">
                    <span class="icon">
                      <i class="lnr lnr-laptop-phone"></i>
                    </span>
                    <div class="text">
                      <h4>Menggunakan masker</h4>
                      <p>Banyak yang menggunakan masker kain untuk mencegah infeksi virus Corona, padahal masker tersebut belum tentu efektif.</p>
                    </div>
                  </div>
                  <div class="col-lg-6 col-sm-6 col-xs-12 box-item">
                    <span class="icon">
                      <i class="lnr lnr-layers"></i>
                    </span>
                    <div class="text">
                      <h4>Menjaga daya tahan tubuh</h4>
                      <p>Daya tahan tubuh yang kuat dapat mencegah munculnya berbagai macam penyakit</p>
                    </div>
                  </div>
                  <div class="col-lg-6 col-sm-6 col-xs-12 box-item">
                    <span class="icon">
                      <i class="lnr lnr-cog"></i>
                    </span>
                    <div class="text">
                      <h4>Tidak pergi ke negara terjangkit</h4>
                      <p>Tidak hanya Tiongkok, penyakit infeksi virus Corona kini juga sudah mewabah ke beberapa negara lain.</p>
                    </div>
                  </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-xs-12">
            <div class="show-box">
              <img class="img-fulid" src="img/features/feature.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Features Section End -->    

    <!-- Portfolio Section -->
    <section id="portfolios" class="section">
      <!-- Container Starts -->
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">Our Portfolio</h2>
          <hr class="lines">
          <p class="section-subtitle">Ini website Covid-19 Dengan iklan Gfriend :v <br> Gabut amat lu nak :v</p>
        </div>
        <div class="row">          
          <div class="col-md-12">
            <!-- Portfolio Controller/Buttons -->
            <div class="controls text-center">
              <a class="filter active btn btn-common" data-filter="all">
                All 
              </a>
              <a class="filter btn btn-common" data-filter=".design">
                Sowon 
              </a>
              <a class="filter btn btn-common" data-filter=".development">
                Gfriend
              </a>
              <a class="filter btn btn-common" data-filter=".print">
                Buddy 
              </a>
            </div>
            <!-- Portfolio Controller/Buttons Ends-->
          </div>

          <!-- Portfolio Recent Projects -->
          <div id="portfolio" class="row">
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix development print">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portfolio/img1.jpg" alt="" />  
                  <a class="overlay lightbox" href="img/portfolio/img1.jpg">
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix design print">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portfolio/img2.jpg" alt="" />  
                  <a class="overlay lightbox" href="img/portfolio/img2.jpg">
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix development">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portfolio/img3.jpg" alt="" />  
                  <a class="overlay lightbox" href="img/portfolio/img3.jpg">
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix development design">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portfolio/img4.jpg" alt="" />  
                  <a class="overlay lightbox" href="img/portfolio/img4.jpg">
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix development">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portfolio/img5.jpg" alt="" />  
                  <a class="overlay lightbox" href="img/portfolio/img5.jpg">
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix print design">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="img/portfolio/img6.jpg" alt="" />  
                  <a class="overlay lightbox" href="img/portfolio/img6.jpg">
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>               
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Container Ends -->
    </section>
    <!-- Portfolio Section Ends --> 

    <!-- Start Video promo Section -->
    <section class="video-promo section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
              <div class="video-promo-content text-center">
                <h2 class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">Watch Our Intro video</h2>
                <p class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">Kuy! Lihat Video dulu yak.</p>
                <a href="https://www.youtube.com/watch?v=YYHyAIFG3iI" class="video-popup wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="0.3s"><i class="lnr lnr-film-play"></i></a>
              </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Video Promo Section -->

  

    <!-- Contact Section Start -->
    <section id="contact" class="section" data-stellar-background-ratio="-0.2">      
      <div class="contact-form">
        <div class="container">
          <div class="row">     
            <div class="col-lg-6 col-sm-6 col-xs-12">
              <div class="contact-us">
                <h3>Contact With us</h3>
                <div class="contact-address">
                  <p>Jl. S. Supriadi No. 48 </p>
                  <p class="phone">Phone: <span>(+6285-731-414-988)</span></p>
                  <p class="email">E-mail: <span>(faizah.alfaza@gmail.com)</span></p>
                </div>
                <div class="social-icons">
                  <ul>
                    <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li class="dribbble"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>     
            <div class="col-lg-6 col-sm-6 col-xs-12">
              <div class="contact-block">
                <form id="contactForm">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required data-error="Please enter your name">
                        <div class="help-block with-errors"></div>
                      </div>                                 
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="text" placeholder="Your Email" id="email" class="form-control" name="name" required data-error="Please enter your email">
                        <div class="help-block with-errors"></div>
                      </div> 
                    </div>
                    <div class="col-md-12">
                      <div class="form-group"> 
                        <textarea class="form-control" id="message" placeholder="Your Message" rows="8" data-error="Write your message" required></textarea>
                        <div class="help-block with-errors"></div>
                      </div>
                      <div class="submit-button text-center">
                        <button class="btn btn-common" id="submit" type="submit">Send Message</button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div> 
                        <div class="clearfix"></div> 
                      </div>
                    </div>
                  </div>            
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>           
    </section>
    <!-- Contact Section End -->

    <!-- Footer Section Start -->
    <footer>          
      <div class="container">
        <div class="row">
          <!-- Footer Links -->
          <div class="col-lg-6 col-sm-6 col-xs-12">
            <ul class="footer-links">
              <li>
                <a href="#">Homepage</a>
              </li>
              <li>
                <a href="#">Services</a>
              </li>
              <li>
                <a href="#">About Us</a>
              </li>
              <li>
                <a href="#">Contact</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-6 col-sm-6 col-xs-12">
            <div class="copyright">
              <p>All copyrights reserved &copy; 2018 - Designed & Developed by <a rel="nofollow" href="https://uideck.com">UIdeck</a></p>
            </div>
          </div>  
        </div>
      </div>
    </footer>
    <!-- Footer Section End --> 

    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
      <i class="lnr lnr-arrow-up"></i>
    </a>
    
    <div id="loader">
      <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
      </div>
    </div>     

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="js/jquery-min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mixitup.js"></script>
    <script src="js/nivo-lightbox.js"></script>
    <script src="js/owl.carousel.js"></script>    
    <script src="js/jquery.stellar.min.js"></script>    
    <script src="js/jquery.nav.js"></script>    
    <script src="js/scrolling-nav.js"></script>    
    <script src="js/jquery.easing.min.js"></script>    
    <script src="js/smoothscroll.js"></script>    
    <script src="js/jquery.slicknav.js"></script>     
    <script src="js/wow.js"></script>   
    <script src="js/jquery.vide.js"></script>
    <script src="js/jquery.counterup.min.js"></script>    
    <script src="js/jquery.magnific-popup.min.js"></script>    
    <script src="js/waypoints.min.js"></script>    
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>   
    <script src="js/main.js"></script>

  </body>
</html>