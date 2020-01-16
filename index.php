<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Afrilodge</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/header.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/slider.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/about.css" />
    <link rel="stylesheet" href="css/parallax.css">
    <link rel="stylesheet" href="css/testimonial.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
</head>

<body>
    <!--Start Nav Bar -->
   <?php require_once('includes/header.html');?>
    <!--End Nav Bar -->

    <!--Start Image Slide Show -->
    <div class="container">
        <div class="slider">
            <div class="slide slide1">
                <div class="caption">
                    <h2>Bed and Breakfast</h2>
                    <p>Special comfort prepared to make you feel at home.</p>
                </div>
            </div>
            <div class="slide slide2">
                <div class="caption">
                    <h2>Conference Room</h2>
                    <p>Learn and grow with peers in an open and relaxing environment.</p>
                </div>
            </div>
            <div class="slide slide3">
                <div class="caption">
                    <h2>Private Garden</h2>
                    <p>Feast with family, friends or more intimate moments on a weekend.</p>
                </div>
            </div>
            <div class="slide slide4">
                <div class="caption">
                    <h2>Outdoor Garden</h2>
                    <p>Special moments need the perfect environment..</p>
                </div>
            </div>
            <div class="slide slide1">
                <div class="caption">
                    <h2>Bed and Breakfast</h2>
                    <p>Special comfort prepared to make you feel at home.</p>
                </div>
            </div>
        </div>
    </div>
    <!--End Image Slide Show -->
    <section class="about-afrilodge">
      <div class="afri-col-2">
          <div class="afri-wrapper">
              <h2>Stay With Our Luxury Rooms</h2>
              <h1>About<br>Afrilodge</h1>
              <p>We offer accomodation (Bed and Breakfast). Each room is equipped with complimentary high-speed Internet access
					allowing you to stay in touch with the office, or plan your day's activities. LCD TV with Freeview DSTV channels. Tea
					and coffee making facilities also offered.</p>
			    <button><a href="booking.php" class="btn-redirect">Check In</a></button>
          </div>
      </div>
      <div class="afri-col-2">
          <div class="afri-img-wrapper">
              <div class="img-sm-4">
                  <div id="img-top">
                    <img src="images/about-afrilodge/img-1.jpg" alt="image">
                    <img src="images/about-afrilodge/img-2.jpg" alt="image">
                  </div>
                  <div id="img-bottom">
                    <img src="images/about-afrilodge/img-3.jpg" alt="image">
                    <img src="images/about-afrilodge/img-4.jpg" alt="image">
                  </div>
              </div>
          </div>
      </div>
    </section>
    <!--About The Standard Hotel-->
    <section class="about-hotel-main">
        <h2>Our Luxury Rooms</h2>
        <h1>About<br>The Standard Hotel</h1>
        <div class="hotel-containers" id="hotel-box1">
            <div class="about-hotel-wrapper">
                <div>
                <video width="100%" autoplay loop>
                <source src="videos/promovid.mp4" type="video/mp4" />
                </video>
                </div>
                <p><i class="fas fa-map-marker-alt"></i>&nbsp;Location - <span>20 J.M. Nkomo Street, Btwn 1<sup>st</sup> Ave & Connaught, Bulawayo</span></p>
                <p><b>More About Us</b></p>
                <p>The Standard Hotel is in the city centre, hence easy access to the Art Gallery, 
                    the City Hall, Bulawayo Centre, The Museum and City Park. 
                    Food courts and shops are close by.</p>
                <p>The Standard Hotel boasts of 42 rooms on three floors, some rooms 
                    with 2 beds and family units. It has an internal, palm lined 
                    garden with lush fresh plants. There are 2 conference rooms and an 
                    executive board room. We also have a Steak and Grill restuarant which 
                    serves sumptuous meals. Spend time in our elegant bar overlooking the city.</p>
                    <button id="btn-hotel"><a href="booking.php" class="btn-redirect">Book Now</a></button>
            </div>
        </div>
        <div class="hotel-containers" id="hotel-box2">
            <img src="images/hotel/full/rm2.jpg" alt="bed1">
            <img src="images/hotel/full/rm3.jpg" alt="bed2">
            <img src="images/hotel/full/rm4.jpg" alt="bed3">
        </div>
    </section>

    <!--End About The Standard Hotel-->
    <!--Mission Statement-->
    <div class="vision-box">
        <div>
         <p>A journey through the beautiful stars from an African night sky.</p>
       </div>
	</div>
    <!--End Mission Statement-->


    
	<!--Testimonial section-->
	<section class="testimonial-section">
            <h2 class="tag">Testimonial</h2>
            <h1 class="head">Guest Review</h1>
            <section class="testimony-flex">
                <div class="testimony-box">
                    <div>
                        <img src="images/female.jpg" alt="guest1">
                        <h2>Mrs Fadzai Mudzingwa</h2>
                        <p>This place is a dream place! We loved it so much. The property is gorgeous, the rooms are clean and perfect, and everyone who works there is lovely. Couldn't have landed in a better place in Bulawayo!</p>
                        <button><a href="booking.php" class="btn-redirect">Book Now</a></button>
                    </div>
                </div>
                <div class="testimony-box">
                    <div>
                        <img src="images/male1.jpg" alt="guest2">
                        <h2>Dr Ndabezinhle Sibanda</h2>
                        <p>This place is great! I extended my stay here a few days since its such a great place to take a breather from. Easy to get into town from here, had the chance to meet the owner who happens to be a very humble person - this place has the best pork chops and fillet. </p>
                        <button><a href="booking.php" class="btn-redirect">Book Now</a></button>
                    </div>
                </div>
                <div class="testimony-box">
                    <div>
                        <img src="images/male2.jpg" alt="guest3">
                        <h2>Jackson Lunga</h2>
                        <p>Excellent hosts and the accommodation is great value for money . The place is beautiful. I first came here for my friend's Private Birthday Party, loved it ever since.</p>
                        <button><a href="booking.php" class="btn-redirect">Book Now</a></button>
                    </div>
                </div>
            </section>
        </section>
    
        <!--End Testimonial section-->

    <!--Footer-->

    <?php require_once('includes/footer.html');?>
    <!--End Footer-->


    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/script.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.menu-toggle').click(function () {
                $('nav').toggleClass('active')
            })
            $('ul li').click(function () {
                $(this).siblings().removeClass('active');
                $(this).toggleClass('active');
            });
        });
    </script>
</body>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5e2068f227773e0d832ddf45/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</html>