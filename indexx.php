<!DOCTYPE html>
<html>

<head>
<?php
 require_once 'controllers/authController.php';
 
//verify user using token
 if(isset($_GET['token'])){
     $token = $_GET['token'];
     verifyUser($token);
 }

 if(!isset($_SESSION['id'])){
     header('location: login.php');
     exit();
 }
 
 ?>
    


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Serif">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css">
    <link rel="stylesheet" href="assets/css/AXY-Contact-Us.css">
    <link rel="stylesheet" href="assets/css/AXY-Contact-Us1.css">
    <link rel="stylesheet" href="assets/css/Basic-fancyBox-Gallery.css">
    <link rel="stylesheet" href="assets/css/Customizable-Carousel-swipe-enabled.css">
    <link rel="stylesheet" href="assets/css/dh-thumbnail-dark-theme.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="assets/css/Hero-Food.css">
    <link rel="stylesheet" href="assets/css/Paralax-Hero-Banner.css">
    <link rel="stylesheet" href="assets/css/Paralax-Hero-Banner1.css">
    <link rel="stylesheet" href="assets/css/Parallax-Scroll-Effect.css">
    <link rel="stylesheet" href="assets/css/Pricing-Table-with-Icon-Buy-Button.css">
    <link rel="stylesheet" href="assets/css/Pricing-Table-with-Icon-Buy-Button1.css">
    <link rel="stylesheet" href="assets/css/Responsive-footer.css">
    <link rel="stylesheet" href="assets/css/Responsive-footer1.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Video-Parallax-Background-v2.css">
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-md fixed-top bg-primary">
        <div class="container-fluid"><a class="navbar-brand" href="#"><img src="assets/img/192.png" id="logo"><strong>Grupo ni Van</strong></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#our_resort">Our Resort</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#gallery">Gallery</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#special">Specials</a></li>
                </ul>
                <ul class="nav navbar-nav">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#weddings">Weddings</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#Dining">Dining</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#contact_us">Contact Us</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link text-white" href="login.php">Book Now</a></li>
                </ul>
        </div>
        </div>
    </nav>
    <div id="home" class="parallax">
        <div class="container d-flex justify-content-center align-items-center parallax-content" style="height:100vh;">
            <div class="col-12 col-md-10 col-lg-8 d-flex justify-content-center flex-column">
                <h1>WELCOME!</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec accumsan mi non mauris finibus suscipit. Fusce dapibus at turpis eu cursus.</p>
                <div class="row">
                    <div class="col d-flex justify-content-end"><div class="button">
    <p class="btnText"><a href="login.php" style='text-decoration:none'>Book now</a></p>
    <div class="btnTwo">
      <p class="btnText2"><i class="fa fa-plus" aria-hidden="true"></i></p>
    </div>
 </div></div>
                </div>
            </div>
        </div><video autoplay="" muted="" loop="" class="parallax-background"><source src="videohead.mp4" type="video/mp4" wp-acf="[{'type':'url','name':'video','label':'Video','wrapper':{'width':25}},{'type':'text','name':'video_css','label':'Video CSS (eg. filters)','wrapper':{'width':25}}]" wp-attr="[{'target':'src','replace':'%1'},{'target':'parent_style','replace':'%2'}]"></video>
        <div
            class="parallax-placeholder" style="background-image:url(&quot;assets/img/placeholder.jpg&quot;);"></div>
    </div>
    <div data-aos="fade-right" data-aos-duration="600" id="our_resort">
        <div class="container our-resort">
            <div class="row">
                <div class="col-8 our-resort">
                    <h1><br>A Stunning Luxury Resort on the Sand and Surf of Pollilo Island<br></h1>
                    <p><br>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."<br><br></p>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card"><a class="fancybox" href="assets/img/gallery1.jpg" rel="gallery1">
    <img class="img-fluid" src="assets/img/belowheader.jpg"  />
</a>
                        <div class="card"><a class="fancybox" href="assets/img/gallery1.jpg" rel="gallery1">
    <img class="img-fluid" src="assets/img/belowheader2.jpg"  />
</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div data-aos="fade-left" data-aos-duration="600" id="gallery" class="gallery">
        <div class="container" id="galley">
            <h1>Gallery</h1>
        </div>
        <div class="container our-resort">
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="card"><a class="fancybox" href="assets/img/gallery1.jpg" rel="gallery1">
    <img class="img-fluid" src="assets/img/gallery1.jpg"  />
</a></div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card"><a class="fancybox" href="assets/img/gallery2.jpg" rel="gallery1">
    <img class="img-fluid" src="assets/img/gallery2.jpg"  />
</a></div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card"><a class="fancybox" href="assets/img/gallery4.jpg" rel="gallery1">
    <img class="img-fluid" src="assets/img/gallery4.jpg"  />
</a></div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card"><a class="fancybox" href="assets/img/gallery7.jpg" rel="gallery1">
    <img class="img-fluid" src="assets/img/gallery7.jpg"  />
</a></div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card"><a class="fancybox" href="assets/img/gallery5.jpg" rel="gallery1">
    <img class="img-fluid" src="assets/img/gallery5.jpg"  />
</a></div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card"><a class="fancybox" href="assets/img/gallery8.jpg" rel="gallery1">
    <img class="img-fluid" src="assets/img/gallery8.jpg"  />
</a></div>
                </div>
            </div>
        </div>
    </div>
    <div data-aos="fade-right" data-aos-duration="600" id="special" class="Specials">
        <div class="container Specials">
            <h1>Specials</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-4 text-center">
                    <ul class="list-group">
                        <li class="list-group-item heading">
                            <h1>Silver</h1>
                            <h4>Most Economical</h4><span class="price">P1700</span></li>
                        <li class="list-group-item"><span>5 Nights</span></li>
                        <li class="list-group-item"><span>Free BreakFast</span></li>
                        <li class="list-group-item"><span>Wifi up to 250Mbps</span></li>
                        <li class="list-group-item"><span>Free Tour</span></li>
                        <li class="list-group-item"><span>24/7 Support</span></li>
                        <li class="list-group-item"><div class="button">
    <p class="btnText">Book now</p>
    <div class="btnTwo">
      <p class="btnText2"><i class="fa fa-plus" aria-hidden="true"></i></p>
    </div>
 </div></li>
                    </ul>
                </div>
                <div class="col-sm-4 text-center">
                    <ul class="list-group">
                        <li class="list-group-item heading">
                            <h1>Gold </h1>
                            <h4>Most Preferred</h4><span class="price">P2500</span></li>
                        <li class="list-group-item"><span>10 Nights</span></li>
                        <li class="list-group-item"><span>Free BreakFast</span></li>
                        <li class="list-group-item"><span>Wifi up to 500Mbps</span></li>
                        <li class="list-group-item"><span>Free boat Tour</span></li>
                        <li class="list-group-item"><span>24/7 Support</span></li>
                        <li class="list-group-item"><div class="button">
    <p class="btnText">Book Now</p>
    <div class="btnTwo">
      <p class="btnText2"><i class="fa fa-plus" aria-hidden="true"></i></p>
    </div>
 </div></li>
                    </ul>
                </div>
                <div class="col-sm-4 text-center">
                    <ul class="list-group">
                        <li class="list-group-item heading">
                            <h1>Platinum </h1>
                            <h4>The Most </h4><span class="price">P3500</span></li>
                        <li class="list-group-item"><span>30 Nights</span></li>
                        <li class="list-group-item"><span>Free BreakFast</span></li>
                        <li class="list-group-item"><span>Wifi up to 1Gbps</span></li>
                        <li class="list-group-item"><span>Free Yacht Tour</span></li>
                        <li class="list-group-item"><span>24/7 Support</span></li>
                        <li class="list-group-item"><div class="button">
    <p class="btnText">Book Now</p>
    <div class="btnTwo">
      <p class="btnText2"><i class="fa fa-plus" aria-hidden="true"></i></p>
    </div>
 </div></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="weddings" class="Specials">
        <div class="container wedding">
            <h1>Celebrate Your Way</h1>
        </div>
        <div class="container">
            <div class="card dh-thumbnail">
                <div></div>
                <div class="caption dh-thumbnail-caption">
                    <div id="Div_Promo_Carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active"><img src="assets/img/wedding.jpg"></div>
                            <div class="carousel-item"><img src="assets/img/wedding4.jpg"></div>
                            <div class="carousel-item"><img src="assets/img/wedding3.jpg"></div>
                        </div>
                        <div><a href="#Div_Promo_Carousel" class="carousel-control-prev" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"> </span><span class="sr-only">Prev </span></a><a href="#Div_Promo_Carousel"
                                class="carousel-control-next" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"> </span><span class="sr-only">Next </span></a></div>
                        <ul class="carousel-indicators" role="">
                            <li class="active" data-slide-to="0" data-target="#Div_Promo_Carousel">Item 1</li>
                            <li data-slide-to="1" data-target="#Div_Promo_Carousel">Item 1</li>
                            <li data-slide-to="2" data-target="#Div_Promo_Carousel">Item 1</li>
                        </ul>
                    </div>
                    <h3><strong>Blissful Oceanfront Weddings in&nbsp;Huntington Beach</strong><br></h3>
                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."<br></p>
                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."<br></p>
                </div>
            </div>
        </div>
    </div>
    <div data-aos="fade-right" data-aos-duration="600" id="Dining" class="Dining">
        <div class="container wedding">
            <h1>5 Star Restaurant in Polillo</h1>
            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."<br></p>
        </div>
        <div class="container">
            <div>
                <div id="box-2">
                    <h1>Special Food Just For You<br><br></h1>
                </div>
                <div id="box-3">
                    <h1>Fresh Cook, Never Frozen<br></h1>
                </div>
                <div id="box-1">
                    <h1>Best Seller in Pollilo</h1>
                </div>
            </div>
            <div class="jumbotron hero-technology">
                <h1 class="hero-title">Fresh Cook, Never Frozen</h1>
                <p class="hero-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.<br>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.<br><br><br></p>
            </div>
        </div>
    </div>
    <div data-aos="fade-left" data-aos-duration="600" id="contact_us" class="contact">
        <div><div class="jumbotron-contact jumbotron-contact-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1">
                    Contact us <small>Feel free to contact us</small></h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
                <form>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter name" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" placeholder="Enter email" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Subject</label>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="na" selected="">Choose One:</option>
                                <option value="service">General Customer Service</option>
                                <option value="suggestions">Suggestions</option>
                                <option value="product">Product Support</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Message</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                            Send Message</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <form>
            <legend><span class="glyphicon glyphicon-globe"></span> Our office</legend>
            <address>
                <strong>Twitter, Inc.</strong><br>
                795 Folsom Ave, Suite 600<br>
                San Francisco, CA 94107<br>
                <abbr title="Phone">
                    P:</abbr>
                (123) 456-7890
            </address>
            <address>
                <strong>Full Name</strong><br>
                <a href="mailto:#">melisasababan.ms@gmail.com</a>
            </address>
            </form>
        </div>
    </div>
</div></div>
    </div>
    <div id="footer" style="background-color:rgba(58,47,47,0);background-image:url(&quot;assets/img/footer.png&quot;);background-size:cover;background-repeat:no-repeat;height:366px;">
        <div class="container">
            <h1 class="text-center" style="font-family:ABeeZee, sans-serif;font-size:46px;color:rgb(0,0,0);">Grupo ni Van</h1>
            <hr>
            <ul class="list-inline" id="text_decoration" style="margin-top:30px;font-family:ABeeZee, sans-serif;">
                <li class="list-inline-item"><a href="#" class="decoration" style="color:rgb(0,0,0);font-size:20px;margin-right:10px;">Home</a></li>
                <li class="list-inline-item"><a href="#" style="font-size:20px;color:rgb(0,0,0);margin-right:10px;">Services</a></li>
                <li class="list-inline-item"><a href="#" style="font-size:20px;color:rgb(0,0,0);margin-right:10px;">About</a></li>
                <li class="list-inline-item"><a href="#" style="color:rgb(0,0,0);font-size:20px;margin-right:10px;">Terms</a></li>
                <li class="list-inline-item"><a href="#" style="color:rgb(0,0,0);font-size:20px;">Privacy Policy</a></li>
            </ul>
            <p class="text-center" style="margin-top:30px;margin-bottom:15px;"><a href="#" style="font-size:35px;margin-right:30px;"><i class="fa fa-facebook-square" style="color:rgb(0,0,0);margin-right:0px;"></i></a><a href="#" style="font-size:35px;margin-right:30px;"><i class="fa fa-instagram" style="color:rgb(0,0,0);margin-right:0px;"></i></a>
                <a
                    href="#" style="font-size:35px;margin-right:30px;"><i class="icon ion-social-twitter" style="color:rgb(0,0,0);margin-right:2px;"></i></a><a href="#" style="font-size:35px;margin-right:30px;"><i class="icon ion-social-snapchat" style="color:rgb(0,0,0);margin-right:0px;"></i></a><a href="#"
                        style="font-size:35px;"><i class="fa fa-google-plus-square" style="color:rgb(0,0,0);"></i></a></p>
            <p class="text-center" style="color:rgb(193,184,184);font-family:ABeeZee, sans-serif;margin-bottom:23px;">Grupo ni Van @2021</p>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Customizable-Carousel-swipe-enabled.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.pack.js"></script>
    <script src="assets/js/Basic-fancyBox-Gallery2.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="assets/js/Paralax-Hero-Banner.js"></script>
    <script src="assets/js/Video-Parallax-Background-v2.js"></script>
</body>

</html>