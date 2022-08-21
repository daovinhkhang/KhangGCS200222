<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Products</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

      
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body>

<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="{{url('home')}}">Home</a>
  <a href="about.html">About</a>
  <a href="{{url('products')}}">products</a>
  <a href="testimonial.html">testimonial</a>
  <a href="contact.html">Contact</a>
  <a href="{{url('seemore')}}">See More</a>
</div>



<div id="main">
      <!-- header section start -->
      <div class="header_section">
         <div class="row">
            <div class="col-sm-4">
               <div class="search_icon"><img src="images/search-icon.png"></div>
            </div>
            <div class="col-sm-4">
               <div class="logo1"><img src="images/logo1.png"></div>
            </div>
            <div class="col-sm-4">
               <div class="togle_3">
                  <div class="left_main">
                     <div class="menu_main">
                        @if (Session::has('loginID'))
                        <li class="nav-item d_none">
                           <a class="nav-link" href="#">Welcome: {{Session::get('loginID')}}</a>
                        </li>
                        <li class="nav-item d_none">
                           <a class="nav-link" href="{{url('logout')}}">Logout</a>
                        </li>                              
                        @else
                        <li class="nav-item d_none">
                          <a class="nav-link" href="{{url('register')}}">Register</a>
                       </li>
                        <li class="nav-item d_none">
                           <a class="nav-link" href="{{url('login')}}">Login</a>
                        </li>
                        @endif
                     </div>
                  </div>
                  <div class="middle_main">
                     <div class="shoping_bag"><img src="images/shopping-bag.png"></div>
                  </div>
                  <div class="right_main">
                     <div class="togle_main"><a class="class="openbtn onclick="openNav()"><img src="images/togle-menu-icon.png" style="max-width: 100%;"></a></div>
                  </div>                  
               </div>
            </div>
         </div>
     </div>

   <!-- our section start -->
   <div class="our_section layout_padding">
      <div class="container">
         <div class="row">
            <div class="col-sm-12">
               <h1 class="our_text"><strong>Our<span style="color: #000;">Lego</span></strong></h1>
               <p class="about_lorem">t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. 
                  The point of using Lorem Ipsum</p>
            </div>
         </div>
      </div>
      <div class="our_section_2">
         <div class="our_main">
            <div id="my_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
               <div class="carousel-item active">
                  <img class="d-block w-100" src="images/img-1.jpg" alt="First slide">
               </div>
               <div class="carousel-item">
                  <img class="d-block w-100" src="images/product2.jpg" alt="Second slide">
               </div>
               <div class="carousel-item">
                 <img class="d-block w-100" src="images/product3.jpg" alt="Third slide">
               </div>
               <div class="carousel-item">
                  <img class="d-block w-100" src="images/product4.jpg" alt="Fourth slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="images/product05.jpg" alt="Fifth slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="images/product6.jpg" alt="Sixth slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="images/product08.jpg" alt="Seventh slide">
                </div>
            </div>
               <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
                 <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                 <span class="sr-only">Previous</span>
               </a>
               <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
                 <span class="carousel-control-next-icon" aria-hidden="true"></span>
                 <span class="sr-only">Next</span>
               </a>
            </div>
          </div>
          <a href="{{url('seemore')}}">
            <button class="seemore_bt">See More</button>
            </a>

      </div>
   </div>



   <!-- footer section start -->
   <div class="footer_section layout_padding">
      <div class="container">
         <div class="row">
            <div class="col-sm-4">
               <h2 class="important_text">Important Link</h2>
               <div class="footer_menu">
                  <ul>
                     <li><a href="#">Home</a></li>
                     <li><a href="#">About Us</a></li>
                     <li><a href="#">Our Latest Event</a></li>
                     <li><a href="#">Our Latest Article</a></li>
                     <li><a href="#">Join With Us</a></li>
                  </ul>
               </div>
            </div>
            <div class="col-sm-4">
               <h2 class="important_text">Social Link</h2>
               <div class="footer_menu">
                  <ul>
                     <li><a href="#">Facebook</a></li>
                     <li><a href="#">Linkedin</a></li>
                     <li><a href="#">Twitter</a></li>
                     <li><a href="#">Youtube</a></li>
                     <li><a href="#">Pinterest</a></li>
                  </ul>
               </div>
            </div>
            <div class="col-sm-4">
               <h2 class="important_text">Subscribe With Us</h2>
               <p class="footer_lorem_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga</p>
               <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="text" aria-label="Recipient's username" aria-describedby=" basic-addon2">
                  <div class="input-group-append">
                     <span class="input-group-text" id="basic-addon2">Subscribe</span>
                  </div>
               </div>
            </div>
         </div>   
      </div>
   </div>
   <!-- footer section start -->
   <!-- copyright section start -->
   <div class="copyright_text">Copyright 2019 All Right Reserved By. <a href="https://html.design"> Free Html Templates</a></div>

   </div>

      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
         $(document).ready(function()){
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
         $('#myCarousel').carousel({
            interval: false
        });
      }
      </script>

      <script>
function openNav() {
  document.getElementById("mySidebar").style.width = "150px";
  document.getElementById("main").style.marginLeft = "150px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>

   </body>
   </html>