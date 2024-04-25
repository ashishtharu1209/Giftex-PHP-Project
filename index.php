<?php
session_start();
?>
<!DOCTYPE html>
<html>
   <head>
    
      <title>⎡GIFT_IT⎦</title>
      <meta name="viewport" content="width=device-width, initial-scale=1"> 
      <!-- FONTS      -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">  
      <!-- Font Awesome Bootstrap -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--Materialized CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
      <!-- CSS -->
      <link rel="stylesheet" href="css/go_to.css">

      <link rel="stylesheet" href="css/style1.css">

      <style>
      h3,h5{
        font-weight:bold;
        color:black;
        margin:5%;
      }
      
      .anime-start-1 {
      opacity: 0;
      transform: translate3d(-100px, 0, 0);
      transition:2.5s;
      }
      .anime-end-1 {
      opacity: 1;
      transform: translate3d(0,0,0);
     }
    .anime-start-2 {
      opacity: 0;
      transform: translate3d(-100px, 0, 0);
      transition:2.1s;
    }
    .anime-end-2 {
      opacity: 1;
      transform: translate3d(0,0,0);
    }
    .anime-start-3 {
      opacity: 0;
      transform: translate3d(-100px, 0, 0);
      transition:1.7s;
    }
    .anime-end-3 {
      opacity: 1;
      transform: translate3d(0,0,0);
    }
    .anime-start-4 {
      opacity: 0;
      transform: translate3d(-100px, 0, 0);
      transition:1.2s;
    }
    .anime-end-4{
      opacity: 1;
      transform: translate3d(0,0,0);
    }
      </style>
   </head>
   
   <body>
    <!--navigation bar-->
      <div class="row navbar-fixed"> 

         <nav class="pink lighten-1 ">
            <div class="nav-wrapper">
               <a href="index.php" class="brand-logo">⎡GIFT_IT⎦</a>
               <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons ">menu</i></a>
               <ul id="categories1" class="dropdown-content" databeloworigin="true">
                  <li><a href="category1.php" class="dropdown_link">Kids</a></li>
                  <li><a href="category2.php" class="dropdown_link">PhoneCase</a></li>
                  <li><a href="category3.php" class="dropdown_link">Home Decor</a></li>
                  <li><a href="category4.php" class="dropdown_link">Watches</a></li>
                  <li><a href="category5.php" class="dropdown_link">Jewellery</a></li>
                  <li><a href="category6.php" class="dropdown_link">Soft Toys</a></li>
                  <li><a href="category7.php" class="dropdown_link">Crockery</a></li>
                  <li><a href="category8.php" class="dropdown_link">Wallet</a></li>

               </ul>
               <ul id="categories2" class="dropdown-content" databeloworigin="true">
                  <li><a href="category1.php" class="dropdown_link">Kids</a></li>
                  <li><a href="category2.php" class="dropdown_link">PhoneCase</a></li>
                  <li><a href="category3.php" class="dropdown_link">Home Decor</a></li>
                  <li><a href="category4.php" class="dropdown_link">Watches</a></li>
                  <li><a href="category5.php" class="dropdown_link">Jewellery</a></li>
                  <li><a href="category6.php" class="dropdown_link">Soft Toys</a></li>
                  <li><a href="category7.php" class="dropdown_link">Crockery</a></li>
                  <li><a href="category8.php" class="dropdown_link">Wallet</a></li>

               </ul>

               <ul id="nav-mobile" class="right hide-on-med-and-down">
                <form action="search.php" method="POST">
                  <li><input type="text" name="search" placeholder="search"></li>
                  <?php
                    if(isset($_SESSION['userid'])){
                    ?>
                          <li><a href="index.php" class="navlink">Home</a></li>
                          <li><a href="#" class="dropdown-trigger navlink" data-activates="categories1">Categories<i class="material-icons right">arrow_drop_down</i></a></li>
                          <li><a href="aboutus.php" class="navlink">About Us</a></li>
                          <li><a href="contactus.php" class="navlink">Contact Us</a></li>
                          <li><a class="dropdown-button" data-beloworigin="true" href="#!" data-activates="dropdown2"><?php echo $_SESSION['userid']?><i class="material-icons right">arrow_drop_down</i></a></li>
                          <li><a href="shopping_cart.php" class="navlink"><i class="material-icons">shopping_cart</i></a></li>
                  <ul id="dropdown2" class="dropdown-content dropdown_link">
                    <li><a href="logout.php">Logout</a></li>
                  </ul>
                  <?php
                  }
                  else{
                  ?>
                  <li><a href="index.php" class="navlink">Home</a></li>
                  <li><a href="#" class="dropdown-trigger navlink" data-activates="categories1">Categories<i class="material-icons right">arrow_drop_down</i></a></li>
                  <li><a href="aboutus.php" class="navlink">About Us</a></li>
                  <li><a href="contactus.php" class="navlink">Contact Us</a></li>
                  <li><a href="signup.php" class="navlink">Sign Up</a></li>
                  <li><a href="shopping_cart.php" class="navlink"><i class="material-icons">shopping_cart</i></a></li> 
                  <?php
                      }
                  ?> 
                </form> 
               </ul>
               <ul class="side-nav" id="mobile-demo">
                <li><a href="index.php" class="side_logo left-align">GiftStore</a></li>
                <hr>
                <li><a href="index.php" class="side_nav">Home</a></li>
                <li><a href="#" class="dropdown-trigger navlink" data-activates="categories2">Categories<i class="material-icons right">arrow_drop_down</i></a></li>
                <li><a href="aboutus.php" class="side_nav">About Us</a></li>
                <li><a href="contactus.php" class="side_nav">Contact Us</a></li>
                <li><a href="signup.php" class="side_nav">SignUp</a></li>
            </ul>
            </div>
         </nav>
        </div>
 
    <div class="slider fullscreen slider_adjust">
        <ul class="slides">
          <li>
            <img src="images/bg.jpg"> 
            <div class="caption left-align">
              <h3 class="white-text">Welcome To The GIFT-IT!</h3>
     
            </div>
          </li>
          <li>
            <img src="images/1.jpg"> 
            <div class="caption left-align">
              <h3 class="white-text">Get Maximum Opportunities!</h3>
            
            </div>
          </li>
          <li>
            <img src="images/gift.jpg"> 
            <div class="caption right-align">
              <h3 class="white-text" >Get Quick Delivery!</h3>
    
            </div>
          </li>
        </ul>
      </div>

      
      <!--About-->
      <div class="about" style="padding-top:500px;color:white;">
      <h1 style="font-family:ui-rounded;font-weight:100px;">About US</h1>
      <p style="color:white;font-size:25px;">
      This is ⎡GIFT_IT⎦. Welcome to our store. Maximum opportunites are offered on our website. Kindly look at our collection and order maximum products from our site.Safe banking and product tracking is also our feature.This is giftstore. Welcome to our store. Maximum opportunites are offered on our website. Kindly look at our collection and order maximum products from our site.Safe banking and product tracking is also our feature.Step into a world of boundless gifting possibilities with our gift shop.  Whether you're celebrating a birthday, anniversary, or simply spreading some joy, our virtual shelves are brimming with unique finds and timeless classics. With seamless browsing and swift delivery.
                    </p>
                   
                   
                    <h4 class="center-align white-text ">Categories</h4>
    
      </div>
     
   <div class="row" style="margin-left: -1px;">
      <div class="parallax-container" style="height:100%;">
        <div class="row" style="margin-top: 25px">
          <div class="col s12 m12 l3">
            <div class="card anime-start-1" data-as="true"  data-as-animation="anime-end-1"> <!--for onscroll animation-->
              <div class="card-image waves-effect waves-block waves-light">
                <img  src="images/homedecore/home.jpg">
              </div>
                <a href="category3.php">
                <div class="card-action center-align black white-text flow-text">
                  Home Decor
                  
                </div>
              </a>
            </div>
          </div>
          <div class="col s12 m12 l3">
            <div class="card anime-start-2" data-as="true"  data-as-animation="anime-end-2">
              <div class="card-image waves-effect waves-block waves-light">
                <img  src="images/phonecase/phonecase.jpg">
              </div>
              <a href="category2.php">
                <div class="card-action center-align black white-text flow-text">
                  Phone Case
                </div>
              </a>
            </div>
          </div>
          <div class="col s12 m12 l3">
            <div class="card anime-start-3" data-as="true"  data-as-animation="anime-end-3">
              <div class="card-image waves-effect waves-block waves-light">
                <img  src="images/kids/kid toy.jpg">
              </div>
              <a href="category1.php">
                <div class="card-action center-align black white-text flow-text">
                  Kids
                </div>
              </a>
            </div>
          </div>
          <div class="col s12 m12 l3">
            <div class="card anime-start-4" data-as="true"  data-as-animation="anime-end-4">
              <div class="card-image waves-effect waves-block waves-light">
                <img  src="images/watches/watch.jpg">
              </div>
              <a href="category4.php">
                <div class="card-action center-align black white-text flow-text">
                  Watches
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="parallax card-panel pink lighten-4">
         

        </div>
      </div>
    </div>

    <div class="row" style="margin-left: -1px;">
      <div class="parallax-container" style="height:100%;">
        <div class="row" style="margin-top: 25px">
          <div class="col s12 m12 l3">
            <div class="card anime-start-1" data-as="true"  data-as-animation="anime-end-1"> <!--for onscroll animation-->
              <div class="card-image waves-effect waves-block waves-light">
                <img  src="images/softtoys/softtoy.jpg">
              </div>
                <a href="category6.php">
                <div class="card-action center-align black white-text flow-text">
               Soft-Toys
                  
                </div>
              </a>
            </div>
          </div>
          <div class="col s12 m12 l3">
            <div class="card anime-start-2" data-as="true"  data-as-animation="anime-end-2">
              <div class="card-image waves-effect waves-block waves-light">
                <img  src="images/crockery/crockery.jpg">
              </div>
              <a href="category7.php">
                <div class="card-action center-align black white-text flow-text">
                  crockery
                </div>
              </a>
            </div>
          </div>
          <div class="col s12 m12 l3">
            <div class="card anime-start-3" data-as="true"  data-as-animation="anime-end-3">
              <div class="card-image waves-effect waves-block waves-light">
                <img  src="images/jwellary/jwellery.jpg">
              </div>
              <a href="category8.php">
                <div class="card-action center-align black white-text flow-text">
                  Jewellery
                </div>
              </a>
            </div>
          </div>
          <div class="col s12 m12 l3">
            <div class="card anime-start-4" data-as="true"  data-as-animation="anime-end-4">
              <div class="card-image waves-effect waves-block waves-light">
                <img  src="images/wallet/wallet.jpg">
              </div>
              <a href="category4.php">
                <div class="card-action center-align black white-text flow-text">
                  Wallet
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="parallax card-panel pink lighten-4">

        </div>
      </div>
    </div>
    <h1> QUICK DELIVERY</h1>
      <p style="font-size:20px;">
    This is ⎡GIFT_IT⎦. Welcome to our store. With seamless browsing and swift delivery, the perfect present is just a few clicks away. Let us help you turn moments into memories, one unforgettable gift at a time. Welcome to the ultimate destination for all your gifting needs – welcome to our online gift shop.

  </p>
   
      <!-- Page Footer -->
      <div class="row" style="margin-top: -20px;">
         <footer class="page-footer pink lighten-1 white-text">
            <div class="row center-align">
                <div class="col s12 m12 l12">
                  <h4><a href="index.php" class="footerlogo">⎡GIFT_IT⎦</h4>
          
                </div>
            </div>
            
             <div class="row center-align">
                <div class="col s12 m12 l12">
                  <a href="index.php" class="link">Home<span class="white-text"> |</span></a> 
                  <a href="aboutus.html" class="link">About Us<span class="white-text"> |</span></a> 
                  <a href="contactus.html" class="link">Contact Us<span class="white-text"> |</span></a> 
                </div>
              </div> 
              <div class="row center-align">
               <div id="social">
                  <a class="facebookBtn smGlobalBtn" href="#!"></a>
                  <a class="googleplusBtn smGlobalBtn" href="#!"></a>
               </div>
              </div>
            <div class="row center-align marginReduce footer-copyright" style="margin-bottom:-20px;">
               <div id="footertext" class="col s12 m12 l12">
                  &copy 2024 Copyright Text .All Rights reserved.
               </div>
            </div>
         </footer>
      </div> 
      <!-- Preloader -->
      <div id="loader-wrapper">
         <div id="loader"></div>

         <div class="loader-section section-left"></div>
         <div class="loader-section section-right"></div>

      </div>
      <!-- Go To Top -->
      <div id="go-top" style="display: none;">
         <a title="Back to Top" href="#"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></a>
      </div>
 
    
  </footer>
   </body>
      <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script> 
      <script src="js/jquery.validate.min.js"></script>
      <script src="js/additional-methods.min.js"></script>
      <script src="js/jquery.scrollme.js"></script><!--scroll me jquery plugin-->
      <script src="js/animate-scroll.js"></script><!--animate on scroll me jquery plugin for animation-->
      <script src="js/init.js"></script>
      <script>
        //Slider
        $(document).ready(function(){
          $('.slider').slider();
        });
         //Dropdown Trigger
         $(document).ready(function(){
            $('.dropdown-trigger').dropdown({
               belowOrigin:true
            });
         });
         $(document).ready(function(){
            $('#go-top').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 600);
            return false;
          });
        });

        //parallax
        $(document).ready(function(){
          $('.parallax').parallax()
        })
         //Preloader 
         $(document).ready(function() {
            $(window).load(function(){
                setTimeout(function(){
                    $('body').addClass('loaded');
                }, 1000);
            });
         }); 
         //Go Top 
            var pxShow = 100; // height on which the button will show
            var fadeInTime = 400; // how slow/fast you want the button to show
            var fadeOutTime = 400; // how slow/fast you want the button to hide

            // Show or hide the sticky footer button
            jQuery(window).scroll(function() {

               if (jQuery(window).scrollTop() >= pxShow) {
                  jQuery("#go-top").fadeIn(fadeInTime);
               } else {
                  jQuery("#go-top").fadeOut(fadeOutTime);                  
               }

           });
           $(document).ready(function() {
             $('textarea#textarea2').characterCounter();
           });
      </script>
</html>