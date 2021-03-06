<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SDP-1 Project</title>
    <!-- Favicon -->
    <link rel="icon" href="assets/images">
    
    <!-- Fontawesome icon -->
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Google Font -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
 
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/rating.css">
</head>
<body>
    <!-- Navbar Part Start -->
    <section id="navbar">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand logo" href="#">Innovate Locally, Scale Globally</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainmenu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mainmenu">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-search searchOverlayOn"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link admin-btn" href="login.php">Admin Panel</a>
                        </li>
                    </ul>
                </div>
                <div class="searchOverlay">
                    <form action="">
                        <input type="text" placeholder="search">
                    </form>
                    <i class="fas fa-times searchOverlayOff"></i>
                </div>
            </div>
        </nav>
    </section>
    <!-- //Navbar Part End -->

    <!-- About Banner Part Start -->
    <section id="log_sign_in">
        <div class="container">
            <div class="loginsignupbox">
                <div class="formbtn">
                    <span class="loginbtn">Login</span>
                    <span class="signupbtn">SignUp</span>
                </div>
                <div class="creating_form">
                    <form action="" class="loginForm">
                        <input type="text" placeholder="Email/number" required>
                        <input type="password" placeholder="Password" required>
                        <button type="submit">Login</button>
                    </form>
                    <form action="" class="signupForm">
                        <input type="text" placeholder="First Name" required>
                        <input type="text" placeholder="Last Name" required>
                        <input type="text" placeholder="Email/number" required>
                        <input type="number" placeholder="age" required>
                        <input type="password" placeholder="Password" required>
                        <input type="password" placeholder="Confirm" required>
                        <button type="submit">SignUp</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- //About Banner Part End -->

    <!-- Video Slider Part Start -->
    <section id="video_slider">
        <div class="slider_container">
            <video id="slider"  loop controls>
                <source src="assets/videos/2.mp4">
            </video>
            <ul class="navigation">
                <li onclick="videoUrl('assets/videos/1.mp4')"><img src="assets/images/img-1.jpg" alt=""></li>
                <li onclick="videoUrl('assets/videos/3.mp4')"><img src="assets/images/img-2.jpg" alt=""></li>
                <li onclick="videoUrl('assets/videos/4.mp4')"><img src="assets/images/img-3.jpg" alt=""></li>
            </ul>
        </div>
    </section>
    <!-- //Video Slider Part End -->

    <!-- Categories Part Start -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <button href="#" class="categories-btn">categories<i class="fa fa-sort-desc categories-icon" ></i> </button>
                    <div class="list">
                        <ul>
                            <a href="basicfirstaid.php"><li>First aid Box</li></a>
                            <a href=""><li>Be a Electrician</li></a>
                            <a href="beahomedoctor.php"><li>Be a Home Doctor</li></a>
                            <a href=""><li>Herbal Medico</li></a>
                            <a href="beaprogrammer.php"><li>Be a Programmer</li></a>
                            <a href="funnystory.php"><li>Funny Story</li></a>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="content">
                        <div class="video">
                          <i class="fa fa-play content-icon"></i>
                            <a href="#"><img src="assets/images/img-1.jpg" alt="video-image" width="150px" height="150px"></a>
                            <span class="content-title"><p>Video</p></span>
                        </div>
                        <div class="video">
                          <i class="fa fa-play content-icon"></i>
                          <a href=""><img src="assets/images/img-2.jpg" alt="video-image" width="150px" height="150px"></a>
                          <span class="content-title"><p>Animation</p></span>
                      </div>
                      <div class="video">
                         <a href=""> <img src="assets/images/img-3.jpg" alt="video-image" width="150px" height="150px"></a>
                          <span class="content-title"> <p>Quiz</p></span>
                      </div>
                      <div class="video">
                          <a href=""><img src="assets/images/img-4.jpg" alt="video-image" width="150px" height="150px"></a>
                          <span class="content-title"> <p>Other Things</p></span>
                      </div>
                    </div>
                    
              </div>
            </div>
        </div>
      </section>
    <!-- //Categories Part End -->

    <!-- Learn Part Start -->
    <section class="lern">
        <div class="container">
            <h1 class="lern-title">Learn as Your Wish</h1>
            <div class="row">
                <div class="col-sm-3">
                    <div class="item-1">
                        <a href="basicfirstaid.php"><img class="science-box" src="assets/images/bfk.jpg" alt="" width="250px" height="250px"></a>
                        <span class="item-1-title">Basic first aid kit</span>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="item-1">
                        <a href="beaprogrammer.php"><img class="science-box" src="assets/images/programmer.jpeg" alt="" width="250px" height="250px"></a>
                        <span class="item-1-title">Be A Programmer</span>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="item-1">
                        <a href="funnystory.php"><img class="science-box" src="assets/images/story.jpg" alt="" width="250px" height="250px"></a>
                        <span class="item-1-title">Funny Story</span>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="item-1 ">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <a href=""><img src="assets/images/story.jpg" class="d-block science-box" width="250px" height="250px" alt="..."></a>
                              </div>
                              <div class="carousel-item">
                                <img src="assets/images/programmer.jpeg" width="250px" height="250px" class="d-block science-box" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="assets/images/electricians.jpg" width="250px" height="250px" class="d-block science-box" alt="...">
                              </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon prev-icon"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                              <span class="carousel-control-next-icon next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </button>
                          </div>
                    </div>
                </div>
            </div>

            <div class="row ">
                
                <div class="col-sm-3">
                    <div class="item-2">
                        <a href="beahomedoctor.php"><img class="science-box" src="assets/images/pessure.jpg" alt="" width="250px" height="250px"></a>
                        <span class="item-1-title">Be A Home Doctor</span>
                    </div>
                </div>
                
                <div class="col-sm-3">
                    <div class="item-3">
                        <a href="sexualhealth.php"><img class="science-box" src="assets/images/sexual-health.jpg" alt="" width="250px" height="250px"></a>
                        <span class="item-1-title">Sexual Health</span>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="item-3">
                        <a href="navigating.php"><img class="science-box" src="assets/images/navigating.png" alt="" width="250px" height="250px"></a>
                        <span class="item-1-title">Navigating</span>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="item-2 ">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <a href=""><img src="assets/images/science-box.jpg" class="d-block science-box" width="250px" height="250px" alt="..."></a>
                              </div>
                              <div class="carousel-item">
                                <img src="assets/images/pessure.jpg" width="250px" height="250px" class="d-block science-box" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="assets/images/herbal.jpg" width="250px" height="250px" class="d-block science-box" alt="...">
                              </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon prev-icon"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                              <span class="carousel-control-next-icon next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </button>
                          </div>
                    </div>
                </div>
            </div>

            <div class="row ">
                <div class="col-sm-3">
                    <div class="item-3">
                        <a href="toolwork.php"><img class="science-box" src="assets/images/Tool-work.jpg" alt="" width="250px" height="250px"></a>
                        <span class="item-1-title">Tool Work</span>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="item-2">
                        <a href="sciencebox.php"><img class="science-box" src="assets/images/science-box.jpg" alt="" width="250px" height="250px"></a>
                        <span class="item-1-title">science Box</span>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="item-2">
                        <a href="Herbal Medico.php"><img class="science-box" src="assets/images/herbal.jpg" alt="" width="250px" height="250px"></a>
                        <span class="item-1-title">Herbal Medico</span>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="item-3 ">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <a href=""><img src="assets/images/Tool-work.jpg" class="d-block science-box" width="250px" height="250px" alt="..."></a>
                              </div>
                              <div class="carousel-item">
                                <img src="assets/images/sexual-health.jpg" width="250px" height="250px" class="d-block science-box" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="assets/images/navigating.png" width="250px" height="250px" class="d-block science-box" alt="...">
                              </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon prev-icon"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                              <span class="carousel-control-next-icon next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </button>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //Learn Part End -->


    <!-- Testimonial Part Start -->
    <section class="testimonial">
        <div class="container">
            <div class="row" >
                <div class="banner">
                    <div class="text" >
                        <h3>CLIENT</h3>
                        <h2>TESTIMONIALS</h2>
                    </div>
                </div>
            </div>
    
            <div class="row">
                <div class="col">
                    <div class="box">
                        <div class="customer-image">
                            <img src="assets/images/member-1.jpg" alt="" height="200px" width="250px" class="client-img">
                        </div>
                        <h1 class="client-name">Parthib</h1>
                        <p id="customer-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.dolor sit amet consectetur adipisicing</p>
                    </div>
                    <a  class="btn prevBtn"><i class="fa fa-chevron-left" ></i></a>
                    <a  class="btn nextBtn"><i class="fa fa-chevron-right" ></i></a>
                </div>
            </div>
        </div>
    
    </section>
    <!-- //Testimonial Part End -->
              <!-- Footer     -->

              <footer class="bg-white">
                <div class="container py-5">
                  <div class="row py-4">
                      
                      <ul class="list-inline mt-4">
                        <li class="list-inline-item"><a href="#" target="_blank" title="facebook"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="list-inline-item"><a href="#" target="_blank" title="whatsapp"><i class="fab fa-whatsapp"></i></a></li>
                        <li class="list-inline-item"><a href="#" target="_blank" title="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                        <li class="list-inline-item"><a href="#" target="_blank" title="github"><i class="fab fa-github"></i></a></li>
                        <li class="list-inline-item"><a href="#" target="_blank" title="instagram"><i class="fab fa-instagram"></i></a></li>
                      </ul>
                      <div class=" col-sm-4 col-md col-sm-4  col-12 col">
                        <h5 class="headin5_amrc col_white_amrc pt2">Find us</h5>
                        <p class="mb10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid porro error adipisci ad recusandae deserunt voluptatem, consequuntur accusantium, natus minus dolores corrupti obcaecati distinctio sunt!</p>
                        <p><i class="fa fa-location-arrow"></i>+880 1625-292404</p>
                        <p><i class="fa fa-phone"></i>  +880 1625-292404  </p>
                        <p><i class="fa fa fa-envelope"></i> bparthib727@gmail.com  </p>
                        
                        
                        </div>
    
                        <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                          <h6 class="text-uppercase font-weight-bold mb-4">Quick Links</h6>
                          <ul class="list-unstyled mb-0">
                            <li class="mb-2"><a href="#" class="text-muted">Home</a></li>
                            <li class="mb-2"><a href="#" class="text-muted">About Us</a></li>
                            <li class="mb-2"><a href="#" class="text-muted">Features</a></li>
                            <li class="mb-2"><a href="#" class="text-muted">Contact</a></li>
                          </ul>
                        </div>
                    <div class="col-lg-4 col-md-6 mb-lg-0">
                      <h6 class="text-uppercase font-weight-bold mb-4">Feedback</h6>
                      <div class="p-1 rounded border">
                        <div class="input-group">
                          <input type="text" placeholder="Enter your feedback here : " aria-describedby="button-addon1" class="form-control border-0 shadow-0">
                          <div class="input-group-append">
                            <button id="button-addon1" type="submit" class="btn btn-link"><i class="fa fa-paper-plane"></i></button>
                          </div>
                        </div>
                      </div>
    
                      <div class="rating-body">
                        <div class="rating">
            
                          <!-- 5 star rating system  -->
                          <h1>Rate Us</h1>
                          <ol>
                                <li><a class="star1" onclick="stars1();"><span class="fas fa-star"></span></a></li>
                                <li><a class="star2" onclick="stars2();"><span class="fas fa-star"></span></a></li>
                                <li><a class="star3" onclick="stars3();"><span class="fas fa-star"></span></a></li>
                                <li><a class="star4" onclick="stars4();"><span class="fas fa-star"></span></a></li>
                                <li><a class="star5" onclick="stars5();"><span class="fas fa-star"></span></a></li>
                          </ol>
                          <div class="msg">
                              <p class="p1">You give 1 star rating!</p>
                              <p class="p2">You give 2 stars rating!</p>
                              <p class="p3">You give 3 stars rating!</p>
                              <p class="p4">You give 4 stars rating!</p>
                              <p class="p5">You give 5 stars rating!</p>
                          </div>
                      
                          <div class="rating-btn">
                              <button onclick="submit();">Submit</button>
                          </div>
                          <div class="success">
                              <h2>Thanks for rating us!</h2>
                          </div>
                          </div>
                          
                      </div>
    
    
        </div>
                    </div>
    
    
                  </div>
                </div>
            
                <!-- Copyrights -->
                <div class="bg-light py-4">
                  <div class="container text-center">
                    <p class="text-muted mb-0 py-2">??Created By Forward-Looking initiators Team || 2021</p>
                  </div>
                </div>
    
              </footer>



    <!-- if javascript doesn't work -->
    <noscript>You have to enable javascript to view this site</noscript>
    <!-- Jquery Js -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- slick Js -->
    <script src="assets/js/slick.min.js"></script>
    <!-- Wow Js -->
    <script src="assets/js/wow.min.js"></script>
    <!-- Main Js -->
    <script src="assets/js/app.js"></script>
    <script src="assets/js/rating.js"></script>

    <!-- vedio slider js Part Start -->
    <script type="text/javascript">
        function videoUrl(slide){
            document.getElementById("slider").src = slide;
        }
    </script>
    <!-- //vedio slider js Part End -->
</body>
</html>









